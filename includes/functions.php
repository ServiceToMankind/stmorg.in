<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$api_url = 'https://apis.stmorg.in';
//localhost
// $api_url = 'http://localhost/apis-stm';

function sanitize_input($input)
{
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}

function pr($arr)
{
    echo '<pre>';
    print_r($arr);
}

function prx($arr)
{
    echo '<pre>';
    print_r($arr);
    die();
}

function get_api_data($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

function get_api_data_post($url, $data)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_POSTREDIR, 3);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

function get_total_price_by_month_api($date)
{
    global $api_url;
    $m = date('n', strtotime($date));
    $y = date('Y', strtotime($date));
    $data = get_api_data($api_url . '/logs/donations?month=' . $m . '&year=' . $y);
    $resp = json_decode($data, true);
    $total = 0;
    if ($resp && $resp['status'] == 'success') {
        foreach ($resp['data'] as $don) {
            $total += $don['amount'];
        }
    }
    return $total;
}

function get_total_price_by_date_api($date)
{
    global $api_url;
    // same logic, but we need day. Our /logs/donations might not support day filtering yet.
    // However, we can fetch the whole month and sum for the specific day.
    $m = date('n', strtotime($date));
    $y = date('Y', strtotime($date));
    $d = date('Y-m-d', strtotime($date));
    $data = get_api_data($api_url . '/logs/donations?month=' . $m . '&year=' . $y);
    $resp = json_decode($data, true);
    $total = 0;
    if ($resp && $resp['status'] == 'success') {
        foreach ($resp['data'] as $don) {
            // Check if Added_on has the same date
            if (strpos($don['added_on'], $d) === 0) {
                $total += $don['amount'];
            }
        }
    }
    return $total;
    return $total;
}

function get_total_price_by_year_api($date)
{
    global $api_url;
    $y = date('Y', strtotime($date));
    $data = get_api_data($api_url . '/logs/donations?year=' . $y);
    $resp = json_decode($data, true);
    $total = 0;
    if ($resp && $resp['status'] == 'success') {
        foreach ($resp['data'] as $don) {
            $total += $don['amount'];
        }
    }
    return $total;
}

function get_total_donations_api()
{
    global $api_url;
    $data = get_api_data($api_url . '/logs/donations');
    $resp = json_decode($data, true);
    $total = 0;
    if ($resp && $resp['status'] == 'success') {
        foreach ($resp['data'] as $don) {
            $total += $don['amount'];
        }
    }
    return $total;
}

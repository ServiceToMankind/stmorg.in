<?php
function get_safe_value($con, $str){
    if($str!=''){
        $str=trim($str);
    return mysqli_real_escape_string($con, $str);
    }
}
function pr($arr){
    echo'<pre>';
    print_r($arr);
}
function prx($arr){
    echo'<pre>';
    print_r($arr);
    die();
}
function get_total_price_by_month($con,$date){
  $raised=0;
      $resp=mysqli_query($con,"SELECT `donations`.`amount` from `donations` where `donations`.`payment_status`='1' and month(`donations`.`added_on`)=month('$date') and year(`added_on`)=year('$date')");
    while($row=mysqli_fetch_assoc($resp)){
       $raised=$raised+$row['amount'];
    }
    return $raised;
}
function get_total_price_by_date($con,$date){
  $raised=0;
      $resp=mysqli_query($con,"SELECT `donations`.`amount` from `donations` where `donations`.`payment_status`='1' and `donations`.`added_on` = '$date' and year(`added_on`)=year('$date')");
    while($row=mysqli_fetch_assoc($resp)){
       $raised=$raised+$row['amount'];
    }
    return $raised;
}
function get_total_spends_by_month($con,$date){
  $raised=0;
      $resp=mysqli_query($con,"SELECT `spends`.`amount` from `spends` where month(`spends`.`date`)=month('$date') and year(`date`)=year('$date')");
    while($row=mysqli_fetch_assoc($resp)){
       $raised=$raised+$row['amount'];
    }
    return $raised;
}
// by year 
function get_total_price_by_year($con,$date){
  $raised=0;
      $resp=mysqli_query($con,"SELECT `donations`.`amount` from `donations` where `donations`.`payment_status`='1' and year(`added_on`)=year('$date')");
    while($row=mysqli_fetch_assoc($resp)){
       $raised=$raised+$row['amount'];
    }
    return $raised;
}
// total donations 
function get_total_donations($con){
  $raised=0;
      $resp=mysqli_query($con,"SELECT `donations`.`amount` from `donations` where `donations`.`payment_status`='1'");
    while($row=mysqli_fetch_assoc($resp)){
       $raised=$raised+$row['amount'];
    }
    return $raised;
}

function get_api_data($url){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $output = curl_exec($ch);
  curl_close($ch);
  return $output;
}
?>
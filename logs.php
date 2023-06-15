<?php
require('connection.php');
require('functions.php');
date_default_timezone_set("Asia/Kolkata");
$date=date('Y-m-d');
$last_month_first_day='';
if(isset($_GET['month']) && $_GET['month']=='last'){
$last_month_first_day = date("Y-n-j", strtotime("first day of previous month"));
// get  month 
$last_month=date('m',strtotime($last_month_first_day));
}elseif(isset($_GET['month']) && $_GET['month']!='last'){
$last_month=$_GET['month'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* -- import Roboto Font ---------------------------- */
    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 100;
        src: url(https://fonts.gstatic.com/s/roboto/v30/KFOiCnqEu92Fr1Mu51QrEzQdKg.ttf) format('truetype');
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 300;
        src: url(https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TjASc-CsE.ttf) format('truetype');
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1Mu51xMIzc.ttf) format('truetype');
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 500;
        src: url(https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51S7ACc-CsE.ttf) format('truetype');
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TzBic-CsE.ttf) format('truetype');
    }

    @font-face {
        font-family: 'Roboto';
        font-style: italic;
        font-weight: 900;
        src: url(https://fonts.gstatic.com/s/roboto/v30/KFOjCnqEu92Fr1Mu51TLBCc-CsE.ttf) format('truetype');
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 100;
        src: url(https://fonts.gstatic.com/s/roboto/v30/KFOkCnqEu92Fr1MmgVxMIzc.ttf) format('truetype');
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 300;
        src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmSU5fABc9.ttf) format('truetype');
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/roboto/v30/KFOmCnqEu92Fr1Mu5mxP.ttf) format('truetype');
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 500;
        src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmEU9fABc9.ttf) format('truetype');
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmWUlfABc9.ttf) format('truetype');
    }

    @font-face {
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 900;
        src: url(https://fonts.gstatic.com/s/roboto/v30/KFOlCnqEu92Fr1MmYUtfABc9.ttf) format('truetype');
    }

    /* -- You can use this tables in Bootstrap (v3) projects. -- */
    /* -- Box model ------------------------------- */
    *,
    *:after,
    *:before {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    /* -- Demo style ------------------------------- */
    html,
    body {
        position: relative;
        min-height: 100%;
        height: 100%;
    }

    html {
        position: relative;
        overflow-x: hidden;
        margin: 16px;
        padding: 0;
        min-height: 100%;
        font-size: 62.5%;
    }

    body {
        font-family: 'RobotoDraft', 'Roboto', 'Helvetica Neue, Helvetica, Arial', sans-serif;
        font-style: normal;
        font-weight: 300;
        font-size: 1.4rem;
        line-height: 2rem;
        letter-spacing: 0.01rem;
        color: #212121;
        background-color: #f5f5f5;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-rendering: optimizeLegibility;
    }

    #demo {
        margin: 20px auto;
        max-width: 960px;
    }

    #demo h1 {
        font-size: 2.4rem;
        line-height: 3.2rem;
        letter-spacing: 0;
        font-weight: 300;
        color: #212121;
        text-transform: inherit;
        margin-bottom: 1rem;
        text-align: center;
    }

    #demo h2 {
        font-size: 1.5rem;
        line-height: 2.8rem;
        letter-spacing: 0.01rem;
        font-weight: 400;
        color: #212121;
        text-align: center;
    }

    .shadow-z-1 {
        -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
        -moz-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
    }

    /* -- Material Design Table style -------------- */
    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 2rem;
        background-color: #fff;
    }

    .table>thead>tr,
    .table>tbody>tr,
    .table>tfoot>tr {
        -webkit-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .table>thead>tr>th,
    .table>tbody>tr>th,
    .table>tfoot>tr>th,
    .table>thead>tr>td,
    .table>tbody>tr>td,
    .table>tfoot>tr>td {
        text-align: left;
        padding: 1.6rem;
        vertical-align: top;
        border-top: 0;
        -webkit-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
        transition: all 0.3s ease;
    }

    .table>thead>tr>th {
        font-weight: 400;
        color: #757575;
        vertical-align: bottom;
        border-bottom: 1px solid rgba(0, 0, 0, 0.12);
    }

    .table>caption+thead>tr:first-child>th,
    .table>colgroup+thead>tr:first-child>th,
    .table>thead:first-child>tr:first-child>th,
    .table>caption+thead>tr:first-child>td,
    .table>colgroup+thead>tr:first-child>td,
    .table>thead:first-child>tr:first-child>td {
        border-top: 0;
    }

    .table>tbody+tbody {
        border-top: 1px solid rgba(0, 0, 0, 0.12);
    }

    .table .table {
        background-color: #fff;
    }

    .table .no-border {
        border: 0;
    }

    .table-condensed>thead>tr>th,
    .table-condensed>tbody>tr>th,
    .table-condensed>tfoot>tr>th,
    .table-condensed>thead>tr>td,
    .table-condensed>tbody>tr>td,
    .table-condensed>tfoot>tr>td {
        padding: 0.8rem;
    }

    .table-bordered {
        border: 0;
    }

    .table-bordered>thead>tr>th,
    .table-bordered>tbody>tr>th,
    .table-bordered>tfoot>tr>th,
    .table-bordered>thead>tr>td,
    .table-bordered>tbody>tr>td,
    .table-bordered>tfoot>tr>td {
        border: 0;
        border-bottom: 1px solid #e0e0e0;
    }

    .table-bordered>thead>tr>th,
    .table-bordered>thead>tr>td {
        border-bottom-width: 2px;
    }

    .table-striped>tbody>tr:nth-child(odd)>td,
    .table-striped>tbody>tr:nth-child(odd)>th {
        background-color: #f5f5f5;
    }

    .table-hover>tbody>tr:hover>td,
    .table-hover>tbody>tr:hover>th {
        background-color: rgba(0, 0, 0, 0.12);
    }

    @media screen and (max-width: 768px) {
        .table-responsive-vertical>.table {
            margin-bottom: 0;
            background-color: transparent;
        }

        .table-responsive-vertical>.table>thead,
        .table-responsive-vertical>.table>tfoot {
            display: none;
        }

        .table-responsive-vertical>.table>tbody {
            display: block;
        }

        .table-responsive-vertical>.table>tbody>tr {
            display: block;
            border: 1px solid #e0e0e0;
            border-radius: 2px;
            margin-bottom: 1.6rem;
        }

        .table-responsive-vertical>.table>tbody>tr>td {
            background-color: #fff;
            display: block;
            vertical-align: middle;
            text-align: right;
        }

        .table-responsive-vertical>.table>tbody>tr>td[data-title]:before {
            content: attr(data-title);
            float: left;
            font-size: inherit;
            font-weight: 400;
            color: #757575;
        }

        .table-responsive-vertical.shadow-z-1 {
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
        }

        .table-responsive-vertical.shadow-z-1>.table>tbody>tr {
            border: none;
            -webkit-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
            -moz-box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.12), 0 1px 2px 0 rgba(0, 0, 0, 0.24);
        }

        .table-responsive-vertical>.table-bordered {
            border: 0;
        }

        .table-responsive-vertical>.table-bordered>tbody>tr>td {
            border: 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .table-responsive-vertical>.table-bordered>tbody>tr>td:last-child {
            border-bottom: 0;
        }

        .table-responsive-vertical>.table-striped>tbody>tr>td,
        .table-responsive-vertical>.table-striped>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical>.table-striped>tbody>tr>td:nth-child(odd) {
            background-color: #f5f5f5;
        }

        .table-responsive-vertical>.table-hover>tbody>tr:hover>td,
        .table-responsive-vertical>.table-hover>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical>.table-hover>tbody>tr>td:hover {
            background-color: rgba(0, 0, 0, 0.12);
        }
    }

    .table-striped.table-mc-red>tbody>tr:nth-child(odd)>td,
    .table-striped.table-mc-red>tbody>tr:nth-child(odd)>th {
        background-color: #fde0dc;
    }

    .table-hover.table-mc-red>tbody>tr:hover>td,
    .table-hover.table-mc-red>tbody>tr:hover>th {
        background-color: #f9bdbb;
    }

    @media screen and (max-width: 767px) {

        .table-responsive-vertical .table-striped.table-mc-red>tbody>tr>td,
        .table-responsive-vertical .table-striped.table-mc-red>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical .table-striped.table-mc-red>tbody>tr>td:nth-child(odd) {
            background-color: #fde0dc;
        }

        .table-responsive-vertical .table-hover.table-mc-red>tbody>tr:hover>td,
        .table-responsive-vertical .table-hover.table-mc-red>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical .table-hover.table-mc-red>tbody>tr>td:hover {
            background-color: #f9bdbb;
        }
    }

    .table-striped.table-mc-pink>tbody>tr:nth-child(odd)>td,
    .table-striped.table-mc-pink>tbody>tr:nth-child(odd)>th {
        background-color: #fce4ec;
    }

    .table-hover.table-mc-pink>tbody>tr:hover>td,
    .table-hover.table-mc-pink>tbody>tr:hover>th {
        background-color: #f8bbd0;
    }

    @media screen and (max-width: 767px) {

        .table-responsive-vertical .table-striped.table-mc-pink>tbody>tr>td,
        .table-responsive-vertical .table-striped.table-mc-pink>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical .table-striped.table-mc-pink>tbody>tr>td:nth-child(odd) {
            background-color: #fce4ec;
        }

        .table-responsive-vertical .table-hover.table-mc-pink>tbody>tr:hover>td,
        .table-responsive-vertical .table-hover.table-mc-pink>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical .table-hover.table-mc-pink>tbody>tr>td:hover {
            background-color: #f8bbd0;
        }
    }

    .table-striped.table-mc-purple>tbody>tr:nth-child(odd)>td,
    .table-striped.table-mc-purple>tbody>tr:nth-child(odd)>th {
        background-color: #f3e5f5;
    }

    .table-hover.table-mc-purple>tbody>tr:hover>td,
    .table-hover.table-mc-purple>tbody>tr:hover>th {
        background-color: #e1bee7;
    }

    @media screen and (max-width: 767px) {

        .table-responsive-vertical .table-striped.table-mc-purple>tbody>tr>td,
        .table-responsive-vertical .table-striped.table-mc-purple>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical .table-striped.table-mc-purple>tbody>tr>td:nth-child(odd) {
            background-color: #f3e5f5;
        }

        .table-responsive-vertical .table-hover.table-mc-purple>tbody>tr:hover>td,
        .table-responsive-vertical .table-hover.table-mc-purple>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical .table-hover.table-mc-purple>tbody>tr>td:hover {
            background-color: #e1bee7;
        }
    }

    .table-striped.table-mc-deep-purple>tbody>tr:nth-child(odd)>td,
    .table-striped.table-mc-deep-purple>tbody>tr:nth-child(odd)>th {
        background-color: #ede7f6;
    }

    .table-hover.table-mc-deep-purple>tbody>tr:hover>td,
    .table-hover.table-mc-deep-purple>tbody>tr:hover>th {
        background-color: #d1c4e9;
    }

    @media screen and (max-width: 767px) {

        .table-responsive-vertical .table-striped.table-mc-deep-purple>tbody>tr>td,
        .table-responsive-vertical .table-striped.table-mc-deep-purple>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical .table-striped.table-mc-deep-purple>tbody>tr>td:nth-child(odd) {
            background-color: #ede7f6;
        }

        .table-responsive-vertical .table-hover.table-mc-deep-purple>tbody>tr:hover>td,
        .table-responsive-vertical .table-hover.table-mc-deep-purple>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical .table-hover.table-mc-deep-purple>tbody>tr>td:hover {
            background-color: #d1c4e9;
        }
    }

    .table-striped.table-mc-indigo>tbody>tr:nth-child(odd)>td,
    .table-striped.table-mc-indigo>tbody>tr:nth-child(odd)>th {
        background-color: #e8eaf6;
    }

    .table-hover.table-mc-indigo>tbody>tr:hover>td,
    .table-hover.table-mc-indigo>tbody>tr:hover>th {
        background-color: #c5cae9;
    }

    @media screen and (max-width: 767px) {

        .table-responsive-vertical .table-striped.table-mc-indigo>tbody>tr>td,
        .table-responsive-vertical .table-striped.table-mc-indigo>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical .table-striped.table-mc-indigo>tbody>tr>td:nth-child(odd) {
            background-color: #e8eaf6;
        }

        .table-responsive-vertical .table-hover.table-mc-indigo>tbody>tr:hover>td,
        .table-responsive-vertical .table-hover.table-mc-indigo>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical .table-hover.table-mc-indigo>tbody>tr>td:hover {
            background-color: #c5cae9;
        }
    }

    .table-striped.table-mc-blue>tbody>tr:nth-child(odd)>td,
    .table-striped.table-mc-blue>tbody>tr:nth-child(odd)>th {
        background-color: #e7e9fd;
    }

    .table-hover.table-mc-blue>tbody>tr:hover>td,
    .table-hover.table-mc-blue>tbody>tr:hover>th {
        background-color: #d0d9ff;
    }

    @media screen and (max-width: 767px) {

        .table-responsive-vertical .table-striped.table-mc-blue>tbody>tr>td,
        .table-responsive-vertical .table-striped.table-mc-blue>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical .table-striped.table-mc-blue>tbody>tr>td:nth-child(odd) {
            background-color: #e7e9fd;
        }

        .table-responsive-vertical .table-hover.table-mc-blue>tbody>tr:hover>td,
        .table-responsive-vertical .table-hover.table-mc-blue>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical .table-hover.table-mc-blue>tbody>tr>td:hover {
            background-color: #d0d9ff;
        }
    }

    .table-striped.table-mc-light-blue>tbody>tr:nth-child(odd)>td,
    .table-striped.table-mc-light-blue>tbody>tr:nth-child(odd)>th {
        background-color: #e1f5fe;
    }

    .table-hover.table-mc-light-blue>tbody>tr:hover>td,
    .table-hover.table-mc-light-blue>tbody>tr:hover>th {
        background-color: #b3e5fc;
    }

    @media screen and (max-width: 767px) {

        .table-responsive-vertical .table-striped.table-mc-light-blue>tbody>tr>td,
        .table-responsive-vertical .table-striped.table-mc-light-blue>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical .table-striped.table-mc-light-blue>tbody>tr>td:nth-child(odd) {
            background-color: #e1f5fe;
        }

        .table-responsive-vertical .table-hover.table-mc-light-blue>tbody>tr:hover>td,
        .table-responsive-vertical .table-hover.table-mc-light-blue>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical .table-hover.table-mc-light-blue>tbody>tr>td:hover {
            background-color: #b3e5fc;
        }
    }

    .table-striped.table-mc-cyan>tbody>tr:nth-child(odd)>td,
    .table-striped.table-mc-cyan>tbody>tr:nth-child(odd)>th {
        background-color: #e0f7fa;
    }

    .table-hover.table-mc-cyan>tbody>tr:hover>td,
    .table-hover.table-mc-cyan>tbody>tr:hover>th {
        background-color: #b2ebf2;
    }

    @media screen and (max-width: 767px) {

        .table-responsive-vertical .table-striped.table-mc-cyan>tbody>tr>td,
        .table-responsive-vertical .table-striped.table-mc-cyan>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical .table-striped.table-mc-cyan>tbody>tr>td:nth-child(odd) {
            background-color: #e0f7fa;
        }

        .table-responsive-vertical .table-hover.table-mc-cyan>tbody>tr:hover>td,
        .table-responsive-vertical .table-hover.table-mc-cyan>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical .table-hover.table-mc-cyan>tbody>tr>td:hover {
            background-color: #b2ebf2;
        }
    }

    .table-striped.table-mc-teal>tbody>tr:nth-child(odd)>td,
    .table-striped.table-mc-teal>tbody>tr:nth-child(odd)>th {
        background-color: #e0f2f1;
    }

    .table-hover.table-mc-teal>tbody>tr:hover>td,
    .table-hover.table-mc-teal>tbody>tr:hover>th {
        background-color: #b2dfdb;
    }

    @media screen and (max-width: 767px) {

        .table-responsive-vertical .table-striped.table-mc-teal>tbody>tr>td,
        .table-responsive-vertical .table-striped.table-mc-teal>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical .table-striped.table-mc-teal>tbody>tr>td:nth-child(odd) {
            background-color: #e0f2f1;
        }

        .table-responsive-vertical .table-hover.table-mc-teal>tbody>tr:hover>td,
        .table-responsive-vertical .table-hover.table-mc-teal>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical .table-hover.table-mc-teal>tbody>tr>td:hover {
            background-color: #b2dfdb;
        }
    }

    .table-striped.table-mc-green>tbody>tr:nth-child(odd)>td,
    .table-striped.table-mc-green>tbody>tr:nth-child(odd)>th {
        background-color: #d0f8ce;
    }

    .table-hover.table-mc-green>tbody>tr:hover>td,
    .table-hover.table-mc-green>tbody>tr:hover>th {
        background-color: #a3e9a4;
    }

    @media screen and (max-width: 767px) {

        .table-responsive-vertical .table-striped.table-mc-green>tbody>tr>td,
        .table-responsive-vertical .table-striped.table-mc-green>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical .table-striped.table-mc-green>tbody>tr>td:nth-child(odd) {
            background-color: #d0f8ce;
        }

        .table-responsive-vertical .table-hover.table-mc-green>tbody>tr:hover>td,
        .table-responsive-vertical .table-hover.table-mc-green>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical .table-hover.table-mc-green>tbody>tr>td:hover {
            background-color: #a3e9a4;
        }
    }

    .table-striped.table-mc-light-green>tbody>tr:nth-child(odd)>td,
    .table-striped.table-mc-light-green>tbody>tr:nth-child(odd)>th {
        background-color: #f1f8e9;
    }

    .table-hover.table-mc-light-green>tbody>tr:hover>td,
    .table-hover.table-mc-light-green>tbody>tr:hover>th {
        background-color: #dcedc8;
    }

    @media screen and (max-width: 767px) {

        .table-responsive-vertical .table-striped.table-mc-light-green>tbody>tr>td,
        .table-responsive-vertical .table-striped.table-mc-light-green>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical .table-striped.table-mc-light-green>tbody>tr>td:nth-child(odd) {
            background-color: #f1f8e9;
        }

        .table-responsive-vertical .table-hover.table-mc-light-green>tbody>tr:hover>td,
        .table-responsive-vertical .table-hover.table-mc-light-green>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical .table-hover.table-mc-light-green>tbody>tr>td:hover {
            background-color: #dcedc8;
        }
    }

    .table-striped.table-mc-lime>tbody>tr:nth-child(odd)>td,
    .table-striped.table-mc-lime>tbody>tr:nth-child(odd)>th {
        background-color: #f9fbe7;
    }

    .table-hover.table-mc-lime>tbody>tr:hover>td,
    .table-hover.table-mc-lime>tbody>tr:hover>th {
        background-color: #f0f4c3;
    }

    @media screen and (max-width: 767px) {

        .table-responsive-vertical .table-striped.table-mc-lime>tbody>tr>td,
        .table-responsive-vertical .table-striped.table-mc-lime>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical .table-striped.table-mc-lime>tbody>tr>td:nth-child(odd) {
            background-color: #f9fbe7;
        }

        .table-responsive-vertical .table-hover.table-mc-lime>tbody>tr:hover>td,
        .table-responsive-vertical .table-hover.table-mc-lime>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical .table-hover.table-mc-lime>tbody>tr>td:hover {
            background-color: #f0f4c3;
        }
    }

    .table-striped.table-mc-yellow>tbody>tr:nth-child(odd)>td,
    .table-striped.table-mc-yellow>tbody>tr:nth-child(odd)>th {
        background-color: #fffde7;
    }

    .table-hover.table-mc-yellow>tbody>tr:hover>td,
    .table-hover.table-mc-yellow>tbody>tr:hover>th {
        background-color: #fff9c4;
    }

    @media screen and (max-width: 767px) {

        .table-responsive-vertical .table-striped.table-mc-yellow>tbody>tr>td,
        .table-responsive-vertical .table-striped.table-mc-yellow>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical .table-striped.table-mc-yellow>tbody>tr>td:nth-child(odd) {
            background-color: #fffde7;
        }

        .table-responsive-vertical .table-hover.table-mc-yellow>tbody>tr:hover>td,
        .table-responsive-vertical .table-hover.table-mc-yellow>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical .table-hover.table-mc-yellow>tbody>tr>td:hover {
            background-color: #fff9c4;
        }
    }

    .table-striped.table-mc-amber>tbody>tr:nth-child(odd)>td,
    .table-striped.table-mc-amber>tbody>tr:nth-child(odd)>th {
        background-color: #fff8e1;
    }

    .table-hover.table-mc-amber>tbody>tr:hover>td,
    .table-hover.table-mc-amber>tbody>tr:hover>th {
        background-color: #ffecb3;
    }

    @media screen and (max-width: 767px) {

        .table-responsive-vertical .table-striped.table-mc-amber>tbody>tr>td,
        .table-responsive-vertical .table-striped.table-mc-amber>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical .table-striped.table-mc-amber>tbody>tr>td:nth-child(odd) {
            background-color: #fff8e1;
        }

        .table-responsive-vertical .table-hover.table-mc-amber>tbody>tr:hover>td,
        .table-responsive-vertical .table-hover.table-mc-amber>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical .table-hover.table-mc-amber>tbody>tr>td:hover {
            background-color: #ffecb3;
        }
    }

    .table-striped.table-mc-orange>tbody>tr:nth-child(odd)>td,
    .table-striped.table-mc-orange>tbody>tr:nth-child(odd)>th {
        background-color: #fff3e0;
    }

    .table-hover.table-mc-orange>tbody>tr:hover>td,
    .table-hover.table-mc-orange>tbody>tr:hover>th {
        background-color: #ffe0b2;
    }

    @media screen and (max-width: 767px) {

        .table-responsive-vertical .table-striped.table-mc-orange>tbody>tr>td,
        .table-responsive-vertical .table-striped.table-mc-orange>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical .table-striped.table-mc-orange>tbody>tr>td:nth-child(odd) {
            background-color: #fff3e0;
        }

        .table-responsive-vertical .table-hover.table-mc-orange>tbody>tr:hover>td,
        .table-responsive-vertical .table-hover.table-mc-orange>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical .table-hover.table-mc-orange>tbody>tr>td:hover {
            background-color: #ffe0b2;
        }
    }

    .table-striped.table-mc-deep-orange>tbody>tr:nth-child(odd)>td,
    .table-striped.table-mc-deep-orange>tbody>tr:nth-child(odd)>th {
        background-color: #fbe9e7;
    }

    .table-hover.table-mc-deep-orange>tbody>tr:hover>td,
    .table-hover.table-mc-deep-orange>tbody>tr:hover>th {
        background-color: #ffccbc;
    }

    @media screen and (max-width: 767px) {

        .table-responsive-vertical .table-striped.table-mc-deep-orange>tbody>tr>td,
        .table-responsive-vertical .table-striped.table-mc-deep-orange>tbody>tr:nth-child(odd) {
            background-color: #fff;
        }

        .table-responsive-vertical .table-striped.table-mc-deep-orange>tbody>tr>td:nth-child(odd) {
            background-color: #fbe9e7;
        }

        .table-responsive-vertical .table-hover.table-mc-deep-orange>tbody>tr:hover>td,
        .table-responsive-vertical .table-hover.table-mc-deep-orange>tbody>tr:hover {
            background-color: #fff;
        }

        .table-responsive-vertical .table-hover.table-mc-deep-orange>tbody>tr>td:hover {
            background-color: #ffccbc;
        }
    }

    .lm-row {
        display: flex;
    }

    .lm-btn {
        border-radius: 50px;
        background: #ffffff;
        box-shadow: 20px 20px 60px #d9d9d9, -20px -20px 60px #ffffff;
        padding: 0.6em 0.9em;
        max-width: 17em;
        margin: 1em 1em 1.3em 0em;
    }
    </style>
</head>

<body>
    <div id="demo">
        <h1>Payments Logs</h1>

        <?php if($last_month_first_day==''){?>
        <h2>Payments logs of <?php echo date("M"); ?>'2022</h2>
        <div class="lm-row">
            <div class="lm-btn"><a href="logs?month=last">Last Month</a></div>
            <div class="lm-btn"><a>Total : <?php echo get_total_price_by_month($con,$date);?></a></div>
            <?php }else{ ?>
            <h2>Payments logs of <?php echo date("M",strtotime($last_month_first_day)); ?>'2022</h2>
            <div class="lm-row">
                <div class="lm-btn"><a href="logs">current Month</a></div>
                <div class="lm-btn"><a>Total : <?php echo get_total_price_by_month($con,$last_month_first_day);?></a>
                </div>
                <?php } ?>
            </div>

            <!-- Responsive table starts here -->
            <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
            <div class="table-responsive-vertical shadow-z-1">
                <!-- Table starts here -->
                <table id="table" class="table table-hover table-mc-light-blue">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Descriptiopn</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                    if($last_month_first_day==''){
                       $data=get_api_data('https://apis.stmorg.in/logs/donations');
                       $data=json_decode($data,true);
                       // Check for API errors
                        if ($data['status'] !== "success") {
                            echo "API error: " . $data['message'];
                            exit;
                        }
                        // Get payment logs data
                        $payment_logs = $data['data'];

                    }else{
                        $data=get_api_data('https://apis.stmorg.in/logs/donations?month='.$last_month);
                        $data=json_decode($data,true);
                        // Check for API errors
                        if ($data['status'] !== "success") {
                            echo "API error: " . $data['message'];
                            exit;
                        }
                        // Get payment logs data
                        $payment_logs = $data['data'];
                    }

                    foreach ($payment_logs as $row) {
?>
                        <tr>
                            <td data-title="Name"><?php echo $row['name'] ?></td>
                            <?php
                            if($row['message']==''){ ?>
                            <td data-title="Description">NULL</td>
                            <?php
                            }else{
                        ?>
                            <td data-title="Description"><?php echo $row['message'] ?></td>
                            <?php } ?>
                            <td data-title="Amount">Rs. <?php echo $row['amount'] ?></td>
                        </tr>
                        <?php }
                    ?>
                    </tbody>
                </table>
            </div>



        </div>
        <script>
        /**
         * Created by Kupletsky Sergey on 05.11.14.
         *
         * Material Design Responsive Table
         * Tested on Win8.1 with browsers: Chrome 37, Firefox 32, Opera 25, IE 11, Safari 5.1.7
         * You can use this table in Bootstrap (v3) projects. Material Design Responsive Table CSS-style will override basic bootstrap style.
         * JS used only for table constructor: you don't need it in your project
         */

        $(document).ready(function() {

            var table = $('#table');

            // Table bordered
            $('#table-bordered').change(function() {
                var value = $(this).val();
                table.removeClass('table-bordered').addClass(value);
            });

            // Table striped
            $('#table-striped').change(function() {
                var value = $(this).val();
                table.removeClass('table-striped').addClass(value);
            });

            // Table hover
            $('#table-hover').change(function() {
                var value = $(this).val();
                table.removeClass('table-hover').addClass(value);
            });

            // Table color
            $('#table-color').change(function() {
                var value = $(this).val();
                table.removeClass(/^table-mc-/).addClass(value);
            });
        });

        // jQuery’s hasClass and removeClass on steroids
        // by Nikita Vasilyev
        // https://github.com/NV/jquery-regexp-classes
        (function(removeClass) {

            jQuery.fn.removeClass = function(value) {
                if (value && typeof value.test === "function") {
                    for (var i = 0, l = this.length; i < l; i++) {
                        var elem = this[i];
                        if (elem.nodeType === 1 && elem.className) {
                            var classNames = elem.className.split(/\s+/);

                            for (var n = classNames.length; n--;) {
                                if (value.test(classNames[n])) {
                                    classNames.splice(n, 1);
                                }
                            }
                            elem.className = jQuery.trim(classNames.join(" "));
                        }
                    }
                } else {
                    removeClass.call(this, value);
                }
                return this;
            }

        })(jQuery.fn.removeClass);
        </script>
</body>

</html>
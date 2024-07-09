<!doctype html>
<html lang=en>
    <head>
        <meta charset=UTF-8>
        <title><?php get_site_name(); ?> | Home</title>
        <meta name=viewport content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel=stylesheet href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/bootstrap.min.css"> -->

        <!-- new css -->
        <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/style.css?v=2">
        <!-- <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/betwin69.css"> -->

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- <link rel=stylesheet href="css/font-awesome.min.css"><link rel=stylesheet href="css/normalize.css"> -->
        <style type="text/css">
            a,h1,h2,h3,h4,h5,h6,span,p,strong,select,b,i,input,textarea,li,label,td,th,button,radio,checkbox,div {
                /*text-transform: uppercase;*/
            }

            h3 {
                font-size: 14px;
                margin-top: 0px;
                margin-bottom: 0px;
            }

            h4,h5 {
                font-size: 90%;
                font-weight: 700;
            }

            body {
                background-color: #0E4835;
            }

            a:hover {
                text-decoration: none;
            }

            /*body {
            font-family:Verdana, Geneva, Arial, sans-seri}section#full_section {
            background-color: #6CC55D;
            }*/
            .Live {
                color: red;
                animation-name: live;
                animation-duration: 1.2s;
                animation-iteration-count: infinite;
                transition-timing-function: ease-in-out;
                /* transition: color:white 2s ease; */
            }

            @keyframes live {
                from {
                    color: red;
                }

                to {
                    color: white;
                }
            }
        </style>
        <style type="text/css">
            .bigFont {
                font-size: 10pt;
            }

            .titleFont {
                font-size: 14pt;
                font-weight: bold;
                margin: 0px !important;
            }

            .m-0 {
                margin: 0px !important;
            }

            :focus {
                outline: -webkit-focus-ring-color auto 0px;
            }

            .font-5v {
                font-size: 5vw
            }

            .font-3v {
                font-size: 3vw
            }

            .left_section {
                position: fixed;
                top: 0;
                left: 0;
                z-index: 999;
                height: 23px;
                margin-top: 100px;
            }

            /*.tab_img{float: left;}*/
            .leftTableTab {
                position: relative;
                overflow: hidden;
                background-color: #14805E;
                height: 348px;
            }

            .tableTab {
                position: relative;
                overflow: hidden;
            }

            .abc {
                position: relative;
                width: 100%;
                height: 100%;
                flex-wrap: unset;
                flex-direction: row;
                border-bottom: none;
                left: 0;
                transition: 0.4s;
            }

            .live-in-play-carousel-item {
                display: flex;
                width: 85px;
                justify-content: center;
                white-space: nowrap;
                flex-shrink: 0;
                padding: 5px;
                flex-direction: column;
                align-items: center;
                cursor: pointer;
                transition: 0.3s;
                background: #1e2531;
                float: left;
                background: #14805E;
                color: #fff;
            }

            .abc>a:hover,.abc>a:active , .abc>a:focus {
                background-color: #38A180;
                color: #F4E849;
                text-decoration: none ;
            }

            .lefttab_item {
                background-color: #fff;
                text-align: center;
                border: 1px solid;
                padding: 9px;
            }

            .lefttab_item>a {
                color: #000;
                text-decoration: none;
                font-size: 15px;
                display: flex;
            }

            .lefttab_item>a:hover {
                color: #fff;
            }

            .lefttab_item:hover {
                background-color: #116D50;
            }

            img.tab_img {
                margin-right: 10px;
            }

            #siteClock {
                color: #000;
                font-size: 15px;
                font-weight: bold;
            }

            /*left section end*/
            #full_section {
                text-transform: capitalize;
                font-family: 'Noto Sans JP', sans-serif;
            }

            /* .main_contain{margin-top: 80px;}*/
            .text_color {
                color: #ffffff;
            }

            .all_span {
                color: #EAF607;
            }

            .nav-tabs {
                padding-left: 210px;
                background-color: #14805E;
                text-align: center;
                border-bottom: 0px solid #000;
            }

            .nav-tabs>li>a {
                color: #000;
                font-weight: bold;
                font-size: 15px;
            }

            .nav-tabs>li {
                float: left;
                margin-bottom: -2px;
            }

            .nav-tabs>li>a:hover,.nav-tabs>li>a:focus {
                color: #000;
                background-color: #38A180 !important;
            }

            .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
                color: #0c0c0c;
                cursor: default;
                background-color: #38A180 ;
                border: 1px solid #000;
            }

            .headline {
                background-color: #13bb84;
                color: #000;
                padding: 5px 5px;
                /* margin-top: 2px; */
            }

            .table_content {
                background-color: #14805E;
            }

            .ash {
                color: #CEC7B9;
                font-size: 20px;
            }

            .gradient_btn {
                border-radius: 5px;
                background-image: linear-gradient(to bottom right, #163e31 , #238a68);
            }

            .team_name {
                padding: 4px;
                /* background-color: #163e31; */
                background-image: linear-gradient(to bottom right, #163e31 , #238a68);
                color: #fff;
            }

            .for_btn {
                padding: 6px;
                border-radius: 0px !important;
            }

            /*.for_btn:hover{color: #fff;}*/
            /*sport table start*/
            .back_style {
                border-left: 1px solid #005580;
                border-top: 1px solid #005580;
                border-bottom: 1px solid #005580;
                border-right: 1px solid #005580;
                text-align: center;
                background-color: #fff;
            }

            .back_style:hover {
                background-color: #13e8a2;
            }

            span.participant_point {
                margin-left: 5px;
                color: #01ab4d;
                font-weight: bold;
            }

            span.participant_name {
                color: #000;
                font-weight: bold;
            }

            .back_style:hover>a>.participant_point {
                color: #fff
            }

            h5 {
                margin-left: 12px;
            }

            /* .back_style>button:hover{
            background-color: #3896DF;
            color: #ddd;
            }*/
            /*counter in modal*/
            /*.modal-title {
                text-align: center;
            }

            .modal-content {
                width: 502px;
                height: 295px;
            }

            .modal-body {
                height: 74px;
            }

            .stepper-sport .stepper .stepper-arrow {
                top: 0;
                bottom: 0;
                width: 60px;
                height: 60px;
                margin: 0;
                line-height: 60px;
                color: #fff;
                text-align: center;
                border-radius: 3px;
                background-color: #616161;
                transform: translateY(0);
            }

            .stepper-arrow.up {
                right: 4px;
                text-align: left;
                font-size: 30px;
            }

            .stepper-arrow.down {
                left: 4px;
                text-align: right;
                font-size: 30px;
            }

            .stepper {
                position: relative;
                display: inline-block;
                max-width: 76px;
                width: 76px;
            }

            .stepper-sport {
                margin-top: 20px;
            }

            .stepper-sport .stepper {
                width: 180px;
                max-width: 180px;
                text-align: center;
            }

            .stepper-sport .stepper input[type=number] {
                width: 60px;
                max-width: 60px;
                min-height: 60px;
                padding: 0 5px;
                margin-left: auto;
                margin-right: auto;
                line-height: 60px;
                text-align: center;
                -moz-appearance: textfield;
                font-family: "Kanit", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                font-size: 24px;
                font-weight: 400;
                color: #151515;
                background-color: #edeff4;
                border: 0;
            }

            .stepper-arrow {
                position: absolute;
                top: 50%;
                width: 20px;
                height: 20px;
                margin-top: -10px;
                font-size: 16px;
                line-height: 20px;
                font-family: "Material Icons";
                cursor: pointer;
                color: #151515;
                transition: .3s all ease;
            }

            .form-input {
                display: block;
                width: 50%;
                padding: 6px 16px;
                font-size: 14px;
                font-weight: 400;
                line-height: 24px;
                color: #9b9b9b;
                background-color: #fff;
                background-image: none;
                border-radius: 3px;
                -webkit-appearance: none;
                transition: .3s ease-in-out;
                border: 1px solid #e1e1e1;
                margin-left: 150px;
            }

            .modal-sport-place {
                margin-right: 166px;
                padding: 5px;
                text-transform: uppercase;
                font-size: 20px;
                font-weight: 600;
                background-color: #036f4d;
                color: #fff;
                border-radius: 22px;
            }

            #modal-error {
                margin-bottom: -10px;
            }

            .modal-sport-win-left {
                margin-right: 40px;
                font-size: 15px;
                font-weight: 600;
            }

            .bet_possible_win {
                margin-right: 60px;
                font-size: 20px;
                font-weight: bold;
                color: #07e4cf;
            }

            .modal-footer {
                margin-top: 5px;
            }*/

            /*counter in model end*/
            /*sport table end*/
            /*left side css end*/
            /*right*/
            .co {
                margin-top: 59px;
                margin-left: -9px;
            }

            .highlight {
                text-align: center;
                font-size: 25px;
                font-weight: 700;
                background: #071c2c;
            }

            .description {
                font-size: 21px;
                color: rgb(29, 58, 89);
                font-family: 'Droid Sans';
                margin-left: -30px;
            }

            .highlight_list {
                margin-bottom: 25px;
            }

            .live_score {
                text-align: center;
                font-size: 25px;
                font-weight: 700;
                margin-top: 30px;
                border-radius: 20px;
                margin-bottom: 50px;
            }

            .game-result-cust {
                color: #000;
                font-size: 12px;
            }

            .game-info-main {
                display: inline-flex;
                flex-direction: row;
                flex-wrap: nowrap;
                align-items: center;
                justify-content: space-between;
                min-width: 100%;
                max-width: 100%;
                margin-top: 0;
                margin-bottom: 1px;
                padding: 5px;
                border: 2px solid #000;
                border-radius: 0;
                margin-bottom: 10px;
            }

            .game-info-team {
                padding: 9px 9px 9px 0px;
                border-radius: 25px;
                width: 199px;
                margin: 10px;
            }

            .change-color {
                color: #ffffff;
            }

            .left {
                margin-left: 10px;
            }

            .right {
                margin-right: 10px;
            }

            .live_title {
                font-size: 20px;
                color: #000;
            }

            /*all sports end*/
            /*right section start*/
            .for_list {
                border-bottom: 2px solid;
                height: 96px;
            }

            .for_date {
                border-right: 2px solid #000;
            }

            .uppersection {
                margin-bottom: 50px;
                background-color: #fff;
            }

            .for_size {
                background-color: #fff;
                margin-top: 95px;
            }

            .highlight_title {
                color: #000;
            }

            .data_list {
                margin-left: -25px;
                font-size: 12px;
                display: inline-block;
                line-height: 16px;
            }

            .upcoming,.live {
                color: #000;
                font-weight: bold;
                text-align: center;
                background: #f5f5f5;
                font-size: 16px;
            }

            .block_content {
                display: block;
                padding: 7px 0px 7px 0;
                border-bottom: 1px solid #1a1a1a;
            }

            .main_container_block {
                background: #e6e6e6;
                border: 2px solid #1f6519;
            }

            .published_date {
                font-size: 13px;
                width: 60px;
                float: left;
                text-align: center;
                padding-right: 5px;
            }

            .extra_content_wrap {
                border-left: 2px solid #1a1a1a;
                padding-left: 8px;
                overflow: hidden;
                margin-bottom: 7px;
                font-size: 14px;
            }

            /*responsive start*/
            @media(max-width: 320px) {
                .left_section {
                    display: none;
                }

                .tableTab {
                    height: 100%;
                }

                .nav-tabs {
                    padding-left: 45px;
                    height: 100%;
                }

                a.live-in-play-carousel-item {
                    font-size: 8px;
                }

                .left_section {
                    display: none;
                }

                ul.nav.nav-tabs.all_sports_nav {
                    padding-left: 0;
                }

                a#trigger-modal {
                    font-size: 9px;
                }

                .nav>li>a {
                    font-size: 11px !important;
                }

                div#modal-content {
                    width: 100%;
                }

                input#bet-amount {
                    margin-left: 75px;
                }

                p.modal-sport-win-left {
                    font-size: 11px;
                    margin-left: -4px;
                    margin-right: 0;
                }

                span#display-return {
                    font-size: 15px;
                }

                button#placeBetSubmitButton {
                    font-size: 14px;
                    margin-right: 90px;
                    width: 100%;
                }

                .published_date.clearfix,.extra_content_wrap {
                    font-size: 10px;
                }

                .team_name {
                    padding-left: 0px;
                }

                h5 {
                    margin-left: 10px;
                }

                .container-fluid {
                    padding: 0;
                    overflow-x: hidden;
                }

                .col-md-10.col-md-offset-2.col-sm-offset-3.col-sm-9.col-lg-10.col-lg-offset-2.main_contain {
                    padding: 0;
                    overflow-x: hidden;
                }

                .col-md-9.col-md-offet-2 {
                    padding: 0;
                    overflow-x: hidden;
                }

                .col-sm-3.col-md-3.for_size {
                    padding: 0;
                    overflow-x: hidden
                }

                .live_option {
                    width: 30%;
                    float: right;
                    margin-top: -55px;
                }

                .match_name_details {
                    width: 85%;
                }

                .low-font {
                    font-size: 9px;
                }

                .small_font {
                    font-size: 14px;
                }
            }

            @media(min-width: 320px) and (max-width: 480px) {
                .team_name {
                    padding-left: 0px;
                }

                h5 {
                    margin-left: 10px;
                }

                .nav.nav-tabs.abc {
                    padding: 0;
                }

                .published_date.clearfix {
                    font-size: 11px;
                }

                a.live-in-play-carousel-item {
                    font-size: 8px;
                    width: 16%;
                }

                .tableTab {
                    height: 100%;
                }

                .left_section {
                    display: none;
                }

                .nav-tabs>li>a {
                    font-size: 8px !important;
                }

                ul.nav.nav-tabs.all_sports_nav {
                    padding: 0;
                }

                a#trigger-modal {
                    font-size: 11px;
                }

                div#modal-content {
                    width: 100%;
                }

                p.modal-sport-win-left {
                    margin-right: 63px;
                    font-size: 10px;
                }

                button#placeBetSubmitButton {
                    font-size: 14px;
                    width: 100%;
                }

                .container-fluid {
                    padding: 0;
                    overflow-x: hidden;
                }

                .col-md-10.col-md-offset-2.col-sm-offset-3.col-sm-9.col-lg-10.col-lg-offset-2.main_contain {
                    padding: 0;
                    overflow-x: hidden;
                }

                .col-md-9.col-md-offet-2 {
                    padding: 0;
                    overflow-x: hidden
                }

                .col-sm-3.col-md-3.for_size {
                    padding: 0;
                    overflow-x: hidden
                }

                input#bet-amount {
                    margin-left: 120px;
                }

                .live_option {
                    float: right;
                    width: 100%;
                    margin-top: -65px;
                }

                .match_name_details {
                    width: 90%;
                    margin-bottom: 28px;
                }

                .low-font {
                    font-size: 6pt;
                }

                .small-font {
                    font-size: 10px !important;
                }
            }

            @media (min-width: 480px) and (max-width: 580px) {
                .tableTab {
                    height: 100%;
                }

                .nav.nav-tabs.abc {
                    padding: 0;
                }

                a.live-in-play-carousel-item {
                    width: 16%;
                    font-size: 11px;
                }

                .published_date.clearfix {
                    font-size: 11px;
                }

                .left_section {
                    display: none;
                }

                .nav>li>a {
                    font-size: 12px !important;
                }

                ul.nav.nav-tabs.all_sports_nav {
                    padding: 0;
                }

                div#modal-content {
                    width: 100%;
                }

                p.modal-sport-win-left {
                    font-size: 11px;
                }

                button#placeBetSubmitButton {
                    width: 35%;
                }

                .container-fluid {
                    padding: 0;
                    overflow-x: hidden;
                }

                .col-md-10.col-md-offset-2.col-sm-offset-3.col-sm-9.col-lg-10.col-lg-offset-2.main_contain {
                    padding: 0;
                    overflow-x: hidden;
                }

                .col-md-9.col-md-offet-2 {
                    padding: 0;
                    overflow-x: hidden
                }

                .col-sm-3.col-md-3.for_size {
                    padding: 0;
                    overflow-x: hidden
                }

                .team_name {
                    margin-left: 15px;
                }

                h5 {
                    margin-left: 10px;
                }

                .live_option {
                    margin-top: -35px;
                }
            }

            @media (min-width: 580px) and (max-width: 768px) {
                .published_date.clearfix {
                    font-size: 11px;
                }

                .nav.nav-tabs.abc {
                    padding: 0;
                    margin-left: 12px;
                }

                .left_section {
                    display: none;
                }

                ul.nav.nav-tabs.all_sports_nav {
                    padding: 0;
                }

                .container-fluid {
                    padding: 0;
                    overflow-x: hidden;
                }

                .col-md-10.col-md-offset-2.col-sm-offset-3.col-sm-9.col-lg-10.col-lg-offset-2.main_contain {
                    padding: 0;
                    overflow-x: hidden;
                }

                .col-md-9.col-md-offet-2 {
                    padding: 0;
                    overflow-x: hidden
                }

                .col-sm-3.col-md-3.for_size {
                    padding: 0;
                    overflow-x: hidden
                }

                .team_name {
                    margin-left: 15px;
                }

                h5 {
                    margin-left: 10px;
                }

                div#modal-content {
                    margin-left: 120px;
                }
            }
            
            }

            @media (min-width: 768px) and (max-width: 940px) {
                .published_date.clearfix {
                    font-size: 11px;
                }

                .nav.nav-tabs.abc {
                    padding: 0;
                }

                ul.nav.nav-tabs.all_sports_nav {
                    padding: 0;
                }

                .col-sm-2.col-md-2.left_section {
                    width: 25%;
                    margin-top: 117px;
                }

                .col-sm-3.col-md-3.for_size {
                    width: 100%;
                }
            }

            @media (min-width: 940px) and (max-width: 1030px) {
                .leftTableTab {
                    width: 120%;
                }

                .nav.nav-tabs.abc {
                    padding: 0;
                }

                ul.nav.nav-tabs.all_sports_nav {
                    padding: 0;
                }

                div#modal-content {
                    margin-left: 60px;
                }
            }

            @media (min-width: 1031px) and (max-width: 1199px) {
                .nav.nav-tabs.abc {
                    padding: 0;
                }

                ul.nav.nav-tabs.all_sports_nav {
                    padding: 0;
                }

                div#modal-content {
                    margin-left: 65px;
                }
            }

            @media(min-width: 1199px) and (max-width: 1330px) {
                .nav.nav-tabs.abc {
                    padding: 0;
                }

                ul.nav.nav-tabs.all_sports_nav {
                    padding: 0;
                }
            }
    </style>
</head>
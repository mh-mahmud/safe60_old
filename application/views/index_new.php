<?php if( !empty($this->session->userdata['cus_data']) && is_object($this->session->userdata['cus_data']) ) : ?>
    <?php include(APPPATH . "views/customer/common/header.php"); ?>
<?php elseif( !empty($this->session->userdata['club_user_data']) && is_object($this->session->userdata['club_user_data']) ) : ?>
    <?php include(APPPATH . "views/club/common/header.php"); ?>
<?php else: ?>
    <?php include(APPPATH . "views/header.php"); ?>
<?php endif; ?>
<style type="text/css">
    a,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    span,
    p,
    strong,
    select,
    b,
    i,
    input,
    textarea,
    li,
    label,
    td,
    th,
    button,
    radio,
    checkbox,
    div {
        /*text-transform: uppercase;*/
    }
    h3 {
        font-size: 14px;
        margin-top: 0px;
        margin-bottom: 0px;
    }
    h4,
    h5 {
        font-size: 90%;
        font-weight: 700;
    }
    body {
        background-color: #0e4835;
    }
    a:hover {
        text-decoration: none;
    } /*body {
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
    .bigFont{
    font-size: 10pt;
    }.titleFont{
    font-size: 14pt;
    font-weight: bold;
    margin: 0px !important;
    }.m-0{
    margin: 0px !important;
    }:focus {
    outline: -webkit-focus-ring-color auto 0px;
    }.font-5v{
    font-size: 5vw
    }.font-3v{
    font-size:3vw
    }.left_section {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 999;
    height: 23px;
    margin-top: 100px;
    }/*.tab_img{float: left;}*/
    .leftTableTab{
    position: relative;
    overflow: hidden;
    background-color: #14805E;
    height: 348px;
    }.tableTab {
    position: relative;
    overflow: hidden;
    }.abc{position: relative;
    width: 100%;
    height: 100%;
    flex-wrap: unset;
    flex-direction: row;
    border-bottom: none;
    left: 0;
    transition: 0.4s;}.live-in-play-carousel-item {
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
    float: left;background: #14805E;
    color: #fff;
    }.abc>a:hover,.abc>a:active , .abc>a:focus{
    background-color: #38A180;color: #F4E849;text-decoration: none ;
    }.lefttab_item {
    background-color: #fff;
    text-align: center;
    border: 1px solid;
    padding: 9px;
    }.lefttab_item>a {
    color: #000;
    text-decoration: none;
    font-size: 15px;display: flex;
    }.lefttab_item>a:hover {
    color: #fff;}.lefttab_item:hover{background-color: #116D50;}img.tab_img {margin-right: 10px;}#siteClock{color: #000;
    font-size: 15px;
    font-weight: bold;}/*left section end*/
    #full_section{text-transform: capitalize; font-family: 'Noto Sans JP', sans-serif;}/* .main_contain{margin-top: 80px;}*/
    .text_color{
    color: #ffffff;
    }.all_span{
    color:#EAF607;
    }.nav-tabs {
    padding-left: 210px;
    background-color: #14805E;
    text-align: center;
    border-bottom: 0px solid #000;}.nav-tabs>li>a {
    color: #000;
    font-weight: bold;
    font-size: 15px;
    }.nav-tabs>li {
    float: left;
    margin-bottom: -2px;
    }.nav-tabs>li>a:hover,.nav-tabs>li>a:focus {
    color: #000;
    background-color: #38A180 !important;
    }.nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li.active>a:hover {
    color: #0c0c0c;
    cursor: default;
    background-color: #38A180 ;
    border: 1px solid #000; }.headline{
    background-color: #13bb84;
    color: #000;
    padding: 5px 5px;
    /* margin-top: 2px; */
    }.table_content{
    background-color: #14805E;}.ash {
    color: #CEC7B9;
    font-size: 20px;
    }.gradient_btn{
    border-radius: 5px;
    background-image: linear-gradient(to bottom right, #163e31 , #238a68);
    }.team_name{
    padding: 4px;
    /* background-color: #163e31; */
    background-image: linear-gradient(to bottom right, #163e31 , #238a68);
    color: #fff;
    }.for_btn{padding: 6px;border-radius: 0px !important;}/*.for_btn:hover{color: #fff;}*/
    /*sport table start*/
    .back_style{
    border-left: 1px solid #005580;
    border-top: 1px solid #005580;
    border-bottom: 1px solid #005580;
    border-right: 1px solid #005580;
    text-align: center;
    background-color: #fff;
    }.back_style:hover{
    background-color: #13e8a2;
    }span.participant_point {
    margin-left: 5px;
    color: #01ab4d;
    font-weight: bold;
    }span.participant_name {
    color: #000;
    font-weight: bold;
    }.back_style:hover>a>.participant_point{color: #fff}h5{ margin-left: 12px;}/* .back_style>button:hover{
    background-color: #3896DF;
    color: #ddd;
    }*/



    @media (min-width: 480px) and (max-width: 580px) {
        .col-xs-6 {
            width: 50% !important;
        }
    }

    @media (min-width: 320px) and (max-width: 480px) {
        .col-xs-6 {
            width: 50% !important;
        }
    }
</style>

<style>
    .row-side-class{
        margin-right: 0px;
        margin-left: 0px;
    }
    .question-title {
        color: #fff;
        font-size:15px;
        font-weight:bold;
        margin-left:20px !important;
        padding: 10px;
    }
</style>

<div id="wrapper-container" style="margin-top:-20px;">

<!-- NEW -->
<div id="sportsList" class="container-fluid">

    <!-- NEW -->
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">

            <div id="home" class="">
                <div class="col-sm-12 col-md-12">
                    <div class="headline">
                        <p class="text-center titleFont">Cricket</p>
                    </div>
                    <div class="table_content" id="cricket_matches">
                        <div class="row team_name" style="padding:10px">
                            <div class="col-xs-9 m-0 small_font">
                                <h4 class="m-0">Islamabad United VS Peshawar Zalmi</h4>
                                <h5 class="m-0" style="margin-left:0px">2021-06-17 7:00 PM | Pakistan Super League, 2021 | 26th Match</h5>
                            </div>
                            <div class="col-xs-3 text-right"><span class="m-0">Upcoming</span>
                                <p class="low-font m-0" style="color: red;">-</p>
                            </div>
                        </div>
                        
                        
                        <div class="row row-side-class">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;width:100%">
                                <p class="m-0 question-title">
                                    1st Ball Run of 1st innings?
                                </p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                
                                <div class="col-xs-6 col-sm-4  back_style">
                                    <a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="Dot" data-match_id="4009" data-bets-details-id="82361" data-value="1.40">
                                        <span class="participant_name bigFont">Dot Ball</span>
                                        <span class="participant_point bigFont">1.40</span>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-4  back_style">
                                    <a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="Dot" data-match_id="4009" data-bets-details-id="82361" data-value="1.40">
                                        <span class="participant_name bigFont">Dot Ball</span>
                                        <span class="participant_point bigFont">1.40</span>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-4  back_style">
                                    <a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="Dot" data-match_id="4009" data-bets-details-id="82361" data-value="1.40">
                                        <span class="participant_name bigFont">Dot Ball</span>
                                        <span class="participant_point bigFont">1.40</span>
                                    </a>
                                </div>
                                <div class="col-xs-6 col-sm-4  back_style">
                                    <a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="Dot" data-match_id="4009" data-bets-details-id="82361" data-value="1.40">
                                        <span class="participant_name bigFont">Dot Ball</span>
                                        <span class="participant_point bigFont">1.40</span>
                                    </a>
                                </div>
                                <p
                                    id="optionName82362" style="display:none">1st Ball Run of 1st innings</p>
                                    <p id="betName82362" style="display:none">1 run</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="1" data-match_id="4009" data-bets-details-id="82362" data-value="2.30"><span class="participant_name bigFont">1 run</span><span class="participant_point bigFont">2.30</span></a></div>
                                    <p
                                        id="optionName82363" style="display:none">1st Ball Run of 1st innings</p>
                                        <p id="betName82363" style="display:none">2 runs</p>
                                        <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="2" runs="" data-match_id="4009" data-bets-details-id="82363" data-value="12.00"><span class="participant_name bigFont">2 runs</span><span class="participant_point bigFont">12.00</span></a></div>
                                        <p
                                            id="optionName82364" style="display:none">1st Ball Run of 1st innings</p>
                                            <p id="betName82364" style="display:none">3 runs</p>
                                            <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="3" runs="" data-match_id="4009" data-bets-details-id="82364"
                                                    data-value="50.00"><span class="participant_name bigFont">3 runs</span><span class="participant_point bigFont">50.00</span></a></div>
                                            <p id="optionName82365" style="display:none">1st Ball Run of 1st innings</p>
                                            <p id="betName82365" style="display:none">4 runs</p>
                                            <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="4" runs="" data-match_id="4009" data-bets-details-id="82365"
                                                    data-value="3.30"><span class="participant_name bigFont">4 runs</span><span class="participant_point bigFont">3.30</span></a></div>
                                            <p id="optionName82366" style="display:none">1st Ball Run of 1st innings</p>
                                            <p id="betName82366" style="display:none">6 runs</p>
                                            <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="6" runs="" data-match_id="4009" data-bets-details-id="82366"
                                                    data-value="30.00"><span class="participant_name bigFont">6 runs</span><span class="participant_point bigFont">30.00</span></a></div>
                                            <p id="optionName82367" style="display:none">1st Ball Run of 1st innings</p>
                                            <p id="betName82367" style="display:none">wide</p>
                                            <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="wide" data-match_id="4009" data-bets-details-id="82367" data-value="15.00"><span class="participant_name bigFont">wide</span><span class="participant_point bigFont">15.00</span></a></div>
                                            <p
                                                id="optionName82368" style="display:none">1st Ball Run of 1st innings</p>
                                                <p id="betName82368" style="display:none">wicket</p>
                                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="wicket" data-match_id="4009" data-bets-details-id="82368"
                                                        data-value="12.00"><span class="participant_name bigFont">wicket</span><span class="participant_point bigFont">12.00</span></a></div>
                            </div>
                        </div>

                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">
                                    1st Ball Run of 1st innings bro 1st Ball Run of 1st innings bro 1st Ball Run of 1st innings bro 1st Ball Run of 1st innings bro1st Ball Run of 1st innings bro1st Ball Run of 1st innings bro
                                </p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82361" style="display:none">1st Ball Run of 1st innings</p>
                                <p id="betName82361" style="display:none">Dot Ball</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="Dot" data-match_id="4009" data-bets-details-id="82361" data-value="1.40"><span class="participant_name bigFont">Dot Ball</span><span class="participant_point bigFont">1.40</span></a></div>
                                <p
                                    id="optionName82362" style="display:none">1st Ball Run of 1st innings</p>
                                    <p id="betName82362" style="display:none">1 run</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="1" data-match_id="4009" data-bets-details-id="82362" data-value="2.30"><span class="participant_name bigFont">1 run</span><span class="participant_point bigFont">2.30</span></a></div>
                                    <p
                                        id="optionName82363" style="display:none">1st Ball Run of 1st innings</p>
                                        <p id="betName82363" style="display:none">2 runs</p>
                                        <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="2" runs="" data-match_id="4009" data-bets-details-id="82363" data-value="12.00"><span class="participant_name bigFont">2 runs</span><span class="participant_point bigFont">12.00</span></a></div>
                                        <p
                                            id="optionName82364" style="display:none">1st Ball Run of 1st innings</p>
                                            <p id="betName82364" style="display:none">3 runs</p>
                                            <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="3" runs="" data-match_id="4009" data-bets-details-id="82364"
                                                    data-value="50.00"><span class="participant_name bigFont">3 runs</span><span class="participant_point bigFont">50.00</span></a></div>
                                            <p id="optionName82365" style="display:none">1st Ball Run of 1st innings</p>
                                            <p id="betName82365" style="display:none">4 runs</p>
                                            <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="4" runs="" data-match_id="4009" data-bets-details-id="82365"
                                                    data-value="3.30"><span class="participant_name bigFont">4 runs</span><span class="participant_point bigFont">3.30</span></a></div>
                                            <p id="optionName82366" style="display:none">1st Ball Run of 1st innings</p>
                                            <p id="betName82366" style="display:none">6 runs</p>
                                            <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="6" runs="" data-match_id="4009" data-bets-details-id="82366"
                                                    data-value="30.00"><span class="participant_name bigFont">6 runs</span><span class="participant_point bigFont">30.00</span></a></div>
                                            <p id="optionName82367" style="display:none">1st Ball Run of 1st innings</p>
                                            <p id="betName82367" style="display:none">wide</p>
                                            <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="wide" data-match_id="4009" data-bets-details-id="82367" data-value="15.00"><span class="participant_name bigFont">wide</span><span class="participant_point bigFont">15.00</span></a></div>
                                            <p
                                                id="optionName82368" style="display:none">1st Ball Run of 1st innings</p>
                                                <p id="betName82368" style="display:none">wicket</p>
                                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" ball="" run="" of="" 1st="" innings="" data-name="wicket" data-match_id="4009" data-bets-details-id="82368"
                                                        data-value="12.00"><span class="participant_name bigFont">wicket</span><span class="participant_point bigFont">12.00</span></a></div>
                            </div>
                        </div>

                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">1st Over Runs of 1st innings</p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82369" style="display:none">1st Over Runs of 1st innings</p>
                                <p id="betName82369" style="display:none">0-3 Runs</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" over="" runs="" of="" 1st="" innings="" data-name="0-3" data-match_id="4009" data-bets-details-id="82369" data-value="3.00"><span class="participant_name bigFont">0-3 Runs</span><span class="participant_point bigFont">3.00</span></a></div>
                                <p
                                    id="optionName82370" style="display:none">1st Over Runs of 1st innings</p>
                                    <p id="betName82370" style="display:none">4-6 Runs</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" over="" runs="" of="" 1st="" innings="" data-name="4-6" data-match_id="4009" data-bets-details-id="82370" data-value="2.10"><span class="participant_name bigFont">4-6 Runs</span><span class="participant_point bigFont">2.10</span></a></div>
                                    <p
                                        id="optionName82371" style="display:none">1st Over Runs of 1st innings</p>
                                        <p id="betName82371" style="display:none">7-9 Runs</p>
                                        <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" over="" runs="" of="" 1st="" innings="" data-name="7-9" data-match_id="4009" data-bets-details-id="82371" data-value="2.00"><span class="participant_name bigFont">7-9 Runs</span><span class="participant_point bigFont">2.00</span></a></div>
                                        <p
                                            id="optionName82372" style="display:none">1st Over Runs of 1st innings</p>
                                            <p id="betName82372" style="display:none">10+ Runs</p>
                                            <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="1st" over="" runs="" of="" 1st="" innings="" data-name="10+" data-match_id="4009" data-bets-details-id="82372" data-value="3.23"><span class="participant_name bigFont">10+ Runs</span><span class="participant_point bigFont">3.23</span></a></div>
                            </div>
                        </div>

                        <!-- ======================= -->
                        
                        <br>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="headline">
                        <p class="text-center titleFont">Football</p>
                    </div>
                    <div class="table_content" id="football_matches">
                        <div class="row team_name" style="padding:10px">
                            <div class="col-xs-9 m-0 small_font">
                                <h4 class="m-0">Ukraine VS North Macedonia</h4>
                                <h5 class="m-0" style="margin-left:0px">2021-06-17 7:00 PM | UEFA European Championship Qualifying | -</h5>
                            </div>
                            <div class="col-xs-3 text-right"><span class="m-0">Upcoming</span>
                                <p class="low-font m-0" style="color: red;">-</p>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">Half Time Result</p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82248" style="display:none">Half Time Result</p>
                                <p id="betName82248" style="display:none">Ukraine</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Half" time="" result="" data-name="Ukraine" data-match_id="4003" data-bets-details-id="82248" data-value="1.85"><span class="participant_name bigFont">Ukraine</span><span class="participant_point bigFont">1.85</span></a></div>
                                <p
                                    id="optionName82249" style="display:none">Half Time Result</p>
                                    <p id="betName82249" style="display:none">tie</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Half" time="" result="" data-name="tie" data-match_id="4003" data-bets-details-id="82249" data-value="1.80"><span class="participant_name bigFont">tie</span><span class="participant_point bigFont">1.80</span></a></div>
                                    <p
                                        id="optionName82250" style="display:none">Half Time Result</p>
                                        <p id="betName82250" style="display:none">North Macedonia</p>
                                        <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Half" time="" result="" data-name="North" macedonia="" data-match_id="4003" data-bets-details-id="82250" data-value="3.56"><span class="participant_name bigFont">North Macedonia</span><span class="participant_point bigFont">3.56</span></a></div>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">Full Time Result</p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82251" style="display:none">Full Time Result</p>
                                <p id="betName82251" style="display:none">Ukraine</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Full" time="" result="" data-name="Ukraine" data-match_id="4003" data-bets-details-id="82251" data-value="1.36"><span class="participant_name bigFont">Ukraine</span><span class="participant_point bigFont">1.36</span></a></div>
                                <p
                                    id="optionName82252" style="display:none">Full Time Result</p>
                                    <p id="betName82252" style="display:none">tie</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Full" time="" result="" data-name="tie" data-match_id="4003" data-bets-details-id="82252" data-value="3.00"><span class="participant_name bigFont">tie</span><span class="participant_point bigFont">3.00</span></a></div>
                                    <p
                                        id="optionName82253" style="display:none">Full Time Result</p>
                                        <p id="betName82253" style="display:none">North Macedonia</p>
                                        <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Full" time="" result="" data-name="North" macedonia="" data-match_id="4003" data-bets-details-id="82253" data-value="3.56"><span class="participant_name bigFont">North Macedonia</span><span class="participant_point bigFont">3.56</span></a></div>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">Total Goals</p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82254" style="display:none">Total Goals</p>
                                <p id="betName82254" style="display:none">odd</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Total" goals="" data-name="odd" data-match_id="4003" data-bets-details-id="82254" data-value="1.75"><span class="participant_name bigFont">odd</span><span class="participant_point bigFont">1.75</span></a></div>
                                <p
                                    id="optionName82255" style="display:none">Total Goals</p>
                                    <p id="betName82255" style="display:none">even</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Total" goals="" data-name="even" data-match_id="4003" data-bets-details-id="82255" data-value="1.85"><span class="participant_name bigFont">even</span><span class="participant_point bigFont">1.85</span></a></div>
                                    <p
                                        id="optionName82256" style="display:none">Total Goals</p>
                                        <p id="betName82256" style="display:none">no goals</p>
                                        <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Total" goals="" data-name="no" data-match_id="4003" data-bets-details-id="82256" data-value="5.00"><span class="participant_name bigFont">no goals</span><span class="participant_point bigFont">5.00</span></a></div>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">Both Teams to Score</p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82261" style="display:none">Both Teams to Score</p>
                                <p id="betName82261" style="display:none">yes</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Both" teams="" to="" score="" data-name="yes" data-match_id="4003" data-bets-details-id="82261" data-value="1.70"><span class="participant_name bigFont">yes</span><span class="participant_point bigFont">1.70</span></a></div>
                                <p
                                    id="optionName82262" style="display:none">Both Teams to Score</p>
                                    <p id="betName82262" style="display:none">no</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Both" teams="" to="" score="" data-name="no" data-match_id="4003" data-bets-details-id="82262" data-value="1.70"><span class="participant_name bigFont">no</span><span class="participant_point bigFont">1.70</span></a></div>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">Goals Over/Under</p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82263" style="display:none">Goals Over/Under</p>
                                <p id="betName82263" style="display:none">Over 2.5</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Goals" over="" under="" data-name="Over" 2.5="" data-match_id="4003" data-bets-details-id="82263" data-value="1.75"><span class="participant_name bigFont">Over 2.5</span><span class="participant_point bigFont">1.75</span></a></div>
                                <p
                                    id="optionName82264" style="display:none">Goals Over/Under</p>
                                    <p id="betName82264" style="display:none">Under 2.5</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Goals" over="" under="" data-name="Under" 2.5="" data-match_id="4003" data-bets-details-id="82264" data-value="1.40"><span class="participant_name bigFont">Under 2.5</span><span class="participant_point bigFont">1.40</span></a></div>
                            </div>
                        </div><br>
                        <div class="row team_name" style="padding:10px">
                            <div class="col-xs-9 m-0 small_font">
                                <h4 class="m-0">Denmark VS Belgium</h4>
                                <h5 class="m-0" style="margin-left:0px">2021-06-17 10:00 PM | UEFA European Championship Qualifying | -</h5>
                            </div>
                            <div class="col-xs-3 text-right"><span class="m-0">Upcoming</span>
                                <p class="low-font m-0" style="color: red;">-</p>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">Half Time Result</p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82265" style="display:none">Half Time Result</p>
                                <p id="betName82265" style="display:none">Denmark</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Half" time="" result="" data-name="Denmark" data-match_id="4004" data-bets-details-id="82265" data-value="3.50"><span class="participant_name bigFont">Denmark</span><span class="participant_point bigFont">3.50</span></a></div>
                                <p
                                    id="optionName82266" style="display:none">Half Time Result</p>
                                    <p id="betName82266" style="display:none">tie</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Half" time="" result="" data-name="tie" data-match_id="4004" data-bets-details-id="82266" data-value="1.70"><span class="participant_name bigFont">tie</span><span class="participant_point bigFont">1.70</span></a></div>
                                    <p
                                        id="optionName82267" style="display:none">Half Time Result</p>
                                        <p id="betName82267" style="display:none">Belgium</p>
                                        <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Half" time="" result="" data-name="Belgium" data-match_id="4004" data-bets-details-id="82267" data-value="2.00"><span class="participant_name bigFont">Belgium</span><span class="participant_point bigFont">2.00</span></a></div>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">Full Time Result</p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82268" style="display:none">Full Time Result</p>
                                <p id="betName82268" style="display:none">Denmark</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Full" time="" result="" data-name="Denmark" data-match_id="4004" data-bets-details-id="82268" data-value="3.00"><span class="participant_name bigFont">Denmark</span><span class="participant_point bigFont">3.00</span></a></div>
                                <p
                                    id="optionName82269" style="display:none">Full Time Result</p>
                                    <p id="betName82269" style="display:none">tie</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Full" time="" result="" data-name="tie" data-match_id="4004" data-bets-details-id="82269" data-value="2.70"><span class="participant_name bigFont">tie</span><span class="participant_point bigFont">2.70</span></a></div>
                                    <p
                                        id="optionName82270" style="display:none">Full Time Result</p>
                                        <p id="betName82270" style="display:none">Belgium</p>
                                        <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Full" time="" result="" data-name="Belgium" data-match_id="4004" data-bets-details-id="82270" data-value="1.60"><span class="participant_name bigFont">Belgium</span><span class="participant_point bigFont">1.60</span></a></div>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">Total Goals</p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82271" style="display:none">Total Goals</p>
                                <p id="betName82271" style="display:none">odd</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Total" goals="" data-name="odd" data-match_id="4004" data-bets-details-id="82271" data-value="1.75"><span class="participant_name bigFont">odd</span><span class="participant_point bigFont">1.75</span></a></div>
                                <p
                                    id="optionName82272" style="display:none">Total Goals</p>
                                    <p id="betName82272" style="display:none">even</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Total" goals="" data-name="even" data-match_id="4004" data-bets-details-id="82272" data-value="1.85"><span class="participant_name bigFont">even</span><span class="participant_point bigFont">1.85</span></a></div>
                                    <p
                                        id="optionName82273" style="display:none">Total Goals</p>
                                        <p id="betName82273" style="display:none">no goals</p>
                                        <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Total" goals="" data-name="no" data-match_id="4004" data-bets-details-id="82273" data-value="2.00"><span class="participant_name bigFont">no goals</span><span class="participant_point bigFont">2.00</span></a></div>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">Both Teams to Score</p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82274" style="display:none">Both Teams to Score</p>
                                <p id="betName82274" style="display:none">yes</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Both" teams="" to="" score="" data-name="yes" data-match_id="4004" data-bets-details-id="82274" data-value="1.70"><span class="participant_name bigFont">yes</span><span class="participant_point bigFont">1.70</span></a></div>
                                <p
                                    id="optionName82275" style="display:none">Both Teams to Score</p>
                                    <p id="betName82275" style="display:none">no</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Both" teams="" to="" score="" data-name="no" data-match_id="4004" data-bets-details-id="82275" data-value="1.70"><span class="participant_name bigFont">no</span><span class="participant_point bigFont">1.70</span></a></div>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">Goals Over/Under</p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82276" style="display:none">Goals Over/Under</p>
                                <p id="betName82276" style="display:none">Over 2.5</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Goals" over="" under="" data-name="Over" 2.5="" data-match_id="4004" data-bets-details-id="82276" data-value="1.70"><span class="participant_name bigFont">Over 2.5</span><span class="participant_point bigFont">1.70</span></a></div>
                                <p
                                    id="optionName82277" style="display:none">Goals Over/Under</p>
                                    <p id="betName82277" style="display:none">Under 2.5</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Goals" over="" under="" data-name="Under" 2.5="" data-match_id="4004" data-bets-details-id="82277" data-value="1.45"><span class="participant_name bigFont">Under 2.5</span><span class="participant_point bigFont">1.45</span></a></div>
                            </div>
                        </div><br>
                        <div class="row team_name" style="padding:10px">
                            <div class="col-xs-9 m-0 small_font">
                                <h4 class="m-0">Plaza Colonia VS Liverpool</h4>
                                <h5 class="m-0" style="margin-left:0px">2021-06-18 12:00 AM | Uruguayan Primera Division | -</h5>
                            </div>
                            <div class="col-xs-3 text-right"><span class="m-0">Upcoming</span>
                                <p class="low-font m-0" style="color: red;">-</p>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">Half Time Result</p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82278" style="display:none">Half Time Result</p>
                                <p id="betName82278" style="display:none">Plaza Colonia</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Half" time="" result="" data-name="Plaza" colonia="" data-match_id="4005" data-bets-details-id="82278" data-value="2.85"><span class="participant_name bigFont">Plaza Colonia</span><span class="participant_point bigFont">2.85</span></a></div>
                                <p
                                    id="optionName82279" style="display:none">Half Time Result</p>
                                    <p id="betName82279" style="display:none">tie</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Half" time="" result="" data-name="tie" data-match_id="4005" data-bets-details-id="82279" data-value="1.80"><span class="participant_name bigFont">tie</span><span class="participant_point bigFont">1.80</span></a></div>
                                    <p
                                        id="optionName82280" style="display:none">Half Time Result</p>
                                        <p id="betName82280" style="display:none">Liverpool</p>
                                        <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Half" time="" result="" data-name="Liverpool" data-match_id="4005" data-bets-details-id="82280" data-value="2.10"><span class="participant_name bigFont">Liverpool</span><span class="participant_point bigFont">2.10</span></a></div>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">Full Time Result</p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82281" style="display:none">Full Time Result</p>
                                <p id="betName82281" style="display:none">Plaza Colonia</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Full" time="" result="" data-name="Plaza" colonia="" data-match_id="4005" data-bets-details-id="82281" data-value="2.25"><span class="participant_name bigFont">Plaza Colonia</span><span class="participant_point bigFont">2.25</span></a></div>
                                <p
                                    id="optionName82282" style="display:none">Full Time Result</p>
                                    <p id="betName82282" style="display:none">tie</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Full" time="" result="" data-name="tie" data-match_id="4005" data-bets-details-id="82282" data-value="2.80"><span class="participant_name bigFont">tie</span><span class="participant_point bigFont">2.80</span></a></div>
                                    <p
                                        id="optionName82283" style="display:none">Full Time Result</p>
                                        <p id="betName82283" style="display:none">Liverpool</p>
                                        <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Full" time="" result="" data-name="Liverpool" data-match_id="4005" data-bets-details-id="82283" data-value="1.85"><span class="participant_name bigFont">Liverpool</span><span class="participant_point bigFont">1.85</span></a></div>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">Total Goals</p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82284" style="display:none">Total Goals</p>
                                <p id="betName82284" style="display:none">odd</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Total" goals="" data-name="odd" data-match_id="4005" data-bets-details-id="82284" data-value="1.75"><span class="participant_name bigFont">odd</span><span class="participant_point bigFont">1.75</span></a></div>
                                <p
                                    id="optionName82285" style="display:none">Total Goals</p>
                                    <p id="betName82285" style="display:none">even</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Total" goals="" data-name="even" data-match_id="4005" data-bets-details-id="82285" data-value="1.85"><span class="participant_name bigFont">even</span><span class="participant_point bigFont">1.85</span></a></div>
                                    <p
                                        id="optionName82286" style="display:none">Total Goals</p>
                                        <p id="betName82286" style="display:none">no goals</p>
                                        <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Total" goals="" data-name="no" data-match_id="4005" data-bets-details-id="82286" data-value="5.00"><span class="participant_name bigFont">no goals</span><span class="participant_point bigFont">5.00</span></a></div>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">Both Teams to Score</p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82287" style="display:none">Both Teams to Score</p>
                                <p id="betName82287" style="display:none">yes</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Both" teams="" to="" score="" data-name="yes" data-match_id="4005" data-bets-details-id="82287" data-value="1.45"><span class="participant_name bigFont">yes</span><span class="participant_point bigFont">1.45</span></a></div>
                                <p
                                    id="optionName82288" style="display:none">Both Teams to Score</p>
                                    <p id="betName82288" style="display:none">no</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Both" teams="" to="" score="" data-name="no" data-match_id="4005" data-bets-details-id="82288" data-value="1.85"><span class="participant_name bigFont">no</span><span class="participant_point bigFont">1.85</span></a></div>
                            </div>
                        </div>
                        <div class="row" style="margin-right: 0px; margin-left: 0px;">
                            <div style="background-color: #163e31;padding: 5px;margin-top: 5px;">
                                <p class="m-0" style="color: #fff; font-size:15px; font-weight:bold; margin-left:20px !important;">Goals Over/Under</p>
                            </div>
                            <div class="row" style="margin-right: 1px; margin-left: 1px;">
                                <p id="optionName82289" style="display:none">Goals Over/Under</p>
                                <p id="betName82289" style="display:none">Over 2.5</p>
                                <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Goals" over="" under="" data-name="Over" 2.5="" data-match_id="4005" data-bets-details-id="82289" data-value="1.70"><span class="participant_name bigFont">Over 2.5</span><span class="participant_point bigFont">1.70</span></a></div>
                                <p
                                    id="optionName82290" style="display:none">Goals Over/Under</p>
                                    <p id="betName82290" style="display:none">Under 2.5</p>
                                    <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Goals" over="" under="" data-name="Under" 2.5="" data-match_id="4005" data-bets-details-id="82290" data-value="1.00"><span class="participant_name bigFont">Under 2.5</span><span class="participant_point bigFont">1.00</span></a></div>
                                    <p
                                        id="optionName82291" style="display:none">Goals Over/Under</p>
                                        <p id="betName82291" style="display:none">Over 2.5</p>
                                        <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Goals" over="" under="" data-name="Over" 2.5="" data-match_id="4005" data-bets-details-id="82291" data-value="1.70"><span class="participant_name bigFont">Over 2.5</span><span class="participant_point bigFont">1.70</span></a></div>
                                        <p
                                            id="optionName82292" style="display:none">Goals Over/Under</p>
                                            <p id="betName82292" style="display:none">Under 2.5</p>
                                            <div class="col-xs-6 col-sm-4 back_style"><a class=" btn-block for_btn" id="trigger-modal" data-toggle="modal" data-target="#myModal" data-option="Goals" over="" under="" data-name="Under" 2.5="" data-match_id="4005" data-bets-details-id="82292" data-value="1.70"><span class="participant_name bigFont">Under 2.5</span><span class="participant_point bigFont">1.70</span></a></div>
                            </div>
                        </div><br></div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="headline">
                        <p class="text-center titleFont">Tennis</p>
                    </div>
                    <div class="table_content" id="tennis_matches"></div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="headline">
                        <p class="text-center titleFont">Basketball</p>
                    </div>
                    <div class="table_content" id="basketball_matches"></div>
                </div>
                <div class="col-sm-12 col-md-12">
                    <div class="headline">
                        <p class="text-center titleFont">Volleyball</p>
                    </div>
                    <div class="table_content" id="volleyball_matches"></div>
                </div>
            </div>

        </div>

    </div>

</div>


</div>

<!-- footer -->
<?php include(APPPATH . "views/footer.php"); ?>
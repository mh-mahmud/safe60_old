    <!DOCTYPE html>
    <html>
        <head>
            <meta name=viewport content="width=device-width, initial-scale=1">
            <link rel=stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel=stylesheet integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin=anonymous>
        </head>
        <body>
            <style type="text/css">
                footer {
                    font-family: 'Noto Sans JP', sans-serif;
                }

                .logofooter {
                    width: 150px;
                    height: 50px;
                    margin-bottom: 50px;
                    margin-top: 30px;
                }

                .log2 {
                    margin-left: 40px;
                }

                .log5 {
                    margin-left: 40px;
                }

                ol>li>a {
                    color: #bbb;
                }

                footer>a:focus, ol>li> a:hover {
                    color: #ffdf1b;
                    text-decoration: none;
                }

                .for_p {
                    font-size: 18px;
                }

                .aboutWeb {
                    font-size: 11px;
                    text-align: center;
                    margin-bottom: 20px;
                }

                .pay {
                    margin-bottom: 20px;
                }

                .playstore>img {
                    margin-left: 0px;
                    margin-bottom: 20px;
                }

                .playstore {
                    font-size: 11px;
                }

                .aboutWeb,.playstore,li>p {
                    color: #fff;
                }

                .fa-4x {
                    padding: 12px;
                    color: #fff;
                }

                .fa-4x:hover {
                    color: #ffdf1b;
                }

                img.ft_img_skr {
                    margin-left: 17px;
                }

                img.ft_img_visa {
                    width: 85px;
                    margin-left: -17px;
                }

                img.ft_img_pay {
                    margin-left: 14px;
                    width: 115px;
                }

                /*responsive*/
                @media (max-width: 320px) {
                    .aboutWeb {
                        width: 203%;
                        margin-left: -63px;
                    }

                    .fa-4x {
                        padding: 3px;
                    }

                    .playstore>img {
                        margin-left: -13px;
                    }

                    .logo_1,.log2,.log4,.log5 {
                        display: none;
                    }

                    .pay {
                        margin-left: 0px;
                    }

                    .logofooter {
                        width: 113px;
                        height: 36px;
                        margin-bottom: 15px;
                        margin-top: 15px;
                    }

                    img.ft_img_net {
                        width: 70px;
                        margin-left: -45px;
                    }

                    img.ft_img_pay {
                        width: 50px;
                        margin-left: -3px;
                        margin-top: 4px;
                    }

                    img.ft_img_skr {
                        width: 42px;
                        margin-left: 20px;
                    }

                    img.ft_img_visa {
                        width: 46px;
                        margin-left: 33px;
                    }

                    .playstore>img {
                        width: 70px;
                    }
                }

                @media(min-width: 320px) and (max-width: 480px) {
                    .logo_1,.log2,.log4,.log5 {
                        display: none;
                    }

                    img.ft_img_net {
                        width: 50px;
                        margin-left: -20px;
                    }

                    img.ft_img_visa {
                        margin-left: 89px;
                        width: 55px;
                    }

                    img.ft_img_skr {
                        margin-left: 57px;
                        width: 55px;
                    }

                    img.ft_img_pay {
                        margin-left: 28px;
                        width: 55px;
                    }

                    .col-sm-3.col-md-3.col-xs-2 {
                        padding: 0;
                    }

                    .playstore>img {
                        width: 70px;
                    }
                }

                @media(min-width: 480px) and (max-width: 580px) {
                    .logo_1,.log2,.log4,.log5 {
                        display: none;
                    }

                    img.ft_img_net {
                        margin-left: -40px;
                        width: 80px;
                    }

                    img.ft_img_pay {
                        width: 80px;
                        margin-left: -5px;
                        margin-top: 4px;
                    }

                    img.ft_img_skr {
                        width: 68px;
                        margin-left: 29px;
                    }

                    img.ft_img_visa {
                        width: 73px;
                        margin-left: 53px;
                    }

                    .playstore>img {
                        width: 70px;
                    }
                }

                @media (min-width: 580px) and (max-width: 768px) {
                    .logo_1,.log2,.log4,.log5 {
                        display: none;
                    }

                    .col-sm-6.col-md-6.footer_mid {
                        text-align: center;
                    }

                    img.ft_img_net {
                        margin-left: -65px;
                    }

                    img.ft_img_pay {
                        margin-left: 15px;
                    }

                    img.ft_img_skr {
                        margin-left: 85px;
                    }

                    img.ft_img_visa {
                        margin-left: 112px;
                        width: 95px;
                    }

                    .playstore>img {
                        width: 70px;
                    }
                }

                @media (min-width: 768px) and (max-width: 940px) {
                    .logo_1,.log2,.log4,.log5 {
                        display: none;
                    }

                    .col-sm-6.col-md-6.footer_mid {
                        text-align: center;
                    }

                    img.ft_img_net {
                        margin-left: -35px;
                    }

                    img.ft_img_pay {
                        margin-left: 10px;
                    }

                    img.ft_img_skr {
                        margin-left: 45px !important;
                    }

                    img.ft_img_visa {
                        margin-left: 40px;
                    }
                }

                @media (min-width: 940px) and(max-width: 1030px) {
                    .logo_1,.log2,.log4,.log5 {
                        display: none;
                    }

                    img.ft_img_skr {
                        margin-left: 28px;
                    }

                    img.ft_img_visa {
                        width: 80px;
                    }

                    img.ft_img_pay {
                        margin-left: 17px;
                    }
                }

                @media (min-width: 1031px) and(max-width: 1199px) {
                    .logo_1,.log2,.log4,.log5 {
                        display: none;
                    }

                    img.ft_img_pay {
                        margin-left: 26px;
                        width: 110px;
                    }

                    img.ft_img_skr {
                        margin-left: 25px;
                    }

                    img.ft_img_visa {
                        width: 80px;
                    }
                }

                @media(min-width: 1199px) and (max-width: 1330px) {
                }
            </style>
            <footer style="background-color: #08381f">
                <div class=container>
                    <div class=row>
                        <div class="">
                            <div class=text-center>
                                <img src="<?php echo base_url(); ?>assets/playbet/img/logo wb.png" width=150 height=50 class=logofooter>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <img src="<?php echo base_url(); ?>assets/playbet/img/copyright-logo-1.png" class=logo_1>
                                <img src="<?php echo base_url(); ?>assets/playbet/img/copyright-logo-2.png" class=log2>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 footer_mid" style="margin-bottom: 50px;">
                                <div class=row style="margin-bottom: 30px;">
                                    <div class="col-sm-6 col-md-6">
                                        <ol style="list-style: none;">
                                            <li>
                                                <p class=for_p>Help</p>
                                            </li>
                                            <li>
                                                <a href="#">Deposits</a>
                                            </li>
                                            <li>
                                                <a href="#">Rules</a>
                                            </li>
                                            <li>
                                                <a href="#">Withdrawals</a>
                                            </li>
                                            <li>
                                                <a href="#">Privacy policy</a>
                                            </li>
                                            <li>
                                                <a href="#">Technical Issues</a>
                                            </li>
                                            <li>
                                                <a href="#">Terms and Conditions</a>
                                            </li>
                                            <li>
                                                <a href="#">Worldbet365 FAQ</a>
                                            </li>
                                        </ol>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <ol style="list-style: none;">
                                            <li>
                                                <p class=for_p>Scores &Rules</p>
                                            </li>
                                            <li>
                                                <a href="#">Live Scores</a>
                                            </li>
                                            <li>
                                                <a href="#">Results</a>
                                            </li>
                                            <li>
                                                <p class=for_p style="margin-top: 5px;">Promotions</p>
                                            </li>
                                            <li>
                                                <a href="#">Open Accounts offer</a>
                                            </li>
                                            <li>
                                                <a href="#">Current Offers</a>
                                            </li>
                                            <li>
                                                <a href="#">Deposit Offers</a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                                <div class=aboutWeb>
                                    WorldBet365 is a reliable bookmaker that strives to create a long-term association with each customer.<br>
                                    We guarantee a personal approach with your best interests in mind, easy payment methods and, what<br>is most important, 100% payouts on all winning bets! May luck never leave you!

                                </div>
                                <div class=pay>
                                    <div class=row>
                                        <div class="col-xs-2 col-sm-3 col-md-3 ">
                                            <img src="<?php echo base_url(); ?>assets/playbet/img/Neteller.png" class=ft_img_net>
                                        </div>
                                        <div class="col-xs-2 col-sm-3 col-md-3 ">
                                            <img src="<?php echo base_url(); ?>assets/playbet/img/paypal.png" class=ft_img_pay>
                                        </div>
                                        <div class="col-xs-2 col-sm-3 col-md-3 ">
                                            <img src="<?php echo base_url(); ?>assets/playbet/img/Skrill.png" class=ft_img_skr>
                                        </div>
                                        <div class=" col-xs-2 col-sm-3 col-md-3">
                                            <img src="<?php echo base_url(); ?>assets/playbet/img/visa.png" class=ft_img_visa>
                                        </div>
                                    </div>
                                </div>
                                <div class="playstore text-center">
                                    <img src="<?php echo base_url(); ?>assets/playbet/img/google_play_logo.png">
                                    <p>
                                        WorldBet365 Sports Inc., registration number FQ1811, Office 1/2373, 6 fifth lok yang road, 629757,<br>
                                        Singapore. WorldBet365 Sports Inc. is licensed and regulated by the Casino Regulatory Authority of<br>Singapore.
                                    </p>
                                    <p>©2020 Worldbet365. All rights reserved</p>
                                    <a href="#">
                                        <i class="fa fa-facebook-square fa-4x" aria-hidden=true></i>
                                    </a>
                                    <a href="#">
                                        <i class="face fa fa-twitter fa-4x"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <img src="<?php echo base_url(); ?>assets/playbet/img/copyright-logo-4.png" class=log4>
                                <img src="<?php echo base_url(); ?>assets/playbet/img/copyright-logo-5.png" class=log5>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </body>
    </html>

    <?php include(APPPATH . "views/appjs_public.php"); ?>
    <?php if( !empty($this->session->userdata['cus_data']) && is_object($this->session->userdata['cus_data']) ) : ?>
        <?php include(APPPATH . "views/appjs.php"); ?>
    <?php elseif( !empty($this->session->userdata['club_user_data']) && is_object($this->session->userdata['club_user_data']) ) : ?>
        <?php include(APPPATH . "views/appjs_club.php"); ?>
    <?php endif; ?>

</body>
</html>
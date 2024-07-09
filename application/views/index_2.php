<?php if( !empty($this->session->userdata['cus_data']) && is_object($this->session->userdata['cus_data']) ) : ?>
    <?php include(APPPATH . "views/customer/common/header.php"); ?>
<?php elseif( !empty($this->session->userdata['club_user_data']) && is_object($this->session->userdata['club_user_data']) ) : ?>
    <?php include(APPPATH . "views/club/common/header.php"); ?>
<?php else: ?>
    <?php include(APPPATH . "views/pretty_header.php"); ?>
<?php endif; ?>

<body style="background-color: #0E4835">

    <!-- nav bar -->
    <?php include(APPPATH . "views/nav.php"); ?>

    <!-- dd($matches) -->
    <section id=full_section>
        <div class=container-fluid>

            <!-- left section -->
            <?php include(APPPATH . "views/left_section.php"); ?>
            
            <div class=row>
                <div class="col-md-10 col-md-offset-2 col-sm-offset-3 col-sm-9 col-lg-10 col-lg-offset-2 main_contain">
                    <!-- all sports -->
                    <div class="col-md-9 col-md-offet-2">

                        <!-- slider file -->
                        <?php include(APPPATH . "views/slider.php"); ?>

                        <div class=all_sports>

                            <!-- table tab -->
                            <?php include(APPPATH . "views/table_tab.php"); ?>

                            <!-- marquee section -->
                            <?php include(APPPATH . "views/marquee.php"); ?>

                            <div class=tab-content>
                                <!-- All Sports -->
                                <div id=home class="tab-pane fade in active">
                                    <div class="col-sm-12 col-md-12">
                                        <div class=headline>
                                            <p class="text-center titleFont">Cricket</p>
                                        </div>
                                        <div class=table_content id=cricket_matches></div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class=headline>
                                            <p class="text-center titleFont">Football</p>
                                        </div>
                                        <div class=table_content id=football_matches></div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class=headline>
                                            <p class="text-center titleFont">Tennis</p>
                                        </div>
                                        <div class=table_content id=tennis_matches></div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class=headline>
                                            <p class="text-center titleFont">Basketball</p>
                                        </div>
                                        <div class=table_content id=basketball_matches></div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class=headline>
                                            <p class="text-center titleFont">Volleyball</p>
                                        </div>
                                        <div class=table_content id=volleyball_matches></div>
                                    </div>
                                </div>
                                <!-- cricket -->
                                <div id=cricket class="tab-pane fade">
                                    <div class=row>
                                        <!-- left section -->
                                        <div class="col-sm-12 col-md-12">
                                            <div class=headline>
                                                <h3>
                                                    <CENTER>Cricket</CENTER>
                                                </h3>
                                            </div>
                                            <div class=table_content id=cricket_matches_2>
                                                <div class=row style="margin-right: 0px; margin-left: 0px;">
                                                    <div class=team_name style="margin-right: 0px; margin-left: 0px;">
                                                        <h4>THCC Hamburg VS VFB Fallersleben</h4>
                                                        <h3>08-Jun-2021 01:06 AM</h3>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">1st Ball Run of 1st innings</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="1st Ball Run of 1st innings" data-name="Dot ball" data-match_id=3910 data-bets-details-id=79561 data-value="1.40">
                                                                    <span class=participant_name>Dot ball</span>
                                                                    <span class=participant_point>1.40</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="1st Ball Run of 1st innings" data-name="1 run" data-match_id=3910 data-bets-details-id=79562 data-value="2.10">
                                                                    <span class=participant_name>1 run</span>
                                                                    <span class=participant_point>2.10</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="1st Ball Run of 1st innings" data-name="2 runs" data-match_id=3910 data-bets-details-id=79563 data-value="12.00">
                                                                    <span class=participant_name>2 runs</span>
                                                                    <span class=participant_point>12.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="1st Ball Run of 1st innings" data-name="3 runs" data-match_id=3910 data-bets-details-id=79564 data-value="30.00">
                                                                    <span class=participant_name>3 runs</span>
                                                                    <span class=participant_point>30.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="1st Ball Run of 1st innings" data-name="4 runs" data-match_id=3910 data-bets-details-id=79565 data-value="3.00">
                                                                    <span class=participant_name>4 runs</span>
                                                                    <span class=participant_point>3.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="1st Ball Run of 1st innings" data-name="6 runs" data-match_id=3910 data-bets-details-id=79566 data-value="14.00">
                                                                    <span class=participant_name>6 runs</span>
                                                                    <span class=participant_point>14.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="1st Ball Run of 1st innings" data-name=wide data-match_id=3910 data-bets-details-id=79567 data-value="4.00">
                                                                    <span class=participant_name>wide</span>
                                                                    <span class=participant_point>4.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="1st Ball Run of 1st innings" data-name=wicket data-match_id=3910 data-bets-details-id=79568 data-value="10.00">
                                                                    <span class=participant_name>wicket</span>
                                                                    <span class=participant_point>10.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">1st Over Runs of 1st innings</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="1st Over Runs of 1st innings" data-name="0-3 runs" data-match_id=3910 data-bets-details-id=79569 data-value="2.65">
                                                                    <span class=participant_name>0-3 runs</span>
                                                                    <span class=participant_point>2.65</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="1st Over Runs of 1st innings" data-name="4-6 runs" data-match_id=3910 data-bets-details-id=79570 data-value="2.00">
                                                                    <span class=participant_name>4-6 runs</span>
                                                                    <span class=participant_point>2.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="1st Over Runs of 1st innings" data-name="7-9 runs" data-match_id=3910 data-bets-details-id=79571 data-value="1.70">
                                                                    <span class=participant_name>7-9 runs</span>
                                                                    <span class=participant_point>1.70</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="1st Over Runs of 1st innings" data-name="10+ runs" data-match_id=3910 data-bets-details-id=79572 data-value="1.40">
                                                                    <span class=participant_name>10+ runs</span>
                                                                    <span class=participant_point>1.40</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">1st Over Total Runs of 1st innings</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="1st Over Total Runs of 1st innings" data-name=odd data-match_id=3910 data-bets-details-id=79573 data-value="1.85">
                                                                    <span class=participant_name>odd</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="1st Over Total Runs of 1st innings" data-name=even data-match_id=3910 data-bets-details-id=79574 data-value="1.85">
                                                                    <span class=participant_name>even</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="1st Over Total Runs of 1st innings" data-name="maidel over" data-match_id=3910 data-bets-details-id=79575 data-value="10.00">
                                                                    <span class=participant_name>maidel over</span>
                                                                    <span class=participant_point>10.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                        <!-- right section -->
                                        <!-- <div class="col-sm-3 col-md-3"></div> -->
                                    </div>
                                </div>
                                <!-- football -->
                                <div id=soccer class="tab-pane fade">
                                    <div class=row>
                                        <!-- left section -->
                                        <div class="col-sm-12 col-md-12">
                                            <div class=headline>
                                                <h3>
                                                    <CENTER>Football</CENTER>
                                                </h3>
                                            </div>
                                            <div class=table_content id=football_matches_2>
                                                <div class=row style="margin-right: 0px; margin-left: 0px;">
                                                    <div class=team_name style="margin-right: 0px; margin-left: 0px;">
                                                        <h4>Poland VS Iceland</h4>
                                                        <h3>07-Jun-2021 11:06 PM</h3>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Half Time Result</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Half Time Result" data-name=Poland data-match_id=3905 data-bets-details-id=79444 data-value="1.75">
                                                                    <span class=participant_name>Poland</span>
                                                                    <span class=participant_point>1.75</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Half Time Result" data-name=tie data-match_id=3905 data-bets-details-id=79445 data-value="1.85">
                                                                    <span class=participant_name>tie</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Half Time Result" data-name=Iceland data-match_id=3905 data-bets-details-id=79446 data-value="3.75">
                                                                    <span class=participant_name>Iceland</span>
                                                                    <span class=participant_point>3.75</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Full Time Result</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Full Time Result" data-name=Poland data-match_id=3905 data-bets-details-id=79447 data-value="1.23">
                                                                    <span class=participant_name>Poland</span>
                                                                    <span class=participant_point>1.23</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Full Time Result" data-name=tie data-match_id=3905 data-bets-details-id=79448 data-value="3.00">
                                                                    <span class=participant_name>tie</span>
                                                                    <span class=participant_point>3.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Full Time Result" data-name=Iceland data-match_id=3905 data-bets-details-id=79449 data-value="3.75">
                                                                    <span class=participant_name>Iceland</span>
                                                                    <span class=participant_point>3.75</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Goals</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Goals" data-name=odd data-match_id=3905 data-bets-details-id=79450 data-value="1.70">
                                                                    <span class=participant_name>odd</span>
                                                                    <span class=participant_point>1.70</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Goals" data-name=even data-match_id=3905 data-bets-details-id=79451 data-value="1.80">
                                                                    <span class=participant_name>even</span>
                                                                    <span class=participant_point>1.80</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Goals" data-name="no goals" data-match_id=3905 data-bets-details-id=79452 data-value="5.00">
                                                                    <span class=participant_name>no goals</span>
                                                                    <span class=participant_point>5.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Both Teams to Score</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Both Teams to Score" data-name=yes data-match_id=3905 data-bets-details-id=79491 data-value="1.60">
                                                                    <span class=participant_name>yes</span>
                                                                    <span class=participant_point>1.60</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Both Teams to Score" data-name=no data-match_id=3905 data-bets-details-id=79492 data-value="1.60">
                                                                    <span class=participant_name>no</span>
                                                                    <span class=participant_point>1.60</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Yellow Card Of 1st Team</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 1st Team" data-name="1 Card" data-match_id=3905 data-bets-details-id=79493 data-value="1.65">
                                                                    <span class=participant_name>1 Card</span>
                                                                    <span class=participant_point>1.65</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 1st Team" data-name="2 Cards" data-match_id=3905 data-bets-details-id=79494 data-value="2.20">
                                                                    <span class=participant_name>2 Cards</span>
                                                                    <span class=participant_point>2.20</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 1st Team" data-name="3 Cards" data-match_id=3905 data-bets-details-id=79495 data-value="3.00">
                                                                    <span class=participant_name>3 Cards</span>
                                                                    <span class=participant_point>3.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 1st Team" data-name="4+ Cards" data-match_id=3905 data-bets-details-id=79496 data-value="4.00">
                                                                    <span class=participant_name>4+ Cards</span>
                                                                    <span class=participant_point>4.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 1st Team" data-name="No Yellow Card" data-match_id=3905 data-bets-details-id=79497 data-value="2.20">
                                                                    <span class=participant_name>No Yellow Card</span>
                                                                    <span class=participant_point>2.20</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Yellow Card Of 2nd Team</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 2nd Team" data-name="1 Card" data-match_id=3905 data-bets-details-id=79498 data-value="2.10">
                                                                    <span class=participant_name>1 Card</span>
                                                                    <span class=participant_point>2.10</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 2nd Team" data-name="2 Cards" data-match_id=3905 data-bets-details-id=79499 data-value="2.20">
                                                                    <span class=participant_name>2 Cards</span>
                                                                    <span class=participant_point>2.20</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 2nd Team" data-name="3 Cards" data-match_id=3905 data-bets-details-id=79500 data-value="3.20">
                                                                    <span class=participant_name>3 Cards</span>
                                                                    <span class=participant_point>3.20</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 2nd Team" data-name="4+ Cards" data-match_id=3905 data-bets-details-id=79501 data-value="4.00">
                                                                    <span class=participant_name>4+ Cards</span>
                                                                    <span class=participant_point>4.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 2nd Team" data-name="No Yellow Card" data-match_id=3905 data-bets-details-id=79502 data-value="2.20">
                                                                    <span class=participant_name>No Yellow Card</span>
                                                                    <span class=participant_point>2.20</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Goals Over/Under</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Goals Over/Under" data-name="Over 2.5" data-match_id=3905 data-bets-details-id=79503 data-value="1.60">
                                                                    <span class=participant_name>Over 2.5</span>
                                                                    <span class=participant_point>1.60</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Goals Over/Under" data-name="Under 2.5" data-match_id=3905 data-bets-details-id=79504 data-value="1.45">
                                                                    <span class=participant_name>Under 2.5</span>
                                                                    <span class=participant_point>1.45</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Cards Number</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Cards Number" data-name="Over 4.5" data-match_id=3905 data-bets-details-id=79505 data-value="2.00">
                                                                    <span class=participant_name>Over 4.5</span>
                                                                    <span class=participant_point>2.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Cards Number" data-name="Under 4.5" data-match_id=3905 data-bets-details-id=79506 data-value="1.23">
                                                                    <span class=participant_name>Under 4.5</span>
                                                                    <span class=participant_point>1.23</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Offsides</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Offsides" data-name=odd data-match_id=3905 data-bets-details-id=79507 data-value="1.85">
                                                                    <span class=participant_name>odd</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Offsides" data-name=even data-match_id=3905 data-bets-details-id=79508 data-value="1.85">
                                                                    <span class=participant_name>even</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Corners</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Corners" data-name=odd data-match_id=3905 data-bets-details-id=79509 data-value="1.85">
                                                                    <span class=participant_name>odd</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Corners" data-name=even data-match_id=3905 data-bets-details-id=79510 data-value="1.85">
                                                                    <span class=participant_name>even</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Cards</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Cards" data-name=odd data-match_id=3905 data-bets-details-id=79511 data-value="1.85">
                                                                    <span class=participant_name>odd</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Cards" data-name=even data-match_id=3905 data-bets-details-id=79512 data-value="1.85">
                                                                    <span class=participant_name>even</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Goal In Half Time</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Goal In Half Time" data-name=yes data-match_id=3905 data-bets-details-id=79513 data-value="1.26">
                                                                    <span class=participant_name>yes</span>
                                                                    <span class=participant_point>1.26</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Goal In Half Time" data-name=no data-match_id=3905 data-bets-details-id=79514 data-value="2.00">
                                                                    <span class=participant_name>no</span>
                                                                    <span class=participant_point>2.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class=row style="margin-right: 0px; margin-left: 0px;">
                                                    <div class=team_name style="margin-right: 0px; margin-left: 0px;">
                                                        <h4>Benin VS Zambia</h4>
                                                        <h3>08-Jun-2021 12:06 AM</h3>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Half Time Result</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Half Time Result" data-name=Benin data-match_id=3906 data-bets-details-id=79455 data-value="2.85">
                                                                    <span class=participant_name>Benin</span>
                                                                    <span class=participant_point>2.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Half Time Result" data-name=tie data-match_id=3906 data-bets-details-id=79456 data-value="1.56">
                                                                    <span class=participant_name>tie</span>
                                                                    <span class=participant_point>1.56</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Half Time Result" data-name=Zambia data-match_id=3906 data-bets-details-id=79457 data-value="3.00">
                                                                    <span class=participant_name>Zambia</span>
                                                                    <span class=participant_point>3.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Full Time Result</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Full Time Result" data-name=Benin data-match_id=3906 data-bets-details-id=79458 data-value="1.75">
                                                                    <span class=participant_name>Benin</span>
                                                                    <span class=participant_point>1.75</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Full Time Result" data-name=tie data-match_id=3906 data-bets-details-id=79459 data-value="2.45">
                                                                    <span class=participant_name>tie</span>
                                                                    <span class=participant_point>2.45</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Full Time Result" data-name=Zambia data-match_id=3906 data-bets-details-id=79460 data-value="2.20">
                                                                    <span class=participant_name>Zambia</span>
                                                                    <span class=participant_point>2.20</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Goals</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Goals" data-name=odd data-match_id=3906 data-bets-details-id=79461 data-value="1.70">
                                                                    <span class=participant_name>odd</span>
                                                                    <span class=participant_point>1.70</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Goals" data-name=even data-match_id=3906 data-bets-details-id=79462 data-value="1.80">
                                                                    <span class=participant_name>even</span>
                                                                    <span class=participant_point>1.80</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Goals" data-name="no goals" data-match_id=3906 data-bets-details-id=79463 data-value="5.00">
                                                                    <span class=participant_name>no goals</span>
                                                                    <span class=participant_point>5.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Yellow Card Of 1st Team</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 1st Team" data-name="1 Card" data-match_id=3906 data-bets-details-id=79515 data-value="1.50">
                                                                    <span class=participant_name>1 Card</span>
                                                                    <span class=participant_point>1.50</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 1st Team" data-name="2 Cards" data-match_id=3906 data-bets-details-id=79516 data-value="2.00">
                                                                    <span class=participant_name>2 Cards</span>
                                                                    <span class=participant_point>2.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 1st Team" data-name="3 Cards" data-match_id=3906 data-bets-details-id=79517 data-value="3.00">
                                                                    <span class=participant_name>3 Cards</span>
                                                                    <span class=participant_point>3.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 1st Team" data-name="4+ Cards" data-match_id=3906 data-bets-details-id=79518 data-value="4.00">
                                                                    <span class=participant_name>4+ Cards</span>
                                                                    <span class=participant_point>4.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 1st Team" data-name="No Yellow Card" data-match_id=3906 data-bets-details-id=79519 data-value="2.00">
                                                                    <span class=participant_name>No Yellow Card</span>
                                                                    <span class=participant_point>2.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Yellow Card Of 2nd Team</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 2nd Team" data-name="1 Card" data-match_id=3906 data-bets-details-id=79520 data-value="1.56">
                                                                    <span class=participant_name>1 Card</span>
                                                                    <span class=participant_point>1.56</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 2nd Team" data-name="2 Cards" data-match_id=3906 data-bets-details-id=79521 data-value="2.00">
                                                                    <span class=participant_name>2 Cards</span>
                                                                    <span class=participant_point>2.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 2nd Team" data-name="3 Cards" data-match_id=3906 data-bets-details-id=79522 data-value="3.00">
                                                                    <span class=participant_name>3 Cards</span>
                                                                    <span class=participant_point>3.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 2nd Team" data-name="4+ Cards" data-match_id=3906 data-bets-details-id=79523 data-value="4.00">
                                                                    <span class=participant_name>4+ Cards</span>
                                                                    <span class=participant_point>4.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 2nd Team" data-name="No Yellow Card" data-match_id=3906 data-bets-details-id=79524 data-value="2.00">
                                                                    <span class=participant_name>No Yellow Card</span>
                                                                    <span class=participant_point>2.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Goals Over/Under</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Goals Over/Under" data-name="Over 2.5" data-match_id=3906 data-bets-details-id=79525 data-value="1.85">
                                                                    <span class=participant_name>Over 2.5</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Goals Over/Under" data-name="Under 2.5" data-match_id=3906 data-bets-details-id=79526 data-value="1.36">
                                                                    <span class=participant_name>Under 2.5</span>
                                                                    <span class=participant_point>1.36</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Cards Number</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Cards Number" data-name="Over 4.5" data-match_id=3906 data-bets-details-id=79527 data-value="1.85">
                                                                    <span class=participant_name>Over 4.5</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Cards Number" data-name="Under 4.5" data-match_id=3906 data-bets-details-id=79528 data-value="1.36">
                                                                    <span class=participant_name>Under 4.5</span>
                                                                    <span class=participant_point>1.36</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Offsides</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Offsides" data-name=odd data-match_id=3906 data-bets-details-id=79529 data-value="1.85">
                                                                    <span class=participant_name>odd</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Offsides" data-name=even data-match_id=3906 data-bets-details-id=79530 data-value="1.85">
                                                                    <span class=participant_name>even</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Corners</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Corners" data-name=odd data-match_id=3906 data-bets-details-id=79531 data-value="1.85">
                                                                    <span class=participant_name>odd</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Corners" data-name=even data-match_id=3906 data-bets-details-id=79532 data-value="1.85">
                                                                    <span class=participant_name>even</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Cards</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Cards" data-name=odd data-match_id=3906 data-bets-details-id=79533 data-value="1.85">
                                                                    <span class=participant_name>odd</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Cards" data-name=even data-match_id=3906 data-bets-details-id=79534 data-value="1.85">
                                                                    <span class=participant_name>even</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Goal In Half Time</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Goal In Half Time" data-name=yes data-match_id=3906 data-bets-details-id=79535 data-value="1.45">
                                                                    <span class=participant_name>yes</span>
                                                                    <span class=participant_point>1.45</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Goal In Half Time" data-name=no data-match_id=3906 data-bets-details-id=79536 data-value="1.70">
                                                                    <span class=participant_name>no</span>
                                                                    <span class=participant_point>1.70</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class=row style="margin-right: 0px; margin-left: 0px;">
                                                    <div class=team_name style="margin-right: 0px; margin-left: 0px;">
                                                        <h4>Hungary VS Republic of Ireland</h4>
                                                        <h3>08-Jun-2021 12:06 AM</h3>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Half Time Result</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Half Time Result" data-name=Hungary data-match_id=3907 data-bets-details-id=79464 data-value="2.75">
                                                                    <span class=participant_name>Hungary</span>
                                                                    <span class=participant_point>2.75</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Half Time Result" data-name=tie data-match_id=3907 data-bets-details-id=79465 data-value="1.65">
                                                                    <span class=participant_name>tie</span>
                                                                    <span class=participant_point>1.65</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Half Time Result" data-name="Republic of Ireland" data-match_id=3907 data-bets-details-id=79466 data-value="3.00">
                                                                    <span class=participant_name>Republic of Ireland</span>
                                                                    <span class=participant_point>3.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Full Time Result</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Full Time Result" data-name=Hungary data-match_id=3907 data-bets-details-id=79467 data-value="1.75">
                                                                    <span class=participant_name>Hungary</span>
                                                                    <span class=participant_point>1.75</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Full Time Result" data-name=tie data-match_id=3907 data-bets-details-id=79468 data-value="2.50">
                                                                    <span class=participant_name>tie</span>
                                                                    <span class=participant_point>2.50</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Full Time Result" data-name="Republic of Ireland" data-match_id=3907 data-bets-details-id=79469 data-value="2.56">
                                                                    <span class=participant_name>Republic of Ireland</span>
                                                                    <span class=participant_point>2.56</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Goals</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Goals" data-name=odd data-match_id=3907 data-bets-details-id=79470 data-value="1.70">
                                                                    <span class=participant_name>odd</span>
                                                                    <span class=participant_point>1.70</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Goals" data-name=even data-match_id=3907 data-bets-details-id=79471 data-value="1.80">
                                                                    <span class=participant_name>even</span>
                                                                    <span class=participant_point>1.80</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Goals" data-name="no goals" data-match_id=3907 data-bets-details-id=79472 data-value="5.00">
                                                                    <span class=participant_name>no goals</span>
                                                                    <span class=participant_point>5.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Both Teams to Score</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Both Teams to Score" data-name=yes data-match_id=3907 data-bets-details-id=79537 data-value="1.65">
                                                                    <span class=participant_name>yes</span>
                                                                    <span class=participant_point>1.65</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Both Teams to Score" data-name=no data-match_id=3907 data-bets-details-id=79538 data-value="1.45">
                                                                    <span class=participant_name>no</span>
                                                                    <span class=participant_point>1.45</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Yellow Card Of 1st Team</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 1st Team" data-name="1 Card" data-match_id=3907 data-bets-details-id=79539 data-value="1.75">
                                                                    <span class=participant_name>1 Card</span>
                                                                    <span class=participant_point>1.75</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 1st Team" data-name="2 Cards" data-match_id=3907 data-bets-details-id=79540 data-value="2.25">
                                                                    <span class=participant_name>2 Cards</span>
                                                                    <span class=participant_point>2.25</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 1st Team" data-name="3 Cards" data-match_id=3907 data-bets-details-id=79541 data-value="3.10">
                                                                    <span class=participant_name>3 Cards</span>
                                                                    <span class=participant_point>3.10</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 1st Team" data-name="4+ Cards" data-match_id=3907 data-bets-details-id=79542 data-value="4.00">
                                                                    <span class=participant_name>4+ Cards</span>
                                                                    <span class=participant_point>4.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 1st Team" data-name="No Yellow Card" data-match_id=3907 data-bets-details-id=79543 data-value="2.10">
                                                                    <span class=participant_name>No Yellow Card</span>
                                                                    <span class=participant_point>2.10</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Yellow Card Of 2nd Team</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 2nd Team" data-name="1 Card" data-match_id=3907 data-bets-details-id=79544 data-value="2.25">
                                                                    <span class=participant_name>1 Card</span>
                                                                    <span class=participant_point>2.25</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 2nd Team" data-name="2 Cards" data-match_id=3907 data-bets-details-id=79545 data-value="2.10">
                                                                    <span class=participant_name>2 Cards</span>
                                                                    <span class=participant_point>2.10</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 2nd Team" data-name="3 Cards" data-match_id=3907 data-bets-details-id=79546 data-value="3.10">
                                                                    <span class=participant_name>3 Cards</span>
                                                                    <span class=participant_point>3.10</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 2nd Team" data-name="4+ Cards" data-match_id=3907 data-bets-details-id=79547 data-value="4.00">
                                                                    <span class=participant_name>4+ Cards</span>
                                                                    <span class=participant_point>4.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Yellow Card Of 2nd Team" data-name="No Yellow Card" data-match_id=3907 data-bets-details-id=79548 data-value="1.75">
                                                                    <span class=participant_name>No Yellow Card</span>
                                                                    <span class=participant_point>1.75</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Goals Over/Under</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Goals Over/Under" data-name="Over 2.5" data-match_id=3907 data-bets-details-id=79549 data-value="2.00">
                                                                    <span class=participant_name>Over 2.5</span>
                                                                    <span class=participant_point>2.00</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Goals Over/Under" data-name="Under 2.5" data-match_id=3907 data-bets-details-id=79550 data-value="1.36">
                                                                    <span class=participant_name>Under 2.5</span>
                                                                    <span class=participant_point>1.36</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Cards Number</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Cards Number" data-name="Over 4.5" data-match_id=3907 data-bets-details-id=79551 data-value="1.85">
                                                                    <span class=participant_name>Over 4.5</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Cards Number" data-name="Under 4.5" data-match_id=3907 data-bets-details-id=79552 data-value="1.85">
                                                                    <span class=participant_name>Under 4.5</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Offsides</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Offsides" data-name=odd data-match_id=3907 data-bets-details-id=79553 data-value="1.85">
                                                                    <span class=participant_name>odd</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Offsides" data-name=even data-match_id=3907 data-bets-details-id=79554 data-value="1.85">
                                                                    <span class=participant_name>even</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Corners</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Corners" data-name=odd data-match_id=3907 data-bets-details-id=79555 data-value="1.85">
                                                                    <span class=participant_name>odd</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Corners" data-name=even data-match_id=3907 data-bets-details-id=79556 data-value="1.85">
                                                                    <span class=participant_name>even</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Total Cards</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Cards" data-name=odd data-match_id=3907 data-bets-details-id=79557 data-value="1.85">
                                                                    <span class=participant_name>odd</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Total Cards" data-name=even data-match_id=3907 data-bets-details-id=79558 data-value="1.85">
                                                                    <span class=participant_name>even</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                    <div class="row participant_bet" style="margin-right: 0px; margin-left: 0px;">
                                                        <h5 style="color: #fff">Goal In Half Time</h5>
                                                        <div class=row style="margin-right: 1px; margin-left: 1px;">
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Goal In Half Time" data-name=yes data-match_id=3907 data-bets-details-id=79559 data-value="1.36">
                                                                    <span class=participant_name>yes</span>
                                                                    <span class=participant_point>1.36</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                            <div class="col-xs-6 col-sm-4 back_style">
                                                                <a class="btn-block for_btn" style="" id=trigger-modal data-toggle=modal data-target="#myModal" data-option="Goal In Half Time" data-name=no data-match_id=3907 data-bets-details-id=79560 data-value="1.85">
                                                                    <span class=participant_name>no</span>
                                                                    <span class=participant_point>1.85</span>
                                                                </a>
                                                            </div>
                                                            <!-- /.col-sm-6 -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Basket -->
                                <div id=basketball class="tab-pane fade">
                                    <div class=row>
                                        <!-- left section -->
                                        <div class="col-sm-12 col-md-12">
                                            <div class=headline>
                                                <h3>
                                                    <CENTER>Basketball</CENTER>
                                                </h3>
                                            </div>
                                            <div class=table_content id=basket_matches_2></div>
                                        </div>
                                        <!-- right section -->
                                        <!-- <div class="col-sm-3 col-md-3"></div> -->
                                    </div>
                                </div>
                                <!-- Volley -->
                                <div id=volleyball class="tab-pane fade">
                                    <div class=row>
                                        <!-- left section -->
                                        <div class="col-sm-12 col-md-12">
                                            <div class=headline>
                                                <h3>
                                                    <CENTER>Volleyball</CENTER>
                                                </h3>
                                            </div>
                                            <div class=table_content id=volleyball_matches_2></div>
                                        </div>
                                        <!-- right section -->
                                        <!-- <div class="col-sm-3 col-md-3"></div> -->
                                    </div>
                                </div>
                                <!-- Tennis -->
                                <div id=tennis class="tab-pane fade">
                                    <div class=row>
                                        <!-- left section -->
                                        <div class="col-sm-12 col-md-12">
                                            <div class=headline>
                                                <h3>
                                                    <CENTER>Tennis</CENTER>
                                                </h3>
                                            </div>
                                            <div class=table_content id=tennis_matches_2></div>
                                        </div>
                                        <!-- right section -->
                                        <!-- <div class="col-sm-3 col-md-3"></div> -->
                                    </div>
                                </div>
                                <!-- modal -->
                                <div class="modal fade modal_s" id=myModal role=dialog>
                                    <div class=modal-dialog>
                                        <!-- Modal content-->
                                        <div class=modal-content id=modal-content>
                                            <div class=modal-header style="background-color: #036f4d;">
                                                <button type=button class=close data-dismiss=modal style="color: #fcf8e3;font-size: 30px;">&times;</button>
                                                <h4 class=modal-title style="color: #ffffff;">PlACE A BET</h4>
                                            </div>
                                            <div class="alert alert-danger hidden" id=modal-error role=alert>
                                                <h5 class="text-danger font-weight-bold" id=modal-error-message>Amount is too low</h5>
                                            </div>
                                            <form id=placeBetForm action="place/bet" method=POST>
                                                <input type=hidden name=_token value=OE7twcNC6j8KVWU45lv9hmabo1C8DpZJYABlheu1>
                                                <div class=modal-body id=modal-body></div>
                                                <div class=text-center>
                                                    <input class=form-input name=amount placeholder="Enter amount" id=bet-amount type=number data-zeros=true min=20 max=6000>
                                                </div>
                                                <div class=text-center>
                                                    <span style="color: red;" class=" message2" id=message2>Limit (20 - 6000)</span>
                                                </div>
                                                <div class=modal-footer>
                                                    <div class=modal-sport-win>
                                                        <div class="col-xs-6 col-md-6">
                                                            <p class=modal-sport-win-left>Possible Return</p>
                                                        </div>
                                                        <div class="col-xs-6 col-md-6">
                                                            <span class=bet_possible_win id=display-return></span>
                                                        </div>
                                                    </div>
                                                    <button id=placeBetSubmitButton class="modal-sport-place button button-primary button-block" type=button>place bet</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- modal end -->
                            </div>
                        </div>
                    </div>
                    <!-- all sports end -->
                    <!-- right section -->
                    <div class="col-sm-3 col-md-3 for_size">
                        <!-- Live score start -->
                        <div class=live_score>
                            <h3 class=live>Live Scores</h3>
                            <div class=main_container_block id=live></div>
                        </div>
                        <div class=uppersection>
                            <div class=highlight>
                                <h3 class=upcoming>Upcoming Matches</h3>
                                <div class=main_container_block id=list></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
    </section>

<!-- Footer -->
<?php include(APPPATH . "views/pretty_footer.php"); ?>
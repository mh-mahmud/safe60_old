<style>
    .list-inline-item {
        margin-left: 0px !important;
        /*margin-top: -7px !important;*/
        margin-bottom: -3px !important;
    }
    /*.list-inline-item:last-child {
      margin-bottom: -12px !important;
    }*/
    .bg-white-custom {
        box-shadow: none;
        border-radius: 0px;
        background-color: #ffffff;
        border: 1px solid #ccc !important;
    }
    .live-match-title {
        -webkit-animation: Font 2.2s infinite alternate;
        font-weight: 700;
        color: red;
    }
    .fixed-width-120 {
        width: auto !important;
    }
    @media (max-width: 420px) {
        .fixed-width-120 {
            /*width: 115px !important;*/
            width: auto !important;
        }
    }
    @media (max-width: 400px) {
        .fixed-width-120 {
            /*width: 129px !important;*/
            width: auto !important;
        }
    }
    @media (max-width: 360px) {
        .fixed-width-120 {
            /*width: 115px !important;*/
            width: auto !important;
        }
        #sportsList .list-inline-item {
            margin-left: 0px;
        }
        .badge {
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 10px;
            font-weight: 500;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            background-color: #777;
            border-radius: 10px;
        }

        /*.col-sm-4, .col-xs-4 {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 5px !important;
            padding-left: 5px !important;
        }*/

        .soft-color {
            margin-left: 0px !important;
            margin-right: 0px !important;
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

    }

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
    /* Firefox old*/
    @-moz-keyframes blink {
        0% {
            opacity:1;
        }
        50% {
            opacity:0;
        }
        100% {
            opacity:1;
        }
    } 

    @-webkit-keyframes blink {
        0% {
            opacity:1;
        }
        50% {
            opacity:0;
        }
        100% {
            opacity:1;
        }
    }
    /* IE */
    @-ms-keyframes blink {
        0% {
            opacity:1;
        }
        50% {
            opacity:0;
        }
        100% {
            opacity:1;
        }
    } 
    /* Opera and prob css3 final iteration */
    @keyframes blink {
        0% {
            opacity:1;
        }
        50% {
            opacity:0;
        }
        100% {
            opacity:1;
        }
    } 
    .blink-image {
        -moz-animation: blink normal 1s infinite ease-in-out; /* Firefox */
        -webkit-animation: blink normal 1s infinite ease-in-out; /* Webkit */
        -ms-animation: blink normal 1s infinite ease-in-out; /* IE */
        animation: blink normal 1s infinite ease-in-out; /* Opera and prob css3 final iteration */
    }
</style>

<style>
    .general__accord {
        margin: 16px 0;
        /*background-color: #1e1e2d;*/
    }

    .general__accord-btn {
        height: 55px;
        background: #343442;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        cursor: pointer;
    }

    .general__accord-btn-club {
        width: 150px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        border-right: 1px solid #434351;
    }

    .general__accord-btn-vs {
        width: calc(100% - 300px);
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .general__accord-btn-vs-vs {
        margin: 0 100px;
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 21px;
        text-align: center;
        color: #717171;
    }

    .general__accord-btn-vs-team {
        font-style: normal;
        font-weight: normal;
        font-size: 14px;
        line-height: 21px;
        color: #ffffff;
    }

    .general__accord-btn-info {
        width: 120px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding-right: 30px;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -ms-flex-direction: column;
        border-left: 1px solid #434351;
    }

    .general__accord-btn-info-date {
        font-style: normal;
        font-weight: 500;
        font-size: 12px;
        line-height: 18px;
        text-align: right;
        color: #6a6a70;
    }

    .general__accord-btn-info-bets {
        font-style: normal;
        font-weight: 500;
        font-size: 11px;
        line-height: 16px;
        text-align: right;
        color: #fff200;
    }

    .general__accord-event {
        /*border: 1px solid #343442;*/
        max-height: 0;
        overflow: hidden;
        padding: 0 20px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -webkit-transition: all 0.2s ease-in-out 0s;
        transition: all 0.2s ease-in-out 0s;
        -moz-transition: all 0.2s ease-in-out 0s;
    }

    .general__accord-event-column {
        width: calc(50% - 50px);
        color: #fff;
        border-bottom: 1px solid #30303f;
    }

    .general__accord-event-column:last-child {
        border-bottom: none;
    }

    .general__accord-event-column-header {
        padding-bottom: 5px;
        font-style: normal;
        font-weight: normal;
        font-size: 13px;
        line-height: 19px;
        color: #e1e4e6;
    }

    .general__accord-event-column-body {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        margin: 0 -15px;
    }

    .general__accord-event-column-body-column {
        width: calc(33.3% - 30px);
        margin: 5px 15px 0 15px;
        background: #343442;
        border-radius: 5px;
        height: 55px;
        cursor: pointer;
    }

    .general__accord-event-column-body-column-name {
        font-style: normal;
        font-weight: 500;
        font-size: 11px;
        line-height: 16px;
        text-align: center;
        color: rgba(255, 255, 255, 0.8);
        margin: 5px 0;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
    }

    .general__accord-event-column-body-column-number {
        font-style: normal;
        font-weight: 500;
        font-size: 12px;
        line-height: 18px;
        text-align: center;
        color: #00aeef;
    }

    .general__accord-event-column-body-column.active {
        /*background: #ffffff;*/
        -webkit-box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
        border-radius: 5px;
    }

    .general__accord-event-column-body-column.active .general__accord-event-column-body-column-name {
        color: rgba(255, 255, 255, 0.8);
    }

    .general__accord-event.active {
        max-height: 5000px;
        padding: 20px;
    }

    @media (max-width: 768px) {

        .general__accord-btn-vs-vs {
            margin: 0 50px;
        }

        .general__accord-event-column {
            width: calc(50% - 20px);
        }

        .general__accord-event-column-body-column {
            width: calc(33.3% - 16px);
            margin: 10px 8px 0 8px;
        }
    }

    @media (max-width: 650px) {


        .general__accord-btn-vs {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            -ms-flex-direction: column;
            -webkit-box-align: unset;
            -ms-flex-align: unset;
            align-items: unset;
            padding-left: 30px;
            width: calc(100% - 190px);
        }
		
		.bg-black-real {
			margin-left: 20px !important;
		}

        .general__accord-btn-vs-vs {
            display: none;
        }

        .general__accord-btn-club {
            width: 80px;
        }

        .general__accord-btn-info {
            width: 105px;
            padding-right: 10px;
        }

        .general__accord-btn-info-date {
            font-size: 11px;
        }

        .general__accord-event {
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .general__accord-event-column {
            width: 100%;
            margin-bottom: 20px;
        }

        .general__accord-event-column:last-child {
            margin-bottom: 0;
        }

        .general__accord-event-column-body-column {
            width: calc(33.3% - 16px);
            margin: 10px 8px 0 8px;
        }

        .list-inline-item:not(:last-child) {
            margin-right: 5px !important;
        }
        /*.list-inline-item:is(:first-child) {
            margin-left: 15px !important;
        }*/
        .list-inline-item:first-child {
            margin-left: 15px !important;
        }

        .general__accord-event-column-header {
            margin-left: 12px !important;
        }

    }

</style>

<?php if(!empty($live)) : ?>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
            <div class="bg-dark card-header collapseBtn liveBtn" style="background-color:#4DB6AC !important;">
                <h5 class="mb-0">
                    <button class="btn btn-link text-khet-yellow text-yellow" style="text-decoration: underline;">
                        <img class="blink-image" width="40px" src="<?php echo base_url(); ?>assets/images/_live.png">
                        <!-- &nbsp;&nbsp;<strong>Live</strong> -->
                    </button>
                    <small class="pull-right text-khet-yellow match-count text-smaller">
                        <strong><?php echo count($live); ?> Matches</strong>
                    </small>
                </h5>
            </div>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0" style="background-color:#1e1e2d;">

                <?php
                $i=1;
                foreach($live as $val) :
                    $match_id = $val->id;
                    $match_title = explode("vs", strtolower($val->title));
                ?>
                <div class="general__accord">
                  <div data-accord="<?php echo $match_id; ?>" class="general__accord-btn accord__btn">
                    <div class="general__accord-btn-club">

                    <?php
                    if(!empty($val->league_title)) {
                        $img_data = $this->db->query("SELECT filename FROM league_names WHERE id='{$val->league_title}'")->row();
                    ?>
                        <img width="60" src="<?php echo base_url(); ?>uploads/<?php echo $img_data->filename; ?>" class="img-circle img-small" />
                    <?php } else { ?>
                        <?php if($val->sportscategory_id==6) : ?>
                            <img src="<?php echo base_url(); ?>assets/images/football.gif" class="img-thumbnail bg-transparent border-0 img_icon">
                        <?php elseif($val->sportscategory_id==13) : ?>
                            <img src="<?php echo base_url(); ?>assets/images/tennis_ball_white.svg" class="img-thumbnail bg-transparent border-0 img_icon">
                        <?php else: ?>
                            <!-- <img src="<?php //echo base_url(); ?>assets/images/cricket.gif" class="img-thumbnail bg-transparent border-0 img_icon"> -->
                            <img style="max-width:50px !important" src="<?php echo base_url(); ?>assets/new_images/99_stamp_new.jpg" class="img-thumbnail bg-transparent border-0 img_icon">
                        <?php endif; ?>
                    <?php } ?>

                    </div>
                    <div class="general__accord-btn-vs">
                      <div class="general__accord-btn-vs-team"><?php echo ucfirst($match_title[0]); ?></div>
                      <div class="general__accord-btn-vs-vs"><span class='live-match-title blink-image'>VS</span></div>
                      <div class="general__accord-btn-vs-team"><?php echo ucfirst(trim($match_title[1])); ?></div>
                    </div>

                    <?php
                        $get_bet_data = $this->db->query("SELECT * FROM match_option WHERE match_id='{$val->id}' AND status=1 ORDER BY match_option_serial ASC")->result();
                    ?>

                    <div class="general__accord-btn-info">
                      <div class="general__accord-btn-info-date">
                        <?php echo date(" d-M h:i A", strtotime($val->match_time_local)); ?> <?php //echo $val->league_title; ?>
                      </div>
                      <div class="general__accord-btn-info-bets"><?php echo count($get_bet_data); ?> bets</div>
                    </div>
                  </div>


                  <div id="accord-<?php echo $match_id; ?>" class="general__accord-event accord__event row active">
                  
                    <?php if(!empty($val->notification)) { ?>
                    <div class="m-0 p-0 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="">
                        <div class="bg-black-real container m-0 pt-5 pb-10 p-15 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="text-khet-yellow"><b><?php echo $val->notification; ?></b></div>
                        </div>
                    </div>
                    <?php } ?>

                    <?php
                    $i=rand(10, 10000);
                    foreach($get_bet_data as $data) :
                        $options = $this->db->query("SELECT * FROM match_option_details WHERE match_option_id='{$data->id}' ORDER BY option_serial ASC")->result();
                        if( !empty($data->end_time) ) {
                            if( time() > strtotime($data->end_time) ) {
                                $this->db->query("UPDATE match_option SET status=2 WHERE status=1 AND id='{$data->id}' LIMIT 1");
                            }
                        }

                    ?>

                    <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 py-2">
                      <div class="general__accord-event-column-header text-cyan">
                        <?php echo $data->match_option_title; ?>
                      </div>

                      <ul class="general__accord-event-column-body list-inline row">
                      
                        <?php foreach($options as $op) : ?>
                            <li id="ans-<?php echo $op->id; ?>" class="general__accord-event-column-body-column list-inline-item mb-2" onclick='return showBetModal("<?php echo $op->option_coin; ?>", "<?php echo $op->id; ?>");'>
                              <div title="<?php echo $op->option_title; ?>" class="general__accord-event-column-body-column-name"><?php echo $op->option_title; ?></div>
                              <div class="general__accord-event-column-body-column-number"><?php echo $op->option_coin; ?></div>
                            </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>

                    
                    <?php $i++; endforeach; ?>
                  </div>
                




                  <!-- <div class="">&nbsp;</div> -->
                </div>
                <?php endforeach; ?>




            </div>

        </div>
    </div>
<?php else: ?>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
            <div class="bg-dark card-header collapseBtn liveBtn">
                <h5 class="mb-0">
                    <button class="btn btn-link text-khet-yellow text-yellow" style="text-decoration: underline;">
                        <img width="40px" src="<?php echo base_url(); ?>assets/images/_live.png">
                        <!-- &nbsp;&nbsp;<strong>Live</strong> -->
                    </button>
                    <small class="pull-right text-khet-yellow match-count text-smaller"><strong>0 Matches</strong></small>
                </h5>
            </div>
            <div class="bg-white col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
                <div class="card-header bg-white col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix border-bottom pt-5 pb-5">
                        <h5 class="mb-0 btn pl-0 match-title text-danger"><strong>No matches available.</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(!empty($upcoming)) { ?>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pr-0 remove-pl pl-0 mt-5">
            <div style="background-color:#00C851 !important;" class="bg-dark bg-gray card-header collapseBtn upcomingBtn">
                <h5 class="mb-0">
                    <button class="btn btn-link" style="color:#fff !important">
                        <img style="width:30px;" src="<?php echo base_url(); ?>assets/images/upcoming.png">&nbsp;&nbsp;<strong>Upcoming Matches</strong>
                    </button>
                    <small class="pull-right match-count text-smaller" style="color:#fff !important"><strong><?php echo count($upcoming); ?> Matches</strong></small>
                </h5>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0" style="background-color:#1e1e2d;">

                <?php
                $i=1;
                foreach($upcoming as $val) :
                    $match_id = $val->id;
                    $match_title = explode("vs", strtolower($val->title));
                ?>
                <div class="general__accord">
                  <div data-accord="<?php echo $match_id; ?>" class="general__accord-btn accord__btn">
                    <div class="general__accord-btn-club">

                    <?php
                    if(!empty($val->league_title)) {
                        $img_data = $this->db->query("SELECT filename FROM league_names WHERE id='{$val->league_title}'")->row();
                    ?>
                        <img width="60" src="<?php echo base_url(); ?>uploads/<?php echo $img_data->filename; ?>" class="img-circle img-small" />
                    <?php } else { ?>
                        <?php if($val->sportscategory_id==6) : ?>
                            <img src="<?php echo base_url(); ?>assets/images/football.gif" class="img-thumbnail bg-transparent border-0 img_icon">
                        <?php elseif($val->sportscategory_id==13) : ?>
                            <img src="<?php echo base_url(); ?>assets/images/tennis_ball_white.svg" class="img-thumbnail bg-transparent border-0 img_icon">
                        <?php else: ?>
                            <!-- <img src="<?php //echo base_url(); ?>assets/images/cricket.gif" class="img-thumbnail bg-transparent border-0 img_icon"> -->
                            <img style="max-width:50px !important" src="<?php echo base_url(); ?>assets/new_images/99_stamp_new.jpg" class="img-thumbnail bg-transparent border-0 img_icon">
                        <?php endif; ?>
                    <?php } ?>

                    </div>
                    <div class="general__accord-btn-vs">
                      <div class="general__accord-btn-vs-team"><?php echo ucfirst($match_title[0]); ?></div>
                      <div class="general__accord-btn-vs-vs"><span class='live-match-title blink-image'>VS</span></div>
                      <div class="general__accord-btn-vs-team"><?php echo ucfirst(trim($match_title[1])); ?></div>
                    </div>

                    <?php
                        $get_bet_data = $this->db->query("SELECT * FROM match_option WHERE match_id='{$val->id}' AND status=1 ORDER BY match_option_serial ASC")->result();
                    ?>

                    <div class="general__accord-btn-info">
                      <div class="general__accord-btn-info-date">
                        <?php echo date(" d-M h:i A", strtotime($val->match_time_local)); ?> <?php //echo $val->league_title; ?>
                      </div>
                      <div class="general__accord-btn-info-bets"><?php echo count($get_bet_data); ?> bets</div>
                    </div>
                  </div>


                  <div id="accord-<?php echo $match_id; ?>" class="general__accord-event accord__event row active">
                  
                    <?php //if(!empty($val->notification)) { ?>
                    <!--<div class="m-0 p-0 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-left: 20px !important;">
                        <div class="bg-black-real container m-0 pt-5 pb-10 p-15 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="text-khet-yellow"><b><?php //echo $val->notification; ?></b></div>
                        </div>
                    </div>-->
                    <?php //} ?>

                    <?php
                    $i=rand(10, 10000);
                    foreach($get_bet_data as $data) :
                        $options = $this->db->query("SELECT * FROM match_option_details WHERE match_option_id='{$data->id}' ORDER BY option_serial ASC")->result();
                        if( !empty($data->end_time) ) {
                            if( time() > strtotime($data->end_time) ) {
                                $this->db->query("UPDATE match_option SET status=2 WHERE status=1 AND id='{$data->id}' LIMIT 1");
                            }
                        }

                    ?>

                    <div class=" col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 py-2">
                      <div class="general__accord-event-column-header text-cyan">
                        <?php echo $data->match_option_title; ?>
                      </div>

                      <ul class="general__accord-event-column-body list-inline row">
                      
                        <?php foreach($options as $op) : ?>
                            <li id="ans-<?php echo $op->id; ?>" class="general__accord-event-column-body-column list-inline-item mb-2" onclick='return showBetModal("<?php echo $op->option_coin; ?>", "<?php echo $op->id; ?>");'>
                              <div title="<?php echo $op->option_title; ?>" class="general__accord-event-column-body-column-name"><?php echo $op->option_title; ?></div>
                              <div class="general__accord-event-column-body-column-number"><?php echo $op->option_coin; ?></div>
                            </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>

                    
                    <?php $i++; endforeach; ?>
                  </div>
                




                  <!-- <div class="">&nbsp;</div> -->
                </div>
                <?php endforeach; ?>




            </div>
        </div>
    </div>
<?php } else { ?>


    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
            <div style="background-color:#00C851 !important;" class="bg-dark bg-gray card-header collapseBtn upcomingBtn">
                <h5 class="mb-0">
                    <button class="btn btn-link" style="color:#fff !important">
                        <img style="width:30px;" src="<?php echo base_url(); ?>assets/images/upcoming.png">&nbsp;&nbsp;<strong>Upcoming Matches</strong>
                    </button>
                    <small class="pull-right match-count text-smaller" style="color:#fff !important"><strong><?php echo count($upcoming); ?> Matches</strong></small>
                </h5>
            </div>
            <div class="bg-white col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
                <div class="card-header bg-white col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix border-bottom pt-5 pb-5">
                        <h5 class="mb-0 btn pl-0 match-title text-danger"><strong>No matches available.</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<script>
	$(document).ready(function() {
		$(".general__accord-btn").on("click", function() {
			var x_id = $(this).data("accord");
			
			$("#accord-"+x_id).slideToggle();
		});
	});
</script>
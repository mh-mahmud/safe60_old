    <style>
        .board-title {
            display: flex;
            background: linear-gradient(to bottom, #060f46a6 0%, #00041d 100%);
            color: white;
            padding: 16px;
        }

        .board-title>h4 {
            margin-right: 7px;
            font-size: 23px;
            font-variant: all-petite-caps;
        }

        .board-title>img {
            width: 30px;
        }

        .sport-lists {
            padding-top: 10px;
            /*background-color: #00041d;*/
            /*background-color: #00B74A;*/
            /*background-color: #13bb84;*/
			background-color: #212529;
        }

        .sport-lists>ul {
            list-style: none;
            display: flex;
            align-items: center;
            width: 100%;
            overflow: auto;
            text-align: center;
            border: 1px solid #404040;
        }

        .sport-lists>ul>li {
            padding: 10px 20px;
            border-right: 1px solid #404040;
            height: 76px;
            display: flex;
            align-items: center;
        }

        .sport-lists>ul>li>a {
            color: white;
            font-size: 12px;
            white-space: nowrap;
        }

        .sport-lists>ul>li>a>img {
            width: unset;
        }

        .sport-lists>ul>li:hover>a {
            color: #53ce3c;
        }

        .notice {
            display: flex;
        }

        .notice>strong.title {
            color: white;
            padding: 6px 15px;
            background: #00041dd4;
            font-variant: all-petite-caps;
        }

        marquee.notice-slider {
            font-size: 13px;
            font-weight: 600;
            /*margin-top: 7px;*/
            background-color: #FFF;
            padding-top: 5px;
        }

        .board-title {
            display: flex;
            background: linear-gradient(to bottom, #060f46a6 0%, #00041d 100%);
            color: white;
            padding: 16px;
        }

        .board-title>h4 {
            margin-right: 7px;
            font-size: 23px;
            font-variant: all-petite-caps;
        }

        .board-title>img {
            width: 30px;
        }

    </style>
    <?php
		$notice = $this->db->query("SELECT * FROM notice WHERE notice_type='NOTICE' LIMIT 1")->row();
		$offer = $this->db->query("SELECT * FROM notice WHERE notice_type='OFFER' LIMIT 1")->row();
	?>

    <!-- offer panel -->
    <div class="notice" style="margin-top:-16px;border-bottom:1px solid #333">
        <span style="font-size:12px;color:#FFF;width:90px;text-align:center;font-weight:bold;padding-top:10px;background-color:blue">Offer</span>
        <marquee scrollamount="5" direction="scroll" class="notice-slider">
            <p style="color:red;"><?php echo $offer->description; ?></p>
        </marquee>
    </div>
    <!-- end offer panel -->

    <div class="notice" style="margin-top:">
        <span id="span_clock" style="font-size:12px;color:#FFF;width:90px;text-align:center;font-weight:bold;padding-top:10px"></span>
        <marquee scrollamount="3" direction="scroll" class="notice-slider">
            <p style=""><?php echo $notice->description; ?></p>
        </marquee>
    </div>

    <div class="sport-lists">
        <!-- <ul style="padding-left:85px"> -->
        <ul>
            <!-- <li></li> -->
            <li id="all-data">
                <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/images/sports/basketball.svg" alt=""><br>All Games</a>
            </li>
            <li id="cricket">
                <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/images/sports/cricket.svg" alt=""><br>Cricket</a>
            </li>
            <!-- <li>
                <a href="javascript:void(0)"><img src="<?php //echo base_url(); ?>assets/images/images/sports/tennis.svg" alt=""><br>Ragby</a>
            </li> -->
            <li id="football">
                <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/images/sports/football.svg" alt=""><br>Football</a>
            </li>
            <li id="tennis">
                <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/images/sports/tennis.svg" alt=""><br>Tennis</a>
            </li>
            <li>
                <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/images/sports/basketball.svg" alt=""><br>BasketBall</a>
            </li>
            <li>
                <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/images/sports/ice-hockey.svg" alt=""><br>Hockey</a>
            </li>
            <li>
                <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/images/sports/volleyball.svg" alt=""><br>VolleyBall</a>
            </li>
            <li>
                <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/images/sports/table-tennis.svg" alt=""><br>TableTennis</a>
            </li>
            <li>
                <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/images/sports/ice-hockey.svg" alt=""><br>Ice-Hockey</a>
            </li>
            <li>
                <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/images/sports/golf.svg" alt=""><br>Golf</a>
            </li>
        </ul>
    </div>
    <style type="text/css">
        .form-control {
            background-color: rgba(0, 0, 0, 0.38) !important;
            color: whitesmoke !important;
            border: 1px solid whitesmoke;
            /* height: 40px !important; */
        }

        .custom-border-radius-btn {
            border-radius: 1px !important;
        }

        :focus {
            outline: -webkit-focus-ring-color auto 0px;
        }

        nav {
            font-family: 'Merriweather', serif;
        }

        .logo {
            margin-left: 100px;
        }

        .logoimg {
            margin-top: 27px;
        }

        .hov {
            padding-left: 120px;
            list-style: none;
            margin-bottom: 20px;
            margin-top: 25px;
        }

        .nav-top-bar {
            /* background-color: #106B4F; */
            background-image: linear-gradient(to right, #163e31 , #238a68);
        }

        .navbar {
            border-radius: 0px;
            margin-bottom: 0px;
            min-height: 100px;
        }

        .navbar-default,.navbar-collapse {
            border-color: transparent;
        }

        .navbar-collapse {
            border-top: 0px solid transparent;
        }

        .navbar-default .navbar-nav>li>a {
            color: #000;
        }

        .nav>li>a {
            font-weight: bold;
            font-size: 15px;
        }

        .hov>li>a:hover {
            text-decoration: none;
            background-color: #6FCA13 !important;
            border-radius: 41px !important;
            color: #fff;
        }

        .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
            color: #fff;
        }

        .form-right {
            margin-bottom: -95px;
            margin-right: 0px;
        }

        .form-right>form {
            margin-top: -65px;
        }

        .join {
            background-color: #6FCA13;
            color: #fff;
            padding: 5px;
            border-radius: 7px;
            border: 1px solid #000;
            font-size: 18px;
        }

        .join:hover,.join:focus {
            text-decoration: none;
            color: #fff;
            outline: 0px auto -webkit-focus-ring-color;
        }

        .input {
            background-color: #000;
            padding: 5px;
            width: 25%;
            border-radius: 7px;
            color: #fff;
        }

        .login {
            background-color: #6FCA13;
            color: #fff;
            padding: 2px;
            border-radius: 7px;
            font-size: 18px;
        }

        .forget {
            font-size: 14px;
            color: #fff;
            font-weight: bold;
        }

        .forget:hover {
            text-decoration: none;
            color: #000 !important;
        }

        /*sidebar*/
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 15px;
            color: #ddd;
            display: block;
            transition: 0.3s;
        }

        .sidebar .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: #111;
            color: white;
            padding: 10px 15px;
            border: none;
        }

        .openbtn:hover {
            background-color: #444;
        }

        #mySidebar {
            background-image: url(img/left_image.png);
            background-size: cover;
        }

        .navbar-default .navbar-toggle .icon-bar {
            background-color: #fbfbfb;
        }

        .navbar-default .navbar-toggle:hover,.navbar-default .navbar-toggle:focus {
            background-color: #0CD222;
        }

        .forgetDiv {
            margin-top: 35px;
        }

        /*responsive start*/
        @media(max-width: 320px) {
            .navbar-default, .navbar-collapse {
                height: 152px;
            }

            a.join {
                margin-bottom: -140px !important;
                float: right;
                margin-top: 117px;
                margin-right: -33px;
                font-size: 11px;
            }

            input.form-control-cust.input.mail {
                width: 90%;
                padding: 3px;
                margin-bottom: 5px;
                margin-left: 5px;
            }

            input.form-control-cust.input.pass {
                width: 90%;
                padding: 3px;
                margin-left: 5px;
            }

            button.login {
                float: left;
                margin-left: 5px;
                margin-top: 5px;
                font-size: 11px;
            }

            a.forget {
                float: left;
                margin-top: 10px;
                font-size: 11px;
                margin-bottom: 0;
                margin-left: 10px;
            }

            a.logo {
                margin-left: 20px;
            }

            button.navbar-toggle.collapsed.openbtn {
                margin-right: -7px;
                margin-top: 7px;
            }

            .navbar-header {
                width: 100%;
            }

            .logoimg {
                margin-top: 7px;
                height: 40px;
            }

            .for_size {
                margin-top: 0;
            }
        }

        @media(min-width: 320px) and (max-width: 480px) {
            .logoimg {
                margin-top: 7px;
                height: 40px;
            }

            button.navbar-toggle.collapsed.openbtn {
                margin-right: -12px;
                margin-top: 7px;
            }

            a.logo {
                margin-left: 20px;
            }

            a.join {
                float: right;
                margin-top: 117px;
                margin-bottom: -115px;
                margin-right: -10px;
                font-size: 11px;
            }

            button.login {
                float: left;
                margin-left: 5px;
                margin-top: 36px;
                font-size: 11px;
            }

            input.form-control-cust.input.mail {
                width: 90%;
                padding: 4px;
                margin-bottom: 2px;
                margin-left: 5px;
            }

            input.form-control-cust.input.pass {
                width: 90%;
                padding: 4px;
                margin-left: -35px;
            }

            a.forget {
                margin-top: 10px;
                float: left;
                margin-left: 20px;
                font-size: 11px;
                margin-bottom: 5px;
            }

            .navbar-header {
                width: 100%;
            }

            .extra_content_wrap {
                font-size: 12px;
            }
        }

        @media (min-width: 480px) and (max-width: 580px) {
            .logoimg {
                margin-top: 7px;
                height: 40px;
                margin-left: 5px;
            }

            a.logo {
                margin-left: 15px;
            }

            button.navbar-toggle.collapsed.openbtn {
                margin-right: 22px;
                margin-top: 7px;
            }

            a.join {
                float: right;
                margin-top: 118px;
                margin-bottom: -98px;
                margin-right: -6px;
                font-size: 12px;
            }

            button.login {
                float: left;
                margin-left: 5px;
                margin-top: 40px;
                font-size: 12px;
            }

            input.form-control-cust.input.mail {
                width: 90%;
                padding: 4px;
                margin-bottom: 2px;
                margin-left: 5px;
            }

            input.form-control-cust.input.pass {
                width: 90%;
                padding: 4px;
                margin-left: -37px;
            }

            a.forget {
                float: left;
                margin-top: 10px;
                margin-left: 14px;
                margin-bottom: 5px;
            }

            img.ft_img_net {
                margin-left: -96px;
            }

            img.ft_img_pay {
                margin-left: -2px;
                width: 102px;
            }

            img.ft_img_skr {
                margin-left: 58px;
                margin-top: -3px;
                width: 80px;
            }

            img.ft_img_visa {
                width: 80px;
                margin-left: 96px;
            }
        }

        @media (min-width: 580px) and (max-width: 768px) {
            .logoimg {
                margin-top: 7px;
                height: 40px;
                margin-left: 5px;
            }

            a.logo {
                margin-left: 15px;
            }

            button.navbar-toggle.collapsed.openbtn {
                margin-right: -10px;
                margin-top: 7px;
            }

            input.form-control-cust.input.mail {
                width: 90%;
                padding: 4px;
                margin-bottom: 2px;
                margin-left: 5px;
            }

            input.form-control-cust.input.pass {
                width: 90%;
                margin-left: -165px;
                padding: 4px;
            }

            a.join {
                float: right;
                margin-top: 119px;
                margin-bottom: -97px;
                margin-right: 18px;
                font-size: 11px;
            }

            button.login {
                float: left;
                margin-left: 5px;
                margin-top: 38px;
                font-size: 11px;
            }

            a.forget {
                float: left;
                margin-top: 39px;
                margin-left: 30px;
            }

            .navbar-header {
                width: 100%;
            }

            .navbar-default, .navbar-collapse {
                height: 152px;
            }
        }

        @media (min-width: 768px) and (max-width: 940px) {
            a.logo {
                margin-left: 15px;
            }

            .navbar-right.form-right {
                margin-top: 40px;
                margin-bottom: -20px;
            }

            input.form-control-cust.input.mail {
                width: 25%;
                padding: 5px;
                padding: 5px;
                margin-bottom: 2px;
            }

            input.form-control-cust.input.pass {
                width: 25%;
                padding: 5px;
                padding: 5px;
            }

            a.join {
                font-size: 14px;
            }

            a.forget {
                font-size: 14px;
            }

            button.login {
                font-size: 14px;
            }

            .hov>li>a:hover {
                background-color: transparent !important;
            }
        }

        @media (min-width: 940px) and (max-width: 1030px) {
            .form-right>form {
                margin-top: -32px;
            }

            a.logo {
                margin-left: 0;
            }

            ul.nav.navbar-nav.hov {
                padding-left: 100px;
                margin-top: 4px;
            }

            input.form-control-cust.input.mail {
                width: 25%;
                padding: 5px;
                margin-bottom: 2px;
            }

            input.form-control-cust.input.pass {
                width: 25%;
                padding: 5px;
            }

            .hov>li>a:hover {
                background-color: transparent !important;
            }
        }

        @media (min-width: 1031px) and (max-width: 1199px) {
            a.logo {
                margin-left: 0;
            }

            ul.nav.navbar-nav.hov {
                padding-left: 150px;
                margin-top: 5px;
            }

            .form-right>form {
                margin-top: -27px;
                margin-right: 80px
            }

            .hov>li>a:hover {
                background-color: transparent !important;
            }
        }

        @media(min-width: 1199px) and (max-width: 1330px) {
            a.logo {
                margin-left: 50px;
            }

            ul.nav.navbar-nav.hov {
                padding-left: 25px;
            }
        }
    </style>
    <nav class="navbar navbar-default nav-top-bar navbar-fixed-top" style="padding: 15px 15px 0px">
        <div class=container-fluid>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=navbar-header>
                <button type=button class="navbar-toggle collapsed openbtn" data-toggle="" data-target="#navbarSupportedContent" aria-expanded=false onclick="openNav()">
                    <span class=sr-only>Toggle navigation</span>
                    <span class=icon-bar></span>
                    <span class=icon-bar></span>
                    <span class=icon-bar></span>
                </button>
                <a class=logo href="/">
                    <img src="<?php echo base_url(); ?>assets/playbet/img/logo wb.png" alt="" width=150 height=50 class=logoimg>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse all" id=navbarSupportedContent>
                <ul class="nav navbar-nav hov">
                    <li>
                        <a class="clr " href="/">HOME </a>
                    </li>
                    <li>
                        <a class="clr " href="/">IN-PLAY</a>
                    </li>
                    <li>
                        <a class="clr " href="upcoming">ADVANCE</a>
                    </li>
                    <li>
                        <a class="clr " href="login">LOGIN</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <div id=mySidebar class=sidebar>
                <a href="javascript:void(0)" class=closebtn onclick="closeNav()">×</a>
                <a class="clr " href="/">HOME </a>
                <a class="clr " href="/">IN-PLAY</a>
                <a class="clr " href="upcoming">ADVANCE</a>
                <a class="clr " href="login">LOGIN</a>
            </div>
            <div class="navbar-right form-right ">
                <form method=post action="login" name=loginform role=form accept-charset=utf-8>
                    <input type=hidden name=_token value=OE7twcNC6j8KVWU45lv9hmabo1C8DpZJYABlheu1>
                    
                    <!-- <a class=join href="register">Join Now</a> -->

                    <a data-toggle="modal" data-target="#registrationModal" class="btn register bonus-waiting join" href="#">
                        <span class=""><strong>Register now!</strong></span>
                    </a>

                    <input placeholder=Username name=username class="form-control-cust input mail" type=text autofocus="">
                    <input placeholder=Password name=password class="form-control-cust input pass" type=password value="">
                    <button class=login type=submit>Login</button>
                    <a class=forget href="password/reset">Forget Password</a>
                </form>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <script type="text/javascript">
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }
        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
        function myFunction() {
            var x = document.getElementById("all");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>

        <!-- Registration Modal -->
        <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content rounded-0">
                    <div class="modal-header bg-dark rounded-0">
                        <h5 class="modal-title text-white" id="registrationModalLabel">Register</h5>
                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <form id="signupForm" method="POST" action="register">

                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-md-6 mb-5">
                                    <label for="user-reg-name" class="col-form-label">Full Name <span class="text-danger">* </span>:</label>
                                    <input type="text" class="form-control" name="full_name" id="full_name">
                                </div>

                                <div class="col-md-6 mb-5">
                                    <label for="user-reg-username" class="col-form-label">Username <span class="text-danger">* </span>:</label>
                                    <input type="text" name="username" id="username" class="form-control" id="">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-5">
                                    <label for="user-reg-email" class="col-form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                    <small id="emailHelp" class="form-text text-muted">
                                        Email Format: username@example.com
                                    </small>
                                </div>

                                <div class="col-md-6 mb-5">
                                    <label for="user-reg-mobile" class="col-form-label">Mobile Number<span class="text-danger">* </span>:</label>
                                    <input type="text" class="form-control" name="mobile" id="mobile">
                                    <small id="mobileNumberHelp" class="form-text text-muted">
                                        Mobile Number Format: 01(3,5-9)-xxxxxx
                                    </small>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-5">
                                    <label for="user-reg-password" class="col-form-label">Password <span class="text-danger">* </span>:</label>
                                    <input type="password" class="form-control" id="reg_password" name="reg_password" minlength="6">
                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                        Password 6-30 characters.
                                    </small>
                                </div>

                                <div class="col-md-6 mb-5">
                                    <label for="user-reg-cnf_password" class="col-form-label">Confirm Password<span class="text-danger">* </span>:</label>
                                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" minlength="6">
                                    <small id="cnfPasswordHelpBlock" class="form-text text-muted">
                                        Must match password.
                                    </small>
                                </div>

                            </div>

                            <div class="form-row">
                                <div class="col-md-6 mb-5">
                                    <label for="user-reg-sponsor_id" class="col-form-label">Sponsor's Username:</label>
                                    <input type="text" class="form-control" id="reg_sponsor_id" name="reg_sponsor_id"/>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <label for="user-reg-club_id" class="col-form-label">Select Club:<span class="text-danger">* </span></label>
                                    <select name="reg_club" id="reg_club" class=" form-control">
                                        <option value="">-- select --</option>
                                        <?php foreach($clubs as $val) : ?>
                                            <option value="<?php echo $val->id; ?>"><?php echo $val->club_name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="col-md-6 mb-5">
                                    <label for="user-reg-club_id" class="col-form-label">Select Country:<span class="text-danger">* </span></label>
                                    <select name="country" name="country" class="form-control" required>
                                        <option class="option" value="">Select your country</option>
                                        <option class="option" selected="" value="Bangladesh +880">Bangladesh +880 </option>
                                        <option class="option" value="Afghanistan +93">Afghanistan +93 </option>
                                        <option class="option" value="Aland Islands +358">Aland Islands +358 </option>
                                        <option class="option" value="Albania +355">Albania +355 </option>
                                        <option class="option" value="Algeria +213">Algeria +213 </option>
                                        <option class="option" value="AmericanSamoa +1684">AmericanSamoa +1684 </option>
                                        <option class="option" value="Andorra +376">Andorra +376 </option>
                                        <option class="option" value="Angola +244">Angola +244 </option>
                                        <option class="option" value="Anguilla +1264">Anguilla +1264 </option>
                                        <option class="option" value="Antarctica +672">Antarctica +672 </option>
                                        <option class="option" value="Antigua and Barbuda +1268">Antigua and Barbuda +1268 </option>
                                        <option class="option" value="Argentina +54">Argentina +54 </option>
                                        <option class="option" value="Armenia +374">Armenia +374 </option>
                                        <option class="option" value="Aruba +297">Aruba +297 </option>
                                        <option class="option" value="Australia +61">Australia +61 </option>
                                        <option class="option" value="Austria +43">Austria +43 </option>
                                        <option class="option" value="Azerbaijan +994">Azerbaijan +994 </option>
                                        <option class="option" value="Bahamas +1242">Bahamas +1242 </option>
                                        <option class="option" value="Bahrain +973">Bahrain +973 </option>
                                        <option class="option" value="Barbados +1246">Barbados +1246 </option>
                                        <option class="option" value="Belarus +375">Belarus +375 </option>
                                        <option class="option" value="Belgium +32">Belgium +32 </option>
                                        <option class="option" value="Belize +501">Belize +501 </option>
                                        <option class="option" value="Benin +229">Benin +229 </option>
                                        <option class="option" value="Bermuda +1441">Bermuda +1441 </option>
                                        <option class="option" value="Bhutan +975">Bhutan +975 </option>
                                        <option class="option" value="Bolivia, Plurinational State of +591">Bolivia, Plurinational State of +591 </option>
                                        <option class="option" value="Bosnia and Herzegovina +387">Bosnia and Herzegovina +387 </option>
                                        <option class="option" value="Botswana +267">Botswana +267 </option>
                                        <option class="option" value="Brazil +55">Brazil +55 </option>
                                        <option class="option" value="British Indian Ocean Territory +246">British Indian Ocean Territory +246 </option>
                                        <option class="option" value="Brunei Darussalam +673">Brunei Darussalam +673 </option>
                                        <option class="option" value="Bulgaria +359">Bulgaria +359 </option>
                                        <option class="option" value="Burkina Faso +226">Burkina Faso +226 </option>
                                        <option class="option" value="Burundi +257">Burundi +257 </option>
                                        <option class="option" value="Cambodia +855">Cambodia +855 </option>
                                        <option class="option" value="Cameroon +237">Cameroon +237 </option>
                                        <option class="option" value="Canada +1">Canada +1 </option>
                                        <option class="option" value="Cape Verde +238">Cape Verde +238 </option>
                                        <option class="option" value="Cayman Islands + 345">Cayman Islands + 345 </option>
                                        <option class="option" value="Central African Republic +236">Central African Republic +236 </option>
                                        <option class="option" value="Chad +235">Chad +235 </option>
                                        <option class="option" value="Chile +56">Chile +56 </option>
                                        <option class="option" value="China +86">China +86 </option>
                                        <option class="option" value="Christmas Island +61">Christmas Island +61 </option>
                                        <option class="option" value="Cocos (Keeling) Islands +61">Cocos (Keeling) Islands +61 </option>
                                        <option class="option" value="Colombia +57">Colombia +57 </option>
                                        <option class="option" value="Comoros +269">Comoros +269 </option>
                                        <option class="option" value="Congo +242">Congo +242 </option>
                                        <option class="option" value="Congo, The Democratic Republic of the Congo +243">Congo, The Democratic Republic of the Congo +243 </option>
                                        <option class="option" value="Cook Islands +682">Cook Islands +682 </option>
                                        <option class="option" value="Costa Rica +506">Costa Rica +506 </option>
                                        <option class="option" value="Cote d'Ivoire +225">Cote d'Ivoire +225 </option>
                                        <option class="option" value="Croatia +385">Croatia +385 </option>
                                        <option class="option" value="Cuba +53">Cuba +53 </option>
                                        <option class="option" value="Cyprus +357">Cyprus +357 </option>
                                        <option class="option" value="Czech Republic +420">Czech Republic +420 </option>
                                        <option class="option" value="Denmark +45">Denmark +45 </option>
                                        <option class="option" value="Djibouti +253">Djibouti +253 </option>
                                        <option class="option" value="Dominica +1767">Dominica +1767 </option>
                                        <option class="option" value="Dominican Republic +1849">Dominican Republic +1849 </option>
                                        <option class="option" value="Ecuador +593">Ecuador +593 </option>
                                        <option class="option" value="Egypt +20">Egypt +20 </option>
                                        <option class="option" value="El Salvador +503">El Salvador +503 </option>
                                        <option class="option" value="Equatorial Guinea +240">Equatorial Guinea +240 </option>
                                        <option class="option" value="Eritrea +291">Eritrea +291 </option>
                                        <option class="option" value="Estonia +372">Estonia +372 </option>
                                        <option class="option" value="Ethiopia +251">Ethiopia +251 </option>
                                        <option class="option" value="Falkland Islands (Malvinas) +500">Falkland Islands (Malvinas) +500 </option>
                                        <option class="option" value="Faroe Islands +298">Faroe Islands +298 </option>
                                        <option class="option" value="Fiji +679">Fiji +679 </option>
                                        <option class="option" value="Finland +358">Finland +358 </option>
                                        <option class="option" value="France +33">France +33 </option>
                                        <option class="option" value="French Guiana +594">French Guiana +594 </option>
                                        <option class="option" value="French Polynesia +689">French Polynesia +689 </option>
                                        <option class="option" value="Gabon +241">Gabon +241 </option>
                                        <option class="option" value="Gambia +220">Gambia +220 </option>
                                        <option class="option" value="Georgia +995">Georgia +995 </option>
                                        <option class="option" value="Germany +49">Germany +49 </option>
                                        <option class="option" value="Ghana +233">Ghana +233 </option>
                                        <option class="option" value="Gibraltar +350">Gibraltar +350 </option>
                                        <option class="option" value="Greece +30">Greece +30 </option>
                                        <option class="option" value="Greenland +299">Greenland +299 </option>
                                        <option class="option" value="Grenada +1473">Grenada +1473 </option>
                                        <option class="option" value="Guadeloupe +590">Guadeloupe +590 </option>
                                        <option class="option" value="Guam +1671">Guam +1671 </option>
                                        <option class="option" value="Guatemala +502">Guatemala +502 </option>
                                        <option class="option" value="Guernsey +44">Guernsey +44 </option>
                                        <option class="option" value="Guinea +224">Guinea +224 </option>
                                        <option class="option" value="Guinea-Bissau +245">Guinea-Bissau +245 </option>
                                        <option class="option" value="Guyana +595">Guyana +595 </option>
                                        <option class="option" value="Haiti +509">Haiti +509 </option>
                                        <option class="option" value="Holy See (Vatican City State) +379">Holy See (Vatican City State) +379 </option>
                                        <option class="option" value="Honduras +504">Honduras +504 </option>
                                        <option class="option" value="Hong Kong +852">Hong Kong +852 </option>
                                        <option class="option" value="Hungary +36">Hungary +36 </option>
                                        <option class="option" value="Iceland +354">Iceland +354 </option>
                                        <option class="option" value="India +91">India +91 </option>
                                        <option class="option" value="Indonesia +62">Indonesia +62 </option>
                                        <option class="option" value="Iran, Islamic Republic of Persian Gulf +98">Iran, Islamic Republic of Persian Gulf +98 </option>
                                        <option class="option" value="Iraq +964">Iraq +964 </option>
                                        <option class="option" value="Ireland +353">Ireland +353 </option>
                                        <option class="option" value="Isle of Man +44">Isle of Man +44 </option>
                                        <option class="option" value="Israel +972">Israel +972 </option>
                                        <option class="option" value="Italy +39">Italy +39 </option>
                                        <option class="option" value="Jamaica +1876">Jamaica +1876 </option>
                                        <option class="option" value="Japan +81">Japan +81 </option>
                                        <option class="option" value="Jersey +44">Jersey +44 </option>
                                        <option class="option" value="Jordan +962">Jordan +962 </option>
                                        <option class="option" value="Kazakhstan +77">Kazakhstan +77 </option>
                                        <option class="option" value="Kenya +254">Kenya +254 </option>
                                        <option class="option" value="Kiribati +686">Kiribati +686 </option>
                                        <option class="option" value="Korea, Democratic People's Republic of Korea +850">Korea, Democratic People's Republic of Korea +850 </option>
                                        <option class="option" value="Korea, Republic of South Korea +82">Korea, Republic of South Korea +82 </option>
                                        <option class="option" value="Kuwait +965">Kuwait +965 </option>
                                        <option class="option" value="Kyrgyzstan +996">Kyrgyzstan +996 </option>
                                        <option class="option" value="Laos +856">Laos +856 </option>
                                        <option class="option" value="Latvia +371">Latvia +371 </option>
                                        <option class="option" value="Lebanon +961">Lebanon +961 </option>
                                        <option class="option" value="Lesotho +266">Lesotho +266 </option>
                                        <option class="option" value="Liberia +231">Liberia +231 </option>
                                        <option class="option" value="Libyan Arab Jamahiriya +218">Libyan Arab Jamahiriya +218 </option>
                                        <option class="option" value="Liechtenstein +423">Liechtenstein +423 </option>
                                        <option class="option" value="Lithuania +370">Lithuania +370 </option>
                                        <option class="option" value="Luxembourg +352">Luxembourg +352 </option>
                                        <option class="option" value="Macao +853">Macao +853 </option>
                                        <option class="option" value="Macedonia +389">Macedonia +389 </option>
                                        <option class="option" value="Madagascar +261">Madagascar +261 </option>
                                        <option class="option" value="Malawi +265">Malawi +265 </option>
                                        <option class="option" value="Malaysia +60">Malaysia +60 </option>
                                        <option class="option" value="Maldives +960">Maldives +960 </option>
                                        <option class="option" value="Mali +223">Mali +223 </option>
                                        <option class="option" value="Malta +356">Malta +356 </option>
                                        <option class="option" value="Marshall Islands +692">Marshall Islands +692 </option>
                                        <option class="option" value="Martinique +596">Martinique +596 </option>
                                        <option class="option" value="Mauritania +222">Mauritania +222 </option>
                                        <option class="option" value="Mauritius +230">Mauritius +230 </option>
                                        <option class="option" value="Mayotte +262">Mayotte +262 </option>
                                        <option class="option" value="Mexico +52">Mexico +52 </option>
                                        <option class="option" value="Micronesia, Federated States of Micronesia +691">Micronesia, Federated States of Micronesia +691 </option>
                                        <option class="option" value="Moldova +373">Moldova +373 </option>
                                        <option class="option" value="Monaco +377">Monaco +377 </option>
                                        <option class="option" value="Mongolia +976">Mongolia +976 </option>
                                        <option class="option" value="Montenegro +382">Montenegro +382 </option>
                                        <option class="option" value="Montserrat +1664">Montserrat +1664 </option>
                                        <option class="option" value="Morocco +212">Morocco +212 </option>
                                        <option class="option" value="Mozambique +258">Mozambique +258 </option>
                                        <option class="option" value="Myanmar +95">Myanmar +95 </option>
                                        <option class="option" value="Namibia +264">Namibia +264 </option>
                                        <option class="option" value="Nauru +674">Nauru +674 </option>
                                        <option class="option" value="Nepal +977">Nepal +977 </option>
                                        <option class="option" value="Netherlands +31">Netherlands +31 </option>
                                        <option class="option" value="Netherlands Antilles +599">Netherlands Antilles +599 </option>
                                        <option class="option" value="New Caledonia +687">New Caledonia +687 </option>
                                        <option class="option" value="New Zealand +64">New Zealand +64 </option>
                                        <option class="option" value="Nicaragua +505">Nicaragua +505 </option>
                                        <option class="option" value="Niger +227">Niger +227 </option>
                                        <option class="option" value="Nigeria +234">Nigeria +234 </option>
                                        <option class="option" value="Niue +683">Niue +683 </option>
                                        <option class="option" value="Norfolk Island +672">Norfolk Island +672 </option>
                                        <option class="option" value="Northern Mariana Islands +1670">Northern Mariana Islands +1670 </option>
                                        <option class="option" value="Norway +47">Norway +47 </option>
                                        <option class="option" value="Oman +968">Oman +968 </option>
                                        <option class="option" value="Pakistan +92">Pakistan +92 </option>
                                        <option class="option" value="Palau +680">Palau +680 </option>
                                        <option class="option" value="Palestinian Territory, Occupied +970">Palestinian Territory, Occupied +970 </option>
                                        <option class="option" value="Panama +507">Panama +507 </option>
                                        <option class="option" value="Papua New Guinea +675">Papua New Guinea +675 </option>
                                        <option class="option" value="Paraguay +595">Paraguay +595 </option>
                                        <option class="option" value="Peru +51">Peru +51 </option>
                                        <option class="option" value="Philippines +63">Philippines +63 </option>
                                        <option class="option" value="Pitcairn +872">Pitcairn +872 </option>
                                        <option class="option" value="Poland +48">Poland +48 </option>
                                        <option class="option" value="Portugal +351">Portugal +351 </option>
                                        <option class="option" value="Puerto Rico +1939">Puerto Rico +1939 </option>
                                        <option class="option" value="Qatar +974">Qatar +974 </option>
                                        <option class="option" value="Romania +40">Romania +40 </option>
                                        <option class="option" value="Russia +7">Russia +7 </option>
                                        <option class="option" value="Rwanda +250">Rwanda +250 </option>
                                        <option class="option" value="Reunion +262">Reunion +262 </option>
                                        <option class="option" value="Saint Barthelemy +590">Saint Barthelemy +590 </option>
                                        <option class="option" value="Saint Helena, Ascension and Tristan Da Cunha +290">Saint Helena, Ascension and Tristan Da Cunha +290 </option>
                                        <option class="option" value="Saint Kitts and Nevis +1869">Saint Kitts and Nevis +1869 </option>
                                        <option class="option" value="Saint Lucia +1758">Saint Lucia +1758 </option>
                                        <option class="option" value="Saint Martin +590">Saint Martin +590 </option>
                                        <option class="option" value="Saint Pierre and Miquelon +508">Saint Pierre and Miquelon +508 </option>
                                        <option class="option" value="Saint Vincent and the Grenadines +1784">Saint Vincent and the Grenadines +1784 </option>
                                        <option class="option" value="Samoa +685">Samoa +685 </option>
                                        <option class="option" value="San Marino +378">San Marino +378 </option>
                                        <option class="option" value="Sao Tome and Principe +239">Sao Tome and Principe +239 </option>
                                        <option class="option" value="Saudi Arabia +966">Saudi Arabia +966 </option>
                                        <option class="option" value="Senegal +221">Senegal +221 </option>
                                        <option class="option" value="Serbia +381">Serbia +381 </option>
                                        <option class="option" value="Seychelles +248">Seychelles +248 </option>
                                        <option class="option" value="Sierra Leone +232">Sierra Leone +232 </option>
                                        <option class="option" value="Singapore +65">Singapore +65 </option>
                                        <option class="option" value="Slovakia +421">Slovakia +421 </option>
                                        <option class="option" value="Slovenia +386">Slovenia +386 </option>
                                        <option class="option" value="Solomon Islands +677">Solomon Islands +677 </option>
                                        <option class="option" value="Somalia +252">Somalia +252 </option>
                                        <option class="option" value="South Africa +27">South Africa +27 </option>
                                        <option class="option" value="South Sudan +211">South Sudan +211 </option>
                                        <option class="option" value="South Georgia and the South Sandwich Islands +500">South Georgia and the South Sandwich Islands +500 </option>
                                        <option class="option" value="Spain +34">Spain +34 </option>
                                        <option class="option" value="Sri Lanka +94">Sri Lanka +94 </option>
                                        <option class="option" value="Sudan +249">Sudan +249 </option>
                                        <option class="option" value="Suriname +597">Suriname +597 </option>
                                        <option class="option" value="Svalbard and Jan Mayen +47">Svalbard and Jan Mayen +47 </option>
                                        <option class="option" value="Swaziland +268">Swaziland +268 </option>
                                        <option class="option" value="Sweden +46">Sweden +46 </option>
                                        <option class="option" value="Switzerland +41">Switzerland +41 </option>
                                        <option class="option" value="Syrian Arab Republic +963">Syrian Arab Republic +963 </option>
                                        <option class="option" value="Taiwan +886">Taiwan +886 </option>
                                        <option class="option" value="Tajikistan +992">Tajikistan +992 </option>
                                        <option class="option" value="Tanzania, United Republic of Tanzania +255">Tanzania, United Republic of Tanzania +255 </option>
                                        <option class="option" value="Thailand +66">Thailand +66 </option>
                                        <option class="option" value="Timor-Leste +670">Timor-Leste +670 </option>
                                        <option class="option" value="Togo +228">Togo +228 </option>
                                        <option class="option" value="Tokelau +690">Tokelau +690 </option>
                                        <option class="option" value="Tonga +676">Tonga +676 </option>
                                        <option class="option" value="Trinidad and Tobago +1868">Trinidad and Tobago +1868 </option>
                                        <option class="option" value="Tunisia +216">Tunisia +216 </option>
                                        <option class="option" value="Turkey +90">Turkey +90 </option>
                                        <option class="option" value="Turkmenistan +993">Turkmenistan +993 </option>
                                        <option class="option" value="Turks and Caicos Islands +1649">Turks and Caicos Islands +1649 </option>
                                        <option class="option" value="Tuvalu +688">Tuvalu +688 </option>
                                        <option class="option" value="Uganda +256">Uganda +256 </option>
                                        <option class="option" value="Ukraine +380">Ukraine +380 </option>
                                        <option class="option" value="United Arab Emirates +971">United Arab Emirates +971 </option>
                                        <option class="option" value="United Kingdom +44">United Kingdom +44 </option>
                                        <option class="option" value="United States +1">United States +1 </option>
                                        <option class="option" value="Uruguay +598">Uruguay +598 </option>
                                        <option class="option" value="Uzbekistan +998">Uzbekistan +998 </option>
                                        <option class="option" value="Vanuatu +678">Vanuatu +678 </option>
                                        <option class="option" value="Venezuela, Bolivarian Republic of Venezuela +58">Venezuela, Bolivarian Republic of Venezuela +58 </option>
                                        <option class="option" value="Vietnam +84">Vietnam +84 </option>
                                        <option class="option" value="Virgin Islands, British +1284">Virgin Islands, British +1284 </option>
                                        <option class="option" value="Virgin Islands, U.S. +1340">Virgin Islands, U.S. +1340 </option>
                                        <option class="option" value="Wallis and Futuna +681">Wallis and Futuna +681 </option>
                                        <option class="option" value="Yemen +967">Yemen +967 </option>
                                        <option class="option" value="Zambia +260">Zambia +260 </option>
                                        <option class="option" value="Zimbabwe +263">Zimbabwe +263 </option>
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                        
                        <!---->
                        

                        
                        <!---->

                        <div class="modal-footer rounded-0">
                            <button id="btn-register" type="submit"
                                    class="btn btn-dark mx-auto rounded-0 border-0 btn-block bg-yellow text-dark font-weight-bold position-relative">Register
                                <div class="loading-spinner login-spinner-wrapper display_none"></div>
                            </button>
                            <!-- <input type="submit" name="submit" value="Register" class="btn btn-dark mx-auto rounded-0 border-0 btn-block bg-yellow text-dark font-weight-bold position-relative"> -->
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <!-- Registration Modal -->
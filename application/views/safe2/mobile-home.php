<?php include(APPPATH . "views/safe2/header.php"); ?>


<body>
  <div class="container-scroller">
      <?php include(APPPATH . "views/safe2/nav.php"); ?>
      <div class="container-fluid page-body-wrapper">
          <div class="fixed-top">
              <nav class="navbar p-3 row align-items-center">
                  <div class="col-5">
                      <a class="text-decoration-none m-0 p-0 text-warning home_logo_name" href="<?php echo base_url() ?>/"><img width="100" height="40" src="<?php echo base_url('safe2') ?>/asset/images/logoIcon/logo.png" /></a>
                  </div>
                  <div class="col-7 d-flex align-items-center p-0 justify-content-end">
                      <ul class="d-flex align-items-center">
                          <li class="mx-1">
                              <a class="nav-link btn-warning register_btn px-2 py-1 rounded" href="<?php echo base_url('user-register') ?>/">Register</a>
                          </li>
                          <li class="mx-1">
                              <a class="nav-link btn-warning log_btn px-2 py-1 rounded" href="<?php echo base_url('user-login') ?>/">Login</a>
                          </li>

                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle btn-dark log_btn px-2 py-1 rounded" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false" style="">
                                  <i class="mdi mdi-email"></i>
                                  <span class="count bg-success"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                  <h6 class="p-3 mb-0">Messages</h6>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item preview-item">
                                      <div class="preview-thumbnail"></div>
                                      <div class="preview-item-content">
                                          <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                                          <p class="text-muted mb-0">1 Minutes ago</p>
                                      </div>
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <p class="p-3 mb-0 text-center">4 new messages</p>
                              </div>
                          </li>
                      </ul>
                      <button class="mx-1 navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                          <i class="text-light fs-3 fas fa-bars"></i>
                      </button>
                  </div>
              </nav>
              <!-- notice panel -->
              <?php include(APPPATH . "views/safe2/notice.php"); ?>
          </div>

          <div class="main-panel">

              <!-- slider -->
              <?php include(APPPATH . "views/safe2/slider.php"); ?>

              <div class="my-2">
                  <div class="row px-3 py-0 align-items-center">
                      <div class="col-4 p-0">
                          <div class="d-flex align-items-center">
                              <p class="m-0 border border-warning border-1 p-1">All</p>
                              <p class="m-0 border border-warning border-1 p-1">23</p>
                              <p class="m-0 border border-warning border-1 p-1">10</p>
                              <p class="m-0 border border-warning border-1 p-1">13</p>
                          </div>
                      </div>
                      <div class="col-8 px-2">
                          <div class="owl-carousel owl-theme">
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="/sports/game/1">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d993acb06741641649068.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Cricket</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="/sports/game/2">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Football</span>
                                  </a>
                                  <h6 class="m-0 p-0">10/13</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="/sports/game/3">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a30bd7c281641456395.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Basketball</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="/sports/game/4">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69b05c24ec1641454341.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Tennis</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="/sports/game/5">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a0c77c2da1641455815.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Table tennis</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="/sports/game/6">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69b96cc03d1641454486.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Volleyball</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="/sports/game/7">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a17fc1b3a1641455999.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Hockey</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="/sports/game/8">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d68eae774be1641451182.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Ice Hochey</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/9">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69c3aaa0e01641454650.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Handball</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/10">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69baf7bd4d1641454511.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Badminton</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/11">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69e88b71b91641455240.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Floorball</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/12">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69c573b6d41641454679.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Horse Racing</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/13">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69a400b48f1641454144.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Boxing</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/14">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69ca5578be1641454757.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Beach Volleyball</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/15">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69a51552b01641454161.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Lottery</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/16">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69c67283bf1641454695.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Rugby</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/17">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a26c7829b1641456236.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Golf</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/18">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69f70e00941641455472.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Kabaddi</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/19">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a231a48a21641456177.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Bicycle Racying</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/20">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a20b6b9aa1641456139.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Chess</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/21">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a1e2410c91641456098.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Skiing</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <ul class="nav nav-tabs row px-3" id="myTab" role="tablist">
                  <li class="nav-item col-6 p-0 BD" role="presentation">
                      <button class="nav-link active w-100 border-0" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">BD Match</button>
                  </li>
                  <li class="nav-item col-6 p-0 BD" role="presentation">
                      <button class="nav-link w-100 border-0" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">International Match</button>
                  </li>
              </ul>
              <div class="tab-content mt-2" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <ul class="nav nav-tabs row mt-1 px-3" id="myTab2" role="tablist">
                          <li class="nav-item col-4 p-0" role="presentation">
                              <button class="nav-link w-100 active" id="home-tab2" data-bs-toggle="tab" data-bs-target="#liveInPlay" type="button" role="tab" aria-controls="liveInPlay" aria-selected="true">In-Play</button>
                          </li>
                          <li class="nav-item col-4 p-0" role="presentation">
                              <button class="nav-link w-100" id="profile-tab2" data-bs-toggle="tab" data-bs-target="#profile2" type="button" role="tab" aria-controls="profile2" aria-selected="false">Upcomming</button>
                          </li>
                          <li class="nav-item col-4 p-0" role="presentation">
                              <button class="nav-link w-100" id="profile-tab3" data-bs-toggle="tab" data-bs-target="#profile3" type="button" role="tab" aria-controls="profile3" aria-selected="false">Live TV</button>
                          </li>
                      </ul>

                      <div class="tab-content" id="myTabContent">
                          <!-- inplay content -->
                          <div class="tab-pane fade show active" id="liveInPlay" role="tabpanel" aria-labelledby="home-tab">
                              <div id="inplaysports">

                                  <!-- start from here -->
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/62232f42c5ac31646473026.png" alt="" class="sports_icon_img me-1" />
                                          South Korea K League
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/590" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Daejeon Hana Citizen</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Ansan Greeners FC</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">15/03/2022...04:00 pm</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-210" aria-expanded="  true " aria-controls="c-210">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-210" class="accordion-collapse collapse show" aria-labelledby="h-210">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5153"
                                                          data-optionid="14498"
                                                      >
                                                          <span class="question-text">Daejeon Hana Citizen</span>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5153"
                                                          data-optionid="14499"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5153"
                                                          data-optionid="14500"
                                                      >
                                                          <span class="question-text">Ansan Greeners FC</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-211" aria-expanded="  false " aria-controls="c-211">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-211" class="accordion-collapse collapse show" aria-labelledby="h-211">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5154"
                                                          data-optionid="14501"
                                                      >
                                                          <span class="question-text">Daejeon Hana Citizen</span>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5154"
                                                          data-optionid="14502"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5154"
                                                          data-optionid="14503"
                                                      >
                                                          <span class="question-text">Ansan Greeners FC</span>
                                                          <span class="input-group-text" id="basic-addon2">4.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-212" aria-expanded="  false " aria-controls="c-212">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-212" class="accordion-collapse collapse show" aria-labelledby="h-212">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5155"
                                                          data-optionid="14504"
                                                      >
                                                          <span class="question-text">Daejeon Hana Citizen</span>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5155"
                                                          data-optionid="14505"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5155"
                                                          data-optionid="14506"
                                                      >
                                                          <span class="question-text">Ansan Greeners FC</span>
                                                          <span class="input-group-text" id="basic-addon2">4</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-213" aria-expanded="  false " aria-controls="c-213">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-213" class="accordion-collapse collapse show" aria-labelledby="h-213">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5156"
                                                          data-optionid="14507"
                                                      >
                                                          <span class="question-text">Daejeon Hana Citizen</span>
                                                          <span class="input-group-text" id="basic-addon2">1.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5156"
                                                          data-optionid="14508"
                                                      >
                                                          <span class="question-text">Ansan Greeners FC</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5156"
                                                          data-optionid="14509"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-214" aria-expanded="  false " aria-controls="c-214">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-214" class="accordion-collapse collapse show" aria-labelledby="h-214">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5157"
                                                          data-optionid="14510"
                                                      >
                                                          <span class="question-text">Yes</span>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5157"
                                                          data-optionid="14511"
                                                      >
                                                          <span class="question-text">No</span>
                                                          <span class="input-group-text" id="basic-addon2">1.6</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-215" aria-expanded="  false " aria-controls="c-215">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-215" class="accordion-collapse collapse show" aria-labelledby="h-215">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5158"
                                                          data-optionid="14512"
                                                      >
                                                          <span class="question-text">1 Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5158"
                                                          data-optionid="14513"
                                                      >
                                                          <span class="question-text">2 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5158"
                                                          data-optionid="14514"
                                                      >
                                                          <span class="question-text">3 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5158"
                                                          data-optionid="14515"
                                                      >
                                                          <span class="question-text">4+ Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5158"
                                                          data-optionid="14516"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-216" aria-expanded="  false " aria-controls="c-216">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-216" class="accordion-collapse collapse show" aria-labelledby="h-216">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5159"
                                                          data-optionid="14517"
                                                      >
                                                          <span class="question-text">Under 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">1.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="590"
                                                          data-questionid="5159"
                                                          data-optionid="14518"
                                                      >
                                                          <span class="question-text">Over 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- end -->

                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/62232f42c5ac31646473026.png" alt="" class="sports_icon_img me-1" />
                                          South Korea K League
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/592" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Gimpo Citizen</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Chungnam Asan FC</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">15/03/2022...04:30 pm</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-48" aria-expanded="  true " aria-controls="c-48">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-48" class="accordion-collapse collapse show" aria-labelledby="h-48">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5169"
                                                          data-optionid="14537"
                                                      >
                                                          <span class="question-text">Gimpo Citizen</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5169"
                                                          data-optionid="14538"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5169"
                                                          data-optionid="14539"
                                                      >
                                                          <span class="question-text">Chungnam Asan FC</span>
                                                          <span class="input-group-text" id="basic-addon2">3.7</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-49" aria-expanded="  false " aria-controls="c-49">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-49" class="accordion-collapse collapse show" aria-labelledby="h-49">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5170"
                                                          data-optionid="14540"
                                                      >
                                                          <span class="question-text">Gimpo Citizen</span>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5170"
                                                          data-optionid="14541"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5170"
                                                          data-optionid="14542"
                                                      >
                                                          <span class="question-text">Chungnam Asan FC</span>
                                                          <span class="input-group-text" id="basic-addon2">3.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-50" aria-expanded="  false " aria-controls="c-50">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-50" class="accordion-collapse collapse show" aria-labelledby="h-50">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5171"
                                                          data-optionid="14543"
                                                      >
                                                          <span class="question-text">Gimpo Citizen</span>
                                                          <span class="input-group-text" id="basic-addon2">1.8</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5171"
                                                          data-optionid="14544"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5171"
                                                          data-optionid="14545"
                                                      >
                                                          <span class="question-text">Chungnam Asan FC</span>
                                                          <span class="input-group-text" id="basic-addon2">3.2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-51" aria-expanded="  false " aria-controls="c-51">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-51" class="accordion-collapse collapse show" aria-labelledby="h-51">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5172"
                                                          data-optionid="14546"
                                                      >
                                                          <span class="question-text">Gimpo Citizen</span>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5172"
                                                          data-optionid="14547"
                                                      >
                                                          <span class="question-text">Chungnam Asan FC</span>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5172"
                                                          data-optionid="14548"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-52" aria-expanded="  false " aria-controls="c-52">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-52" class="accordion-collapse collapse show" aria-labelledby="h-52">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5173"
                                                          data-optionid="14549"
                                                      >
                                                          <span class="question-text">Yes</span>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5173"
                                                          data-optionid="14550"
                                                      >
                                                          <span class="question-text">No</span>
                                                          <span class="input-group-text" id="basic-addon2">1.6</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-53" aria-expanded="  false " aria-controls="c-53">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-53" class="accordion-collapse collapse show" aria-labelledby="h-53">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5174"
                                                          data-optionid="14551"
                                                      >
                                                          <span class="question-text">1 Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5174"
                                                          data-optionid="14552"
                                                      >
                                                          <span class="question-text">2 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5174"
                                                          data-optionid="14553"
                                                      >
                                                          <span class="question-text">3 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5174"
                                                          data-optionid="14554"
                                                      >
                                                          <span class="question-text">4+ Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5174"
                                                          data-optionid="14555"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-54" aria-expanded="  false " aria-controls="c-54">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-54" class="accordion-collapse collapse show" aria-labelledby="h-54">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5175"
                                                          data-optionid="14556"
                                                      >
                                                          <span class="question-text">Under 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">1.4</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="592"
                                                          data-questionid="5175"
                                                          data-optionid="14557"
                                                      >
                                                          <span class="question-text">Over 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/62232ef01d9a11646472944.png" alt="" class="sports_icon_img me-1" />
                                          Australia A-League Men
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/591" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Perth Glory</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Central Coast Mariners</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">15/03/2022...05:05 pm</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-204" aria-expanded="  true " aria-controls="c-204">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-204" class="accordion-collapse collapse show" aria-labelledby="h-204">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5179"
                                                          data-optionid="14564"
                                                      >
                                                          <span class="question-text">Perth Glory</span>
                                                          <span class="input-group-text" id="basic-addon2">2.9</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5179"
                                                          data-optionid="14565"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">1.8</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5179"
                                                          data-optionid="14566"
                                                      >
                                                          <span class="question-text">Central Coast Mariners</span>
                                                          <span class="input-group-text" id="basic-addon2">2.9</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-205" aria-expanded="  false " aria-controls="c-205">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-205" class="accordion-collapse collapse show" aria-labelledby="h-205">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5180"
                                                          data-optionid="14567"
                                                      >
                                                          <span class="question-text">Perth Glory</span>
                                                          <span class="input-group-text" id="basic-addon2">2.7</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5180"
                                                          data-optionid="14568"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5180"
                                                          data-optionid="14569"
                                                      >
                                                          <span class="question-text">Central Coast Mariners</span>
                                                          <span class="input-group-text" id="basic-addon2">2.7</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-206" aria-expanded="  false " aria-controls="c-206">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-206" class="accordion-collapse collapse show" aria-labelledby="h-206">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5181"
                                                          data-optionid="14570"
                                                      >
                                                          <span class="question-text">Perth Glory</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5181"
                                                          data-optionid="14571"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5181"
                                                          data-optionid="14572"
                                                      >
                                                          <span class="question-text">Central Coast Mariners</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-207" aria-expanded="  false " aria-controls="c-207">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-207" class="accordion-collapse collapse show" aria-labelledby="h-207">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5182"
                                                          data-optionid="14573"
                                                      >
                                                          <span class="question-text">Perth Glory</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5182"
                                                          data-optionid="14574"
                                                      >
                                                          <span class="question-text">Central Coast Mariners</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5182"
                                                          data-optionid="14575"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-208" aria-expanded="  false " aria-controls="c-208">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-208" class="accordion-collapse collapse show" aria-labelledby="h-208">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5183"
                                                          data-optionid="14576"
                                                      >
                                                          <span class="question-text">Yes</span>
                                                          <span class="input-group-text" id="basic-addon2">1.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5183"
                                                          data-optionid="14577"
                                                      >
                                                          <span class="question-text">No</span>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-209" aria-expanded="  false " aria-controls="c-209">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-209" class="accordion-collapse collapse show" aria-labelledby="h-209">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5184"
                                                          data-optionid="14578"
                                                      >
                                                          <span class="question-text">1 Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5184"
                                                          data-optionid="14579"
                                                      >
                                                          <span class="question-text">2 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5184"
                                                          data-optionid="14580"
                                                      >
                                                          <span class="question-text">3 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5184"
                                                          data-optionid="14581"
                                                      >
                                                          <span class="question-text">4+ Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5184"
                                                          data-optionid="14582"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-210" aria-expanded="  false " aria-controls="c-210">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-210" class="accordion-collapse collapse show" aria-labelledby="h-210">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5185"
                                                          data-optionid="14583"
                                                      >
                                                          <span class="question-text">Under 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">1.7</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="591"
                                                          data-questionid="5185"
                                                          data-optionid="14584"
                                                      >
                                                          <span class="question-text">Over 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">1.9</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61d6f1a8875161641476520.jfif" alt="" class="sports_icon_img me-1" />
                                          Italy Serie B
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/593" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Como</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Ternana</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">15/03/2022...11:30 pm</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-92" aria-expanded="  true " aria-controls="c-92">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-92" class="accordion-collapse collapse show" aria-labelledby="h-92">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5189"
                                                          data-optionid="14591"
                                                      >
                                                          <span class="question-text">Como</span>
                                                          <span class="input-group-text" id="basic-addon2">2.9</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5189"
                                                          data-optionid="14592"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">1.8</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5189"
                                                          data-optionid="14593"
                                                      >
                                                          <span class="question-text">Ternana</span>
                                                          <span class="input-group-text" id="basic-addon2">2.9</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-93" aria-expanded="  false " aria-controls="c-93">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-93" class="accordion-collapse collapse show" aria-labelledby="h-93">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5190"
                                                          data-optionid="14594"
                                                      >
                                                          <span class="question-text">Como</span>
                                                          <span class="input-group-text" id="basic-addon2">2.7</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5190"
                                                          data-optionid="14595"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5190"
                                                          data-optionid="14596"
                                                      >
                                                          <span class="question-text">Ternana</span>
                                                          <span class="input-group-text" id="basic-addon2">2.7</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-94" aria-expanded="  false " aria-controls="c-94">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-94" class="accordion-collapse collapse show" aria-labelledby="h-94">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5191"
                                                          data-optionid="14597"
                                                      >
                                                          <span class="question-text">Como</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5191"
                                                          data-optionid="14598"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5191"
                                                          data-optionid="14599"
                                                      >
                                                          <span class="question-text">Ternana</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-95" aria-expanded="  false " aria-controls="c-95">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-95" class="accordion-collapse collapse show" aria-labelledby="h-95">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5192"
                                                          data-optionid="14600"
                                                      >
                                                          <span class="question-text">Como</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5192"
                                                          data-optionid="14601"
                                                      >
                                                          <span class="question-text">Ternana</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5192"
                                                          data-optionid="14602"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-96" aria-expanded="  false " aria-controls="c-96">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-96" class="accordion-collapse collapse show" aria-labelledby="h-96">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5193"
                                                          data-optionid="14603"
                                                      >
                                                          <span class="question-text">Yes</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5193"
                                                          data-optionid="14604"
                                                      >
                                                          <span class="question-text">No</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-97" aria-expanded="  false " aria-controls="c-97">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-97" class="accordion-collapse collapse show" aria-labelledby="h-97">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5194"
                                                          data-optionid="14605"
                                                      >
                                                          <span class="question-text">1 Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5194"
                                                          data-optionid="14606"
                                                      >
                                                          <span class="question-text">2 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5194"
                                                          data-optionid="14607"
                                                      >
                                                          <span class="question-text">3 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5194"
                                                          data-optionid="14608"
                                                      >
                                                          <span class="question-text">4+ Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5194"
                                                          data-optionid="14609"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-98" aria-expanded="  false " aria-controls="c-98">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-98" class="accordion-collapse collapse show" aria-labelledby="h-98">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5195"
                                                          data-optionid="14610"
                                                      >
                                                          <span class="question-text">Under 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">1.7</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="593"
                                                          data-questionid="5195"
                                                          data-optionid="14611"
                                                      >
                                                          <span class="question-text">Over 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">1.9</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61d6f1a8875161641476520.jfif" alt="" class="sports_icon_img me-1" />
                                          Italy Serie B
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/594" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">L.R. Vicenza</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Parma</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">15/03/2022...11:30 pm</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-215" aria-expanded="  true " aria-controls="c-215">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-215" class="accordion-collapse collapse show" aria-labelledby="h-215">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5197"
                                                          data-optionid="14614"
                                                      >
                                                          <span class="question-text">L.R. Vicenza</span>
                                                          <span class="input-group-text" id="basic-addon2">2.9</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5197"
                                                          data-optionid="14615"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5197"
                                                          data-optionid="14616"
                                                      >
                                                          <span class="question-text">Parma</span>
                                                          <span class="input-group-text" id="basic-addon2">2.9</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-216" aria-expanded="  false " aria-controls="c-216">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-216" class="accordion-collapse collapse show" aria-labelledby="h-216">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5198"
                                                          data-optionid="14617"
                                                      >
                                                          <span class="question-text">L.R. Vicenza</span>
                                                          <span class="input-group-text" id="basic-addon2">2.7</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5198"
                                                          data-optionid="14618"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5198"
                                                          data-optionid="14619"
                                                      >
                                                          <span class="question-text">Parma</span>
                                                          <span class="input-group-text" id="basic-addon2">2.7</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-217" aria-expanded="  false " aria-controls="c-217">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-217" class="accordion-collapse collapse show" aria-labelledby="h-217">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5199"
                                                          data-optionid="14620"
                                                      >
                                                          <span class="question-text">L.R. Vicenza</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5199"
                                                          data-optionid="14621"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5199"
                                                          data-optionid="14622"
                                                      >
                                                          <span class="question-text">Parma</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-218" aria-expanded="  false " aria-controls="c-218">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-218" class="accordion-collapse collapse show" aria-labelledby="h-218">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5200"
                                                          data-optionid="14623"
                                                      >
                                                          <span class="question-text">L.R. Vicenza</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5200"
                                                          data-optionid="14624"
                                                      >
                                                          <span class="question-text">Parma</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5200"
                                                          data-optionid="14625"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-219" aria-expanded="  false " aria-controls="c-219">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-219" class="accordion-collapse collapse show" aria-labelledby="h-219">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5201"
                                                          data-optionid="14626"
                                                      >
                                                          <span class="question-text">Yes</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5201"
                                                          data-optionid="14627"
                                                      >
                                                          <span class="question-text">No</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-220" aria-expanded="  false " aria-controls="c-220">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-220" class="accordion-collapse collapse show" aria-labelledby="h-220">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5202"
                                                          data-optionid="14628"
                                                      >
                                                          <span class="question-text">1 Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5202"
                                                          data-optionid="14629"
                                                      >
                                                          <span class="question-text">2 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5202"
                                                          data-optionid="14630"
                                                      >
                                                          <span class="question-text">3 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5202"
                                                          data-optionid="14631"
                                                      >
                                                          <span class="question-text">4+ Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5202"
                                                          data-optionid="14632"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-221" aria-expanded="  false " aria-controls="c-221">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-221" class="accordion-collapse collapse show" aria-labelledby="h-221">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5203"
                                                          data-optionid="14633"
                                                      >
                                                          <span class="question-text">Under 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">1.7</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="594"
                                                          data-questionid="5203"
                                                          data-optionid="14634"
                                                      >
                                                          <span class="question-text">Over 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">1.9</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61d6f1a8875161641476520.jfif" alt="" class="sports_icon_img me-1" />
                                          Italy Serie B
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/595" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Brescia</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Benevento</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">15/03/2022...11:30 pm</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-212" aria-expanded="  true " aria-controls="c-212">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-212" class="accordion-collapse collapse show" aria-labelledby="h-212">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5204"
                                                          data-optionid="14635"
                                                      >
                                                          <span class="question-text">Brescia</span>
                                                          <span class="input-group-text" id="basic-addon2">2.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5204"
                                                          data-optionid="14636"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5204"
                                                          data-optionid="14637"
                                                      >
                                                          <span class="question-text">Benevento</span>
                                                          <span class="input-group-text" id="basic-addon2">4</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-213" aria-expanded="  false " aria-controls="c-213">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-213" class="accordion-collapse collapse show" aria-labelledby="h-213">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5205"
                                                          data-optionid="14638"
                                                      >
                                                          <span class="question-text">Brescia</span>
                                                          <span class="input-group-text" id="basic-addon2">2.4</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5205"
                                                          data-optionid="14639"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5205"
                                                          data-optionid="14640"
                                                      >
                                                          <span class="question-text">Benevento</span>
                                                          <span class="input-group-text" id="basic-addon2">3.8</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-214" aria-expanded="  false " aria-controls="c-214">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-214" class="accordion-collapse collapse show" aria-labelledby="h-214">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5206"
                                                          data-optionid="14641"
                                                      >
                                                          <span class="question-text">Brescia</span>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5206"
                                                          data-optionid="14642"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5206"
                                                          data-optionid="14643"
                                                      >
                                                          <span class="question-text">Benevento</span>
                                                          <span class="input-group-text" id="basic-addon2">3.2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-215" aria-expanded="  false " aria-controls="c-215">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-215" class="accordion-collapse collapse show" aria-labelledby="h-215">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5207"
                                                          data-optionid="14644"
                                                      >
                                                          <span class="question-text">Brescia</span>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5207"
                                                          data-optionid="14645"
                                                      >
                                                          <span class="question-text">Benevento</span>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5207"
                                                          data-optionid="14646"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-216" aria-expanded="  false " aria-controls="c-216">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-216" class="accordion-collapse collapse show" aria-labelledby="h-216">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5208"
                                                          data-optionid="14647"
                                                      >
                                                          <span class="question-text">Yes</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5208"
                                                          data-optionid="14648"
                                                      >
                                                          <span class="question-text">No</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-217" aria-expanded="  false " aria-controls="c-217">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-217" class="accordion-collapse collapse show" aria-labelledby="h-217">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5209"
                                                          data-optionid="14649"
                                                      >
                                                          <span class="question-text">1 Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5209"
                                                          data-optionid="14650"
                                                      >
                                                          <span class="question-text">2 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5209"
                                                          data-optionid="14651"
                                                      >
                                                          <span class="question-text">3 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5209"
                                                          data-optionid="14652"
                                                      >
                                                          <span class="question-text">4+ Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5209"
                                                          data-optionid="14653"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-218" aria-expanded="  false " aria-controls="c-218">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-218" class="accordion-collapse collapse show" aria-labelledby="h-218">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5210"
                                                          data-optionid="14654"
                                                      >
                                                          <span class="question-text">Under 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">1.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="595"
                                                          data-questionid="5210"
                                                          data-optionid="14655"
                                                      >
                                                          <span class="question-text">Over 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61d6f1a8875161641476520.jfif" alt="" class="sports_icon_img me-1" />
                                          Italy Serie B
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/596" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Crotone</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Frosinone</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">15/03/2022...11:30 pm</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-178" aria-expanded="  true " aria-controls="c-178">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-178" class="accordion-collapse collapse show" aria-labelledby="h-178">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5212"
                                                          data-optionid="14658"
                                                      >
                                                          <span class="question-text">Crotone</span>
                                                          <span class="input-group-text" id="basic-addon2">4.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5212"
                                                          data-optionid="14659"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5212"
                                                          data-optionid="14660"
                                                      >
                                                          <span class="question-text">Frosinone</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-179" aria-expanded="  false " aria-controls="c-179">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-179" class="accordion-collapse collapse show" aria-labelledby="h-179">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5213"
                                                          data-optionid="14661"
                                                      >
                                                          <span class="question-text">Crotone</span>
                                                          <span class="input-group-text" id="basic-addon2">4</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5213"
                                                          data-optionid="14662"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5213"
                                                          data-optionid="14663"
                                                      >
                                                          <span class="question-text">Frosinone</span>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-180" aria-expanded="  false " aria-controls="c-180">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-180" class="accordion-collapse collapse show" aria-labelledby="h-180">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5214"
                                                          data-optionid="14664"
                                                      >
                                                          <span class="question-text">Crotone</span>
                                                          <span class="input-group-text" id="basic-addon2">3.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5214"
                                                          data-optionid="14665"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5214"
                                                          data-optionid="14666"
                                                      >
                                                          <span class="question-text">Frosinone</span>
                                                          <span class="input-group-text" id="basic-addon2">1.7</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-181" aria-expanded="  false " aria-controls="c-181">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-181" class="accordion-collapse collapse show" aria-labelledby="h-181">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5215"
                                                          data-optionid="14667"
                                                      >
                                                          <span class="question-text">Crotone</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5215"
                                                          data-optionid="14668"
                                                      >
                                                          <span class="question-text">Frosinone</span>
                                                          <span class="input-group-text" id="basic-addon2">1.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5215"
                                                          data-optionid="14669"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-182" aria-expanded="  false " aria-controls="c-182">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-182" class="accordion-collapse collapse show" aria-labelledby="h-182">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5216"
                                                          data-optionid="14670"
                                                      >
                                                          <span class="question-text">Yes</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5216"
                                                          data-optionid="14671"
                                                      >
                                                          <span class="question-text">No</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-183" aria-expanded="  false " aria-controls="c-183">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-183" class="accordion-collapse collapse show" aria-labelledby="h-183">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5217"
                                                          data-optionid="14672"
                                                      >
                                                          <span class="question-text">1 Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5217"
                                                          data-optionid="14673"
                                                      >
                                                          <span class="question-text">2 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5217"
                                                          data-optionid="14674"
                                                      >
                                                          <span class="question-text">3 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5217"
                                                          data-optionid="14675"
                                                      >
                                                          <span class="question-text">4+ Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5217"
                                                          data-optionid="14676"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-184" aria-expanded="  false " aria-controls="c-184">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-184" class="accordion-collapse collapse show" aria-labelledby="h-184">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5218"
                                                          data-optionid="14677"
                                                      >
                                                          <span class="question-text">Under 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="596"
                                                          data-questionid="5218"
                                                          data-optionid="14678"
                                                      >
                                                          <span class="question-text">Over 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61d6f1a8875161641476520.jfif" alt="" class="sports_icon_img me-1" />
                                          Italy Serie B
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/597" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Cittadella</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Reggina</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">15/03/2022...11:30 pm</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-128" aria-expanded="  true " aria-controls="c-128">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-128" class="accordion-collapse collapse show" aria-labelledby="h-128">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5219"
                                                          data-optionid="14679"
                                                      >
                                                          <span class="question-text">Cittadella</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5219"
                                                          data-optionid="14680"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5219"
                                                          data-optionid="14681"
                                                      >
                                                          <span class="question-text">Reggina</span>
                                                          <span class="input-group-text" id="basic-addon2">4.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-129" aria-expanded="  false " aria-controls="c-129">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-129" class="accordion-collapse collapse show" aria-labelledby="h-129">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5220"
                                                          data-optionid="14682"
                                                      >
                                                          <span class="question-text">Cittadella</span>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5220"
                                                          data-optionid="14683"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5220"
                                                          data-optionid="14684"
                                                      >
                                                          <span class="question-text">Reggina</span>
                                                          <span class="input-group-text" id="basic-addon2">4.2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-130" aria-expanded="  false " aria-controls="c-130">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-130" class="accordion-collapse collapse show" aria-labelledby="h-130">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5221"
                                                          data-optionid="14685"
                                                      >
                                                          <span class="question-text">Cittadella</span>
                                                          <span class="input-group-text" id="basic-addon2">1.8</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5221"
                                                          data-optionid="14686"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5221"
                                                          data-optionid="14687"
                                                      >
                                                          <span class="question-text">Reggina</span>
                                                          <span class="input-group-text" id="basic-addon2">4</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-131" aria-expanded="  false " aria-controls="c-131">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-131" class="accordion-collapse collapse show" aria-labelledby="h-131">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5222"
                                                          data-optionid="14688"
                                                      >
                                                          <span class="question-text">Cittadella</span>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5222"
                                                          data-optionid="14689"
                                                      >
                                                          <span class="question-text">Reggina</span>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5222"
                                                          data-optionid="14690"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-132" aria-expanded="  false " aria-controls="c-132">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-132" class="accordion-collapse collapse show" aria-labelledby="h-132">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5223"
                                                          data-optionid="14691"
                                                      >
                                                          <span class="question-text">Yes</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5223"
                                                          data-optionid="14692"
                                                      >
                                                          <span class="question-text">No</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-133" aria-expanded="  false " aria-controls="c-133">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-133" class="accordion-collapse collapse show" aria-labelledby="h-133">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5224"
                                                          data-optionid="14693"
                                                      >
                                                          <span class="question-text">1 Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5224"
                                                          data-optionid="14694"
                                                      >
                                                          <span class="question-text">2 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5224"
                                                          data-optionid="14695"
                                                      >
                                                          <span class="question-text">3 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5224"
                                                          data-optionid="14696"
                                                      >
                                                          <span class="question-text">4+ Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5224"
                                                          data-optionid="14697"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-134" aria-expanded="  false " aria-controls="c-134">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-134" class="accordion-collapse collapse show" aria-labelledby="h-134">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5225"
                                                          data-optionid="14698"
                                                      >
                                                          <span class="question-text">Under 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="597"
                                                          data-questionid="5225"
                                                          data-optionid="14699"
                                                      >
                                                          <span class="question-text">Over 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61d6f1a8875161641476520.jfif" alt="" class="sports_icon_img me-1" />
                                          Italy Serie B
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/598" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Cosenza</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Lecce</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">15/03/2022...11:30 pm</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-59" aria-expanded="  true " aria-controls="c-59">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-59" class="accordion-collapse collapse show" aria-labelledby="h-59">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5226"
                                                          data-optionid="14700"
                                                      >
                                                          <span class="question-text">Cosenza</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5226"
                                                          data-optionid="14701"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5226"
                                                          data-optionid="14702"
                                                      >
                                                          <span class="question-text">Lecce</span>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-60" aria-expanded="  false " aria-controls="c-60">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-60" class="accordion-collapse collapse show" aria-labelledby="h-60">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5227"
                                                          data-optionid="14703"
                                                      >
                                                          <span class="question-text">Cosenza</span>
                                                          <span class="input-group-text" id="basic-addon2">4.7</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5227"
                                                          data-optionid="14704"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5227"
                                                          data-optionid="14705"
                                                      >
                                                          <span class="question-text">Lecce</span>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-61" aria-expanded="  false " aria-controls="c-61">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-61" class="accordion-collapse collapse show" aria-labelledby="h-61">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5228"
                                                          data-optionid="14706"
                                                      >
                                                          <span class="question-text">Cosenza</span>
                                                          <span class="input-group-text" id="basic-addon2">4.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5228"
                                                          data-optionid="14707"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5228"
                                                          data-optionid="14708"
                                                      >
                                                          <span class="question-text">Lecce</span>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-62" aria-expanded="  false " aria-controls="c-62">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-62" class="accordion-collapse collapse show" aria-labelledby="h-62">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5229"
                                                          data-optionid="14709"
                                                      >
                                                          <span class="question-text">Cosenza</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5229"
                                                          data-optionid="14710"
                                                      >
                                                          <span class="question-text">Lecce</span>
                                                          <span class="input-group-text" id="basic-addon2">1.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5229"
                                                          data-optionid="14711"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-63" aria-expanded="  false " aria-controls="c-63">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-63" class="accordion-collapse collapse show" aria-labelledby="h-63">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5230"
                                                          data-optionid="14712"
                                                      >
                                                          <span class="question-text">Yes</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5230"
                                                          data-optionid="14713"
                                                      >
                                                          <span class="question-text">No</span>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-64" aria-expanded="  false " aria-controls="c-64">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-64" class="accordion-collapse collapse show" aria-labelledby="h-64">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5231"
                                                          data-optionid="14714"
                                                      >
                                                          <span class="question-text">1 Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5231"
                                                          data-optionid="14715"
                                                      >
                                                          <span class="question-text">2 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5231"
                                                          data-optionid="14716"
                                                      >
                                                          <span class="question-text">3 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5231"
                                                          data-optionid="14717"
                                                      >
                                                          <span class="question-text">4+ Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5231"
                                                          data-optionid="14718"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-65" aria-expanded="  false " aria-controls="c-65">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-65" class="accordion-collapse collapse show" aria-labelledby="h-65">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5232"
                                                          data-optionid="14719"
                                                      >
                                                          <span class="question-text">Under 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">1.7</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="598"
                                                          data-questionid="5232"
                                                          data-optionid="14720"
                                                      >
                                                          <span class="question-text">Over 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">1.9</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/62040c86cc3c41644432518.png" alt="" class="sports_icon_img me-1" />
                                          Poland Ekstraklasa
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/599" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Legia Warszawa</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Bruk-Bet Termalica Nieciecza</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">15/03/2022...11:45 pm</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-305" aria-expanded="  true " aria-controls="c-305">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-305" class="accordion-collapse collapse show" aria-labelledby="h-305">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5233"
                                                          data-optionid="14721"
                                                      >
                                                          <span class="question-text">Legia Warszawa</span>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5233"
                                                          data-optionid="14722"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5233"
                                                          data-optionid="14723"
                                                      >
                                                          <span class="question-text">Bruk-Bet Termalica Nieciecza</span>
                                                          <span class="input-group-text" id="basic-addon2">5.6</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-306" aria-expanded="  false " aria-controls="c-306">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-306" class="accordion-collapse collapse show" aria-labelledby="h-306">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5234"
                                                          data-optionid="14724"
                                                      >
                                                          <span class="question-text">Legia Warszawa</span>
                                                          <span class="input-group-text" id="basic-addon2">1.8</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5234"
                                                          data-optionid="14725"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5234"
                                                          data-optionid="14726"
                                                      >
                                                          <span class="question-text">Bruk-Bet Termalica Nieciecza</span>
                                                          <span class="input-group-text" id="basic-addon2">5.4</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-307" aria-expanded="  false " aria-controls="c-307">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-307" class="accordion-collapse collapse show" aria-labelledby="h-307">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5235"
                                                          data-optionid="14727"
                                                      >
                                                          <span class="question-text">Legia Warszawa</span>
                                                          <span class="input-group-text" id="basic-addon2">1.3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5235"
                                                          data-optionid="14728"
                                                      >
                                                          <span class="question-text">Draw</span>
                                                          <span class="input-group-text" id="basic-addon2">3.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5235"
                                                          data-optionid="14729"
                                                      >
                                                          <span class="question-text">Bruk-Bet Termalica Nieciecza</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-308" aria-expanded="  false " aria-controls="c-308">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-308" class="accordion-collapse collapse show" aria-labelledby="h-308">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5236"
                                                          data-optionid="14730"
                                                      >
                                                          <span class="question-text">Legia Warszawa</span>
                                                          <span class="input-group-text" id="basic-addon2">1.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5236"
                                                          data-optionid="14731"
                                                      >
                                                          <span class="question-text">Bruk-Bet Termalica Nieciecza</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5236"
                                                          data-optionid="14732"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-309" aria-expanded="  false " aria-controls="c-309">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-309" class="accordion-collapse collapse show" aria-labelledby="h-309">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5237"
                                                          data-optionid="14733"
                                                      >
                                                          <span class="question-text">Yes</span>
                                                          <span class="input-group-text" id="basic-addon2">1.9</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5237"
                                                          data-optionid="14734"
                                                      >
                                                          <span class="question-text">No</span>
                                                          <span class="input-group-text" id="basic-addon2">1.6</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-310" aria-expanded="  false " aria-controls="c-310">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-310" class="accordion-collapse collapse show" aria-labelledby="h-310">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5238"
                                                          data-optionid="14735"
                                                      >
                                                          <span class="question-text">1 Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5238"
                                                          data-optionid="14736"
                                                      >
                                                          <span class="question-text">2 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5238"
                                                          data-optionid="14737"
                                                      >
                                                          <span class="question-text">3 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5238"
                                                          data-optionid="14738"
                                                      >
                                                          <span class="question-text">4+ Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5238"
                                                          data-optionid="14739"
                                                      >
                                                          <span class="question-text">No Goal</span>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-311" aria-expanded="  false " aria-controls="c-311">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-311" class="accordion-collapse collapse show" aria-labelledby="h-311">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5239"
                                                          data-optionid="14740"
                                                      >
                                                          <span class="question-text">Under 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">1.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-1 text-dark optionBetHistory"
                                                          data-gameid="599"
                                                          data-questionid="5239"
                                                          data-optionid="14741"
                                                      >
                                                          <span class="question-text">Over 2.5 Goals</span>
                                                          <span class="input-group-text" id="basic-addon2">1.9</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab">
                              <!-- upcoming content -->
                              <div id="upcommingsports">
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61d6f1e112c6b1641476577.png" alt="" class="sports_icon_img me-1" />
                                          France Ligue 2
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/600" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Rodez AF</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Guingamp</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">16/03/2022...12:00 am</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-323" aria-expanded="  true " aria-controls="c-323">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-323" class="accordion-collapse collapse show" aria-labelledby="h-323">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5240"
                                                          data-optionid="14742"
                                                      >
                                                          <p class="m-0">Rodez AF</p>
                                                          <span class="input-group-text" id="basic-addon2">2.9</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5240"
                                                          data-optionid="14743"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5240"
                                                          data-optionid="14744"
                                                      >
                                                          <p class="m-0">Guingamp</p>
                                                          <span class="input-group-text" id="basic-addon2">2.9</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-324" aria-expanded="  false " aria-controls="c-324">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-324" class="accordion-collapse collapse show" aria-labelledby="h-324">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5241"
                                                          data-optionid="14745"
                                                      >
                                                          <p class="m-0">Rodez AF</p>
                                                          <span class="input-group-text" id="basic-addon2">2.7</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5241"
                                                          data-optionid="14746"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5241"
                                                          data-optionid="14747"
                                                      >
                                                          <p class="m-0">Guingamp</p>
                                                          <span class="input-group-text" id="basic-addon2">2.7</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-325" aria-expanded="  false " aria-controls="c-325">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-325" class="accordion-collapse collapse show" aria-labelledby="h-325">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5242"
                                                          data-optionid="14748"
                                                      >
                                                          <p class="m-0">Rodez AF</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5242"
                                                          data-optionid="14749"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5242"
                                                          data-optionid="14750"
                                                      >
                                                          <p class="m-0">Guingamp</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-326" aria-expanded="  false " aria-controls="c-326">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-326" class="accordion-collapse collapse show" aria-labelledby="h-326">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5243"
                                                          data-optionid="14751"
                                                      >
                                                          <p class="m-0">Rodez AF</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5243"
                                                          data-optionid="14752"
                                                      >
                                                          <p class="m-0">Guingamp</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5243"
                                                          data-optionid="14753"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-327" aria-expanded="  false " aria-controls="c-327">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-327" class="accordion-collapse collapse show" aria-labelledby="h-327">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5244"
                                                          data-optionid="14754"
                                                      >
                                                          <p class="m-0">Yes</p>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5244"
                                                          data-optionid="14755"
                                                      >
                                                          <p class="m-0">No</p>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-328" aria-expanded="  false " aria-controls="c-328">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-328" class="accordion-collapse collapse show" aria-labelledby="h-328">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5245"
                                                          data-optionid="14756"
                                                      >
                                                          <p class="m-0">1 Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5245"
                                                          data-optionid="14757"
                                                      >
                                                          <p class="m-0">2 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5245"
                                                          data-optionid="14758"
                                                      >
                                                          <p class="m-0">3 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5245"
                                                          data-optionid="14759"
                                                      >
                                                          <p class="m-0">4+ Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5245"
                                                          data-optionid="14760"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-329" aria-expanded="  false " aria-controls="c-329">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-329" class="accordion-collapse collapse show" aria-labelledby="h-329">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5246"
                                                          data-optionid="14761"
                                                      >
                                                          <p class="m-0">Under 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">1.4</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="600"
                                                          data-questionid="5246"
                                                          data-optionid="14762"
                                                      >
                                                          <p class="m-0">Over 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61d6f1e112c6b1641476577.png" alt="" class="sports_icon_img me-1" />
                                          France Ligue 2
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/601" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Nîmes Olympique</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">AJ Auxerre</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">16/03/2022...12:00 am</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-174" aria-expanded="  true " aria-controls="c-174">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-174" class="accordion-collapse collapse show" aria-labelledby="h-174">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5247"
                                                          data-optionid="14763"
                                                      >
                                                          <p class="m-0">Nîmes Olympique</p>
                                                          <span class="input-group-text" id="basic-addon2">2.9</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5247"
                                                          data-optionid="14764"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5247"
                                                          data-optionid="14765"
                                                      >
                                                          <p class="m-0">AJ Auxerre</p>
                                                          <span class="input-group-text" id="basic-addon2">2.8</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-175" aria-expanded="  false " aria-controls="c-175">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-175" class="accordion-collapse collapse show" aria-labelledby="h-175">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5248"
                                                          data-optionid="14766"
                                                      >
                                                          <p class="m-0">Nîmes Olympique</p>
                                                          <span class="input-group-text" id="basic-addon2">2.7</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5248"
                                                          data-optionid="14767"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5248"
                                                          data-optionid="14768"
                                                      >
                                                          <p class="m-0">AJ Auxerre</p>
                                                          <span class="input-group-text" id="basic-addon2">2.6</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-176" aria-expanded="  false " aria-controls="c-176">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-176" class="accordion-collapse collapse show" aria-labelledby="h-176">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5249"
                                                          data-optionid="14769"
                                                      >
                                                          <p class="m-0">Nîmes Olympique</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5249"
                                                          data-optionid="14770"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5249"
                                                          data-optionid="14771"
                                                      >
                                                          <p class="m-0">AJ Auxerre</p>
                                                          <span class="input-group-text" id="basic-addon2">2.4</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-177" aria-expanded="  false " aria-controls="c-177">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-177" class="accordion-collapse collapse show" aria-labelledby="h-177">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5250"
                                                          data-optionid="14772"
                                                      >
                                                          <p class="m-0">Nîmes Olympique</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5250"
                                                          data-optionid="14773"
                                                      >
                                                          <p class="m-0">AJ Auxerre</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5250"
                                                          data-optionid="14774"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-178" aria-expanded="  false " aria-controls="c-178">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-178" class="accordion-collapse collapse show" aria-labelledby="h-178">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5251"
                                                          data-optionid="14775"
                                                      >
                                                          <p class="m-0">Yes</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5251"
                                                          data-optionid="14776"
                                                      >
                                                          <p class="m-0">No</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-179" aria-expanded="  false " aria-controls="c-179">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-179" class="accordion-collapse collapse show" aria-labelledby="h-179">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5252"
                                                          data-optionid="14777"
                                                      >
                                                          <p class="m-0">1 Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5252"
                                                          data-optionid="14778"
                                                      >
                                                          <p class="m-0">2 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5252"
                                                          data-optionid="14779"
                                                      >
                                                          <p class="m-0">3 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5252"
                                                          data-optionid="14780"
                                                      >
                                                          <p class="m-0">4+ Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5252"
                                                          data-optionid="14781"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-180" aria-expanded="  false " aria-controls="c-180">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-180" class="accordion-collapse collapse show" aria-labelledby="h-180">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5253"
                                                          data-optionid="14782"
                                                      >
                                                          <p class="m-0">Under 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">1.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="601"
                                                          data-questionid="5253"
                                                          data-optionid="14783"
                                                      >
                                                          <p class="m-0">Over 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61d6f1e112c6b1641476577.png" alt="" class="sports_icon_img me-1" />
                                          France Ligue 2
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/602" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Dijon</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Le Havre</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">16/03/2022...12:00 am</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-345" aria-expanded="  true " aria-controls="c-345">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-345" class="accordion-collapse collapse show" aria-labelledby="h-345">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5254"
                                                          data-optionid="14784"
                                                      >
                                                          <p class="m-0">Dijon</p>
                                                          <span class="input-group-text" id="basic-addon2">2.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5254"
                                                          data-optionid="14785"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5254"
                                                          data-optionid="14786"
                                                      >
                                                          <p class="m-0">Le Havre</p>
                                                          <span class="input-group-text" id="basic-addon2">3.7</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-346" aria-expanded="  false " aria-controls="c-346">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-346" class="accordion-collapse collapse show" aria-labelledby="h-346">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5255"
                                                          data-optionid="14787"
                                                      >
                                                          <p class="m-0">Dijon</p>
                                                          <span class="input-group-text" id="basic-addon2">2.4</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5255"
                                                          data-optionid="14788"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5255"
                                                          data-optionid="14789"
                                                      >
                                                          <p class="m-0">Le Havre</p>
                                                          <span class="input-group-text" id="basic-addon2">3.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-347" aria-expanded="  false " aria-controls="c-347">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-347" class="accordion-collapse collapse show" aria-labelledby="h-347">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5256"
                                                          data-optionid="14790"
                                                      >
                                                          <p class="m-0">Dijon</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5256"
                                                          data-optionid="14791"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5256"
                                                          data-optionid="14792"
                                                      >
                                                          <p class="m-0">Le Havre</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-348" aria-expanded="  false " aria-controls="c-348">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-348" class="accordion-collapse collapse show" aria-labelledby="h-348">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5257"
                                                          data-optionid="14793"
                                                      >
                                                          <p class="m-0">Dijon</p>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5257"
                                                          data-optionid="14794"
                                                      >
                                                          <p class="m-0">Le Havre</p>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5257"
                                                          data-optionid="14795"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-349" aria-expanded="  false " aria-controls="c-349">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-349" class="accordion-collapse collapse show" aria-labelledby="h-349">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5258"
                                                          data-optionid="14796"
                                                      >
                                                          <p class="m-0">Yes</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5258"
                                                          data-optionid="14797"
                                                      >
                                                          <p class="m-0">No</p>
                                                          <span class="input-group-text" id="basic-addon2">1.6</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-350" aria-expanded="  false " aria-controls="c-350">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-350" class="accordion-collapse collapse show" aria-labelledby="h-350">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5259"
                                                          data-optionid="14798"
                                                      >
                                                          <p class="m-0">1 Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5259"
                                                          data-optionid="14799"
                                                      >
                                                          <p class="m-0">2 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5259"
                                                          data-optionid="14800"
                                                      >
                                                          <p class="m-0">3 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5259"
                                                          data-optionid="14801"
                                                      >
                                                          <p class="m-0">4+ Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5259"
                                                          data-optionid="14802"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-351" aria-expanded="  false " aria-controls="c-351">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-351" class="accordion-collapse collapse show" aria-labelledby="h-351">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5260"
                                                          data-optionid="14803"
                                                      >
                                                          <p class="m-0">Under 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">1.4</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="602"
                                                          data-questionid="5260"
                                                          data-optionid="14804"
                                                      >
                                                          <p class="m-0">Over 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61d6f1e112c6b1641476577.png" alt="" class="sports_icon_img me-1" />
                                          France Ligue 2
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/603" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Valenciennes</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Caen</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">16/03/2022...12:00 am</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-106" aria-expanded="  true " aria-controls="c-106">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-106" class="accordion-collapse collapse show" aria-labelledby="h-106">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5261"
                                                          data-optionid="14805"
                                                      >
                                                          <p class="m-0">Valenciennes</p>
                                                          <span class="input-group-text" id="basic-addon2">2.8</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5261"
                                                          data-optionid="14806"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5261"
                                                          data-optionid="14807"
                                                      >
                                                          <p class="m-0">Caen</p>
                                                          <span class="input-group-text" id="basic-addon2">2.8</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-107" aria-expanded="  false " aria-controls="c-107">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-107" class="accordion-collapse collapse show" aria-labelledby="h-107">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5262"
                                                          data-optionid="14808"
                                                      >
                                                          <p class="m-0">Valenciennes</p>
                                                          <span class="input-group-text" id="basic-addon2">2.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5262"
                                                          data-optionid="14809"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5262"
                                                          data-optionid="14810"
                                                      >
                                                          <p class="m-0">Caen</p>
                                                          <span class="input-group-text" id="basic-addon2">2.6</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-108" aria-expanded="  false " aria-controls="c-108">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-108" class="accordion-collapse collapse show" aria-labelledby="h-108">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5263"
                                                          data-optionid="14811"
                                                      >
                                                          <p class="m-0">Valenciennes</p>
                                                          <span class="input-group-text" id="basic-addon2">2.4</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5263"
                                                          data-optionid="14812"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5263"
                                                          data-optionid="14813"
                                                      >
                                                          <p class="m-0">Caen</p>
                                                          <span class="input-group-text" id="basic-addon2">2.4</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-109" aria-expanded="  false " aria-controls="c-109">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-109" class="accordion-collapse collapse show" aria-labelledby="h-109">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5264"
                                                          data-optionid="14814"
                                                      >
                                                          <p class="m-0">Valenciennes</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5264"
                                                          data-optionid="14815"
                                                      >
                                                          <p class="m-0">Caen</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5264"
                                                          data-optionid="14816"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-110" aria-expanded="  false " aria-controls="c-110">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-110" class="accordion-collapse collapse show" aria-labelledby="h-110">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5265"
                                                          data-optionid="14817"
                                                      >
                                                          <p class="m-0">Yes</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5265"
                                                          data-optionid="14818"
                                                      >
                                                          <p class="m-0">No</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-111" aria-expanded="  false " aria-controls="c-111">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-111" class="accordion-collapse collapse show" aria-labelledby="h-111">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5266"
                                                          data-optionid="14819"
                                                      >
                                                          <p class="m-0">1 Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5266"
                                                          data-optionid="14820"
                                                      >
                                                          <p class="m-0">2 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5266"
                                                          data-optionid="14821"
                                                      >
                                                          <p class="m-0">3 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5266"
                                                          data-optionid="14822"
                                                      >
                                                          <p class="m-0">4+ Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5266"
                                                          data-optionid="14823"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-112" aria-expanded="  false " aria-controls="c-112">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-112" class="accordion-collapse collapse show" aria-labelledby="h-112">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5267"
                                                          data-optionid="14824"
                                                      >
                                                          <p class="m-0">Under 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="603"
                                                          data-questionid="5267"
                                                          data-optionid="14825"
                                                      >
                                                          <p class="m-0">Over 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61d6f1a8875161641476520.jfif" alt="" class="sports_icon_img me-1" />
                                          Italy Serie B
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/604" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Nancy</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Paris FC</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">16/03/2022...12:00 am</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-250" aria-expanded="  true " aria-controls="c-250">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-250" class="accordion-collapse collapse show" aria-labelledby="h-250">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5268"
                                                          data-optionid="14826"
                                                      >
                                                          <p class="m-0">Nancy</p>
                                                          <span class="input-group-text" id="basic-addon2">3.7</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5268"
                                                          data-optionid="14827"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5268"
                                                          data-optionid="14828"
                                                      >
                                                          <p class="m-0">Paris FC</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-251" aria-expanded="  false " aria-controls="c-251">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-251" class="accordion-collapse collapse show" aria-labelledby="h-251">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5269"
                                                          data-optionid="14829"
                                                      >
                                                          <p class="m-0">Nancy</p>
                                                          <span class="input-group-text" id="basic-addon2">3.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5269"
                                                          data-optionid="14830"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">23</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5269"
                                                          data-optionid="14831"
                                                      >
                                                          <p class="m-0">Paris FC</p>
                                                          <span class="input-group-text" id="basic-addon2">2.3</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-252" aria-expanded="  false " aria-controls="c-252">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-252" class="accordion-collapse collapse show" aria-labelledby="h-252">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5270"
                                                          data-optionid="14832"
                                                      >
                                                          <p class="m-0">Nancy</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5270"
                                                          data-optionid="14833"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5270"
                                                          data-optionid="14834"
                                                      >
                                                          <p class="m-0">Paris FC</p>
                                                          <span class="input-group-text" id="basic-addon2">1.8</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-253" aria-expanded="  false " aria-controls="c-253">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-253" class="accordion-collapse collapse show" aria-labelledby="h-253">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5271"
                                                          data-optionid="14835"
                                                      >
                                                          <p class="m-0">Nancy</p>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5271"
                                                          data-optionid="14836"
                                                      >
                                                          <p class="m-0">Paris FC</p>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5271"
                                                          data-optionid="14837"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-254" aria-expanded="  false " aria-controls="c-254">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-254" class="accordion-collapse collapse show" aria-labelledby="h-254">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5272"
                                                          data-optionid="14838"
                                                      >
                                                          <p class="m-0">Yes</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5272"
                                                          data-optionid="14839"
                                                      >
                                                          <p class="m-0">No</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-255" aria-expanded="  false " aria-controls="c-255">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-255" class="accordion-collapse collapse show" aria-labelledby="h-255">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5273"
                                                          data-optionid="14840"
                                                      >
                                                          <p class="m-0">1 Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5273"
                                                          data-optionid="14841"
                                                      >
                                                          <p class="m-0">2 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5273"
                                                          data-optionid="14842"
                                                      >
                                                          <p class="m-0">3 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5273"
                                                          data-optionid="14843"
                                                      >
                                                          <p class="m-0">4+ Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5273"
                                                          data-optionid="14844"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-256" aria-expanded="  false " aria-controls="c-256">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-256" class="accordion-collapse collapse show" aria-labelledby="h-256">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5274"
                                                          data-optionid="14845"
                                                      >
                                                          <p class="m-0">Under 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="604"
                                                          data-questionid="5274"
                                                          data-optionid="14846"
                                                      >
                                                          <p class="m-0">Over 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61d6f1a8875161641476520.jfif" alt="" class="sports_icon_img me-1" />
                                          Italy Serie B
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/605" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Alessandria</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Monza</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">16/03/2022...01:30 am</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-158" aria-expanded="  true " aria-controls="c-158">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-158" class="accordion-collapse collapse show" aria-labelledby="h-158">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5275"
                                                          data-optionid="14847"
                                                      >
                                                          <p class="m-0">Alessandria</p>
                                                          <span class="input-group-text" id="basic-addon2">4</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5275"
                                                          data-optionid="14848"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">1.8</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5275"
                                                          data-optionid="14849"
                                                      >
                                                          <p class="m-0">Monza</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-159" aria-expanded="  false " aria-controls="c-159">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-159" class="accordion-collapse collapse show" aria-labelledby="h-159">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5276"
                                                          data-optionid="14850"
                                                      >
                                                          <p class="m-0">Alessandria</p>
                                                          <span class="input-group-text" id="basic-addon2">3.8</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5276"
                                                          data-optionid="14851"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5276"
                                                          data-optionid="14852"
                                                      >
                                                          <p class="m-0">Monza</p>
                                                          <span class="input-group-text" id="basic-addon2">2.3</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-160" aria-expanded="  false " aria-controls="c-160">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-160" class="accordion-collapse collapse show" aria-labelledby="h-160">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5277"
                                                          data-optionid="14853"
                                                      >
                                                          <p class="m-0">Alessandria</p>
                                                          <span class="input-group-text" id="basic-addon2">3.4</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5277"
                                                          data-optionid="14854"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5277"
                                                          data-optionid="14855"
                                                      >
                                                          <p class="m-0">Monza</p>
                                                          <span class="input-group-text" id="basic-addon2">1.8</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-161" aria-expanded="  false " aria-controls="c-161">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-161" class="accordion-collapse collapse show" aria-labelledby="h-161">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5278"
                                                          data-optionid="14856"
                                                      >
                                                          <p class="m-0">Alessandria</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5278"
                                                          data-optionid="14857"
                                                      >
                                                          <p class="m-0">Monza</p>
                                                          <span class="input-group-text" id="basic-addon2">1.4</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5278"
                                                          data-optionid="14858"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-162" aria-expanded="  false " aria-controls="c-162">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-162" class="accordion-collapse collapse show" aria-labelledby="h-162">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5279"
                                                          data-optionid="14859"
                                                      >
                                                          <p class="m-0">Yes</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5279"
                                                          data-optionid="14860"
                                                      >
                                                          <p class="m-0">No</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-163" aria-expanded="  false " aria-controls="c-163">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-163" class="accordion-collapse collapse show" aria-labelledby="h-163">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5280"
                                                          data-optionid="14861"
                                                      >
                                                          <p class="m-0">1 Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5280"
                                                          data-optionid="14862"
                                                      >
                                                          <p class="m-0">2 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5280"
                                                          data-optionid="14863"
                                                      >
                                                          <p class="m-0">3 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5280"
                                                          data-optionid="14864"
                                                      >
                                                          <p class="m-0">4+ Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5280"
                                                          data-optionid="14865"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-164" aria-expanded="  false " aria-controls="c-164">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-164" class="accordion-collapse collapse show" aria-labelledby="h-164">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5281"
                                                          data-optionid="14866"
                                                      >
                                                          <p class="m-0">Under 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">1.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="605"
                                                          data-questionid="5281"
                                                          data-optionid="14867"
                                                      >
                                                          <p class="m-0">Over 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61f1323070a471643196976.png" alt="" class="sports_icon_img me-1" />
                                          England Championship
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/606" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Barnsley</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Bristol City</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">16/03/2022...01:45 am</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-313" aria-expanded="  true " aria-controls="c-313">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-313" class="accordion-collapse collapse show" aria-labelledby="h-313">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5282"
                                                          data-optionid="14868"
                                                      >
                                                          <p class="m-0">Barnsley</p>
                                                          <span class="input-group-text" id="basic-addon2">2.8</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5282"
                                                          data-optionid="14869"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5282"
                                                          data-optionid="14870"
                                                      >
                                                          <p class="m-0">Bristol City</p>
                                                          <span class="input-group-text" id="basic-addon2">3.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-314" aria-expanded="  false " aria-controls="c-314">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-314" class="accordion-collapse collapse show" aria-labelledby="h-314">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5283"
                                                          data-optionid="14871"
                                                      >
                                                          <p class="m-0">Barnsley</p>
                                                          <span class="input-group-text" id="basic-addon2">2.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5283"
                                                          data-optionid="14872"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5283"
                                                          data-optionid="14873"
                                                      >
                                                          <p class="m-0">Bristol City</p>
                                                          <span class="input-group-text" id="basic-addon2">3.2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-315" aria-expanded="  false " aria-controls="c-315">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-315" class="accordion-collapse collapse show" aria-labelledby="h-315">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5284"
                                                          data-optionid="14874"
                                                      >
                                                          <p class="m-0">Barnsley</p>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5284"
                                                          data-optionid="14875"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5284"
                                                          data-optionid="14876"
                                                      >
                                                          <p class="m-0">Bristol City</p>
                                                          <span class="input-group-text" id="basic-addon2">2.7</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-316" aria-expanded="  false " aria-controls="c-316">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-316" class="accordion-collapse collapse show" aria-labelledby="h-316">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5285"
                                                          data-optionid="14877"
                                                      >
                                                          <p class="m-0">Barnsley</p>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5285"
                                                          data-optionid="14878"
                                                      >
                                                          <p class="m-0">Bristol City</p>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5285"
                                                          data-optionid="14879"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-317" aria-expanded="  false " aria-controls="c-317">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-317" class="accordion-collapse collapse show" aria-labelledby="h-317">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5286"
                                                          data-optionid="14880"
                                                      >
                                                          <p class="m-0">Yes</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5286"
                                                          data-optionid="14881"
                                                      >
                                                          <p class="m-0">No</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-318" aria-expanded="  false " aria-controls="c-318">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-318" class="accordion-collapse collapse show" aria-labelledby="h-318">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5287"
                                                          data-optionid="14882"
                                                      >
                                                          <p class="m-0">1 Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5287"
                                                          data-optionid="14883"
                                                      >
                                                          <p class="m-0">2 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5287"
                                                          data-optionid="14884"
                                                      >
                                                          <p class="m-0">3 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5287"
                                                          data-optionid="14885"
                                                      >
                                                          <p class="m-0">4+ Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5287"
                                                          data-optionid="14886"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-319" aria-expanded="  false " aria-controls="c-319">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-319" class="accordion-collapse collapse show" aria-labelledby="h-319">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5288"
                                                          data-optionid="14887"
                                                      >
                                                          <p class="m-0">Under 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">1.7</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="606"
                                                          data-questionid="5288"
                                                          data-optionid="14888"
                                                      >
                                                          <p class="m-0">Over 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">1.9</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61f1323070a471643196976.png" alt="" class="sports_icon_img me-1" />
                                          England Championship
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/607" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Blackburn Rovers</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Derby County</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">16/03/2022...01:45 am</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-149" aria-expanded="  true " aria-controls="c-149">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-149" class="accordion-collapse collapse show" aria-labelledby="h-149">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5289"
                                                          data-optionid="14889"
                                                      >
                                                          <p class="m-0">Blackburn Rovers</p>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5289"
                                                          data-optionid="14890"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5289"
                                                          data-optionid="14891"
                                                      >
                                                          <p class="m-0">Derby County</p>
                                                          <span class="input-group-text" id="basic-addon2">6</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-150" aria-expanded="  false " aria-controls="c-150">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-150" class="accordion-collapse collapse show" aria-labelledby="h-150">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5290"
                                                          data-optionid="14892"
                                                      >
                                                          <p class="m-0">Blackburn Rovers</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5290"
                                                          data-optionid="14893"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5290"
                                                          data-optionid="14894"
                                                      >
                                                          <p class="m-0">Derby County</p>
                                                          <span class="input-group-text" id="basic-addon2">5.2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-151" aria-expanded="  false " aria-controls="c-151">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-151" class="accordion-collapse collapse show" aria-labelledby="h-151">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5291"
                                                          data-optionid="14895"
                                                      >
                                                          <p class="m-0">Blackburn Rovers</p>
                                                          <span class="input-group-text" id="basic-addon2">1.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5291"
                                                          data-optionid="14896"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5291"
                                                          data-optionid="14897"
                                                      >
                                                          <p class="m-0">Derby County</p>
                                                          <span class="input-group-text" id="basic-addon2">4.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-152" aria-expanded="  false " aria-controls="c-152">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-152" class="accordion-collapse collapse show" aria-labelledby="h-152">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5292"
                                                          data-optionid="14898"
                                                      >
                                                          <p class="m-0">Blackburn Rovers</p>
                                                          <span class="input-group-text" id="basic-addon2">1.4</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5292"
                                                          data-optionid="14899"
                                                      >
                                                          <p class="m-0">Derby County</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5292"
                                                          data-optionid="14900"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-153" aria-expanded="  false " aria-controls="c-153">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-153" class="accordion-collapse collapse show" aria-labelledby="h-153">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5293"
                                                          data-optionid="14901"
                                                      >
                                                          <p class="m-0">Yes</p>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5293"
                                                          data-optionid="14902"
                                                      >
                                                          <p class="m-0">No</p>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-154" aria-expanded="  false " aria-controls="c-154">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-154" class="accordion-collapse collapse show" aria-labelledby="h-154">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5294"
                                                          data-optionid="14903"
                                                      >
                                                          <p class="m-0">1 Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5294"
                                                          data-optionid="14904"
                                                      >
                                                          <p class="m-0">2 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5294"
                                                          data-optionid="14905"
                                                      >
                                                          <p class="m-0">3 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5294"
                                                          data-optionid="14906"
                                                      >
                                                          <p class="m-0">4+ Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5294"
                                                          data-optionid="14907"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-155" aria-expanded="  false " aria-controls="c-155">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-155" class="accordion-collapse collapse show" aria-labelledby="h-155">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5295"
                                                          data-optionid="14908"
                                                      >
                                                          <p class="m-0">Under 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">1.4</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="607"
                                                          data-questionid="5295"
                                                          data-optionid="14909"
                                                      >
                                                          <p class="m-0">Over 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61f1323070a471643196976.png" alt="" class="sports_icon_img me-1" />
                                          England Championship
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/608" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Bournemouth</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Reading</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">16/03/2022...01:45 pm</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-209" aria-expanded="  true " aria-controls="c-209">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-209" class="accordion-collapse collapse show" aria-labelledby="h-209">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5296"
                                                          data-optionid="14910"
                                                      >
                                                          <p class="m-0">Bournemouth</p>
                                                          <span class="input-group-text" id="basic-addon2">1.7</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5296"
                                                          data-optionid="14911"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5296"
                                                          data-optionid="14912"
                                                      >
                                                          <p class="m-0">Reading</p>
                                                          <span class="input-group-text" id="basic-addon2">8</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-210" aria-expanded="  false " aria-controls="c-210">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-210" class="accordion-collapse collapse show" aria-labelledby="h-210">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5297"
                                                          data-optionid="14913"
                                                      >
                                                          <p class="m-0">Bournemouth</p>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5297"
                                                          data-optionid="14914"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5297"
                                                          data-optionid="14915"
                                                      >
                                                          <p class="m-0">Reading</p>
                                                          <span class="input-group-text" id="basic-addon2">7.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-211" aria-expanded="  false " aria-controls="c-211">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-211" class="accordion-collapse collapse show" aria-labelledby="h-211">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5298"
                                                          data-optionid="14916"
                                                      >
                                                          <p class="m-0">Bournemouth</p>
                                                          <span class="input-group-text" id="basic-addon2">1.1</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5298"
                                                          data-optionid="14917"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5298"
                                                          data-optionid="14918"
                                                      >
                                                          <p class="m-0">Reading</p>
                                                          <span class="input-group-text" id="basic-addon2">6</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-212" aria-expanded="  false " aria-controls="c-212">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-212" class="accordion-collapse collapse show" aria-labelledby="h-212">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5299"
                                                          data-optionid="14919"
                                                      >
                                                          <p class="m-0">Bournemouth</p>
                                                          <span class="input-group-text" id="basic-addon2">1.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5299"
                                                          data-optionid="14920"
                                                      >
                                                          <p class="m-0">Reading</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5299"
                                                          data-optionid="14921"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-213" aria-expanded="  false " aria-controls="c-213">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-213" class="accordion-collapse collapse show" aria-labelledby="h-213">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5300"
                                                          data-optionid="14922"
                                                      >
                                                          <p class="m-0">Yes</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5300"
                                                          data-optionid="14923"
                                                      >
                                                          <p class="m-0">No</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-214" aria-expanded="  false " aria-controls="c-214">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-214" class="accordion-collapse collapse show" aria-labelledby="h-214">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5301"
                                                          data-optionid="14924"
                                                      >
                                                          <p class="m-0">1 Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5301"
                                                          data-optionid="14925"
                                                      >
                                                          <p class="m-0">2 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5301"
                                                          data-optionid="14926"
                                                      >
                                                          <p class="m-0">3 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5301"
                                                          data-optionid="14927"
                                                      >
                                                          <p class="m-0">4+ Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5301"
                                                          data-optionid="14928"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-215" aria-expanded="  false " aria-controls="c-215">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-215" class="accordion-collapse collapse show" aria-labelledby="h-215">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5302"
                                                          data-optionid="14929"
                                                      >
                                                          <p class="m-0">Under 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="608"
                                                          data-questionid="5302"
                                                          data-optionid="14930"
                                                      >
                                                          <p class="m-0">Over 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61f1323070a471643196976.png" alt="" class="sports_icon_img me-1" />
                                          England Championship
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/609" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Birmingham City</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Middlesbrough</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">16/03/2022...01:45 am</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-159" aria-expanded="  true " aria-controls="c-159">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-159" class="accordion-collapse collapse show" aria-labelledby="h-159">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5303"
                                                          data-optionid="14931"
                                                      >
                                                          <p class="m-0">Birmingham City</p>
                                                          <span class="input-group-text" id="basic-addon2">3.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5303"
                                                          data-optionid="14932"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5303"
                                                          data-optionid="14933"
                                                      >
                                                          <p class="m-0">Middlesbrough</p>
                                                          <span class="input-group-text" id="basic-addon2">2.6</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-160" aria-expanded="  false " aria-controls="c-160">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-160" class="accordion-collapse collapse show" aria-labelledby="h-160">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5304"
                                                          data-optionid="14934"
                                                      >
                                                          <p class="m-0">Birmingham City</p>
                                                          <span class="input-group-text" id="basic-addon2">3.4</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5304"
                                                          data-optionid="14935"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5304"
                                                          data-optionid="14936"
                                                      >
                                                          <p class="m-0">Middlesbrough</p>
                                                          <span class="input-group-text" id="basic-addon2">2.4</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-161" aria-expanded="  false " aria-controls="c-161">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-161" class="accordion-collapse collapse show" aria-labelledby="h-161">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5305"
                                                          data-optionid="14937"
                                                      >
                                                          <p class="m-0">Birmingham City</p>
                                                          <span class="input-group-text" id="basic-addon2">3.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5305"
                                                          data-optionid="14938"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5305"
                                                          data-optionid="14939"
                                                      >
                                                          <p class="m-0">Middlesbrough</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-162" aria-expanded="  false " aria-controls="c-162">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-162" class="accordion-collapse collapse show" aria-labelledby="h-162">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5306"
                                                          data-optionid="14940"
                                                      >
                                                          <p class="m-0">Birmingham City</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5306"
                                                          data-optionid="14941"
                                                      >
                                                          <p class="m-0">Middlesbrough</p>
                                                          <span class="input-group-text" id="basic-addon2">1.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5306"
                                                          data-optionid="14942"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-163" aria-expanded="  false " aria-controls="c-163">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-163" class="accordion-collapse collapse show" aria-labelledby="h-163">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5307"
                                                          data-optionid="14943"
                                                      >
                                                          <p class="m-0">Yes</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5307"
                                                          data-optionid="14944"
                                                      >
                                                          <p class="m-0">No</p>
                                                          <span class="input-group-text" id="basic-addon2">1.82</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-164" aria-expanded="  false " aria-controls="c-164">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-164" class="accordion-collapse collapse show" aria-labelledby="h-164">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5308"
                                                          data-optionid="14945"
                                                      >
                                                          <p class="m-0">1 Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5308"
                                                          data-optionid="14946"
                                                      >
                                                          <p class="m-0">2 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5308"
                                                          data-optionid="14947"
                                                      >
                                                          <p class="m-0">3 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5308"
                                                          data-optionid="14948"
                                                      >
                                                          <p class="m-0">4+ Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5308"
                                                          data-optionid="14949"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-165" aria-expanded="  false " aria-controls="c-165">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-165" class="accordion-collapse collapse show" aria-labelledby="h-165">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5309"
                                                          data-optionid="14950"
                                                      >
                                                          <p class="m-0">Under 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">1.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="609"
                                                          data-questionid="5309"
                                                          data-optionid="14951"
                                                      >
                                                          <p class="m-0">Over 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61f1323070a471643196976.png" alt="" class="sports_icon_img me-1" />
                                          England Championship
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/610" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">West Bromwich Albion</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Fulham</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">16/03/2022...02:00 am</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-198" aria-expanded="  true " aria-controls="c-198">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-198" class="accordion-collapse collapse show" aria-labelledby="h-198">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5310"
                                                          data-optionid="14952"
                                                      >
                                                          <p class="m-0">West Bromwich Albion</p>
                                                          <span class="input-group-text" id="basic-addon2">4</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5310"
                                                          data-optionid="14953"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5310"
                                                          data-optionid="14954"
                                                      >
                                                          <p class="m-0">Fulham</p>
                                                          <span class="input-group-text" id="basic-addon2">2.4</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-199" aria-expanded="  false " aria-controls="c-199">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-199" class="accordion-collapse collapse show" aria-labelledby="h-199">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5311"
                                                          data-optionid="14955"
                                                      >
                                                          <p class="m-0">West Bromwich Albion</p>
                                                          <span class="input-group-text" id="basic-addon2">3.7</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5311"
                                                          data-optionid="14956"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5311"
                                                          data-optionid="14957"
                                                      >
                                                          <p class="m-0">Fulham</p>
                                                          <span class="input-group-text" id="basic-addon2">2.2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-200" aria-expanded="  false " aria-controls="c-200">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-200" class="accordion-collapse collapse show" aria-labelledby="h-200">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5312"
                                                          data-optionid="14958"
                                                      >
                                                          <p class="m-0">West Bromwich Albion</p>
                                                          <span class="input-group-text" id="basic-addon2">3.2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5312"
                                                          data-optionid="14959"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5312"
                                                          data-optionid="14960"
                                                      >
                                                          <p class="m-0">Fulham</p>
                                                          <span class="input-group-text" id="basic-addon2">1.8</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-201" aria-expanded="  false " aria-controls="c-201">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-201" class="accordion-collapse collapse show" aria-labelledby="h-201">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5313"
                                                          data-optionid="14961"
                                                      >
                                                          <p class="m-0">West Bromwich Albion</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5313"
                                                          data-optionid="14962"
                                                      >
                                                          <p class="m-0">Fulham</p>
                                                          <span class="input-group-text" id="basic-addon2">1.4</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5313"
                                                          data-optionid="14963"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-202" aria-expanded="  false " aria-controls="c-202">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-202" class="accordion-collapse collapse show" aria-labelledby="h-202">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5314"
                                                          data-optionid="14964"
                                                      >
                                                          <p class="m-0">Yes</p>
                                                          <span class="input-group-text" id="basic-addon2">1.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5314"
                                                          data-optionid="14965"
                                                      >
                                                          <p class="m-0">No</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-203" aria-expanded="  false " aria-controls="c-203">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-203" class="accordion-collapse collapse show" aria-labelledby="h-203">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5315"
                                                          data-optionid="14966"
                                                      >
                                                          <p class="m-0">1 Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5315"
                                                          data-optionid="14967"
                                                      >
                                                          <p class="m-0">2 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5315"
                                                          data-optionid="14968"
                                                      >
                                                          <p class="m-0">3 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5315"
                                                          data-optionid="14969"
                                                      >
                                                          <p class="m-0">4+ Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5315"
                                                          data-optionid="14970"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-204" aria-expanded="  false " aria-controls="c-204">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-204" class="accordion-collapse collapse show" aria-labelledby="h-204">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5316"
                                                          data-optionid="14971"
                                                      >
                                                          <p class="m-0">Under 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">1.7</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="610"
                                                          data-questionid="5316"
                                                          data-optionid="14972"
                                                      >
                                                          <p class="m-0">Over 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">1.9</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61d5d0aad081b1641402538.png" alt="" class="sports_icon_img me-1" />
                                          UEFA Champions League
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/611" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Manchester United</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Atlético Madrid</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">16/03/2022...02:00 am</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-243" aria-expanded="  true " aria-controls="c-243">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-243" class="accordion-collapse collapse show" aria-labelledby="h-243">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5317"
                                                          data-optionid="14973"
                                                      >
                                                          <p class="m-0">Manchester United</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5317"
                                                          data-optionid="14974"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">1.8</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5317"
                                                          data-optionid="14975"
                                                      >
                                                          <p class="m-0">Atlético Madrid</p>
                                                          <span class="input-group-text" id="basic-addon2">4</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-244" aria-expanded="  false " aria-controls="c-244">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-244" class="accordion-collapse collapse show" aria-labelledby="h-244">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5318"
                                                          data-optionid="14976"
                                                      >
                                                          <p class="m-0">Manchester United</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5318"
                                                          data-optionid="14977"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5318"
                                                          data-optionid="14978"
                                                      >
                                                          <p class="m-0">Atlético Madrid</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-245" aria-expanded="  false " aria-controls="c-245">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-245" class="accordion-collapse collapse show" aria-labelledby="h-245">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5319"
                                                          data-optionid="14979"
                                                      >
                                                          <p class="m-0">Manchester United</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5319"
                                                          data-optionid="14980"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">2.8</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5319"
                                                          data-optionid="14981"
                                                      >
                                                          <p class="m-0">Atlético Madrid</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-246" aria-expanded="  false " aria-controls="c-246">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-246" class="accordion-collapse collapse show" aria-labelledby="h-246">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5320"
                                                          data-optionid="14982"
                                                      >
                                                          <p class="m-0">Manchester United</p>
                                                          <span class="input-group-text" id="basic-addon2">1.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5320"
                                                          data-optionid="14983"
                                                      >
                                                          <p class="m-0">Atlético Madrid</p>
                                                          <span class="input-group-text" id="basic-addon2">2.3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5320"
                                                          data-optionid="14984"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-247" aria-expanded="  false " aria-controls="c-247">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-247" class="accordion-collapse collapse show" aria-labelledby="h-247">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5321"
                                                          data-optionid="14985"
                                                      >
                                                          <p class="m-0">Yes</p>
                                                          <span class="input-group-text" id="basic-addon2">1.8</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5321"
                                                          data-optionid="14986"
                                                      >
                                                          <p class="m-0">No</p>
                                                          <span class="input-group-text" id="basic-addon2">1.9</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-248" aria-expanded="  false " aria-controls="c-248">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-248" class="accordion-collapse collapse show" aria-labelledby="h-248">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5322"
                                                          data-optionid="14987"
                                                      >
                                                          <p class="m-0">1 Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5322"
                                                          data-optionid="14988"
                                                      >
                                                          <p class="m-0">2 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5322"
                                                          data-optionid="14989"
                                                      >
                                                          <p class="m-0">3 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5322"
                                                          data-optionid="14990"
                                                      >
                                                          <p class="m-0">4+ Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5322"
                                                          data-optionid="14991"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-249" aria-expanded="  false " aria-controls="c-249">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-249" class="accordion-collapse collapse show" aria-labelledby="h-249">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5323"
                                                          data-optionid="14992"
                                                      >
                                                          <p class="m-0">Under 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">1.6</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="611"
                                                          data-questionid="5323"
                                                          data-optionid="14993"
                                                      >
                                                          <p class="m-0">Over 2.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.1</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div>
                                      <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" alt="" class="sports_icon_img me-1 white-img" />
                                          Football
                                      </div>

                                      <div class="col-12 p-0" style="background-color: #6c757d;">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/league/61d5d0aad081b1641402538.png" alt="" class="sports_icon_img me-1" />
                                          UEFA Champions League
                                      </div>
                                      <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
                                          <a href="<?php echo base_url('safe2') ?>/match/details/mobile/612" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                                              <span class="col-3 fs-6">Ajax</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">SL Benfica</span>
                                          </a>
                                          <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                                              <marquee direction="left" class="text-warning fs-10">16/03/2022...02:00 am</marquee>
                                          </a>
                                      </div>
                                      <div class="accordion" id="accordionExample">
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-178" aria-expanded="  true " aria-controls="c-178">
                                                      1st Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-178" class="accordion-collapse collapse show" aria-labelledby="h-178">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5324"
                                                          data-optionid="14994"
                                                      >
                                                          <p class="m-0">Ajax</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5324"
                                                          data-optionid="14995"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">1.9</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5324"
                                                          data-optionid="14996"
                                                      >
                                                          <p class="m-0">SL Benfica</p>
                                                          <span class="input-group-text" id="basic-addon2">9</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-179" aria-expanded="  false " aria-controls="c-179">
                                                      2nd Half Win?
                                                  </p>
                                              </h2>
                                              <div id="c-179" class="accordion-collapse collapse show" aria-labelledby="h-179">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5325"
                                                          data-optionid="14997"
                                                      >
                                                          <p class="m-0">Ajax</p>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5325"
                                                          data-optionid="14998"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5325"
                                                          data-optionid="14999"
                                                      >
                                                          <p class="m-0">SL Benfica</p>
                                                          <span class="input-group-text" id="basic-addon2">7</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-180" aria-expanded="  false " aria-controls="c-180">
                                                      Full Time Win?
                                                  </p>
                                              </h2>
                                              <div id="c-180" class="accordion-collapse collapse show" aria-labelledby="h-180">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5326"
                                                          data-optionid="15000"
                                                      >
                                                          <p class="m-0">Ajax</p>
                                                          <span class="input-group-text" id="basic-addon2">1.3</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5326"
                                                          data-optionid="15001"
                                                      >
                                                          <p class="m-0">Draw</p>
                                                          <span class="input-group-text" id="basic-addon2">4.75</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5326"
                                                          data-optionid="15002"
                                                      >
                                                          <p class="m-0">SL Benfica</p>
                                                          <span class="input-group-text" id="basic-addon2">6</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-181" aria-expanded="  false " aria-controls="c-181">
                                                      Who Will Score 1st Goal?
                                                  </p>
                                              </h2>
                                              <div id="c-181" class="accordion-collapse collapse show" aria-labelledby="h-181">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5327"
                                                          data-optionid="15003"
                                                      >
                                                          <p class="m-0">Ajax</p>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5327"
                                                          data-optionid="15004"
                                                      >
                                                          <p class="m-0">SL Benfica</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5327"
                                                          data-optionid="15005"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-182" aria-expanded="  false " aria-controls="c-182">
                                                      Both Teams To Score?
                                                  </p>
                                              </h2>
                                              <div id="c-182" class="accordion-collapse collapse show" aria-labelledby="h-182">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5328"
                                                          data-optionid="15006"
                                                      >
                                                          <p class="m-0">Yes</p>
                                                          <span class="input-group-text" id="basic-addon2">1.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5328"
                                                          data-optionid="15007"
                                                      >
                                                          <p class="m-0">No</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-183" aria-expanded="  false " aria-controls="c-183">
                                                      Total Goals?
                                                  </p>
                                              </h2>
                                              <div id="c-183" class="accordion-collapse collapse show" aria-labelledby="h-183">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5329"
                                                          data-optionid="15008"
                                                      >
                                                          <p class="m-0">1 Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5329"
                                                          data-optionid="15009"
                                                      >
                                                          <p class="m-0">2 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.5</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5329"
                                                          data-optionid="15010"
                                                      >
                                                          <p class="m-0">3 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2.05</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5329"
                                                          data-optionid="15011"
                                                      >
                                                          <p class="m-0">4+ Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">2</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5329"
                                                          data-optionid="15012"
                                                      >
                                                          <p class="m-0">No Goal</p>
                                                          <span class="input-group-text" id="basic-addon2">5</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="accordion-item border-0">
                                              <h2 class="accordion-header" id="headingOne">
                                                  <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-184" aria-expanded="  false " aria-controls="c-184">
                                                      Total Match Goals-Under Or Over?
                                                  </p>
                                              </h2>
                                              <div id="c-184" class="accordion-collapse collapse show" aria-labelledby="h-184">
                                                  <div class="accordion-body bg-dark text-light">
                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5330"
                                                          data-optionid="15013"
                                                      >
                                                          <p class="m-0">Under 3.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">1.8</span>
                                                      </a>

                                                      <a
                                                          href="javascript:void(0)"
                                                          class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                                                          data-gameid="612"
                                                          data-questionid="5330"
                                                          data-optionid="15014"
                                                      >
                                                          <p class="m-0">Over 3.5 Goals</p>
                                                          <span class="input-group-text" id="basic-addon2">1.9</span>
                                                      </a>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab">
                              Sorry, no video found.
                              <!-- <iframe class="w-100" height="200" src="https://www.youtube.com/embed/W5vFzjeCR4A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                          </div>

                      </div>
                  </div>
                  <div class="tab-pane fade p-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <p>Please Wait for getings new game</p>
                  </div>
              </div>

              <div class="upcomming_game_container py-3">
                  <h5 class="text-warning px-3" style="border-bottom: 1px solid #ffab00; padding-bottom: 2px;">Up Comming Events</h5>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - South Korea K League</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622eee158f3131647242773.png" alt="" />
                                  </div>
                                  <div id="bottom">Daejeon Hana Citizen</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-02-15</span>
                                          <span class="d-block">04:00 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622eee2b1fc501647242795.png" alt="" />
                                  </div>
                                  <div id="bottom">Ansan Greeners FC</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">1.5</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">4</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - South Korea K League</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622eef13a81ea1647243027.png" alt="" />
                                  </div>
                                  <div id="bottom">Gimpo Citizen</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">04:30 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622eef26e2fca1647243046.png" alt="" />
                                  </div>
                                  <div id="bottom">Chungnam Asan FC</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">1.8</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">3.2</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Australia A-League Men</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/62233159b10531646473561.png" alt="" />
                                  </div>
                                  <div id="bottom">Perth Glory</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">05:05 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6225e45dda90a1646650461.png" alt="" />
                                  </div>
                                  <div id="bottom">Central Coast Mariners</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2.5</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">2.5</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Italy Serie B</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213d52343a7e1645466915.png" alt="" />
                                  </div>
                                  <div id="bottom">Como</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">11:30 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6207afcfc93171644670927.png" alt="" />
                                  </div>
                                  <div id="bottom">Ternana</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2.5</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">2.5</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Italy Serie B</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61f551369a7241643467062.png" alt="" />
                                  </div>
                                  <div id="bottom">L.R. Vicenza</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">11:30 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6211dd2d9109c1645337901.png" alt="" />
                                  </div>
                                  <div id="bottom">Parma</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2.5</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">2.5</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Italy Serie B</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/620a262be34831644832299.png" alt="" />
                                  </div>
                                  <div id="bottom">Brescia</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">11:30 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213d511ac2d01645466897.png" alt="" />
                                  </div>
                                  <div id="bottom">Benevento</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">3.2</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Italy Serie B</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/620a261876c221644832280.png" alt="" />
                                  </div>
                                  <div id="bottom">Crotone</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">11:30 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213d464799881645466724.png" alt="" />
                                  </div>
                                  <div id="bottom">Frosinone</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">3.5</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">1.7</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Italy Serie B</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213d676c0ba41645467254.png" alt="" />
                                  </div>
                                  <div id="bottom">Cittadella</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">11:30 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213d477c686c1645466743.png" alt="" />
                                  </div>
                                  <div id="bottom">Reggina</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">1.8</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">4</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Italy Serie B</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213d72e248f91645467438.png" alt="" />
                                  </div>
                                  <div id="bottom">Cosenza</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">11:30 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213d66100c911645467233.png" alt="" />
                                  </div>
                                  <div id="bottom">Lecce</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">4.2</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">1.5</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Poland Ekstraklasa</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef3af7b5f61647244207.png" alt="" />
                                  </div>
                                  <div id="bottom">Legia Warszawa</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">11:45 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6229bd70e42591646902640.png" alt="" />
                                  </div>
                                  <div id="bottom">Bruk-Bet Termalica Nieciecza</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">1.3</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">5</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - France Ligue 2</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef4bd152131647244477.png" alt="" />
                                  </div>
                                  <div id="bottom">Rodez AF</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">12:00 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef4d490c8a1647244500.png" alt="" />
                                  </div>
                                  <div id="bottom">Guingamp</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2.5</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">2.5</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - France Ligue 2</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef57d2f9721647244669.png" alt="" />
                                  </div>
                                  <div id="bottom">Nîmes Olympique</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">12:00 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61f12d8796bee1643195783.png" alt="" />
                                  </div>
                                  <div id="bottom">AJ Auxerre</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2.5</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">2.4</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - France Ligue 2</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef6a03ebf01647244960.png" alt="" />
                                  </div>
                                  <div id="bottom">Dijon</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">12:00 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef6b1cd5fd1647244977.png" alt="" />
                                  </div>
                                  <div id="bottom">Le Havre</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">3</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - France Ligue 2</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef729c58841647245097.png" alt="" />
                                  </div>
                                  <div id="bottom">Valenciennes</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">12:00 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61ec5d4e86f9a1642880334.png" alt="" />
                                  </div>
                                  <div id="bottom">Caen</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2.4</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">2.4</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Italy Serie B</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef7b7001e31647245239.png" alt="" />
                                  </div>
                                  <div id="bottom">Nancy</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">12:00 AM</span>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61f81a2940f471643649577.png" alt="" />
                                  </div>
                                  <div id="bottom">Paris FC</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">3</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">1.8</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Italy Serie B</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61f55151850461643467089.png" alt="" />
                                  </div>
                                  <div id="bottom">Alessandria</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">01:30 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6207aff1a3b851644670961.png" alt="" />
                                  </div>
                                  <div id="bottom">Monza</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">3.4</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">1.8</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - England Championship</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61f131c20bb5c1643196866.png" alt="" />
                                  </div>
                                  <div id="bottom">Barnsley</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">01:45 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef8ca3b0cb1647245514.png" alt="" />
                                  </div>
                                  <div id="bottom">Bristol City</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2.2</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">2.7</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - England Championship</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6225e335c82131646650165.png" alt="" />
                                  </div>
                                  <div id="bottom">Blackburn Rovers</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">01:45 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/621c65b1dfc571646028209.png" alt="" />
                                  </div>
                                  <div id="bottom">Derby County</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">1.6</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">4.5</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - England Championship</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61f131d414ee51643196884.png" alt="" />
                                  </div>
                                  <div id="bottom">Bournemouth</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">01:45 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622efa87f2e331647245959.png" alt="" />
                                  </div>
                                  <div id="bottom">Reading</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">1.1</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">6</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - England Championship</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622efb3eaed381647246142.png" alt="" />
                                  </div>
                                  <div id="bottom">Birmingham City</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">01:45 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/621c66823df7c1646028418.png" alt="" />
                                  </div>
                                  <div id="bottom">Middlesbrough</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">3.2</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">2</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - England Championship</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622efbeccf2b41647246316.png" alt="" />
                                  </div>
                                  <div id="bottom">West Bromwich Albion</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">02:00 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6225e078c89da1646649464.png" alt="" />
                                  </div>
                                  <div id="bottom">Fulham</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">3.2</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">1.8</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - UEFA Champions League</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61d6efe2e8a661641476066.png" alt="" />
                                  </div>
                                  <div id="bottom">Manchester United</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">02:00 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61d59afec48751641388798.png" alt="" />
                                  </div>
                                  <div id="bottom">Atlético Madrid</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">3</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - UEFA Champions League</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213db1ab553f1645468442.png" alt="" />
                                  </div>
                                  <div id="bottom">Ajax</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">02:00 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213db02842cc1645468418.png" alt="" />
                                  </div>
                                  <div id="bottom">SL Benfica</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">1.3</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">6</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

              <!-- footer content -->
              <?php include(APPPATH . "views/safe2/footer.php"); ?>

          </div>
      </div>
  </div>

  <?php include(APPPATH . "views/safe2/footer_files.php"); ?>

</body>
</html>
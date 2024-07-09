<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>SAFE 60</title>
<link rel="stylesheet" href="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/vendors/mdi/css/materialdesignicons.min.css">
<link rel="stylesheet" href="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/vendors/css/vendor.bundle.base.css">
<link rel="stylesheet" href="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/vendors/jvectormap/jquery-jvectormap.css">
<link rel="stylesheet" href="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/vendors/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" href="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/vendors/owl-carousel-2/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/vendors/owl-carousel-2/owl.theme.default.min.css">
<script src="https://kit.fontawesome.com/b7ab4b2e5e.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/css/style.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="shortcut icon" href="<?php echo base_url('safe2') ?>/asset/images/logoIcon/favicon.png" />
<script type="text/javascript">
        /*if (screen.width >= 950) {
            window.location = "./";
        }
        window.addEventListener('resize', function(event){
            var newWidth = window.innerWidth;
            if (newWidth >= 950) {
              location.reload()
              window.location = "./";
            }
        });*/
    </script>
</head>
<body>
<div class="container-scroller">
<nav class="sidebar sidebar-offcanvas" id="sidebar">
<ul class="nav">
<li class="nav-item menu-items">
<a class="nav-link" href="https://" target="_blank">
<span class="menu-icon">
. </span>
<span class="menu-title">SPORTS</span>
</a>
</li>
<li class="nav-item menu-items">
<a class="nav-link" href="eSports" target="_blank">
<span class="menu-icon">
. </span>
<span class="menu-title">IN-PLAY</span>
</a>
</li>
<li class="nav-item menu-items">
<a class="nav-link" href="https:/" target="_blank">
<span class="menu-icon">
. </span>
<span class="menu-title">PROMO</span>
</a>
</li>
<li class="nav-item menu-items">
<a class="nav-link" href="https:/" target="_blank">
<span class="menu-icon">
. </span>
<span class="menu-title">SLOTS</span>
</a>
</li>
<li class="nav-item menu-items">
<a class="nav-link" href="https:" target="_blank">
<span class="menu-icon">
. </span>
<span class="menu-title">LIVE-GAMES</span>
</a>
</li>
<li class="nav-item menu-items">
<a class="nav-link" href="http://l" target="_blank">
<span class="menu-icon">
. </span>
<span class="menu-title">TV-GAMES</span>
</a>
</li>
<li class="nav-item menu-items">
<a class="nav-link" href="http" target="_blank">
<span class="menu-icon">
. </span>
<span class="menu-title">POKER</span>
</a>
</li>
<li class="nav-item menu-items">
<a class="nav-link" href="https://" target="_blank">
<span class="menu-icon">
. </span>
<span class="menu-title">LOTTERY/BINGO</span>
</a>
</li>
<li class="nav-item menu-items">
<a class="nav-link" href="https://" target="_blank">
<span class="menu-icon">
. </span>
<span class="menu-title">VIRTUAL SPORTS</span>
</a>
</li>
<li class="nav-item menu-items">
<a class="nav-link" href="https:/" target="_blank">
<span class="menu-icon">
. </span>
<span class="menu-title">MORE</span>
</a>
</li>
</ul>
</nav> <style type="text/css">
  .dropdown .dropdown-menu{
    margin-left: -198px;
  }
</style>
<div class="container-fluid page-body-wrapper">
<div class="fixed-top">
<nav class="navbar p-3 row align-items-center">
<div class="col-5">
<a class="text-decoration-none m-0 p-0 text-warning home_logo_name" href="<?php echo base_url() ?>/"><img width="100" height="40" src="<?php echo base_url('safe2') ?>/asset/images/logoIcon/logo.png"></a>
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
<div class="preview-thumbnail">

</div>
<div class="preview-item-content">
<p class="preview-subject ellipsis mb-1">Mark send you a message</p>
<p class="text-muted mb-0"> 1 Minutes ago </p>
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
<div class="bg-dark">
<div class="row">
<div class="col-4 p-0">
<div class="w-100 p-0 text-center notice d-flex align-items-center justify-content-center px-2">
<p class="m-0 p-0">Notice</p>
</div>
</div>
<div class="col-8 p-0">
<div class="d-flex p-0 align-items-center justify-content-center">
<marquee direction="left" class="text-warning">Welcome to safe60.net</marquee>
</div>
</div>
</div>
</div>
</div>

<div class="main-panel">
<div class="main-panel">
<div class="input_container">
<div class="registration_image">
<a href="<?php echo base_url() ?>/" class="text-decoration-none">
<h3 class="text-warning">Welcome back to SAFE 60</h3>
</a>
</div>
<form action="" method="POST" class="w-100 h-100">
<input type="hidden" name="_token" value="TLviDQzFs0RPl2yMNNgu4qIxFUwsOYxaazMz85Nj"> <div class="input_item">
<label for="username">Username</label>
<input type="text" class="form-control bg-transparent" id="username" name="username" placeholder="Enter User Name">
</div>
<div class="input_item">
<label for="password">Password</label>
<input type="password" class="form-control bg-transparent" id="password" name="password" placeholder="Enter Password">
</div>
<p><a href="<?php echo base_url('password-reset') ?>/" class="text-white">Forgot password?</a></p>
<button type="submit" class="p-2 border-0 w-100 rounded-pill">Login</button>
<p class="text-start text-light mt-1">New here?<a class="ms-2 text-warning" href="<?php echo base_url('user-register') ?>/">Register</a></p>
</form>
</div>
</div>
<footer class="py-2">

<div class="footer_menu">
<div class="row px-2 py-1 bg-warning text-dark">
<div class="col-6 px-3">
<h6 class="m-0">Sports Betting</h6>
</div>
<div class="col-6 px-3">
<h6 class="m-0">Top league</h6>
</div>
</div>
<div class="row px-3">
<div class="col-6 footer_menu_list">
<ul>
<li><a href="https://rainbet24.com/sports/game/1">Cricket</a></li>
<li><a href="https://rainbet24.com/sports/game/2">Football</a></li>
<li><a href="https://rainbet24.com/sports/game/3">Basketball</a></li>
<li><a href="https://rainbet24.com/sports/game/4">Tennis</a></li>
<li><a href="https://rainbet24.com/sports/game/5">Table tennis</a></li>
<li><a href="https://rainbet24.com/sports/game/6">Volleyball</a></li>
<li><a href="https://rainbet24.com/sports/game/7">Hockey</a></li>
<li><a href="https://rainbet24.com/sports/game/8">Ice Hochey</a></li>
</ul>
</div>
<div class="col-6 footer_menu_list">
<ul>
<li><a href="https://rainbet24.com/league/game/1">Indian Premier League</a></li>
<li><a href="https://rainbet24.com/league/game/2">UEFA Champions League</a></li>
<li><a href="https://rainbet24.com/league/game/3">UEFA Europa League</a></li>
<li><a href="https://rainbet24.com/league/game/4">England Premier League</a></li>
<li><a href="https://rainbet24.com/league/game/5">LaLiga</a></li>
 <li><a href="https://rainbet24.com/league/game/6">Germany Bundesliga</a></li>
<li><a href="https://rainbet24.com/league/game/7">Italy Serie A</a></li>
<li><a href="https://rainbet24.com/league/game/8">France Ligue 1</a></li>
</ul>
</div>
</div>
</div>


<div class="px-3 py-2 bg-dark my-3">
<h6>Media Partners</h6>
<div class="swiper mySwiper">
<div class="swiper-wrapper">
<div class="swiper-slide">
<img class="w-50 h-50" src="<?php echo base_url('safe2') ?>/asset/images/media/61d52e4fe9c131641360975.png" alt="">
</div>
<div class="swiper-slide">
<img class="w-50 h-50" src="<?php echo base_url('safe2') ?>/asset/images/media/61d737b4be8961641494452.png" alt="">
</div>
<div class="swiper-slide">
<img class="w-50 h-50" src="<?php echo base_url('safe2') ?>/asset/images/media/61d7358f58abf1641493903.png" alt="">
</div>
<div class="swiper-slide">
<img class="w-50 h-50" src="<?php echo base_url('safe2') ?>/asset/images/media/6207f09f0fd201644687519.png" alt="">
</div>
</div>

</div>
</div>


<div class="payment_container px-3">
<h6>Payment methods</h6>
<div class="payment_methods">
<div class="payment_method">
<img class="w-100 h-100" src="https://newsroom.mastercard.com/wp-content/uploads/2016/09/paypal-logo.png" alt="">
</div>
<div class="payment_method">
<img class="w-100 h-100" src="https://www.bssnews.net/assets/news_photos/2021/10/10/image-21914-1633867312.jpg" alt="">
</div>
<div class="payment_method">
<img class="w-100 h-100" src="https://media-eng.dhakatribune.com/uploads/2020/04/px-nagad-logo-2019-svg-1-1587037041950.jpg" alt="">
</div>
<div class="payment_method">
<img class="w-100 h-100" src="https://www.metlife.com.bd/content/dam/metlifecom/bd/mobile-banking/rocket.png" alt="">
</div>
</div>
</div>
<div class="contact_info mt-3 py-3">
<h6 class="px-3">Contact us</h6>
<div class="px-3 py-2">
<div class="text-center d-flex align-items-center justify-content-between">
<div class="d-flex align-items-center justify-content-center p-1 bg-light text-dark rounded-circle">
<i class="fas fa-map-marked-alt"></i>
</div>
<span class="text-end">Genting Highlands Sdn Behad, Jalan <br> Batang Kali, Batang Kali, Selangor</span>
</div>
</div>
<div class="px-3 py-2">
<div class="d-flex align-items-center justify-content-between">
<div class="d-flex align-items-center justify-content-center p-1 bg-light text-dark rounded-circle">
<i class="fas fa-envelope"></i>
</div>
<span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4c25222a230c3e2d25222e29387e78622f2321">[email&#160;protected]</a></span>
</div>
</div>
<div class="px-3 py-2">
<div class="d-flex align-items-center justify-content-between">
<div class="d-flex align-items-center justify-content-center  p-1 bg-light text-dark rounded-circle">
<i class="fas fa-phone-alt"></i>
</div>
<span>+60 3 2161 2563</span>
</div>
</div>
</div>
<div class="copyright_text text-center border-top border-1 border-light p-2">
<p class="m-0">Allrights reserved by rainbet24.com</p>
</div>
</footer>
</div>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/vendors/js/vendor.bundle.base.js"></script>
<script src="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/vendors/progressbar.js/progressbar.min.js"></script>
<script src="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<script src="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/js/jquery.cookie.js" type="text/javascript"></script>
<script src="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/js/off-canvas.js"></script>
<script src="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/js/hoverable-collapse.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="//code.tidio.co/7liafqxcbzzfafobh4gif4huty8nsifm.js" async></script>
<script>
      var banner_carousel = document.getElementById('banner_carousel')
      var carousel_banner = document.getElementById('carousel_banner')
       const showBanner = () => {
            carousel_banner.classList.toggle('d-none')
            banner_carousel.classList.toggle('d-block')
      }

      const removeBet = () =>{
        document.querySelector('.bet_slip').style.display = 'none'
      }

      $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            dots:false,
            responsive:{
                0:{
                    items:1,
                    nav:true
                },
                600:{
                    items:3,
                    nav:false
                },
                1000:{
                    items:4,
                    nav:true,
                    loop:false
                }
            }
        });


      });
    </script>
<link rel="stylesheet" href="<?php echo base_url('safe2') ?>/asset/global/css/iziToast.min.css">
<script src="<?php echo base_url('safe2') ?>/asset/global/js/iziToast.min.js"></script>
<script>
    "use strict";
    function notify(status,message) {
        iziToast[status]({
            message: message,
            position: "center"
        });
    }
</script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>
</body>
</html>
  <!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"> -->
  </script><script src="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <script src="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/js/off-canvas.js"></script>
  <script src="<?php echo base_url('safe2') ?>/asset/frontend/userdashboard/js/hoverable-collapse.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="//code.tidio.co/7liafqxcbzzfafobh4gif4huty8nsifm.js" async></script> -->
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
  <script type="text/javascript">
      $(".optionBetHistory").on('click', function(){
          let gameid = $(this).data('gameid');
          let questionid = $(this).data('questionid');
          let optionid = $(this).data('optionid');
          let loggedIn =  false;
          if(loggedIn){
              $.ajax({
                  type:"GET",
                  url:"<?php echo base_url('safe2') ?>/bet",
                  data:{
                      gameid : gameid,
                      questionid : questionid,
                      optionid : optionid,
                  },
                  success:function(data){
                      if(data.message){
                          notify('success', data.message);
                          location.reload();
                      }else if(data.error){
                          notify('error', data.error);
                      }
                  }
              });
          }else{
              notify('error', "Please logged in first");
          }
      });  

      $(".amount").on("keyup", function() {
          if(isNaN($(this).val())){
              notify('error', "Invalid input number");
          }else{
              var sumwiningamount = 0;
              var sum = 0;
              $(".amount").each(function(){
                  sum += +$(this).val();
                  sumwiningamount += +($(this).val() * $(this).data('coin'));
              });
              $("#total").text(sum);
              $("#winingamounts").text(parseFloat(sumwiningamount).toFixed(2));
          }
      });


      
      $(".bettingchoice").on('change', function(e){
          e.preventDefault();
          let value = $(this).val();
          $.ajax({
              url: "<?php echo base_url('safe2') ?>/betting/change",
              type: "GET",
              data: {
                  value : value
              },
              success: function (data) {
                  if(data.message){
                      notify('success', data.message);
                      setTimeout(function () {
                          location.reload(true);
                      }, 1000);
                  }
              }
          });
      }); 

      $(".removeBtn").on('click', (function (e) {
          e.preventDefault();
          let key = $(this).data('key');
          $.ajax({
              url: "<?php echo base_url('safe2') ?>/bet/remove",
              type: "GET",
              data: {
                  key : key
              },
              success: function (data) {
                  if(data.message){
                      notify('success', data.message);
                      setTimeout(function () {
                          location.reload(true);
                      }, 1000);
                  }
              }
          });
      }));
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
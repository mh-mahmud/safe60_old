            <style type="text/css">

                .carousel-indicators {
                    bottom: 0;
                }

                .carousel-inner > .carousel-item > img {
                    display: block;
                    max-width: 100%;
                    width: 100%;
                    height: 350px;
                    margin-top: 5px;
                    margin-bottom: 5px;
                }

                /*responsive*/
                @media(max-width: 320px) {
                    .carousel-inner {
                        /*margin-top: 52px;*/
                        height: 150px;
                    }
					
					.carousel-inner > .carousel-item > img {
						height: auto;
					}
					
                }

                @media(min-width: 320px) and (max-width: 480px) {
                    .carousel-inner {
                        /*margin-top: 46px;*/
                        height: 147px;
                    }
					.carousel-inner > .carousel-item > img {
						height: auto;
					}
                }

                @media (min-width: 480px) and (max-width: 580px) {
                    .carousel-inner {
                        /*margin-top: 50px;*/
                        width: 100%;
                        height: 180px;
                    }
					.carousel-inner > .carousel-item > img {
						height: auto;
					}
                }

                @media (min-width: 580px) and (max-width: 768px) {
                    .carousel-inner {
                        height: 200px;
                        /*margin-top: 50px;*/
                    }
					.carousel-inner > .carousel-item > img {
						height: auto;
					}
                }

                @media (min-width: 768px) and (max-width: 940px) {
                    .carousel-inner {
                        height: 200px;
                        /*margin-top: 15px;*/
                    }
                }

                @media (min-width: 940px) and (max-width: 1030px) {
                    .carousel-inner {
                        height: 200px;
                        margin-top: 0px;
                    }
                }

                @media (min-width: 1031px) and (max-width: 1199px) {
                    .carousel-inner {
                        margin-top: 0px;
                        height: 200px;
                    }
                }

                @media(min-width: 1199px) and (max-width: 1330px) {
                    .carousel-inner {
                        height: 200px;
                        margin-top: 0;
                    }
                }
            </style>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
              </ol>
              <div class="carousel-inner">
                
				<div class="carousel-item active">
                  <img class="d-block w-100" src="<?php echo base_url(); ?>assets/playbet/uploads/banner/banner_1.jpg" alt="Second slide">
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo base_url(); ?>assets/playbet/uploads/banner/banner_2.jpg" alt="Second slide">
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo base_url(); ?>assets/playbet/uploads/banner/banner_sports.png" alt="Second slide">
                </div>
				
				<div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo base_url(); ?>assets/playbet/uploads/banner/banner_binary.png" alt="Third slide">
                </div>
				
                <div class="carousel-item">
                  <img class="d-block w-100" src="<?php echo base_url(); ?>assets/playbet/uploads/banner/banner_ludo.png" alt="First slide">
                </div>
                
				<div class="carousel-item ">
                  <img class="d-block w-100" src="<?php echo base_url(); ?>assets/playbet/uploads/banner/banner_casino.png" alt="First slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
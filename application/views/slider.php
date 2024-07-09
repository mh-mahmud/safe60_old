<style>
/* Slider */
.slick-loading .slick-list {
    background: #fff url("./ajax-loader.gif") center center no-repeat;
}

/* Icons */
@font-face {
    font-family: "slick";
    src: url("./fonts/slick.eot");
    src: url("./fonts/slick.eot?#iefix") format("embedded-opentype"), url("./fonts/slick.woff") format("woff"), url("./fonts/slick.ttf") format("truetype"), url("./fonts/slick.svg#slick") format("svg");
    font-weight: normal;
    font-style: normal;
}

/* Arrows */
.slick-prev,
.slick-next {
    position: absolute;
    display: block;
    height: 20px;
    width: 20px;
    line-height: 0px;
    font-size: 0px;
    cursor: pointer;
    background: transparent;
    color: transparent;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    transform: translate(0, -50%);
    padding: 0;
    border: none;
    outline: none;
}

.slick-prev:hover, .slick-prev:focus,
.slick-next:hover,
.slick-next:focus {
    outline: none;
    background: transparent;
    color: transparent;
}

.slick-prev:hover:before, .slick-prev:focus:before,
.slick-next:hover:before,
.slick-next:focus:before {
    opacity: 1;
}

.slick-prev.slick-disabled:before,
.slick-next.slick-disabled:before {
    opacity: 0.25;
}

.slick-prev:before,
.slick-next:before {
    font-family: "slick";
    font-size: 20px;
    line-height: 1;
    color: white;
    opacity: 0.75;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.slick-prev {
    left: -25px;
}

[dir=rtl] .slick-prev {
    left: auto;
    right: -25px;
}

.slick-prev:before {
    content: "←";
}

[dir=rtl] .slick-prev:before {
    content: "→";
}

.slick-next {
    right: -25px;
}

[dir=rtl] .slick-next {
    left: -25px;
    right: auto;
}

.slick-next:before {
    content: "→";
}

[dir=rtl] .slick-next:before {
    content: "←";
}

/* Dots */
.slick-dotted.slick-slider {
    margin-bottom: 30px;
}

.slick-dots {
    position: absolute;
    bottom: 16px;
    list-style: none;
    display: block;
    text-align: center;
    padding: 0;
    margin: 0;
    width: 100%;
}

.slick-dots li {
    position: relative;
    display: inline-block;
    height: 9px;
    width: 9px;
    margin: 0 5px;
    padding: 0;
    cursor: pointer;
}

.slick-dots li button {
    border: 0;
    background: transparent;
    display: block;
    height: 4px;
    width: 4px;
    outline: none;
    line-height: 0px;
    font-size: 0px;
    color: transparent;
    padding: 5px;
    border-radius: 50%;
    background: #fff;
    cursor: pointer;
}

.slick-dots li button:hover, .slick-dots li button:focus {
    outline: none;
    background: #fff200;
}

.slick-dots li button:before {
    position: absolute;
    top: 0;
    left: 0;
    content: "•";
    width: 6px;
    height: 6px;
    font-family: "slick";
    font-size: 6px;
    line-height: 20px;
    text-align: center;
    color: #6a6a70;
    opacity: 0.25;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.slick-dots li.slick-active button {
    background: #fff200;
}

/* Slider */
.slick-slider {
    position: relative;
    display: block;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list {
    position: relative;
    overflow: hidden;
    display: block;
    margin: 0;
    padding: 0;
}

.slick-list:focus {
    outline: none;
}

.slick-list.dragging {
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}

.slick-track {
    position: relative;
    left: 0;
    top: 0;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.slick-track:before, .slick-track:after {
    content: "";
    display: table;
}

.slick-track:after {
    clear: both;
}

.slick-loading .slick-track {
    visibility: hidden;
}

.slick-slide {
    float: left;
    height: 100%;
    min-height: 1px;
    display: none;
}

[dir=rtl] .slick-slide {
    float: right;
}

.slick-slide img {
    display: block;
}

.slick-slide.slick-loading img {
    display: none;
}

.slick-slide.dragging img {
    pointer-events: none;
}

.slick-initialized .slick-slide {
    display: block;
}

.slick-loading .slick-slide {
    visibility: hidden;
}

.slick-vertical .slick-slide {
    display: block;
    height: auto;
    border: 1px solid transparent;
}

.slick-arrow.slick-hidden {
    display: none;
}
.hero__slider-item {
    border-radius: 5px;
    overflow: hidden;
}

.hero__slider-item-image {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}

.hero__slider-item-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    -o-object-fit: cover;
}

.hero__slider-item-content {
    /*padding: 75px 100px;*/
    padding: 175px 100px;
    position: relative;
}

.hero__slider-item-content-title {
    font-style: normal;
    font-weight: bold;
    font-size: 36px;
    line-height: 54px;
    color: #ffffff;
    margin-bottom: 45px;
}

.hero__slider-item-content-title span {
    color: #fff200;
}

.hero__slider-item-content-btn {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 170px;
    height: 51px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    background: #fff200;
    border-radius: 32px;
    font-style: normal;
    font-weight: bold;
    font-size: 13px;
    line-height: 19px;
    text-align: center;
    text-transform: uppercase;
    color: #1e1e2d;
}
@media (max-width: 768px) {
    .header__logo {
        width: 64px;
        margin: 0;
    }

    .header__side-column-link {
        margin-right: 25px;
    }

}
@media (max-width: 520px) {

      .hero__slider-item-content {
          /*padding: 75px 100px;*/
          padding: 75px 10px;
          position: relative;
      }
    .hero__slider.slick-dotted.slick-slider {
        margin-bottom: 0;
    }

    .hero__slider-item-content-title {
        font-size: 16px;
        line-height: 24px;
        margin-bottom: 30px;
    }

    .hero__slider-item-content-btn {
        width: 94px;
        height: 20px;
        font-size: 9px;
        line-height: 13px;
    }
    .hero__slider.slick-dotted.slick-slider {
        margin-bottom: 0;
    }

}
</style>

<div class="hero">
   <div class="hero__slider slick-initialized slick-slider slick-dotted">
      <div class="slick-list draggable">
         <div class="slick-track" style="opacity: 1; width: 100%;">
            <div class="hero__slider-item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00" style="width: 100%; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">

               <div class="hero__slider-item-image"><img src="https://spil247.com//images/spil247/theme/slide.png" alt=""></div>
               <div class="hero__slider-item-content">
                  <h1 class="hero__slider-item-content-title"><b style="color: rgb(217, 255, 254);">Welcome to safe60.net</b></h1>
                  <a id="hero-slider-register-button" href="javascript:void(0);" data-toggle="modal" data-target="#registrationModal" class="hero__slider-item-content-btn text-dark" tabindex="0">
                  Register Now
                  </a>
               </div>

            </div>
         </div>
      </div>
      <ul class="slick-dots" role="tablist">
         <li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 1" tabindex="0" aria-selected="true">1</button></li>
      </ul>
   </div>
</div>

<!-- <div class="hero">
   <div class="hero__slider slick-initialized slick-slider slick-dotted">
      <div class="slick-list draggable">
         <div class="slick-track" style="opacity: 1; width: 898px;">
            <div class="hero__slider-item slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00" style="width: 898px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
               <div class="hero__slider-item-image"><img src="https://spil247.com//images/spil247/theme/slide.png" alt=""></div>
               <div class="hero__slider-item-content">
                  <h1 class="hero__slider-item-content-title"><b style="color: rgb(217, 255, 254);">Welcome to safe60.net</b></h1>
                  <a id="hero-slider-register-button" href="javascript:void(0);" data-toggle="modal" data-target="#registrationModal" class="hero__slider-item-content-btn text-dark" tabindex="0">
                  Register Now
                  </a>
               </div>
            </div>
         </div>
      </div>
      <ul class="slick-dots" role="tablist">
         <li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 1" tabindex="0" aria-selected="true">1</button></li>
      </ul>
   </div>
</div> -->
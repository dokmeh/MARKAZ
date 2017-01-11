
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>مرکز معماری ایران</title>
    <link rel="stylesheet" href="css/grid.css" media="screen" title="grid" charset="utf-8">
    <link rel="stylesheet" href="fonts/font.css" media="screen" title="grid" charset="utf-8">
    <link rel="stylesheet" href="css/reset.css" media="screen" title="grid" charset="utf-8">
    <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" title="grid" charset="utf-8">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/master.css" media="screen" title="grid" charset="utf-8">
    <script src="js/jquery-3.1.1.min.js" charset="utf-8"></script>
    <script src="js/jquery.touchSwipe.min.js" charset="utf-8"></script>
    <script src="js/init.js" charset="utf-8"></script>
  </head>
  <body>
      <div class="identity-logo">
            <a href="#" class="logo-mask"><img class="logo" src="img/logo.png" alt="" /></a>
            <div class="menu-spin">
              <div class="menu-icon">
                <span></span>
              </div>
            </div>
            <div class="contactus-side-header">
                <a href="https://telegram.me/iranianarchitecturecenter" target="_blank"><img src="img/telegram.svg" alt="" /></a>
                <a href="http://instagram.com/iranianarchitecturecenter" target="_blank"><img src="img/instagram.svg" alt="" /></a>
            </div>
    	</div>
      <div class="navhandl">
          <nav>
            <span class="line"></span>
            <ul>
              <div class="navup">
                <div class="navupinner">
                    <li><a href="#" class="hovereffect">خانه</a></li>
                    <li><a href="#" class="hovereffect">دپارتمان ها</a></li>
                    <li class="submenu"><p>نمایندگی ها</p>
                      <div class="innermenu">
                        <div>
                            <a href="#">دپارتمان</a>
                            <a href="#">دپارتمان</a>
                            <a href="#">دپارتمان</a>
                            <a href="#">دپارتمان</a>
                            <a href="#">دپارتمان</a>
                            <a href="#">دپارتمان</a>
                            <a href="#">دپارتمان</a>
                            <a href="#">دپارتمان</a>
                            <a href="#">دپارتمان</a>
                          </div>
                          <span class="close-bt">⨯</span>
                      </div>
                    </li>
                    <li><a href="#" class="hovereffect">خدمات مرکز</a></li>
                </div>
              </div>
              <div class="navdown">
                <div class="navdowninner">
                    <li><a href="#" class="hovereffect"> مطالب علمی</a></li>
                    <li><a href="#" class="hovereffect">درباره ما</a></li>
                    <li><a href="#" class="hovereffect">تماس با ما</a></li>
                </div>
              </div>
            </ul>
          </nav>
      </div>
      <div class="mobilenavhandl">
        <nav>
          <ul>
            <li><a href="#">خانه</a></li>
            <li><span class="tagofsubmenu" data-submenu="sub1">دپارتمان ها</span></li>
            <li><a href="#">نمایندگی ها</a></li>
            <li><a href="#">خدمات مرکز</a></li>
            <li><a href="#"> مطالب علمی</a></li>
            <li><a href="#">درباره ما</a></li>
            <li><a href="#">تماس با ما</a></li>
          </ul>
        </nav>
        <div class="submenu" data-submenu="sub1">
            <ul>
              <li><a href="#">زیر منو یک</a></li>
              <li><a href="#">زیر منو یک</a></li>
              <li><a href="#">زیر منو یک</a></li>
              <li><a href="#">زیر منو یک</a></li>
              <li><a href="#">زیر منو یک</a></li>
            </ul>
        </div>
      </div>
      <section class="home">
        <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <video width="100%" autoplay loop class="slidevideo">
                        <source src="img/vid.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                      </video>
                    </div>
                    <div class="swiper-slide"><img src="img/s1.jpg" alt="" /></div>
                    <div class="swiper-slide"><img src="img/s2.jpg" alt="" /></div>
                    <div class="swiper-slide"><img src="img/s3.jpg" alt="" /></div>
                    <div class="swiper-slide"><img src="img/s4.jpg" alt="" /></div>
                    <div class="swiper-slide"><img src="img/s5.jpg" alt="" /></div>
                    <div class="swiper-slide"><img src="img/s1.jpg" alt="" /></div>
                    <div class="swiper-slide"><img src="img/s2.jpg" alt="" /></div>
                    <div class="swiper-slide"><img src="img/s3.jpg" alt="" /></div>
                    <div class="swiper-slide"><img src="img/s2.jpg" alt="" /></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-container-1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="img/s1.jpg" alt="" /></div>
                    <div class="swiper-slide"><img src="img/s2.jpg" alt="" /></div>
                    <div class="swiper-slide"><img src="img/s3.jpg" alt="" /></div>
                    <div class="swiper-slide"><img src="img/s4.jpg" alt="" /></div>
                    <div class="swiper-slide"><img src="img/s5.jpg" alt="" /></div>
                    <div class="swiper-slide"><img src="img/s1.jpg" alt="" /></div>
                    <div class="swiper-slide"><img src="img/s2.jpg" alt="" /></div>
                    <div class="swiper-slide"><img src="img/s3.jpg" alt="" /></div>
                    <div class="swiper-slide"><img src="img/s2.jpg" alt="" /></div>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination1"></div>
            </div>
            <!-- Swiper JS -->
            <script src="js/swiper.jquery.min.js"></script>

            <!-- Initialize Swiper -->
            <script>
                var input = 0;
                var swiper = new Swiper('.swiper-container', {
                    pagination: '.swiper-pagination',
                    slidesPerView: 'auto',
                    paginationClickable: true,
                    spaceBetween: 2,
                    mousewheelControl: true,
                    autoplayStopOnLast: false,
                    loop: true,
                    onSlideChangeStart: function (swiper) {
                        // console.log('slide change start - before');
                        // console.log(swiper);
                        console.log(swiper.activeIndex);
                        bg(swiper.activeIndex);
                        //before Event use it for your purpose
                    }
                });
            setTimeout(function() {
                  var swiper = new Swiper('.swiper-container-1', {
                      pagination: '.swiper-pagination1',
                      slidesPerView: 'auto',
                      paginationClickable: true,
                      spaceBetween: 2,
                      mousewheelControl: true,
                      autoplayStopOnLast: false,
                      loop: true,
                      onSlideChangeStart: function (swiper) {
                          console.log('slide change start - before');
                          console.log(swiper);
                          console.log(swiper.activeIndex);
                          //before Event use it for your purpose
                      },
                      onSlideChangeEnd: function (swiper) {
                          console.log('slide change end - after');
                          console.log(swiper);
                          console.log(swiper.activeIndex);
                          //after Event use it for your purpose
                          if (swiper.activeIndex == 1) {
                              //First Slide is active
                              console.log('First slide active')
                          }

                      }
                  });

            },1000);

           function bg(newinput){
             if(newinput > input){
                $('.bg').animate({left:'-='+25},800);
             }else{
                $('.bg').animate({left:'+='+25},800);
             }
             if (newinput == 2 || newinput == 12) {
                $('.bgvideo').addClass('bgvideo-hide');
             }else{
               $('.bgvideo').removeClass('bgvideo-hide');
             }
             input = newinput;
           }
            </script>
            <div class="newsbt">
                <p>
                  اخبار
                </p>
                <span><img src="img/downarrow.svg" alt="" /></span>
            </div>
            <div class="homeslidebt homeslidebt-hide">
              <span><img src="img/uparrow.svg" alt="" /></span>
                <p>
                  صفحه اصلی
                </p>
            </div>
      </section>
      <div class="bg">

      </div>
      <div class="bgvideo bgvideo-hide">
        <video autoplay loop>
          <source src="img/vid.mp4" type="video/mp4">
          Your browser does not support HTML5 video.
        </video>
      </div>
  </body>
</html>
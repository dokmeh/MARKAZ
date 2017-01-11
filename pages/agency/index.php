<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>نمایندگی ها - مرکز معماری ایران</title>
    <link rel="stylesheet" href="../../css/grid.css" media="screen" title="grid" charset="utf-8">
    <link rel="stylesheet" href="../../fonts/font.css" media="screen" title="grid" charset="utf-8">
    <link rel="stylesheet" href="../../css/reset.css" media="screen" title="grid" charset="utf-8">
    <link rel="stylesheet" href="../../css/font-awesome.min.css" media="screen" title="grid" charset="utf-8">
    <link rel="stylesheet" href="../../css/perfect-scrollbar.min.css" media="screen" title="grid" charset="utf-8">
    <link rel="stylesheet" href="../../css/master.css" media="screen" title="grid" charset="utf-8">
    <link rel="stylesheet" href="../../css/agency.css" media="screen" title="grid" charset="utf-8">
    <script src="../../js/jquery-3.1.1.min.js" charset="utf-8"></script>
    <script src="../../js/perfect-scrollbar.min.js" charset="utf-8"></script>
    <script src="../../js/agency/agencyinit.js" charset="utf-8"></script>
    <script src="../../js/menu.js" charset="utf-8"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAC-vPlNvcRpNNKNLdaBizpNvWXqQUXk60"></script>

    <script type="text/javascript">
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 5,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(32.3496819,49.1803175),

                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{"featureType":"administrative","elementType":"labels","stylers":[{"visibility":"simplified"},{"color":"#e94f3f"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"on"},{"gamma":"0.50"},{"hue":"#ff4a00"},{"lightness":"-79"},{"saturation":"-86"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"hue":"#ff1700"}]},{"featureType":"landscape.natural.landcover","elementType":"all","stylers":[{"visibility":"on"},{"hue":"#ff0000"}]},{"featureType":"poi","elementType":"all","stylers":[{"color":"#e74231"},{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.text.stroke","stylers":[{"color":"#4d6447"},{"visibility":"off"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"color":"#f0ce41"},{"visibility":"off"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"color":"#363f42"}]},{"featureType":"road","elementType":"all","stylers":[{"color":"#231f20"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#6c5e53"}]},{"featureType":"transit","elementType":"all","stylers":[{"color":"#313639"},{"visibility":"off"}]},{"featureType":"transit","elementType":"labels.text","stylers":[{"hue":"#ff0000"}]},{"featureType":"transit","elementType":"labels.text.fill","stylers":[{"visibility":"simplified"},{"hue":"#ff0000"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#0e171d"}]}]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(32.3496819,49.1803175),
                map: map,
                icon: "../../img/placeholder.png",
                title: 'Snazzy!'
            });
            var marker1 = new google.maps.Marker({
                position: new google.maps.LatLng(35.2496849,49.1803175),
                map: map,
                icon: "../../img/placeholder.png",
                title: 'hi!'
            });
            var marker1 = new google.maps.Marker({
                position: new google.maps.LatLng(35.2496849,47.1803175),
                map: map,
                icon: "../../img/placeholder.png",
                title: 'hi!'
            });
            var marker1 = new google.maps.Marker({
                position: new google.maps.LatLng(30.2496849,55.1803175),
                map: map,
                icon: "../../img/placeholder.png",
                title: 'hi!'
            });
        }
    </script>
</head>
<body>
<div class="identity-logo">
    <a href="#" class="logo-mask"><img class="logo" src="../../img/logo.png" alt="" /></a>
    <div class="menu-spin">
        <div class="menu-icon">
            <span></span>
        </div>
    </div>
    <div class="contactus-side-header">
        <a href="https://telegram.me/iranianarchitecturecenter" target="_blank"><img src="../../img/telegram.svg" alt="" /></a>
        <a href="http://instagram.com/iranianarchitecturecenter" target="_blank"><img src="../../img/instagram.svg" alt="" /></a>
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
                    <li class="submenu">
                        <p>نمایندگی ها</p>
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
<!--<section class="interior-header">
    <h2></h2>
    <ul>
        <a href="#">معرفی دپارتمان</a>
        <a href="#">چارت سازمانی</a>
        <a class="inner-head-selected" href="#">نمایدنگی ها</a>
        <a class="li-header-vie" href="#">گالری تصاویر</a></li>
        <a href="#">گواهی نامه ها</a>
    </ul>
</section>-->
<section class="department section main group">
    <section class=" inner-section dep-inner">
        <div class="blocks map">
            <div id="map"></div>
        </div>
        <div class="blocks info col span_12_of_12">

            <div class="titleblock">
                <h2>معرفی نمایندگی های مرکز معماری ایران</h2>
            </div>
            <div class="about-tex-img">


                <p class="p1">

                    معرفی:
                    بخش امور استان ها با هدف ایجاد و اشاعه ی یک جریان مستمر علمی, فرهنگی و اجرایی در معماری و صنعت ساختمان کشور شکل گرفته است.بدیهی است که نیل به چنین چشم اندازی, ایجاد بسترهای مختلفی را در جهت ارتقای سطح دانش و توان اجرایی متخصصان این حوزه را در سراسر کشور می طلبد.
                    استراتژی:
                    - فعالیت های کاربردی و در عین حال , کلان نگر و قابل توسعه
                    - ارتقاء فرهنگ علم جویی و نوآوری
                    - کمک به برقراری عدالت آموزشی
                    اهداف:
                    - برقراری تعامل با کلیه ی ارگان ها،نهاد ها،مراکز آموزشی ، پژوهشی و اجرایی در هر استان.
                    - آموزش و پژوهش در زمینه های مختلف معماری و شهرسازی و نیز تخصصها و رشته های مرتبط در جهت ارتقای توان علمی و عملی پژوهشگران و متخصصان.
                    - ترویج نگرشی جدید در خصوص انجام پروژه های مطالعاتی و اجرایی.
                    - ایجاد بستر مناسب جهت استفاده از توان تخصصی و فنی فارغ التحصیلان و دانشجویان علاقمند.
                    خدمات قابل ارائه در استان ها:
                    - انعقاد قرارداد در پروژه های مختلف مطالعاتی و اجرایی در سراسر کشور با همکاری مشاورین و متخصصین داخلی و خارجی.
                    - برگزاری دوره های آموزشی تکمیلی و کاربردی ویژه اساتید دانشگاهی،دانشجویان،مدیران و متخصصین سازمان ها.
                    - برگزاری سمینار,همایش و نشست های علمی
                    - برگزاری مسابقات مختلف معماری
                    - بورسیه دانشجویان مستعد و نخبه
                    - حمایت از انجمن ها و کانون های معماری
                    روند اخذ نمایندگی از مرکز معماری ایران:
                    (ویژه مراکز آموزشی و پژوهشی غیر دولتی)
                    - ارسال رزومه کامل از مجموعه و متخصصین شاغل
                    - ارسال پروپزال نحوه ی همکاری
                    - شرکت در مصاحبه ی حضوری
                    - انعقاد تفاهم نامه
                    تلفن های تماس:
                    1444 8873 021
                    3644 8873 021
                    داخلی 124


                </p>

                <div class="about-img">
                    <div>
                        <a href='http://www.houzz.com.au/photos/58920486/leslie-road-modern-home-office-melbourne'
                           target='_blank'><img
                                    src='https://st.hzcdn.com/simgs/df81ce35077eeec4_8-5929/modern-home-office.jpg'
                                    alt='Leslie Road' border=0 width='500' height='376' nopin='nopin'/>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <h2>نمایدنگی ها</h2>
        <div class="blocks members cards ">

            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                       نمایندگی
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                   نمایندگی
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                   نمایندگی
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                   نمایندگی
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                   نمایندگی
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                   نمایندگی
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
        </div>
        <h2>اعطای نمایندگی</h2>
        <div class="blocks members cards request">
            مرکز معماری ایران در نظر دارد در راستای گسترش فعالیت های علمی و فرهنگی خود در سراسر کشور , همکارانی را به عنوان نماینده و یا عاملیت انحصاری در شهرهای مختلف برگزیند.
            علاقمندان به این موضوع می توانند در استان های فاقد نمایندگی با دفتر مرکز معماری ایران - بخش استان ها تماس حاصل فرمایند.
            تلفنهای تماس:
            7820 8873 021
            1444 8873 021
            3644 8873 021
            داخلی :124
            <input type="submit" value="فرم درخواست">

        </div>


    </section>
    <footer>
        <div class="header-of-footer line-of-footer">
            <p>
                با ما در تماس باشید.
            </p>
            <div>
                <p>
                    <span>📞</span><a href="tel:02188731444">021 88 73 1444</a> | <a href="tel:02143913000">021 43 91 3000</a>
                </p>
                <p>
                    <span>ℹ</span><a href="tel:02188731444">سوالات متداول</a>
                </p>
                <p>
                    <span>📧</span><a href="mailto:pr@iacenter.ir">pr@iacenter.ir</a>
                </p>
            </div>

        </div>
        <div class="footer-body group">
            <div class="footer-grid-1-3 footer-col">
                <ul>
                    <li><a href="#" class="hovereffect">خانه</a></li>
                    <li><a href="#" class="hovereffect">دپارتمان ها</a></li>
                    <li><a href="#" class="hovereffect">خدمات مرکز</a></li>
                    <li><a href="#" class="hovereffect">مطالب علمی</a></li>
                    <li><a href="#" class="hovereffect">درباره ما</a></li>
                    <li><a href="#" class="hovereffect">تماس با ما</a></li>
                </ul>
            </div>
            <div class="footer-grid-1-3 footer-col">
                <ul>
                    <li><a href="#" class="hovereffect">خانه</a></li>
                    <li><a href="#" class="hovereffect">دپارتمان ها</a></li>
                    <li><a href="#" class="hovereffect">خدمات مرکز</a></li>
                    <li><a href="#" class="hovereffect">مطالب علمی</a></li>
                    <li><a href="#" class="hovereffect">درباره ما</a></li>
                    <li><a href="#" class="hovereffect">تماس با ما</a></li>
                </ul>
            </div>
            <div class="footer-grid-1-3 footer-col">
                <div class="footer-half-w">
                    <a href="#"><img src="../../img/enamad.png" alt="" /></a>
                </div>
                <div class="social-h">
                    <a href="http://www.instagaram.com">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="http://www.instagaram.com">
                        <i class="fa fa-telegram" aria-hidden="true"></i>
                    </a>
                    <a href="http://www.instagaram.com">
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-body group">
            <div class="footer-grid-1-3 footer-col">
                <ul>
                    <li><a href="#" class="hovereffect">خانه</a></li>
                    <li><a href="#" class="hovereffect">دپارتمان ها</a></li>
                    <li><a href="#" class="hovereffect">خدمات مرکز</a></li>
                    <li><a href="#" class="hovereffect">مطالب علمی</a></li>
                    <li><a href="#" class="hovereffect">درباره ما</a></li>
                    <li><a href="#" class="hovereffect">تماس با ما</a></li>
                </ul>
            </div>
            <div class="footer-grid-1-3 footer-col">
                <ul>
                    <li><a href="#" class="hovereffect">خانه</a></li>
                    <li><a href="#" class="hovereffect">دپارتمان ها</a></li>
                    <li><a href="#" class="hovereffect">خدمات مرکز</a></li>
                    <li><a href="#" class="hovereffect">مطالب علمی</a></li>
                    <li><a href="#" class="hovereffect">درباره ما</a></li>
                    <li><a href="#" class="hovereffect">تماس با ما</a></li>
                </ul>
            </div>
            <div class="footer-grid-1-3 footer-col">
                <div class="footer-half-w">
                    <a href="#"><img src="../../img/enamad.png" alt="" /></a>
                </div>
                <div class="social-h">
                    <a href="http://www.instagaram.com">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="http://www.instagaram.com">
                        <i class="fa fa-telegram" aria-hidden="true"></i>
                    </a>
                    <a href="http://www.instagaram.com">
                        <i class="fa fa-facebook-official" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-of-footer line-of-footer">
            <p>
                کليه حقوق اين سايت متعلق به مرکز معماری ایران می‌باشد.
            </p>
            <p class="ltrp">
                <a href="www.dokmeh-studio.com">panother creatiton by</a>
                <a href="www.dokmeh-studio.com"><img src="../../img/dokmeh-logo.svg" alt="" /></a>

            </p>
        </div>
    </footer>
</section>

<div class="bg">
</div>
</body>
</html>

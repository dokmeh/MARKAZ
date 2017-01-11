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
    <script>
        var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
        function init() {
            canvas = document.getElementById("canvas");
            anim_container = document.getElementById("animation_container");
            dom_overlay_container = document.getElementById("dom_overlay_container");
            handleComplete();
        }
        function handleComplete() {
            //This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
            exportRoot = new lib.logo();
            stage = new createjs.Stage(canvas);
            stage.addChild(exportRoot);
            //Registers the "tick" event listener.
            fnStartAnimation = function() {
                createjs.Ticker.setFPS(lib.properties.fps);
                createjs.Ticker.addEventListener("tick", stage);
            }
            //Code to support hidpi screens and responsive scaling.
            function makeResponsive(isResp, respDim, isScale, scaleType) {
                var lastW, lastH, lastS=1;
                window.addEventListener('resize', resizeCanvas);
                resizeCanvas();
                function resizeCanvas() {
                    var w = lib.properties.width, h = lib.properties.height;
                    var iw = window.innerWidth, ih=window.innerHeight;
                    var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;
                    if(isResp) {
                        if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {
                            sRatio = lastS;
                        }
                        else if(!isScale) {
                            if(iw<w || ih<h)
                                sRatio = Math.min(xRatio, yRatio);
                        }
                        else if(scaleType==1) {
                            sRatio = Math.min(xRatio, yRatio);
                        }
                        else if(scaleType==2) {
                            sRatio = Math.max(xRatio, yRatio);
                        }
                    }
                    canvas.width = w*pRatio*sRatio;
                    canvas.height = h*pRatio*sRatio;
                    canvas.style.width = dom_overlay_container.style.width = anim_container.style.width =  w*sRatio+'px';
                    canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h*sRatio+'px';
                    stage.scaleX = pRatio*sRatio;
                    stage.scaleY = pRatio*sRatio;
                    lastW = iw; lastH = ih; lastS = sRatio;
                }
            }
            makeResponsive(false,'both',false,1);
            fnStartAnimation();
        }
        $(document).ready(function () {
            init();
        })
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
        <a class="inner-head-selected" href="#">تقدیر نامه ها</a>
        <a class="li-header-vie" href="#">گالری تصاویر</a></li>
        <a href="#">گواهی نامه ها</a>
    </ul>
</section>-->
<section class="department section main group">
    <section class=" inner-section dep-inner">
        <div class="blocks members cards ">

        </div>
        <div class="blocks info col span_12_of_12">
            <div id="animation_container" style="background-color:transparent; width:200px; height:200px">
                <canvas id="canvas" width="200" height="200" style="position: absolute; display: block; background-color:transparent;"></canvas>
                <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:200px; height:200px; position: absolute; left: 0px; top: 0px; display: block;">
                </div>
            </div>
            <div class="titleblock">
                <h2>مرکز معماری ایران</h2>
            </div>
            <div class="about-tex-img">


                <p class="p1">
                    دون شک اعتلا بخشیدن به کیفیت آنچه به عنوان رویداد معماری ‏پیرامون ما در حال رخداد است نیازمند نهاد
                    هایی است که به عنوان ‏حلقه ای مبتنی بر دانایی و هماهنگ ما بین مراکز دانشگاهی و جریان ‏ساخت و ساز
                    ایفای نقش می‌کنند‎.‎ ‎"‎مرکز معماری ایران" ‎از بدو تاسیس، وظیفه‌ی خود دانسته است ‏که بتواند همگام با
                    جامه‌ی متخصص در حوزه های آکادمیک، مدیریت ‏و اجرا گوشه‌ای از این خلاء بزرگ را جبران نماید و با در نظر
                    داشتن ‏اهداف زیر گامی هر چند کوچک در مسیر آبادی و پیشرفت میهن ‏عزیزمان بردارد: ‎
                    • آموزش دائمی و ارتقاء مستمر متخصصین و علاقمندان حوزه‌ی ‏معماری و ساخت و ساز به منظور کاربست مناسب
                    دستاوردهای به ‏روز علمی و پژوهشی در جهت بالا بردن شاخص‌های کمی و کیفی ‏فعالیت‌ها
                    • برقراری ارتباط و تعامل گسترده با اندیشمندان، مجامع ‏علمی، دانشگاه ها و مؤسسات معتبر داخلی و خارجی
                    و تشکیل ‏کارگروه‌های هم اندیشی به منظور حداکثر همکاری و استفاده از ‏قابلیت ها و دستاوردهای علمی،
                    عملی و پژوهشی آنها
                    • ‎ ‎ایجاد و توسعه‌ی پایگاه‌های اطلاعاتی مورد نیاز به منظور تأمین ‏اطلاعات و ارتقای علوم و خدمات
                    مورد نیاز پژوهشگران، متخصصین و ‏سایر مخاطبان
                    • جذب نخبگان و مشارکت در ایجاد زمینه‌های مناسب برای ‏اشتغال فارغ التحصیلان و ترغیب روحیه‌ی کارآفرینی
                    در بین آنها
                    • ارائه‌ی خدمات فنی و مهندسی معماری و شهرسازی مبتنی بر ‏فرهنگ غنی و معماری اصیل ایرانی با تکیه بر
                    دانش و تجارب ‏متخصصین داخلی و خارجی و بهره‌گیری از پیشرفته‌ترین ‏دستاوردها و تکنولوژی‌ها به لطف ایزد
                    منان، پویایی و عملکرد این مرکز در هفت سال اخیر ‏سبب شده است که با داشتن بالغ بر30 هزار عضو متخصص و
                    ‏برگزاری بیش از 60 سمینار، همایش و مسابقه در شهرها و دانشگاه‌‏های مختلف کشور نظیر دانشگاه علم و
                    صنعت، دانشگاه هنر ‏اصفهان، دانشگاه یزد، دانشگاه کاشان، دانشگاه زنجان، دانشگاه ‏آزاداسلامی واحدهای
                    تهران مرکز، واحد تهران جنوب، واحد مشهد، ‏واحد کرمان و ... افتخار همکاری با مجموعه‌های مختلف علمی‌‏،
                    فرهنگی و اجرایی داخل و خارج از کشور مانند سازمان جهانی ‏یونسکو، فرهنگستان هنر، بنیاد میرمیران،
                    پژوهشکده فرهنگ هنر و ‏معماری، انجمن مفاخر معماری، انجمن دوستی ایران و فرانسه، خانه‌ی ‏هنرمندان،

                    شهرداری‌های تهران و ... را داشته باشد و مورد تقدیر و ‏حمایت نهادهای ذیربط قرار گیرد‎.‎ ‏ ‏</p>

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
        <h2>تقدیر نامه ها</h2>
        <div class="blocks members cards ">

            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                        تقدیر نامه
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                    تقدیر نامه
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                    تقدیر نامه
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                    تقدیر نامه
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                    تقدیر نامه
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                    تقدیر نامه
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
        </div>
        <h2>چارت سازمانی</h2>
        <div class="blocks members cards ">
        </div>
        <h2>گالری تصاویر</h2>
        <div class="blocks slider">

            <div class="slides">
                <div class="slide project-img show">
                    <img src="../../img/card1.jpg">
                </div>
                <div class="slide project-img">
                    <img src="../../img/card2.jpg">
                </div>
                <div class="slide project-img">
                    <img src="../../img/card3.jpg">
                </div>
                <div class="slide project-img">
                    <img src="../../img/card1.jpg">
                </div>
                <div class="slide project-img">
                    <img src="../../img/card2.jpg">
                </div>
                <div class="slide project-img">
                    <img src="../../img/card3.jpg">
                </div>
            </div>
            <div class="gallery-control">
                <div class="project-arrow prev">
                    <img src="../../img/right.svg" alt="">
                </div>
                <div class="arrow fullscreen">
                    <img src="../../img/fullscreen.svg" alt="">
                    <img src="../../img/close.svg" alt="">
                </div>
                <div class="arrow slideshow">
                    <img src="../../img/pause.svg" alt="">
                    <img src="../../img/play.svg" alt="">
                </div>
                <div class="project-arrow next">
                    <img src="../../img/left.svg" alt="">
                </div>

            </div>

        </div>
        <h2>گواهی نامه ها</h2>
        <div class="blocks members cards ">

            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                    تقدیر نامه
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                    تقدیر نامه
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                    تقدیر نامه
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                    تقدیر نامه
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                    تقدیر نامه
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
            <a href="#" class="boxes">
                <img src="../../img/card1.jpg" alt="" />
                <h3>
                    تقدیر نامه
                </h3>
                <p>
                    توضیحات
                </p>
            </a>
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

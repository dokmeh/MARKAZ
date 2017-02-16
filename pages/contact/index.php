
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
    <link rel="stylesheet" href="../../css/contact.css" media="screen" title="grid" charset="utf-8">
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
    <div class="identity-logo a-w-d">
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
    <nav>

        <ul>
            <li>
                <h2>مرکز آموزش</h2>
                <a href="#" class="hovereffect">نمایندگی ها<span style="background: transparent"></span></a>
                <a href="#" class="hovereffect">خدمات مرکز<span style="background: transparent"></span></a>
                <a href="#" class="hovereffect">ثبت نام آنلاین<span style="background: transparent"></span></a>
                <a href="#" class="hovereffect">سامانه اشتغال<span style="background: transparent"></span></a>

            </li>
            <span class="li-line"></span>
            <li>
                <h2>دپارتمان ها</h2>
                <a href="#" class="hovereffect">معماری - معماری داخلی <span style="background: #871000"></span></a>
                <a href="#" class="hovereffect">معماری پابدار <span style="background: #fffc2e"></span></a>
                <a href="#" class="hovereffect">معماری دیجیتال(پارا متریک) <span style="background: #8400d2"></span></a>
                <a href="#" class="hovereffect">نرم افزار <span style="background: #eedf4d"></span></a>
                <a href="#" class="hovereffect">حرفه و ساخت <span style="background: #b96581"></span></a>
                <a href="#" class="hovereffect">AMBA <span style="background: #534483"></span></a>
                <a href="#" class="hovereffect">شهر سازی <span style="background: #24c970"></span></a>
            </li>
            <span class="li-line"></span>
            <li>
                <h2>ویژه ها</h2>
                <a href="#" class="hovereffect">وب سایت همپا <span style="background: #888"></span></a>
                <a href="#" class="hovereffect">درباره مرکز معماری <span style="background: #888"></span></a>
                <a href="#" class="hovereffect">تماس با ما <span style="background: #888"></span></a>
            </li>



        </ul>
    </nav>
    </div>
    <div class="navhandl">
    <nav>
      <div class="navup">

      </div>
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
<section class="department section main group">
    <section class=" inner-section dep-inner">
        <div class="blocks map">
            <div id="map"></div>
        </div>
        <div class="blocks info col span_12_of_12">
            <div class="titleblock">
                <h2>با ما در تماس باشید</h2>
            </div>
            <div class="column-half">
                <div class="coll">
                    <span>تلفن های تماس</span>
                    <a class="numbs" href="call:+982143913000">+98 21 43 91 3000</a>
                    <a class="numbs" href="call:+98 21 8873 1444">+98 21 88 73 1444</a>
                    <a class="numbs" href="call:+9821 8873 3644">+98 21 88 73 3644</a>
                    <span>فکس</span>
                    <a class="numbs" href="call:+982189780220">+98 21 89 78 0220</a>
                    <span>تلفن های داخلی</span>
                    <a class="numbs" href="call:+98 21 8873 1444">روابط عمومی : 120</a>
                    <a class="numbs" href="call:+98 21 8873 1444">دپارتمان تحصیلات تکمیلی و اسکیس : 105,106</a>
                    <a class="numbs" href="call:+98 21 8873 1444">دپارتمان نرم افزار : 113</a>
                    <a class="numbs" href="call:+98 21 8873 1444">دپارتمان حرفه و ساخت : 114</a>
                    <a class="numbs" href="call:+98 21 8873 1444">دپارتمان شهرسازی : 124</a>
                </div>
                <div class="coll">
                    <span>ایمیل ها</span>
                    <a class="numbs" href="mailto:info@iacenter.ir">روابط عمومی : pr@iacenter.ir</a>
                    <a class="numbs" href="mailto:arshad@iacenter.ir">دپارتمان تحصیلات تکمیلی و اسکیس : arshad@iacenter.ir</a>
                    <a class="numbs" href="mailto:narmafzar@iacenter.ir">دپارتمان نرم افزار : narmafzar@iacenter.ir</a>
                    <a class="numbs" href="mailto:nezam.mohandesi@iacenter.ir">دپارتمان حرفه و ساخت : nezam.mohandesi@iacenter.ir</a>
                    <a class="numbs" href="mailto:shahrsazi@iacenter.ir">دپارتمان شهرسازی : shahrsazi@iacenter.ir</a>
                    <span>ساعات کاری مرکز </span>

                </div>
            </div>

        </div>
    </section>

</section>


      <div class="bg">
          <canvas id="dots" class="dots-canvas"></canvas>
      </div>
      <script>
          var canvas,
              ctx,
              mouseX=0,
              mouseY=0,
              lastHit;
          hits = [],
              elemDist = 30,
              dotRadius = 1,
              lineWidth = 1,
              lineColor = '#444',
              hitPointColor = lineColor;


          var grid = (function(){

              var dots = [];

              function init() {

              }

              function add(i,j,dot) {
                  if(!dots[i]) {
                      dots[i] = [];
                  }
                  dots[i][j] = dot;
              }

              function get(i,j) {
                  return dots[i][j];
              }

              return {
                  "gridElementDist": elemDist,
                  "add" : add,
                  "get" : get,
                  "dots": dots
              }
          }());

          function Hit(x,y, dot) {
              this.x = x;
              this.y = y;
              this.dot = dot;
          }

          Hit.prototype.isNeighborOf = function(neighbor) {
              if(this.y === neighbor.y) {

                  return Math.abs(this.x - neighbor.x) === 1;
              }
              if(this.x === neighbor.x) {
                  return Math.abs(this.y - neighbor.y) === 1;
              }
              return false;
          }

          Hit.prototype.drawConnection = function(neighbor, ctx) {
              ctx.beginPath();
              ctx.moveTo(this.dot.x, this.dot.y);
              ctx.lineTo(neighbor.dot.x, neighbor.dot.y);
              ctx.strokeStyle = lineColor;
              ctx.lineWidth = lineWidth;
              ctx.stroke();
          }

          function Dot(x, y, radius, ctx) {
              this.x = x;
              this.y = y;
              this.isHit = false;
              this.radius = radius;
              this.ctx = ctx;
              this.drawMe();
          }

          Dot.prototype.drawMe = function() {
              this.ctx.beginPath();
              this.ctx.arc(this.x, this.y, this.radius, 0, 2 * Math.PI, false);
              this.ctx.fillStyle = '#222';
              this.ctx.fill();
          }

          Dot.prototype.highlight = function() {
              this.ctx.beginPath();
              this.ctx.arc(this.x, this.y, this.radius, 0, 2 * Math.PI, true);
              this.ctx.fillStyle = hitPointColor;
              this.ctx.fill();
              this.ctx.closePath();
          }

          var isRetina = (window.devicePixelRatio > 1),
              factor = 1;

          if(isRetina) {
              factor = 2;
          }
          function init() {
              var i = j = 0;

              canvas = document.getElementById('dots');
              canvas.width = $(window).width()*factor;
              canvas.height = $(window).height()*factor;
              ctx = canvas.getContext('2d');
              while(i * grid.gridElementDist < canvas.width) {
                  for(j = 0; j*grid.gridElementDist < canvas.width;j++) {

                      grid.add(i,j, new Dot(i*grid.gridElementDist*factor,j*grid.gridElementDist*factor,dotRadius*factor,ctx));
                  }
                  i++;
              }
          }

          window.onresize=init;

          function drawCanvas() {

          }

          var lastHit,
              hit;

          function handleMovement(eventX,eventY) {
              var x = Math.round(eventX / grid.gridElementDist),
                  y = Math.round(eventY / grid.gridElementDist);

              //$( ".log" ).append( "<span>hit:(" + x + ", " + y + ")</span> | " );
              // get corresponding dot
              var dot = grid.get(x,y);

              if(dot) {
                  hit = new Hit(x,y, dot);
                  if(lastHit) {
                      if(hit.isNeighborOf(lastHit)) {
                          hit.drawConnection(lastHit, ctx);
                      }
                      lastHit = hit;
                  } else {
                      lastHit = hit;
                  }
                  dot.highlight();
              }
          }
          var touchHandler = function(event) {
              // track touch move
              var x = event.originalEvent.touches[0].pageX,
                  y = event.originalEvent.touches[0].pageY;

              handleMovement(x,y);
          }

          var mouseHandler = function(event) {
              var x = event.pageX,
                  y = event.pageY;

              handleMovement(x,y);
          }

          $( "body" ).on('mousemove', mouseHandler);
          $( "body" ).on('touchmove', touchHandler);

          var lastHit,
              currentHit;

          function animloop(){
              window.requestAnimationFrame(animloop);


              drawCanvas();
          };


          init();
          animloop();

      </script>
</body>
</html>

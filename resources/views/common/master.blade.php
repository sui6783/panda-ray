<!doctype html>
<html lang="zh-TW">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="本網站為個人練習使用">
  <meta name="author" content="Ray">
  <title>@yield('title')</title>
  <link rel="icon" href="/favicon.ico">
  <!-- Bootstrap Core CSS -->
  <link href="/resources/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/resources/css/bootstrap/css/bootstrap-tagsinput.css" rel="stylesheet"/>
  <link href="/resources/css/bootstrap/css/bootstrap-datetimepicker.css" rel="stylesheet">
  <!-- MetisMenu CSS -->
  <link href="/resources/css/metisMenu/metisMenu.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="/resources/css/sb-admin-2.css" rel="stylesheet">
  <!-- Morris Charts CSS -->
  <link href="/resources/css/morrisjs/morris.css" rel="stylesheet">
  <!-- Custom Fonts -->
  <link href="/resources/css/feather.css" rel="stylesheet"/>
  <link href="/resources/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="/resources/css/swiper.min.css" rel="stylesheet">
  <link href="/resources/css/jquery-ui.min.css" rel="stylesheet"/>
  <link href="/resources/css/jquery.minicolors.css" rel="stylesheet"/>
  <link href="/resources/css/jquery.filer.css" rel="stylesheet"/>
  <link href="/resources/css/style.css" rel="stylesheet"/>
  <link href="/resources/css/web.css?20210726" rel="stylesheet"/>
  <link href="/resources/css/icofont.css" rel="stylesheet"/>

  <!-- jQuery -->
  <script src="/resources/js/jquery-2.1.1.min.js"></script>
  <script src="/resources/js/jquery-ui.min.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="/resources/css/bootstrap/js/bootstrap.min.js"></script>
  <script src="/resources/js/moment-with-locales.js"></script>
  <script src="/resources/js/bootstrap-datetimepicker.js"></script>
  <!-- Metis Menu Plugin JavaScript -->
  <script src="/resources/css/metisMenu/metisMenu.min.js"></script>

  <!-- Morris Charts JavaScript -->
  <script src="/resources/js/raphael.min.js"></script>
  <script src="/resources/css/morrisjs/morris.min.js"></script>
  <!-- <script src="/new-sc-act/js/morris-data.js"></script> -->

  <!-- Custom Theme JavaScript -->
  <script src="/resources/js/sb-admin-2.js"></script>
  <script src="/resources/js/jquery.cookie.js"></script>
  <script src="/resources/js/jquery.jget.js"></script>
  <script src="/resources/js/swiper.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="/resources/js/script.min.js"></script>
  <script type="text/javascript" src="/resources/js/jquery.minicolors.min.js"></script>
  <script type="text/javascript" src="/resources/js/bootstrap-tagsinput.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script>
    function sleep(ms) { return new Promise(resolve => setTimeout(resolve, ms)); }
  </script>
</head>
<body>
  <!-- Preloader -->
  <div id="preloader">
      <div class="preload-content">
          <div id="original-load"></div>
      </div>
  </div>

  <header class="header-area">
    <div class="top-header">
      <div class="container h-100">
        <div class="row align-items-center h-100">
          <!-- Top Social Area -->
          <div class="col-12">
              <div class="top-social-area pull-right">
                  <a href="/" data-toggle="tooltip" data-placement="bottom" title="首頁">Home</a>
                  <a href="/about" data-toggle="tooltip" data-placement="bottom" title="關於作者">About</i></a>
              </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  @yield('body')
</body>
<footer>
</footer>
  <script type="text/javascript">
    $(function(){
      var $window = $(window);

      // :: Preloader Active Code
      $window.on('load', function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
      });
    });
  </script>
</html>
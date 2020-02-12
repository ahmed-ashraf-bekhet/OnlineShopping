{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    @yield('content')
</body>
</html> --}}

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>OnlineShooping</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
  function hideURLbar(){ window.scrollTo(0,1); } </script>
  <!-- //for-mobile-apps -->
  <link href="./assets/plugins/css/bootstrap.css" rel='stylesheet' type='text/css' />
  <!-- Custom Theme files -->
  <link href="./assets/plugins/css/style.css" rel='stylesheet' type='text/css' />
  <!-- js -->
  <!-- //js -->
  <!-- start-smoth-scrolling -->
  <script type="text/javascript" src="./assets/plugins/js/move-top.js"></script>
  <script type="text/javascript" src="./assets/plugins/js/easing.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
      });
    });
  </script>
  <!-- start-smoth-scrolling -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
  <!--- start-rate---->
  <link rel="stylesheet" href="./assets/plugins/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
  <script type="text/javascript"></script>
  <!---//End-rate---->

</head>
</head>

<body>
  @yield('content')

  <script src="./assets/plugins/js/jquery-1.11.1.min.js"></script>
  <script src="./assets/plugins/js/bootstrap.js"></script>
  <script src="./assets/plugins/js/popper.js"></script>
</body>

</html>
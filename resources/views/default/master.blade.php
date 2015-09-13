<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{-- <link rel="icon" href="../../favicon.ico"> --}}
	<title>Nakissa &amp; Dom</title>

	{{-- Bootstrap --}}
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	{{-- Bootstrap optional theme --}}
	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> --}}

  <link rel="stylesheet" href="css/vendor/owl.carousel.css">
  <link rel="stylesheet" href="css/vendor/owl.theme.css">
  <link rel="stylesheet" type="text/css" href="css/app.css">


  
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      {{-- Fonts --}}
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <script>
    // Picture element HTML5 shiv
    document.createElement( "picture" );
  </script>
  <script src="js/vendor/picturefill.min.js" async></script>

    <script type="text/javascript">

    window.onload=function(){
      skrollr.init({
      forceHeight: false
      //further options..
        });
      };
   </script>
      

  </head>

  <body>
  	@yield('content')

  	<!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <script src="//maps.google.com/maps/api/js?sensor=true"></script>
    
    <script src="js/map.js"></script>
    <script src="js/vendor/owl.carousel.js"></script>
    <script src="js/wed.js"></script>

<script type="text/javascript" src="js/skrollr.min.js"></script>


  </body>
</html>
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

<style>

@media (min-width: 992px) {

}
/*Remove whitespace / prevent line-break*/
.nobr{
  white-space: nowrap;
}

/* featurette-headings */
.featurette-heading {
  font-size: 1.7rem;
  margin-bottom: 20px;
  /*font-weight: normal;*/
  font-weight: 400;
  line-height: 1;
  letter-spacing: -1px;
  /*margin-top: 0;*/
  /* MY EDIT */ }
   @media (min-width: 500px) {
    .featurette-heading {
      font-size: 2.5rem;
      font-weight: normal; } }
  @media (min-width: 768px) {
    .featurette-heading {
      font-size: 3rem;
      font-weight: normal; } }
  @media (min-width: 992px) {
    .featurette-heading {
      font-size: 3.2rem;
      font-weight: normal; } }
  @media (min-width: 1200px) {
    .featurette-heading {
      font-size: 3.2rem;
      font-weight: normal; } }


/*.marketing sections*/
.marketing h2 {
  font-weight: 500;
}
@media (min-width: 500px) {
  .marketing h2 { 
    font-weight: normal; } }

.jumbotron {
  padding-top: 20px;
}
@media (min-width: 750px) {
  .jumbotron {
    /*margin-top: 30px;*/
  }
}

#bigday {
  margin-top: 23%;
}
@media (min-width: 500px) {
  #bigday {
    margin-top: 15%;
  }
}
@media (min-width: 768px) {
  #bigday {
    margin-top: 10%;
  }
}

#rsvp h1 {
  margin-bottom: 0;
}
@media (min-width: 768px) {
  #rsvp h1 {
    margin-bottom: 10px;
  } 
}
#shareButton,
#dropittomeButton,
#dropboxButton {
  padding: 10px 35px;
}
.dropboxModalpad {
  padding-right: 2rem;
  padding-left: 2rem;
  }

/*.dropboxModalpad p::first-letter{
  margin-left: -.2rem;
}*/
.firstLetter{
  margin-left: -1.23rem;
}



#paypal > a,
#paypal > a:link,
#paypal > a:visited  {
  color: #1E90FF;
  font-weight: 300;
}
a:hover, a:active {
  color: #1E90FF;
  font-weight: 700;
}

#paypal img { 
  margin-top: 1rem;
  -webkit-border-radius: 28;
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  -webkit-box-shadow: 0px 1px 3px #666666;
  -moz-box-shadow: 0px 1px 3px #666666;
  box-shadow: 0px 1px 3px #666666;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  background: #ffffff;
  padding: 10px 20px 10px 20px;
  /* border: solid #1f628d 1px; */
  text-decoration: none;
}



.marginBottom{
  margin-bottom: 1.5rem; 
}

/*Modal Close button*/
.close {
    font-size: 2.75rem;
    /*float: right;*/
}

.modal-title {
  font-size: 2rem;
  padding-left: 28.813px;
}
@media (min-width: 992px) {
  .modal-title {
    font-size: 2.5rem;
}
}
.highlightText {
  font-size: 1.18rem;
  /*font-style: italic;*/
  font-weight: 800;
}
/*Screen size < 1250px*/
#dropboxButton {
  display: block;
  margin-top: 1.5rem;
}
#dropittomeButton{
  display: none;
}
/*Screen size > 1250px*/
@media screen and (min-width: 1250px) {
  #dropboxButton {
    display: none;
  }
  #dropittomeButton{
    display: block;
  }
}

#dropittomeModal .modal-title {
  margin-bottom: .75rem;
}

</style>
  </head>

  <body>
  	@yield('content')

  	<!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/vendor/owl.carousel.js"></script>
    <script src="js/wed.js"></script>
  </body>
</html>
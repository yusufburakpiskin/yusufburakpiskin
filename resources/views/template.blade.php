<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('site')}}/css/normalize.css" />
	<link rel="stylesheet" href="{{asset('site')}}/css/custom.css" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
		@include('inc.header')
		<!-- SLIDER -->

		
		<!-- CONTENT -->
	@yield('icerik')
        
         <p class="totop"> 
      <a id="top">
        <img src="https://icons.iconarchive.com/icons/saki/nuoveXT/48/Actions-arrow-up-icon.png">
      </a> 
  </p>
		<!-- FOOTER -->
	</div>
   @include('inc.footer')
  <script>
    $(function(){
    $('#top').click(function () {
    $('body,html').animate({
      scrollTop: 0
      }, 600);
      return false;
  });
  $(window).scroll(function () {
    if ($(this).scrollTop() > 15) {
    $('.totop a').fadeIn(500);
    } else {
    $('.totop a').fadeOut(500);
    }
  });
});
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<meta name="viewport"
	content="width=device-width,initial-scale=1.0">
	@include('frontend.layouts.head')	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	@include('frontend.layouts.notification')
	<!-- Header -->
	@include('frontend.layouts.header')
	<!--/ End Header -->
  <a href="https://wa.me/254725048488" class="whatsapp-float" target="_blank">
    <img src="{{asset('backend/img/whatsapp-float.png')}}" alt="WhatsApp">
  </a>
	@yield('main-content')
	
	@include('frontend.layouts.footer')

</body>
</html>
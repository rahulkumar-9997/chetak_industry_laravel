<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('frontend.layouts.headcss')	
</head>
    <body>
	@include('frontend.layouts.header')
	<!--/ End Header -->
	<main>
		@yield('main-content')
	</main>
	@include('frontend.layouts.footer')
	@include('frontend.layouts.footerjs')
	
    </body>
</html>
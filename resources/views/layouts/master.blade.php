<!DOCTYPE html>
<html>
<head>
@include('layouts.partials.header')
</head>
<body>
	 <div class="wrapper">
	 	{{-- Navigation --}}
 		@include('layouts.partials.nav')

		{{-- End Navigation --}}
		{{-- Content Area --}}
		<div class="container margin-top">
			@yield('content')
		</div>
		{{--END Content Area --}}
		@include('layouts.partials.footer')
	 </div>

@include('layouts.partials.scripts')
</body>
</html>
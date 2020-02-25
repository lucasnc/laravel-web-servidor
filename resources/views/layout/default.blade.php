<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.head')
    </head>
    <div class="loader"></div>
<body>
	@include('includes.header')
	<div class="main-content container">
	
        @yield('content')

    </div>
    
	@include('includes.footer')
</body>
</html>

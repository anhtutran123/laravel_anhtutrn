<!DOCTYPE html>
<html>
@include('layouts.head')
<body>
@include('layouts.header')
@include('flash::message')
<div class="container">
    @yield('content')
</div>
@include('layouts.footer')
</body>
</html>

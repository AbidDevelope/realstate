<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
@include('frontend.layout.head')
</head>
<body>
<div class="wrapper ovh">
@include('frontend.layout.header')
@yield('content-area')
</div>
@include('frontend.layout.footer')
<!-- Wrapper End -->
@include('frontend.layout.foot')
</body>
</html>

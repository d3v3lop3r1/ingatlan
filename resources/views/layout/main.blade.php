<?php
    use App\property;
?>
<!DOCTYPE html>
<html>
<head>
    @include('layout.head')
    @yield('styles')
</head>
<body>
    {{--  @include('layout.modals.login')
    @include('layout.modals.reg')  --}}
    @include('layout.newnavbar')
    @include('layout.carousel-main')
    @include('layout.search')
    @yield('tartalom')
    @include('layout.footer')
    @yield('scripts')
    @include('scripts.script')
</body>

</html>
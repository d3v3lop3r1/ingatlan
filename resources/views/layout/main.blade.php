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
    @include('layout.newnavbar')

    @include('layout.carousel-main')

    @include('layout.search')

    @include('layout.modals.messenger')

    @yield('tartalom')

    @include('layout.footer')

    @yield('scripts')

    @include('scripts.script')

    @include('scripts.cookie-consent-script-hun')

</body>

</html>

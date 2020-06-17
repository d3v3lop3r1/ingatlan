<?php
    use App\property;
?>
<!DOCTYPE html>
<html lang="hu"
<head>
    @include('layout.head')

    @yield('styles')

</head>
<body>
    @include('layout.newnavbar')

    @include('layout.carousel-main')

    @include('layout.search')

    @include('layout.modals.messenger')

    @include('layout.modals.calculator')

    @include('layout.alerts')

    @yield('tartalom')

    @include('layout.footer')

    @yield('scripts')

    @include('scripts.script')

    @include('scripts.cookie-consent-script-hun')

</body>

</html>

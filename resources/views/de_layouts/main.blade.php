<?php
    use App\property;
?>
<!DOCTYPE html>
<html lang="de">
<head>
    @include('layout.head')
    @yield('styles')
</head>
<body>
    @include('de_layouts.newnavbar')
    @include('de_layouts.carousel-main')
    @include('de_layouts.search')
    @include('de_layouts.modals.messenger')
    @yield('tartalom')
    @include('de_layouts.footer')
</body>
    @yield('scripts')
    @include('scripts.script')
    @include('scripts.cookie-consent-script-de')

</html>
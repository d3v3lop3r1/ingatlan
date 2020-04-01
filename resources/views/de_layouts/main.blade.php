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
    @yield('tartalom')
    @include('layout.footer')
</body>
    @yield('scripts')
    @include('scripts.script')

</html>
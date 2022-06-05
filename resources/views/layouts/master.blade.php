<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.essential.seo',['seo' => isset($seo)? $seo : null])
    @include('layouts.essential.css')
    @stack('headcss')
    @stack('styles')
</head>
<body>
    @include('layouts.essential.header')
        @yield('content')
    @include('layouts.essential.footer')
    @include('layouts.essential.js')
    
</body>
</html>
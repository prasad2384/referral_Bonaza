<!DOCTYPE html>
<html lang="en">

    <head>
        @include('frontend.partial.head')
        <title>@yield('title')</title>
    </head>

    <body>
        @include('frontend.partial.navbar')
        @yield('content')
        @include('frontend.partial.footer')
        @include('frontend.partial.footer-script')
    </body>

</html>

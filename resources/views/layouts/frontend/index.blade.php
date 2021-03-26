<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    @include("layouts.frontend.source")
    @yield('js')
</head>

<body>
    {{-- header --}}
    @include("layouts.frontend.header")
    {{-- body --}}
    <div class="content">
        @yield('content')
    </div>
    {{-- footer --}}
    @include("layouts.frontend.footer")
</body>

</html>

<!DOCTYPE HTML>
<html>

<head>
    @include('layouts.frontend.source')
</head>

<body>
    {{-- header --}}
    @include('layouts.frontend.header')
    {{-- body --}}
    <div class="content">
        @yield('content')
    </div>
    {{-- footer --}}
    @include('layouts.frontend.footer')
</body>

</html>

<!doctype html>
<html lang="en">
<head>

    @stack('title')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- css/styles --}}
    @include('frontend.layouts.partials.__styles')
</head>

<body>

    {{-- header --}}
    @include('frontend.layouts.header')

    {{-- main body --}}
    <main>
        @yield('main')
    </main>

    {{-- footer --}}
    @include('frontend.layouts.footer')

    {{-- scripts/js --}}
    @include('frontend.layouts.partials.__scripts')

</body>
</html>

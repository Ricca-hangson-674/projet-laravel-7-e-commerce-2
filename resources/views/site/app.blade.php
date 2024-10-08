<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>

    {{-- Style Sheet --}}
    @include('site.partials.styles')
</head>
<body>
    {{-- Header --}}
    @include('site.partials.header')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('site.partials.footer')

    {{-- Script --}}
    @include('site.partials.scripts')
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($product) && request()->route()->getName() !== 'index' ? $product->name . ' | ' : '' }}{{ config('app.name', 'Lego Bricks Store') }}</title>
    <link rel="icon" href="{{ asset('assets\lego_bricks_store.jpg') }}" type="jpg">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gradient-to-b from-[#00337C] to-blue-400 w-screen min-h-screen overscroll-y-none pb-10">
    @include('partials.header')

    @yield('content')
</body>
</html>
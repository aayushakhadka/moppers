<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Document</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class=" flex flex-col  font-display ">
<div class="laptop1:flex mobileS:hidden">
    @include('layouts.header')
</div>
    <div class="laptop1:hidden mobileS:flex">
@include('layouts.sidebar')

</div>

    <div class="flex flex-col gap-10">
    @yield('content')
</div>
    @include('layouts.footer')


</body>

</html>
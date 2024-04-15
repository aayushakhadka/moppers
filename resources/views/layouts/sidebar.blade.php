<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Laravel App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="flex flex-col">
    <div class="header bg-white flex items-center justify-between px-4 w-full h-[5rem] ">
        <div>
        <img src="https://www.slashcreative.co/themes/moppers-version-2/wp-content/themes/moppers/assets/images/icons/slcr-logo-simple.svg" alt="Logo" class="h-8">
</div>

    <div class="sidebar bg-white shadow-md p-4 flex fixed right-0 top-0 h-full w-64 font-semibold">
        <div class="flex flex-col gap-4">
            <a href="/" class="mt-[4rem]">Home</a>
            <a href="/about" class="">About</a>
            <a href="/service" class="hover:bg-blue-50 hover:bg-opacity-30 rounded-[3rem] duration-500">Services</a>
            <a href="/price" class="hover:bg-blue-50 hover:bg-opacity-30 rounded-[3rem] duration-500">Pricing</a>
            <a href="/blog" class="hover:bg-blue-50  hover:bg-opacity-30 rounded-[3rem] duration-500">Blog</a>
            <a href="/contact" class="hover:bg-blue-50 hover:bg-opacity-30 rounded-[3rem] duration-500">Contact</a>
            <h1>GET QUOTE</h1>
            <h1>BOOK FREEDEMO</h1>
        </div>
        <button class="close-sidebar py-1 pl-12 flex justify-end text-end text-black ">╳</button>

    </div>
    <button class="open-sidebar text-xl font-semibold">☰</button>
    </div>


    

    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const openSidebarBtn = document.querySelector('.open-sidebar');
            const closeSidebarBtn = document.querySelector('.close-sidebar');
            const sidebar = document.querySelector('.sidebar');

            openSidebarBtn.addEventListener('click', function () {
                sidebar.classList.remove('hidden');
            });

            closeSidebarBtn.addEventListener('click', function () {
                sidebar.classList.add('hidden');
            });
        });
    </script>
</body>
</html>


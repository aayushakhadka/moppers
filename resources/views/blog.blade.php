@extends('layouts.app')
@section('content')


<section class="hero">
<div class="bg-gray-500 bg-opacity-70">
<div class="inside w-[80%] mx-auto py-[7rem] mt-[3rem] flex items-center flex-col gap-4 text-white">
    <h1 class="text-3xl text-white font-semibold">Blog</h1>
    <h1 class="text-[13px]" >Home >
        <span class="text-gray-200 text-[13px]">Blog</span>
    </h1>

</div>



</div>
</section>
<section>
    <div class="inside flex tablet:flex-row mobileS:flex-col w-[80%] mx-auto py-[5rem] gap-5 p-5" >
        <div class="flex flex-col">


<div class="grid laptop1:grid-cols-2 gap-4">
@php
            $items=[
            [
            'heading'=>'Residential , Services 1 MIN READ',
            'title'=>'Things to know choosing a cleaning service',
             'icon'=>'https://secure.gravatar.com/avatar/aceee367beb00f45bc6f0716869b402b?s=96&d=mm&r=g',
             'admin'=>'Admin',
             'date'=>'May 2,2019',
            'imgs'=>
            'images/moppers1.jpg',
            ],
            [
                'heading'=>'Cleaning Tips ,Residential , 1 MIN READ',
            'title'=>'Tips to keep your bedroom fresh and clean',
             'icon'=>'https://secure.gravatar.com/avatar/aceee367beb00f45bc6f0716869b402b?s=96&d=mm&r=g',
             'admin'=>'Admin',
             'date'=>'May 2,2019',
            'imgs'=>
            'images/moppers1.jpg',
            ],
            [
                'heading'=>'Cleaning Tips ,Residential , 1 MIN READ',
            'title'=>'Step by step guide to clean your carpets',
             'icon'=>'https://secure.gravatar.com/avatar/aceee367beb00f45bc6f0716869b402b?s=96&d=mm&r=g',
             'admin'=>'Admin',
             'date'=>'May 2,2019',
            'imgs'=>
            'images/moppers1.jpg',
            ],
           
            ];
            @endphp
            @each( 'components.blog', $items, 'item', 'view.null')


</div>
    </div>
    <div class="flex flex-col gap-3">

    <div class="border-[1px] border-gray-00 flex flex-col max-h-[10rem] p-6 rounded-md gap-4">
        <h1 class="font-semibold text-sm">SEARCH</h1>
        <input class="max-w-[20rem] rounded-md bg-gray-100 border-[1px] border-gray-300 " type="text" placeholder="Search"/>

    </div>

    <div class="border-[1px] border-gray-00 flex flex-col p-6 rounded-md gap-4 group">
        <h1 class="font-semibold text-sm">RECENT POSTS</h1>
        <h1 class="font-bold text-xl gap-2 group-hover:text-blue-600 cursor-pointer">.<span class="font-semibold text-sm">Things to know choosing a cleaning service.</span></h1>
        <h1 class="font-bold text-xl gap-2 group-hover:text-blue-600 cursor-pointer">.<span class="font-semibold text-sm">Tips to keep your bedroom clean.</span></h1>
        <h1 class="font-bold text-xl gap-2 group-hover:text-blue-600 cursor-pointer">.<span class="font-semibold text-sm">Step by step guide to clean your carpets.</span></h1>


    </div>
    <div class="border-[1px] border-gray-00 flex flex-col p-6 rounded-md gap-4 group">
        <h1 class="font-semibold text-sm">RECENT COMMENTS</h1>
        </div>
        <div class="border-[1px] border-gray-00 flex flex-col p-6 rounded-md gap-4 group">
        <h1 class="font-semibold text-sm">ARCHIVES</h1>
        <h1 class="font-bold text-xl gap-2 group-hover:text-blue-600 cursor-pointer">.<span class="font-semibold text-sm">May 2019</span></h1>

        </div>
        <div class="border-[1px] border-gray-00 flex flex-col p-6 rounded-md gap-4 group">
        <h1 class="font-semibold text-sm">RECENT POSTS</h1>
        <h1 class="font-bold text-xl gap-2 group-hover:text-blue-600 cursor-pointer">.<span class="font-semibold text-sm">Cleaning Tips</span></h1>
        <h1 class="font-bold text-xl gap-2 group-hover:text-blue-600 cursor-pointer">.<span class="font-semibold text-sm">Residential</span></h1>
        <h1 class="font-bold text-xl gap-2 group-hover:text-blue-600 cursor-pointer">.<span class="font-semibold text-sm">Services</span></h1>


    </div>
    <div class="border-[1px] border-gray-00 flex flex-col p-6 rounded-md gap-4 group">
        <h1 class="font-semibold text-sm">META</h1>
        <h1 class="text-sm gap-2 group-hover:text-blue-600 cursor-pointer">Log in</h1>
        <h1 class="text-sm gap-2 group-hover:text-blue-600 cursor-pointer">Entries feed</h1>
        <h1 class="text-sm gap-2 group-hover:text-blue-600 cursor-pointer">Comments feed</h1>
        <h1 class="text-sm gap-2 group-hover:text-blue-600 cursor-pointer">Wordpress.org</h1>



    </div>
    <div class="border-[1px] border-gray-00 flex flex-col p-6 rounded-md gap-6 group">
    <h1 class="font-semibold">Recent Post</h1>
    <div class="flex gap-2 flex-col">
        <div class="flex gap-3 ">
        <img class="h-[3rem] rounded-md" src="https://www.slashcreative.co/themes/moppers-version-2/wp-content/uploads/2019/05/blog-3-1-150x150.jpg"/>
        <div class="flex flex-col ">
            <h1 class="text-[12px] w-[10rem]">Things to know choosing a cleaning service</h1>
            <p class="font-light text-[10px] italic">May 2,2019/by admin</p>
        </div>
</div>
<div class="flex gap-3 ">
        <img class="h-[3rem] rounded-md" src="https://www.slashcreative.co/themes/moppers-version-2/wp-content/uploads/2019/05/blog-post-1-150x150.jpg"/>
        <div class="flex flex-col gap-1">
            <h1 class="text-[12px] w-[10rem]">Things to know choosing a cleaning service</h1>
            <p class="font-light text-[10px] italic">May 2,2019/by admin</p>
        </div>
</div>
<div class="flex gap-3 ">
        <img class="h-[3rem] rounded-md" src="https://www.slashcreative.co/themes/moppers-version-2/wp-content/uploads/2019/05/blog-post-3-150x150.jpg"/>
        <div class="flex flex-col gap-1">
            <h1 class="text-[12px] w-[10rem]">Things to know choosing a cleaning service</h1>
            <p class="font-light text-[10px] italic">May 2,2019/by admin</p>
        </div>
</div>


    </div>

    </div>
    </div>
    </div>





</section>

@endsection
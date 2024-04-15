@extends('layouts.app')
@section('content')

<section>
    <div class="bg-indigo-800 bg-opacity-70 ">
        <div class="inside w-[80%] mx-auto py-[7rem] mt-[3rem] flex flex-col gap-4 ">

            <h1 class="text-white text-[13px] font-semibold">CONTACT</h1>
            <h1 class="text-4xl font-semibold max-w-[30rem] text-white leading-[3rem]">Get in touch </h1>
            <p class="text-gray-300 max-w-[30rem] ">If you have any questions or queries, feel free to write to us on visit us anytime.

            </p>
</div>
</div>
</section>
<section>
    <div class="inside w-[80%] mx-auto py-[7rem] flex  mobileS:flex-col tablet:flex-col laptop1:flex-row justify-between gap-4">
        <div class="flex flex-col gap-4">
            <h1 class="font-semibold text-sm">OFFICES</h1>
            <h1 class="text-2xl font-semibold">You’re always welcome</h1>
            <p class="text-sm max-w-[28rem]">Shall under In yielding saying given dominion don't of two god which said. Creature dominion was the good creepeth to give bring doesn't first shall two signs.</p>
            <div class=" flex gap-10">
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-2">
                    <h1 class="text-sm font-semibold">New York</h1>
                    <p class="max-w-[10rem] text-sm">2333 Michael Street Houston, NY 77074</p>
                    <h1 class="font-semibold text-sm text-blue-600">+1 806-350-7213</h1>
</div>
                    <div class="flex flex-col gap-2">
                    <h1 class="text-sm font-semibold">Chicago</h1>
                    <p class="max-w-[10rem] text-sm">2168 Griffin Street Phoenix, AZ 85012</p>
                    <h1 class="font-semibold text-sm text-blue-600"> +1 717-594-8131</h1>
</div>

                </div>
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-2">
                    <h1 class="text-sm font-semibold">San Francisco</h1>
                    <p class="max-w-[10rem] text-sm">2934 Jerry Dove Drive Florence, SF 29501</p>
                    <h1 class="font-semibold text-sm text-blue-600">+1 806-350-7213</h1>
</div>
                    <div class="flex flex-col gap-2">
                    <h1 class="text-sm font-semibold">Washington DC</h1>
                    <p class="max-w-[10rem] text-sm">632 Wood Street Saginaw, WD 48607</p>
                    <h1 class="font-semibold text-sm text-blue-600">+1 717-594-8131</h1>
</div>

                </div>


            </div>

        </div>
        <div class="bg-gray-100 max-w-[20rem] flex flex-col p-4 rounded-md gap-6 laptop1:absolute left-[70%] top-[50%] ">
    <h1 class="font-semibold text-lg text-center mt-[1rem]">Book a Service</h1>
    <div class="flex flex-col gap-4">
        <div class="flex flex-col gap-2">
    <label class="font-semibold text-sm" for="name">Your Name</label>
    <input type='text' id="name" class=" px-9 rounded-md bg-gray-200 border-gray-300"  />
</div>
<div class="flex flex-col gap-2">
    <label class="font-semibold text-sm" for="number">Phone Number</label>
    <input type='text' id="number" class=" rounded-md  bg-gray-200 border-gray-300"  />
</div>
<div class="flex flex-col gap-2">
    <label class="font-semibold text-sm" for="code">Zip Code</label>
    <input type='text' id="code" class=" rounded-md bg-gray-200 border-gray-300"  />
</div>

<div class="flex flex-col gap-2">
    <label class="font-semibold text-sm" for="service">Choose a service</label>
    <select class=" rounded-md  bg-gray-200 border-gray-300" name="service " id='service'>
    <option value="residential">Residential Cleaning </option>
  <option value="commercial">Commercial Cleaning</option>
  <option value="construction">Construction Cleaning</option>
  <option value="windows">Windows Cleaning</option>
    </select>
</div>
<div class="flex flex-col">
<label class="font-semibold text-sm" for="message">Message</label>
<input type="text" id="message"  class="border-gray-400 border-[1px] bg-gray-200 rounded-md py-11 text-start "/>

</div>

</div>
<button class="bg-blue-600 text-white font-semibold w-full p-2 rounded-md text-sm" >SUBMIT DETAILS</button>
</div>

    </div>


</section>

<section>
    <div class="inside w-[80%] mx-auto flex justify-between gap-4 ">

    <div class='grid laptop1:grid-cols-3 tablet:grid-cols-2 gap-5 '>

@php
$items=[
[
'title'=>'Help center',
'description'=>'If you have a great idea, or something to discuss - we are ready to help.',
'button'=>'Call us',
],
[
'title'=>'Commercial cleaning',
'description'=>'If you have a great idea, or something to discuss - we are ready to help.',
'button'=>'Call us',
],
[
'title'=>'Construction Cleaning',
'description'=>'If you have a great idea, or something to discuss - we are ready to help.',
'button'=>'Call us',
],
];
@endphp
            @each( 'components.blogcard', $items, 'item', 'view.null')
    </div>
            </div>


</section>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14130.580590055308!2d85.36528584999999!3d27.697360399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1713145802251!5m2!1sen!2snp" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
@endsection
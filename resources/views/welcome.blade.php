
@extends('layouts.app')
@section('content')


<section class="hero">
<div class="bg-indigo-800 bg-opacity-70">
<div class="inside w-[80%] mx-auto py-[7rem] flex flex-col gap-4 ">
    
<h1 class="text-white text-[10px] font-semibold">______ INTRODUCING MOPPERS</h1>
    <h1 class="text-5xl max-w-[30rem] text-white leading-[3rem]">Worried about
your <span class="font-semibold ">home</span> & <span class="font-semibold">office</span> cleaning?</h1>
<p class="text-white max-w-[30rem]">Hire us! We are a professional cleaning company offering all type of cleaning and maintenance services.</p>
<button class=" bg-yellow-500 text-white rounded-md w-[10rem] py-[1rem] font-semibold text-sm">REQUEST A DEMO</button>
</div>



</div>
</section>
<section class="alitala ">
    <div class="inside w-[80%] mx-auto py-6 flex laptop1:flex-row mobileS:flex-col gap-[5rem] relative ">
        <div class="flex flex-col gap-2">
    <h1 class="text-[10px] font-semibold">ABOUT COMPANY</h1>
    <h1 class="font-semibold text-2xl max-w-[20rem]">Most awarded cleaning company since 1995.</h1>
    <p class="max-w-[30rem] text-left text-sm">Morning greater Lesser day given fruitful, can't moveth night i fish be fish said good let saying saw forth fruitful day stars female whales. God seed. Fruitful. Waters. 
        Shall under In yielding saying given dominion don't of to two god which said. Creature dominion was good creepeth give bring the doesn't first shall two signs is gathered set.</p>
</div>
<!-- input -->
<div class="bg-gray-100 max-w-[20rem] flex flex-col p-4 rounded-md gap-6 laptop1:absolute left-[70%] bottom-[10%] ">
    <h1 class="font-semibold text-lg text-center">Book a Service</h1>
    <div class="flex flex-col gap-4">
        <div class="flex flex-col gap-2">
    <label class="font-semibold text-sm" for="name">Your Name</label>
    <input type='text' id="name" class="max-w-[20rem] px-9 rounded-md bg-gray-200 border-gray-300"  />
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

</div>
<button class="bg-blue-600 text-white font-semibold w-full p-2 rounded-md text-sm">SUBMIT DETAILS</button>
</div>

    </div>
</section>
<section class="py-[3rem]">
<div class="bg-indigo-800 bg-opacity-70 py-[5rem]">
    <div class="inside w-[80%] mx-auto py-6 flex flex-col items-center justify-center gap-4 p-5" >
        <h1 class="text-white font-semibold">HOW IT WORKS</h1>
        <h1 class="text-3xl font-semibold text-white max-w-[30rem] text-center">Get amazing cleaning
in 3 simple steps</h1>
<div class="grid laptop1:grid-cols-3 gap-7 mt-[3rem]">
    <div class="flex flex-col text-white w-[20rem] gap-3 text-center">
        <h1 class="font-semibold">Pick a suitable plan
</h1>
<p class="text-sm text-gray-300">Rule first third above first tree saw Grass subdue great eep saying forth rule hath to the replenish.
 
</p>
    </div>
    <div class="flex flex-col text-white w-[20rem] gap-3 text-center">
        <h1 class="font-semibold">Pick a suitable plan
</h1>
<p class="text-sm text-gray-300">Rule first third above first tree saw Grass subdue great eep saying forth rule hath to the replenish.

</p>
    </div><div class="flex flex-col text-white w-[20rem] gap-3 text-center">
        <h1 class="font-semibold">Pick a suitable plan
</h1>
<p class="text-sm text-gray-300">Rule first third above first tree saw Grass subdue great eep saying forth rule hath to the replenish.

</p>
    </div>
</div>
    </div>
    </div>


</section>
<section class="">
    <div class="inside w-[80%] mx-auto py-6 flex flex-col gap-4 p-5">
        <h1 class="font-semibold">SERVICES</h1>
        <div class="flex tablet:flex-row mobileS:flex-col items-center gap-[6rem] ">
        <h1 class="text-3xl font-semibold max-w-[20rem]">Offering Best
Cleaning Services</h1>
<p class="max-w-[30rem] text-gray-500">We are proving all type of cleaning solutions for every small and big businesses, organizations and homes.</p>
<button class="bg-blue-600 text-sm font-semibold text-white w-[10rem] h-[3rem] rounded-md ">MORE SERVICES</button>
</div>
<div class='grid laptop1:grid-cols-3 tablet:grid-cols-2 gap-5 mt-7'>

            @php
            $items=[
            [
            'title'=>'Residential Cleaning',
            'price'=>'Starting from $50',
            'imgs'=>
            'images/moppers1.jpg',
            ],
            [
            'title'=>'Commercial cleaning',
            'price'=>'Starting from $100',
 'imgs'=>'images/moppers2.jpg',
 ],
            [
            'title'=>'Construction Cleaning',
            'price'=>'Starting from $250',

            'imgs'=>
            'images/moppers-service3.jpg',



            ],
            [
                'title'=>'Windows Cleaning',
            'price'=>'Starting from $150',

            'imgs'=>
            'images/moppers4.jpg',


            ],
            [
                'title'=>'Carpet Cleaning',
            'price'=>'Starting from $200',

            'imgs'=>
            'images/moppers.jpg',

            ],[                
                'title'=>'Furniture Cleaning',
            'price'=>'Starting from $120',

            'imgs'=>
            'images/moppers5.jpg',

            ],
            ];
            @endphp
            @each( 'components.card', $items, 'item', 'view.null')

    </div>

</section>
<section>
    <div class="bg-indigo-800 ">
<div class="inside w-[80%] mx-auto py-[3rem] flex mobileS:flex-col tablet:flex-row justify-around gap-7 p-5">
    <div class="flex items-center justify-center">
<a href="http://127.0.0.1:8000/"><img 
     class=" flex items-center justify-center h-[8rem]" src="http://wynco.com.au/wp-content/uploads/2015/04/play_button.png"/></a>
</div>
<div class="flex flex-col gap-5">

<div class="flex gap-3 flex-col">
    <h1 class="text-white font-semibold text-sm text-left">FOUNDER'S MESSAGE</h1>
    <p class="text-white max-w-[28rem] text-left leading-[1.5rem] italic">“As people are getting busy in their work life, it is so difficult for them to manage time for cleaning their spaces by own. So here we understand people’s problems and help them with cleanings.”</p>
        </div>
<div>

    <h1 class="text-white font-semibold">Christopher Duncan</h1>
<h1 class="text-white ">Founder ,Moppers</h1>
        </div>
        <div class="grid laptop1:grid-cols-4 tablet:grid-cols-2 mobileS:grid-cols-2 text-white gap-5 items-center">
        <h1 class="flex flex-col text-3xl font-semibold">450<span class="text-[13px] font-bold">PROJECTS</span></h1>
        <h1 class="flex flex-col text-3xl font-semibold">3k<span class="text-[13px] font-bold">CLIENTS</span></h1>
        <h1 class="flex flex-col text-3xl font-semibold">1k<span class="text-[13px] font-bold">EMPLOYEES</span></h1>
        <h1 class="flex flex-col text-3xl font-semibold">26<span class="text-[13px] font-bold">AWARDS</span></h1>
        </div>
        </div>
        </div>
        </div>



</section>
<section>
<div class="inside w-[80%] mx-auto py-6 flex laptop:flex-row laptop1:gap-2 tablet:flex-col mobileS:flex-col justify-between p-5">
    <div class="flex flex-col p-2  tablet:gap-6 mobileS:gap-4">
    <h1 class="font-semibold text-sm">WHY CHOOSE US</h1>
    <h1 class="text-2xl font-semibold">Amazing benefits with us</h1>
    <p class="max-w-[35rem] text-gray-700">Shall under In yielding saying given dominion don't of two god which said.
         Creature dominion was the good 
        creepeth to give bring doesn't first shall two signs is a gathered set of people.</p>
        <h1 class="underline text-blue-600 underline-offset-2 ">Book a service now</h1><hr class="tablet:w-[50%]"/>
        <div class="flex tablet:flex-row mobileS:flex-col tablet:gap-[5rem] mobileS:gap-[1rem]">
            <div class="flex flex-col gap-2">
            <h1 class="text-lg font-semibold">Experienced Staff</h1>
            <p class="max-w-[13rem] text-sm">Professional and Experienced staff ready to help you anytime.</p>
        </div>
        <div class="flex flex-col gap-2">
            <h1 class="font-semibold text-lg">Natural Products</h1>
            <p class="max-w-[13rem] text-sm">We only use natural products in the process, No harmful chemicals are used.</p>
        </div>
        </div>

        <!-- sevice -->
        <div class="flex tablet:flex-row mobileS:flex-col tablet:gap-[5rem] mobileS:gap-[1rem]">
            <div class="flex flex-col gap-2">
            <h1 class="text-lg font-semibold">Fast Service</h1>
            <p class="max-w-[13rem] text-sm">Set your schedule and get the regular and faster cleaning everyday.</p>
        </div>

        <div class="flex flex-col gap-2">
            <h1 class="font-semibold text-lg">Best Equipment</h1>
            <p class="max-w-[13rem] text-sm">We use the best and world class equipment for the cleaning process.</p>
        </div>
        </div>


        </div>
        <img class="max-w-[30rem]" src="https://kickinklean.com/wp-content/uploads/2021/12/amazing-benefits-with-us.jpg"/>


        </div>


</section>

<section >
    <div class="bg-gray-300">
    <div class="inside flex flex-col items-center w-[80%] mx-auto py-[5rem] gap-5 flex justify-between p-5">
            <h1 class="text-sm font-semibold tracking-[0.1rem] ">TESTIMONALS</h1>
            <h1 class="text-3xl font-semibold max-w-[25rem] text-center">Trusted by thousand of
people & companies.</h1>
<!-- cards -->
<div class="flex tablet:flex-row mobileS:flex-col gap-8">
<div class="bg-white py-8 px-5 flex flex-col gap-7">
    <div class="flex gap-3">
        <img class="rounded-full h-[3rem] " src="https://www.slashcreative.co/themes/moppers/wp-content/uploads/2019/12/testimonial-1.jpg"/>
        <div class="flex flex-col">
            <h1 class="font-semibold">Chi R.Quinlan</h1>
            <h1>New York</h1>
            
        </div>
    </div>

<p class="max-w-[30rem] text-[14px] italic ">“Male saw behold saw darkness were our you'll without day air above lights, god you heaven moving you're yielding place second, it face it day 
    sea whose heaven moving you're yielding place second, it face it day sea whose moving.”</p>
</div>
<div class="bg-white py-8 px-5 flex flex-col gap-7">
    <div class="flex gap-3">
        <img class="rounded-full h-[3rem] " src="https://www.slashcreative.co/themes/moppers/wp-content/uploads/2019/12/testimonial-2.jpg"/>
        <div class="flex flex-col">
            <h1 class="font-semibold">Donald Slade</h1>
            <h1>Chicago</h1>
            
        </div>
    </div>

<p class="max-w-[30rem] text-[14px] italic ">“To us man seasons moveth the air two whales 
    image is unto face moveth beginning brought years over, form fish called, rule one stars
     together Shall under In yielding saying given dominion don't of two people. ”</p>
</div>
        </div>

    </div>
    </div>

<div class="bg-indigo-800 tablet:mb-[8rem] ">
    <div class="inside flex flex-col items-center w-[80%] mx-auto py-[5rem] gap-5 justify-between p-5 text-white relative">
<h1>COST OF CALCULATOR</h1>
<h1 class="text-2xl font-semibold max-w-[20rem] text-center">Be a part of hundreds
of happy families.
</h1>
<div class="bg-white flex flex-col mobileS:max-w-[18rem] tablet:max-w-[60rem] p-5 rounded-md gap-6 laptop1:absolute bottom-[-60%] tablet:absolute shadow-md  ">
    <div class="">
    <div class="flex tablet:flex-row mobileS:flex-col gap-4 ">
        <div class="flex flex-col gap-2">
            <label class="text-black">Choose a Service</label>
            <select class=" rounded-md max-w-[20rem]  text-black bg-gray-200 border-gray-300" name="service " id='service'>
    <option value="residential">Residential Cleaning </option>
  <option value="commercial">Commercial Cleaning</option>
  <option value="construction">Construction Cleaning</option>
  <option value="windows">Windows Cleaning</option>
    </select>
        </div>
        <div class="flex flex-col text-black gap-2">
            <label class="text-black" name='type' id="type">Type of Clean</label>
            <select class="rounded-md max-w-[20rem]  bg-gray-200 border-gray-300" name="type" id='type'>
    <option value="full">Full Cleaning </option>
  <option value="one">One Time Cleaning</option>
  <option value="weekly">Weekly Cleaning</option>
  <option value="monthly">Monthly Cleaning</option>
    </select>
        </div>
        <div class="flex flex-col text-black gap-2">
        <label name='floor' >Total Floor Area</label>
        <input class="max-w-[20rem] rounded-md bg-gray-200 border-[1px] border-gray-300" type="text" placeholder="1590 sq ft" id="floor"/>
        </div>

    </div>


<!-- inpu2 -->
    <div class="flex tablet:flex-row mobileS:flex-col gap-4">
        <div class="flex flex-col gap-2">
            <label class="text-black" name='name'>Your Name</label>
        <input id="name" name="code" class=" text-sm max-w-[20rem] rounded-md bg-gray-200 border-[1px] border-gray-300" type="text" placeholder="your name"/>

           
        </div>
        <div class="flex flex-col text-black gap-2">
            <label class="text-black" name='code' id="code">Zip Code</label>
        <input name="code" class=" text-sm max-w-[20rem] rounded-md bg-gray-200 border-[1px] border-gray-300" type="text" placeholder="your area code"/>
           
        </div>
        <div class="flex flex-col text-black gap-2">
        <label name='floor'>Email Address</label>
        <input class="max-w-[20rem] rounded-md bg-gray-200 border-[1px] border-gray-300" type="text" placeholder="Email A ddress"/>
        </div>

    </div>
    <div class="flex tablet:flex-row mobileS:flex-col gap-[1rem]">
<button class="bg-blue-600 text-white font-semibold max-w-[20rem] p-3 rounded-md text-sm mt-3">GET COST ESTIMATE</button>
<p class="text-gray-500 italic max-w-[20rem]">Submit this information and we will send you the cost for the service.

</p>
        </div>
    </div>
    </div>


</div>
</section>
<section>
    <div class="inside flex flex-col w-[80%] mx-auto py-[5rem] gap-5 p-5" >
<h1 class="font-semibold flex items-center justify-center">BLOG</h1>
<div class="flex tablet:flex-row mobileS:flex-col items-center justify-between ">
    <h1 class="text-3xl font-semibold max-w-[20rem]">Tips to keep the
surroundings clean.</h1>
<button class="h-[2rem] flex items-center justify-center rounded-md bg-blue-600 p-6 text-white text-sm font-semibold">VIEW ALL POSTS</button>
</div>

<div class="grid tablet:grid-cols-2 laptop1:grid-cols-3 gap-4">
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


</section>
<section>
    <div>
    </div>
</section>

@endsection


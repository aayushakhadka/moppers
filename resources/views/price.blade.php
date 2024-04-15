@extends('layouts.app')
@section('content')

<section>
    <div class="bg-indigo-800 bg-opacity-70 tablet:max-h-[25rem] tablet:mb-[10rem]">
        <div class="inside w-[80%] mx-auto items-center justify-center py-[7rem] mt-[3rem] flex flex-col gap-4 ">

            <h1 class="text-white text-[13px] font-semibold">PRICING</h1>
            <h1 class="text-4xl font-semibold max-w-[30rem] text-white leading-[3rem]">Our Pricing is simple </h1>
            <p class="text-white max-w-[30rem] text-center">We offer a simple and flexible pricing for all type of cleaning wheather it is residential or industrial cleaning.

            </p>
            <div class="flex tablet:flex-row  mobileS:flex-col items-center justify-center z-10 mobileS:gap-3 tablet:gap-0  ">
                <div class=" z-30 flex flex-col items-center bg-white shadow-md p-[5rem] gap-6 rounded-md">
                    <h1 class="font-semibold text-2xl">$<span class="font-bold text-[4rem]">95</span></h1>
                    <div>
                        <h1 class="text-2xl font-semibold ">Basic Home Plan</h1>
                        <h1 class="text-sm italic text-center">per clean / billed weekly</h1>
                    </div>
                    <button class="h-[2rem] bg-blue-600 p-6 flex items-center justify-center text-sm font-semibold text-white rounded-md">GET THIS PLAN</button>

                </div>
                <div class="flex flex-col bg-teal-500 justify-center items-center text-white p-5 gap-4 top-[53%] rounded-r-md">
                    <h1 class="font-semibold max-w-[12rem]">Get 30% discount on your first month</h1>

                    <div class="flex flex-col gap-2">
                        <h1 class="text-sm">
                            Custom schedules every day.</h1>
                        <h1 class="text-sm">Carpet Cleaning.</h1>
                        <h1 class="text-sm">Windows Cleaning.</h1>
                        <h1 class="text-sm">Floor Vaccum Clean.</h1>
                        <h1 class="text-sm">Bathrooms Cleaning.</h1>
                        <h1 class="text-sm">Kitchen Cleaning.</h1>
                    </div>
                </div>

            </div>
            <h1 class="flex items-center mobileS:text-white tablet:text-black ">* Please read all the terms and conditioned before chosing any plan.</h1>


        </div>



    </div>
</section>
<section>
    <div class="inside w-[80%] mx-auto items-center justify-center py-[7rem] mt-[3rem] flex flex-col gap-4">
        <h1 class="font-semibold text-sm">PLANS</h1>
        <h1 class="font-semibold text-2xl max-w-[20rem] text-center">Simple and affordable plans for everyone</h1>
        <div class="flex tablet:flex-row mobileS:flex-col gap-5 ">
            @php
            $items=[
                [
                    'heading'=>'Small Business',
            'title'=>'per clean / billed weekly',
            'price'=>'$ 199 ',
            'description'=>'This plan is suitable for small businesses and offices. Simply send us the size of your company and we will get back to you with the plan.',
            'tasks'=>'Custom schedules everyday',
            'tasks1'=>'Desks and workstations cleaning.',
            'tasks2'=>'Washrooms cleaning.',
            'tasks3'=>'Floor cleaning.',
            'tasks4'=>'Waiting area cleaning.',
            'button'=>'GET THIS PLAN',
            ],
            [
                'heading'=>'Large Business',
            'title'=>'per clean / billed weekly',
            'price'=>'$ 399 ',
            'description'=>'This plan is suitable for small businesses and offices. Simply send us the size of your company and we will get back to you with the plan.',
            'tasks'=>'Custom schedules everyday',
            'tasks1'=>'Desks and workstations cleaning.',
            'tasks2'=>'Washrooms cleaning.',
            'tasks3'=>'Floor cleaning.',
            'tasks4'=>'Waiting area cleaning.',

            'button'=>'GET THIS PLAN',
            ]

            ]
            @endphp
            @each( 'components.plan', $items, 'item', 'view.null')

        </div>

</section>
<section class="bg-gray-300">
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
</section>
@endsection

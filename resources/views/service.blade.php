@extends('layouts.app')
@section('content')

<section>
    <div class="bg-indigo-800 bg-opacity-70">
        <div class="inside w-[80%] mx-auto py-[7rem] mt-[3rem] flex flex-col gap-4 ">

            <h1 class="text-white text-[13px] font-semibold">OUR SERVICES</h1>
            <h1 class="text-4xl font-semibold max-w-[30rem] text-white leading-[3rem]">Professional cleaning services for your homes and officess </h1>
            <p class="text-white max-w-[30rem]">We are a professional cleaning company founded in 1997 and providing leading commercial and residential cleaning solutions in the United States.</p>
            <button class=" bg-yellow-500 text-white rounded-md w-[10rem] py-[1rem] font-semibold text-sm">REQUEST A DEMO</button>
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
            <button class="bg-blue-600 text-sm font-semibold text-white max-w-[10rem] p-2 h-[3rem] rounded-md ">MORE SERVICES</button>
        </div>
        <div class='grid tablet:grid-cols-2 laptop1:grid-cols-3 gap-5 mt-7'>

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
<section class="bg-gray-300">
    <div class="inside flex flex-col items-center w-[80%] mx-auto py-[5rem] gap-5 flex justify-between p-5">
        <h1 class="text-sm font-semibold tracking-[0.1rem] ">TESTIMONALS</h1>
        <h1 class="text-3xl font-semibold max-w-[25rem] text-center">Trusted by thousand of
            people & companies.</h1>
        <!-- cards -->
        <div class="flex tablet:flex-row mobileS:flex-col gap-8">
            <div class="bg-white py-8 px-5 flex flex-col gap-7">
                <div class="flex gap-3">
                    <img class="rounded-full h-[3rem] " src="https://www.slashcreative.co/themes/moppers/wp-content/uploads/2019/12/testimonial-1.jpg" />
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
                    <img class="rounded-full h-[3rem] " src="https://www.slashcreative.co/themes/moppers/wp-content/uploads/2019/12/testimonial-2.jpg" />
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
<section class="bg-indigo-800 tablet:mb-[8rem] tablet:h-[25rem]">
    <div class="inside flex flex-col items-center w-[80%] mx-auto py-[5rem] gap-5 justify-between p-5 text-white relative">
        <h1>COST OF CALCULATOR</h1>
        <h1 class="text-2xl font-semibold max-w-[20rem] text-center">Be a part of hundreds
            of happy families.
        </h1>
        <div class="bg-white p-6  flex flex-col gap-6 rounded-md tablet:absolute top-[80%] shadow-md ">
            <div class="">
                <div class="flex tablet:flex-row mobileS:flex-col gap-5 ">
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
                        <label name='floor'>Total Floor Area</label>
                        <input class="max-w-[20rem] rounded-md bg-gray-200 border-[1px] border-gray-300" type="text" placeholder="1590 sq ft" id="floor" />
                    </div>

                </div>


                <!-- inpu2 -->
                <div class="flex tablet:flex-row mobileS:flex-col gap-7">
                    <div class="flex flex-col gap-2">
                        <label class="text-black" name='name'>Your Name</label>
                        <input id="name" name="code" class=" text-sm max-w-[20rem] rounded-md bg-gray-200 border-[1px] border-gray-300" type="text" placeholder="your name" />


                    </div>
                    <div class="flex flex-col text-black gap-2">
                        <label class="text-black" name='code' id="code">Zip Code</label>
                        <input name="code" class=" text-sm max-w-[20rem] rounded-md bg-gray-200 border-[1px] border-gray-300" type="text" placeholder="your area code" />

                    </div>
                    <div class="flex flex-col text-black gap-2">
                        <label name='floor'>Email Address</label>
                        <input class="max-w-[20rem] rounded-md bg-gray-200 border-[1px] border-gray-300" type="text" placeholder="Email A ddress" />
                    </div>

                </div>
                <div class="flex tablet:flex-row mobileS:flex-col gap-[1rem]">
                    <button class="bg-blue-600 text-white font-semibold w-[20rem] p-3 rounded-md text-sm">GET COST ESTIMATE</button>
                    <p class="text-gray-500 italic max-w-[20rem]">Submit this information and we will send you the cost for the service.

                    </p>
                </div>
            </div>
        </div>


    </div>
</section>

<section>
    <div class="inside w-[80%] mx-auto py-[5rem] gap-5">
        <h1>Faq</h1>
        <div class='grid tablet:grid-cols-2 laptop1:grid-cols-3 gap-5 mt-7'>
        @php
$items=[
    [
        'question'=>'How can i register for service?',
        'ans'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.'
    ],
    [
        'question'=>'What if i dont like service?',
        'ans'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
    ],
    [
        'question'=>'Can i adjust the sechdule for cleaning?',
        'ans'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
    ],
    [
        'question'=>'I need detailed pricing plans',
        'ans'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
    ],
    [
        'question'=>'What kind of product you use?',
        'ans'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
    ],
    [
        'question'=>'What if something is broken during cleaning?',
        'ans'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.',
    ],
];
@endphp
@each('components.faq', $items, 'item', 'view.null')


        </div>
</section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(question => {
            question.addEventListener('click', function() {
                const answer = this.nextElementSibling;
                answer.classList.toggle('hidden');
            });
        });
    });
</script>
@endpush
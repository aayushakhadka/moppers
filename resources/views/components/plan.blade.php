<div class="flex flex-col bg-gray-200 border-[1px] border-gray-300 p-8 gap-4 rounded-md">
    <h1 class="text-xl font-semibold">{{$item['heading']}}</h1>
    <h1 class="font-semibold text-2xl">{{$item['price']}}<span class="text-sm font-normal italic">{{$item['title']}}</span></h1>
    <h1 class="text-[13px] max-w-[20rem] ">{{$item['description']}}</h1>
    <div class="flex flex-col text-[13px] gap-2">
    <h1 class="flex flex-col">{{$item['tasks']}}</h1>
    <h1 class="flex flex-col">{{$item['tasks1']}}</h1>
    <h1 class="flex flex-col">{{$item['tasks2']}}</h1>
    <h1 class="flex flex-col">{{$item['tasks3']}}</h1>
    <h1 class="flex flex-col">{{$item['tasks4']}}</h1>
    
    </div>
    <button class="flex items-center justify-center text-white font-semibold p-3 rounded-md bg-blue-600">{{$item['button']}}</button>




</div>
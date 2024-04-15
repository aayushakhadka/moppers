<div class="  rounded-xl border-[1px] flex flex-col relative mb-[4rem]  ">
    <img class=" rounded-t-xl " src='{{$item['imgs']}}'/>
    <div class=" gap-4 p-5 flex flex-col bg-white max-w-[20rem] laptop1:absolute top-[70%] tablet:left-8 shadow-md rounded-lg">
        <div>
    <h1 class="text-gray-500 text-[10px]">{{$item['heading']}}</h1>
    <h1 class="font-semibold ">{{$item['title']}}</h1>
</div>

    <div class="flex gap-3 ">
        <img class="h-[2rem] w-[2rem] rounded-full" src="{{$item['icon']}}"/>
    <h1 class="text-gray-500 text-sm ">{{$item['admin']}}</h1>
    <h1 class="text-gray-500 text-sm">{{$item['date']}}</h1>
</div>
</div>


</div>
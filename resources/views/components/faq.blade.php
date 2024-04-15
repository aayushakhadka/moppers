<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <style>
  .icon {
    /* Adjust styling for the down arrow */
    font-size: 1.2rem;
  }
  
  .accordion-item.active .icon {
    transform: rotate(180deg);  /* Rotate icon 180deg for up arrow */
  }
</style>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 mb-[4rem] ">

    <div class="group">
  <input type="checkbox" id="toggle" class="hidden">
  <label for="toggle" class="icon">
    <svg class="w-4 h-4 fill-current text-gray-600 transition-transform transform group-hover:rotate-180" viewBox="0 0 24 24">
      <path d="M9.293 9.293a1 1 0 011.414 0L12 10.586l1.293-1.293a1 1 0 111.414 1.414l-2 2a1 1 0 01-1.414 0l-2-2a1 1 0 010-1.414z"></path>
    </svg>
  </label>
  <div class="content hidden group-hover:block transition-max-height max-h-0 overflow-hidden">
    Your content here 
    <!-- <div class="accordion-item">
            <div class="flex flex-col">
                <div class="accordion-title bg-white px-4 py-2 flex justify-between items-center cursor-pointer">
                    <h2 class="text-lg font-semibold">{{$item['question']}}</h2>
                    
                </div>
                <div class="accordion-content px-4 py-2 bg-white border-t hidden">
                    <p>{{$item['ans']}}</p>
                </div>
            </div>
        </div>
  </div> -->

<div class="accordion-item">
  <div class="flex flex-col">
    <div class="accordion-title bg-white px-4 py-2 flex justify-between items-center cursor-pointer">
      <h2 class="text-lg font-semibold">{{$item['question']}}</h2>
      <span class="icon transition transform rotate-0">&#9660;</span>  </div>
    <div class="accordion-content px-4 py-2 bg-white border-t hidden">
      <p>{{$item['ans']}}</p>
    </div>
  </div>
</div>



</div>

        

    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-xl mx-auto">
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-title bg-white px-4 py-2 flex justify-between items-center">
                    <h2 class="text-lg font-semibold">{{$item['question']}}</h2>
                    <svg class="w-4 h-4 fill-current text-gray-600 transition-transform transform" viewBox="0 0 24 24">
                        <path d="M9.293 9.293a1 1 0 011.414 0L12 10.586l1.293-1.293a1 1 0 111.414 1.414l-2 2a1 1 0 01-1.414 0l-2-2a1 1 0 010-1.414z"></path>
                    </svg>
                </div>
                <div class="accordion-content px-4 py-2 bg-white border-t">
                    <p>{{$item['ans']}}</p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title bg-white px-4 py-2 flex justify-between items-center">
                    <h2 class="text-lg font-semibold">{{$item['question']}}2</h2>
                    <svg class="w-4 h-4 fill-current text-gray-600 transition-transform transform" viewBox="0 0 24 24">
                        <path d="M9.293 9.293a1 1 0 011.414 0L12 10.586l1.293-1.293a1 1 0 111.414 1.414l-2 2a1 1 0 01-1.414 0l-2-2a1 1 0 010-1.414z"></path>
                    </svg>
                </div>
                <div class="accordion-content px-4 py-2 bg-white border-t">
                    <p>{{$item['ans']}}</p>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-title bg-white px-4 py-2 flex justify-between items-center">
                    <h2 class="text-lg font-semibold">{{$item['question']}}</h2>
                    <svg class="w-4 h-4 fill-current text-gray-600 transition-transform transform" viewBox="0 0 24 24">
                        <path d="M9.293 9.293a1 1 0 011.414 0L12 10.586l1.293-1.293a1 1 0 111.414 1.414l-2 2a1 1 0 01-1.414 0l-2-2a1 1 0 010-1.414z"></path>
                    </svg>
                </div>
                <div class="accordion-content px-4 py-2 bg-white border-t">
                    <p>{{$item['ans']}}/p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const items = document.querySelectorAll('.accordion-item');

            items.forEach(item => {
                const title = item.querySelector('.accordion-title');

                title.addEventListener('click', () => {
                    item.classList.toggle('active');
                });
            });
        });
    </script>
</body>
</html>

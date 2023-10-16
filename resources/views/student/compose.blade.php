<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Departo [Student]</title>
    @vite('resources/css/app.css')
</head>
<body>
   
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.cntQ2ZcMSiQ8DR01bIfDjgHaHa%26pid%3DApi&f=1&ipt=766acddc51cd4580b6f7fe966d7af935963d8c3f529b624c14b701266380bbe5&ipo=images" class="mr-3 h-12 sm:h-9" alt="Departo Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Departo</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="{{ url('track') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Track Your Complaint</a>
        
                </div>
                
            </div>
        </nav>
    </header>

    <section class="flex justify-center text-center bg-white dark:bg-gray-900 mt-12">
        <h3>A form will be here</h3>
    </section>

    
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

</body>
</html>
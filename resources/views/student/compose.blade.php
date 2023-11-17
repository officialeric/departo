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
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 mt-6">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
                <a href="{{ url('/') }}" class="flex items-center">
                    <img src="dist/img/departo.png" class="mr-3 h-12 sm:h-9" alt="Departo Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap ">Departo</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="{{ url('track') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Track Your Complaint</a>
        
                </div>
                
            </div>
        </nav>
    </header>

    <section class="flex justify-center bg-white mt-12">
        

<form action="{{ url('submit-complaint') }}" method="POST">
  @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Compose Complaint</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
  
        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="regno" class="block text-sm font-medium leading-6 text-gray-900">Registration Number</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                {{-- <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">Reg_No/</span> --}}
                <input type="number" name="regno" id="regno" autocomplete="regno" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="220229*****">
              </div>
            </div>
          </div>
  
          <div class="sm:col-span-4">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
            <p class="mt-1 text-sm leading-6 text-gray-600">Use a permanent address where you can receive mail.</p>
            <div class="mt-2">
              <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            
          </div>

          <div class="sm:col-span-3">
            <label for="category" class="block text-sm font-medium leading-6 text-gray-900">Choose Category</label>
            <p class="mt-1 text-sm leading-6 text-gray-600">Choose which category you want to compose a complaint.</p>

            <div class="mt-2">
              <select id="category" name="category" autocomplete="category-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                <option>Examination</option>
                <option>IPT issues</option>
                <option>Registration</option>
              </select>
            </div>
          </div>

          <div class="col-span-full">
            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
            <div class="mt-2">
              <textarea id="about" name="description" rows="3" class="pl-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
            <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences to describe your complaint.</p>
          </div>
  
        </div>
      </div>
      </div>

      
{{--   
      <div class="border-b border-gray-900/10 pb-12">
       
        
      </div> --}}
    </div>
  
    <div class="mt-2 flex items-center justify-end gap-x-6">
      <button type="reset" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
    </div>
  </form>
  

    </section>

    
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

</body>
</html>
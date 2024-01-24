<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="//cdn.quilljs.com/1.0.0/quill.min.js"></script>
    <link href="//cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet" /> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body class="bg-primary text-white font-inconsolata">
@vite('resources/css/app.css')
<div class="flex flex-row overflow-hidden relative pl-spacing-64">
   <div class="z-40 w-72 top-0 left-0 transition-transform">
      <nav id="default-sidebar" class="fixed opacity-80 w-60 h-screen" aria-label="Sidebar">
         <div id="sidebar" class="h-full py-4 overflow-y-auto bg-secondary">
         <a href="/" class="flex items-center space-x-3 mb-5 mt-3 ml-4 rtl:space-x-reverse">
            <img src="{{ url('img/ccug.png') }}" class="h-10" alt="CCUG Logo"/>
         </a>
         <div class="my-spacing-8 border-solid border-t border-neutral-200"></div>
            <ul class="space-y-2 mt-5 px-3 text-md">
            <li>
                  <a href="{{ route('course.index') }}" class="flex items-center p-2 text-white rounded-lg hover:text-black dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <img src="{{ url('img/asset.png') }}" />
                     <span class="ms-3 font-arial">Users</span>
                  </a>
               </li>
               <li>
                  <a href="{{ route('admin.add-course') }}" class="flex items-center p-2 text-white rounded-lg hover:text-black dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <img src="{{ url('img/asset.png') }}" />
                     <span class="ms-3 font-arial">Add Course</span>
                  </a>
               </li>
               <li>
                  <a href="{{ route('admin.add-lesson') }}" class="flex items-center p-2 text-white rounded-lg hover:text-black dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <img src="{{ url('img/asset.png') }}" />
                     <span class="ms-3 font-arial">Add Lesson</span>
                  </a>
               </li>
               <li>
                  <a href="{{ route('admin.add-chall') }}" class="flex items-center p-2 text-white rounded-lg hover:text-black dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <img src="{{ url('img/asset.png') }}" />
                     <span class="ms-3 font-arial">Add Challenge</span>
                  </a>
               </li>
               <li>
                  <a href="{{route('logout')}}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:text-black hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <img src="{{ url('img/asset-6.png') }}" />
                     <span class="ms-3">Logout</span>
                  </a>
               </li>
            </ul>
         </div>
      </nav>
   </div>
@yield('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</div>



</body>

</html>

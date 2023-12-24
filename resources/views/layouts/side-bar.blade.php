<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body class="bg-primary text-white">
@vite('resources/css/app.css')
<div class="flex flex-row overflow-hidden relative pl-spacing-64">
<nav id="default-sidebar" class="top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div id="sidebar" class="h-full px-3 py-4 overflow-y-auto bg-secondary">
   <a href="/" class="flex items-center space-x-3 mb-5 mt-3 ml-4 rtl:space-x-reverse">
        <img src="{{ url('img/ccug.png') }}" class="h-10" alt="CCUG Logo"/>
    </a>
    <div class="my-spacing-8 border-solid border-t border-neutral-200"></div>
      <ul class="space-y-2 mt-5 font-medium">
         <li>
            <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <img src="{{ url('img/asset.png') }}" />
               <span class="ms-3 font-arial">Courses</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <img src="{{ url('img/asset-1.png') }}" />
               <span class="ms-3 font-arial">Challenges</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <img src="{{ url('img/asset-2.png') }}" />
               <span class="ms-3">Scoreboard</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <img src="{{ url('img/asset-3.png') }}" />
               <span class="ms-3">Blog</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <img src="{{ url('img/asset-4.png') }}" />
               <span class="ms-3">FAQ</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <img src="{{ url('img/asset-5.png') }}" />
               <span class="ms-3">Profile</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <img src="{{ url('img/asset-6.png') }}" />
               <span class="ms-3">Logout</span>
            </a>
         </li>
      </ul>
   </div>
</nav>
@yield('content')
</div>



</body>

</html>

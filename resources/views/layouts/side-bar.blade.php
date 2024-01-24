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
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

   <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
   <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-my_primary text-white font-inconsolata">
@vite('resources/css/app.css')
<div class="flex flex-row overflow-hidden relative pl-spacing-64">
   <div class="z-40 w-72 top-0 left-0 transition-transform">
      <nav id="default-sidebar" class="fixed opacity-80 w-60 h-screen" aria-label="Sidebar">
         <div id="sidebar" class="h-full py-4 overflow-y-auto bg-my_secondary">
         <a href="/" class="flex items-center space-x-3 mb-5 mt-3 ml-4 rtl:space-x-reverse">
            <img src="{{ url('img/ccug.png') }}" class="h-10" alt="CCUG Logo"/>
         </a>
         <div class="my-spacing-8 border-solid border-t border-neutral-200"></div>
            <ul class="space-y-2 mt-5 px-3 text-md">
            <li>
                  <a href="{{ route('users.index') }}" class="flex items-center p-2 text-white rounded-lg hover:text-black dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <img src="{{ url('img/asset.png') }}" />
                     <span class="ms-3 font-arial">Users</span>
                  </a>
               </li>
               <li>
                  <a href="{{ route('admin-course.index') }}" class="flex items-center p-2 text-white rounded-lg hover:text-black dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                     <img src="{{ url('img/asset.png') }}" />
                     <span class="ms-3 font-arial">Add Course</span>
                  </a>
               </li>
               <li>
                  <a href="{{ route('admin-lesson.index') }}" class="flex items-center p-2 text-white rounded-lg hover:text-black dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
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


</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

@yield('custom_scripts')
@stack('scripts')
</body>

</html>

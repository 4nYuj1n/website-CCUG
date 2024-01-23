@extends(auth()->guest() ? 'layouts.top-bar' : 'layouts.top-bar-auth')


@section('content')
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<div class="w-full min-h-screen h-full">
    <div class="w-full py-10 text-center text-4xl">
        Lesson
    </div>
    <div class="w-full py-20 justify-items-center grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-24">
    <a href="{{route('home')}}" class="shadow-lg shadow-black rounded-2xl bg-secondary mb-10 mr-12 w-72 items-center flex flex-col px-10 py-5 border-2 border-gray-50">
        <div class="text-4xl pb-3">
            RSA
        </div>
        <img src="{{  url('img/keys-01.jpg') }}" class="h-64 w-48 rounded-lg">
        <div class="mt-5 p-2 text-xl bg-primary rounded-lg shadow-lg shadow-black ">5 lessons</div>
    </a>
    
    </div>
</div>
@endsection
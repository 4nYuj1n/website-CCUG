@extends(auth()->guest() ? 'layouts.top-bar' : 'layouts.top-bar-auth')


@section('content')

<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<div class="w-full min-h-screen h-full">
    <div class="w-full py-10 text-center text-4xl">
        Courses
    </div>
    <div class="w-full py-20 justify-items-center grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-24">

    @foreach ( $data as $i)
    <a href="{{route('course.show',['course'=>$i->title])}}" class="shadow-lg shadow-black rounded-2xl bg-my_secondary mb-10 mr-12 w-72 flex flex-col px-10 py-5 border-2 border-gray-50">
        <div class="text-4xl">
            {{$i->title}}
        </div>
        <div class="text-sm text-gray-400 pb-3">
            by {{$i->creator}}
        </div>
        <img src="{{  url('img/keys-01.jpg') }}" class="h-64 w-48 rounded-lg">
        <div class="mt-5 p-2 text-xl text-center ">5 lessons</div>
    </a> 
    @endforeach
    </div>

    
</div>
@endsection
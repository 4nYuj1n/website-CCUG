@extends(auth()->guest() ? 'layouts.top-bar' : 'layouts.top-bar-auth')


@section('content')
<div class="max-w-screen-xl flex flex-col items-center justify-between mx-auto p-20">

    <h1 class=" text-5xl text-center">
        Cyber Community Universitas Gunadarma
    </h1>
    <p class="p-2">
        CTF Team Universitas Gunadarma
    </p>
    <img src="{{ url('img/ccug_logo.png') }}" height="368" width="268">
    <p class="p-5">
    Tertarik dengan dunia Cyber Security?
    </p>
    <button type="button" class="border-2 rounded-md px-5 bg-my_secondary border-gray-20 p-2" width="160" height="58" >
        About Us
    </button>
</div>

@endsection

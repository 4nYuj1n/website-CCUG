@extends('layouts.top-bar')


@section('content')
<div class="max-w-screen-xl flex flex-col items-center justify-between mx-auto p-20">
    <h1 class="text-5xl text-center">
        Cyber Community Universitas Gunadarma
    </h1>
    <p class="p-2">
        CTF Team Universitas Gunadarma
    </p>
    <img src="{{ url('img/ccug_logo.png') }}" height="368" width="268">
    <p class="p-5">
    Tertarik dengan dunia Cyber Security?
    </p>
    <a href="{{route('about-us')}}" type="button" class="bg-[#140C2C] border-[1px] rounded-md px-5 p-2" width="160" height="58" >
        About Us
    </a>
</div>
@endsection
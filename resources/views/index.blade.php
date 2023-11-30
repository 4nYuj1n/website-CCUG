@extends('layouts.navbar')

@section('content')
<body class="font-serif">
<div class="w-full" style="background-image: url('img/Gen11.jpeg'); background-size: cover; background-position: center;">
    <div class="max-w-screen-xl mx-auto p-8 md:p-20 text-white">
        <div class="flex flex-col items-center justify-center text-center">
            <h1 class="text-4xl md:text-5xl font-bold">
                Cyber Community Universitas Gunadarma
            </h1>
            <p class="mt-2">
                CTF Team Universitas Gunadarma
            </p>
            <img src="{{ asset('img/ccug.png') }}" width="300" alt="hero banner" class="mt-8">
            <p class="mt-8">
                Tertarik dengan dunia Cyber Security?
            </p>
            <li class="nav-item">
                    <a class="btn btn-primary" href="#" role="button">ABOUT US</a>
                </li>
        </div>
    </div>
</div>
</body>
@endsection

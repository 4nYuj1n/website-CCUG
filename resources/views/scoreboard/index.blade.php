@extends('layouts.top-bar')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<div class="w-full flex flex-col justify-between py-20 px-32">
    <div class="">
        Scoreboard
    </div>
    <div class="">
        Peringkat
    </div>
    <div class="max-w-screen-xl flex flex-col">
        <div class="w-full border-b border-gray-100/30 flex flex-row items-center px-5">
            <div class="flex-1 flex py-2">
                Rank
            </div>
            <div class="flex-1 flex py-2">
                Username
            </div>
            <div class="flex-1 flex py-2">
                Score
            </div>
        </div>
        <div class="w-full flex flex-row items-center px-5 bg-secondary">
            <div class="flex-1 flex py-2">
                #1
            </div>
            <div class="flex-1 flex py-2">
                AnYujin
            </div>
            <div class="flex-1 flex py-2">
                12342
            </div>
        </div>
        <div class="w-full flex flex-row items-center px-5 ">
            <div class="flex-1 flex py-2">
                #2
            </div>
            <div class="flex-1 flex py-2">
                AnYujoin
            </div>
            <div class="flex-1 flex py-2">
                12332
            </div>
        </div>
    </div>    
</div>
@endsection
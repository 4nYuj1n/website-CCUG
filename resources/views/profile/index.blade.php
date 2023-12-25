@extends('layouts.side-bar')

@section('content')
<div class="max-w-screen-xl px-6 w-full flex flex-col py-20">
    <div class="pb-20">
        <div class="flex flex-row">
            <div class="text-5xl">
                AnYujin
            </div>
            <div class="text-lg">
                #23
            </div>
        </div>
    <div class="text-sm text-stone-400">
        freedom1jossie@gmail.com
    </div>
    </div>
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between text-lg bg-secondary rounded-lg shadow-black text-white shadow-lg">
        <div class="px-7 flex-1 flex flex-col space-y-3 py-5">
            <div class="flex flex-row">Joined :<div class="px-3"> 27 november 2023</div> </div>
            <div class="flex flex-row">Blog Post :<div class="px-3"> 13</div> </div>
            <div class="flex flex-row">Challenges Solved :<div class="px-3"> 78</div> </div>
        </div>
        <div class="items-end flex-1 flex flex-col space-y-3 py-5 px-20">
            <div class="flex flex-row"><img src="{{ url('img/asset-star.png') }}" class="w-5 h-5"><div class="px-5"> 126820</div> </div>
            <div class="flex flex-row">Joined :<div class="px-3"> 27 november 2023</div> </div>
            <div class="flex flex-row">Joined :<div class="px-3"> 27 november 2023</div> </div>
        </div>
    </div>

    <div class="my-10">
        <div class="text-2xl pb-3">
            SOLVED PROBLEM
        </div>
        <div class="max-w-screen-xl px-2 py-2 flex flex-row items-center justify-between text-lg bg-secondary rounded-sm text-white">
            <div>
                20 August 2022
            </div>
            <div>
                Kang Bakso Keliling
            </div>
            <div>
                Cryptography
            </div>
            <div class="flex flex-row space-x-2 px-2">
                <img src="{{ url('img/asset-star.png') }}" class="h-3">
                <div class="text-md">500</div>
            </div>
        </div>
        <div class="max-w-screen-xl px-2 py-2 flex flex-row items-center justify-between text-lg bg-primary rounded-sm text-white">
            <div>
                20 August 2022
            </div>
            <div>
                Kang Bakso Keliling
            </div>
            <div>
                Cryptography
            </div>
            <div class="flex flex-row space-x-2 px-2">
                <img src="{{ url('img/asset-star.png') }}" class="h-3">
                <div class="text-md">500</div>
            </div>
        </div>
        <div class="max-w-screen-xl px-2 py-2 flex flex-row items-center justify-between text-lg bg-secondary rounded-sm text-white">
            <div>
                20 August 2022
            </div>
            <div>
                Kang Bakso Keliling
            </div>
            <div>
                Cryptography
            </div>
            <div class="flex flex-row space-x-2 px-2">
                <img src="{{ url('img/asset-star.png') }}" class="h-3">
                <div class="text-md">500</div>
            </div>
        </div>
    </div>
</div>
@endsection
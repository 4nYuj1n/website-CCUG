@extends(auth()->guest() ? 'layouts.top-bar' : 'layouts.top-bar-auth')


@section('content')
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<div class="w-full min-h-screen h-full">
    <div class="w-full py-10 text-center text-4xl">
        Challenges
    </div>
    <div>
        <div class="w-full px-10 text-3xl ">Cryptography</div>
        <div class="w-full py-20 justify-items-center grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-y-24 gap-x-10 px-8">
        <div class="group shadow-sm shadow-black rounded-xl bg-my_secondary w-full items-center flex flex-col py-3 hover:bg-purple-950 border-2 border-gray-50">
            <div class="text-2xl pb-2">
                Baby RSA
            </div>
            <div class="text-2xl pb-2">
                50
            </div>
        </div>
        <div class="group shadow-sm shadow-black rounded-xl bg-my_secondary w-full items-center flex flex-col py-3 hover:bg-purple-950 border-2 border-gray-50">
            <div class="text-2xl pb-2">
                 RSA
            </div>
            <div class="text-2xl pb-2">
                100
            </div>
        </div>
        </div>
    </div>
    <div>
        <div class="w-full px-10 text-3xl ">Forensic</div>
        <div class="w-full py-20 justify-items-center grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-y-24 gap-x-10 px-8">
        <div class="group shadow-sm shadow-black rounded-xl bg-my_secondary w-full items-center flex flex-col py-3 hover:bg-purple-950 border-2 border-gray-50">
            <div class="text-2xl pb-2">
                Hidden Message
            </div>
            <div class="text-2xl pb-2">
                50
            </div>
        </div>
        <div class="group shadow-sm shadow-black rounded-xl bg-my_secondary w-full items-center flex flex-col py-3 hover:bg-purple-950 border-2 border-gray-50">
            <div class="text-2xl pb-2">
                LSB
            </div>
            <div class="text-2xl pb-2">
                100
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
@extends(auth()->guest() ? 'layouts.top-bar' : 'layouts.top-bar-auth')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<div class="w-full min-h-screen h-full">
    <div class="w-full py-10 text-center text-4xl">
        Challenges
    </div>
    <div class="w-full py-20 justify-items-center grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-y-24 gap-x-10 px-8">
        <div class="group shadow-sm shadow-black rounded-xl bg-secondary w-full items-center flex flex-col py-3 hover:bg-purple-950 border-2 border-gray-50">
            <div class="text-3xl pb-2">
                Category 1
            </div>
        
            <div class="mt-5 py-1 px-2 text-lg bg-primary group-hover:bg-purple-900 rounded-md">0 / 9</div>
        </div>
        <div class="group shadow-sm shadow-black rounded-xl bg-secondary w-full items-center flex flex-col py-3 hover:bg-purple-950 border-2 border-gray-50">
            <div class="text-3xl pb-2">
                Category 1
            </div>
        
            <div class="mt-5 py-1 px-2 text-lg bg-primary group-hover:bg-purple-900 rounded-md">0 / 9</div>
        </div>
        <div class="group shadow-sm shadow-black rounded-xl bg-secondary w-full items-center flex flex-col py-3 hover:bg-purple-950 border-2 border-gray-50">
            <div class="text-3xl pb-2">
                Category 1
            </div>
        
            <div class="mt-5 py-1 px-2 text-lg bg-primary group-hover:bg-purple-900 rounded-md">0 / 9</div>
        </div>
        <div class="group shadow-sm shadow-black rounded-xl bg-secondary w-full items-center flex flex-col py-3 hover:bg-purple-950 border-2 border-gray-50">
            <div class="text-3xl pb-2">
                Category 1
            </div>
        
            <div class="mt-5 py-1 px-2 text-lg bg-primary group-hover:bg-purple-900 rounded-md">0 / 9</div>
        </div>
    </div>
</div>
@endsection
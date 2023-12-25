@extends('layouts.side-bar')

@section('content')
<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
<div class="max-w-screen-xl flex flex-wrap justify-between p-20">
    <div class="shadow-lg shadow-black rounded-2xl bg-secondary mb-10 mr-10 w-72 items-center flex flex-col px-10 py-5">
        <div class="text-4xl pb-3">
            RSA
        </div>
        <div class="text-stone-300 flex flex-wrap">
            <div class="shadow-lg shadow-black  bg-primary rounded-lg w-fit mb-3 ml-2 px-2">
                #cryptography
            </div>
            <div class="shadow-lg shadow-black  bg-primary rounded-lg w-fit mb-3 ml-2 px-2">
                #beginner
            </div>
            <div class="shadow-lg shadow-black  bg-primary rounded-lg w-fit mb-3 ml-2 px-2">
                #lorem
            </div>
            
        </div>
        <img src="{{  url('img/keys-01.jpg') }}" class="h-64 w-48 rounded-lg">
        <div class="mt-5 p-2 text-xl bg-primary rounded-lg shadow-lg shadow-black ">5 lessons</div>
    </div>
    <div class="shadow-lg shadow-black rounded-2xl bg-secondary mb-10 mr-10 w-72 items-center flex flex-col px-10 py-5">
        <div class="text-4xl pb-3">
            AES
        </div>
        <div class="text-stone-300 flex flex-wrap">
            <div class=" shadow-lg shadow-black  bg-primary rounded-lg w-fit mb-3 ml-2 px-2">
                #cryptography
            </div>
            <div class="shadow-lg shadow-black  bg-primary rounded-lg w-fit mb-3 ml-2 px-2">
                #beginner
            </div>
            <div class="shadow-lg shadow-black  bg-primary rounded-lg w-fit mb-3 ml-2 px-2">
                #lorem
            </div>
            
        </div>
        <img src="{{  url('img/keys-01.jpg') }}" class="h-64 w-48 rounded-lg">
        <div class="mt-5 p-2 text-xl bg-primary rounded-lg shadow-lg shadow-black ">5 lessons</div>
    </div>
    <div class="shadow-lg shadow-black rounded-2xl bg-secondary mb-10 mr-10 w-72 items-center flex flex-col px-10 py-5">
        <div class="text-4xl pb-3">
            DSA
        </div>
        <div class="text-stone-300 flex flex-wrap">
            <div class="shadow-lg shadow-black  bg-primary rounded-lg w-fit mb-3 ml-2 px-2">
                #cryptography
            </div>
            <div class="shadow-lg shadow-black  bg-primary rounded-lg w-fit mb-3 ml-2 px-2">
                #beginner
            </div>
            <div class="shadow-lg shadow-black  bg-primary rounded-lg w-fit mb-3 ml-2 px-2">
                #lorem
            </div>
            
        </div>
        <img src="{{  url('img/keys-01.jpg') }}" class="h-64 w-48 rounded-lg">
        <div class="mt-5 p-2 text-xl bg-primary rounded-lg shadow-lg shadow-black ">5 lessons</div>
    </div>
    <div class="shadow-lg shadow-black rounded-2xl bg-secondary mb-10 mr-10 w-72 items-center flex flex-col px-10 py-5">
        <div class="text-4xl pb-3">
            DSA
        </div>
        <div class="text-stone-300 flex flex-wrap">
            <div class="shadow-lg shadow-black  bg-primary rounded-lg w-fit mb-3 ml-2 px-2">
                #cryptography
            </div>
            <div class="shadow-lg shadow-black  bg-primary rounded-lg w-fit mb-3 ml-2 px-2">
                #beginner
            </div>
            <div class="shadow-lg shadow-black  bg-primary rounded-lg w-fit mb-3 ml-2 px-2">
                #lorem
            </div>
            
        </div>
        <img src="{{  url('img/keys-01.jpg') }}" class="h-64 w-48 rounded-lg">
        <div class="mt-5 p-2 text-xl bg-primary rounded-lg shadow-lg shadow-black ">5 lessons</div>
    </div>
    
</div>
@endsection
@extends('layouts.top-bar')

@section('content')
<div class="max-w-screen-xl flex flex-col items-center justify-between mx-auto p-20">
    <div class="bg-secondary pb-10 pt-5 px-36 rounded-3xl shadow-black shadow-lg">
    <h1 class="pb-5 text-5xl text-center mb-2">
        Login
    </h1>
    <form class="card card-md form-control" action="{{ route('login.post') }}" method="post" autocomplete="off">
        @csrf

        <div class="card-body flex flex-col">

            <div class="mb-3 flex flex-col space-y-2">
                <label class="form-label">Username or Email</label>
                <input type="email" name="email" value="" class="text-black px-3 form-control @error('email') is-invalid @enderror w-80 rounded-lg h-9 bg-gray-300" placeholder="Email" required autofocus tabindex="1">
            </div>

            <div class="mb-3 flex flex-col">
                <label class="form-label">
                    Password
                </label>
                <input type="password" name="password" class="text-black px-3 mb-2 form-control w-80 rounded-lg h-9 bg-gray-200" placeholder="Password" required tabindex="2">
            </div>
        </div>
        <div class="mb-3 flex flex-row justify-between">
            <div class="mb-3"><a href="{{ route('login.forgot-password')}}">Forgot Password? </a></div>
            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn bg-secondary border-[1px] rounded-md px-5 p-2" type="submit">Login</button>
        </div>
    </form>
    </div>
</div>
@endsection
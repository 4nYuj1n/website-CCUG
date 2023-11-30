@extends('layouts.navbar')

@section('content')
<div class="max-w-screen-xl flex flex-col items-center justify-between mx-auto p-20">
    <h1 class="text-black text-5xl text-center border mb-2">
        Register
    </h1>
    <form class="card card-md" action="{{ route('register.post') }}" method="post" autocomplete="off">
        @csrf
        <div class="card-body flex flex-col">
            <div class="mb-3 flex flex-col space-y-2">
                <label class="form-label">Username</label>
                <input type="email" name="email" value="" class="form-control @error('email') is-invalid @enderror w-80 rounded-lg h-11 bg-gray-300" placeholder="Username" required autofocus tabindex="1">
            </div>
            <div class="mb-3 flex flex-col space-y-2">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="" class="form-control @error('email') is-invalid @enderror w-80 rounded-lg h-11 bg-gray-300" placeholder="Email" required autofocus tabindex="1">
            </div>

            <div class="mb-3 flex flex-col">
                <label class="form-label">
                    Password
                </label>
                <input type="password" name="password" class="form-control w-80 rounded-lg h-11 bg-gray-300" placeholder="Password" required tabindex="2">
            </div>
        </div>
        <div class="mt-3 flex flex-row justify-between">
            <div class="mt-2"><a href="">Forgot Password? </a></div>
            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn bg-gray-300 rounded-md h-11 w-32" type="submit">Login</button>
        </div>
    </form>
</div>
@endsection
@extends('layouts.navbar')

@section('content')
<div class="max-w-screen-xl flex flex-col items-center justify-between mx-auto p-20">
    <h1 class="text-black text-5xl text-center">
        Login
    </h1>
    <form class="card card-md" action="#" method="post" autocomplete="off">
        @csrf

        <div class="card-body flex flex-col">
            <h2 class="card-title text-center mb-4">Login</h2>

            <div class="mb-3">
                <label class="form-label">Username or Email</label>
                <input type="email" name="email" value="" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required autofocus tabindex="1">
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Masukkan Password
                </label>
                <input type="password" name="password" class="form-control" placeholder="Password" required tabindex="2">
            </div>
        </div>
    </form>
</div>
@endsection
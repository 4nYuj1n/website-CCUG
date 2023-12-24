@extends('layouts.top-bar')

@section('content')
<div class="max-w-screen-xl flex flex-col items-center justify-between mx-auto p-20">
    <h1 class=" text-5xl text-center mb-4">
        Forgot Password
    </h1>
    <form class="card card-md" action="{{ route('login.post') }}" method="post" autocomplete="off">
        @csrf

        <div class="card-body flex flex-col">

            <div class="mb-3 flex flex-col space-y-2">
                <label class="form-label">Input your Email</label>
                <input type="email" name="email" value="" class="form-control @error('email') is-invalid @enderror w-80 rounded-md h-9 bg-gray-300" placeholder="Email" required autofocus tabindex="1">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn bg-gray-300 rounded-lg h-9 w-32 center">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
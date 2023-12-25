@extends('layouts.top-bar')

@section('content')
<div class="max-w-screen-xl flex flex-col items-center justify-between mx-auto p-20">
<div class="bg-secondary pb-10 pt-5 px-36 rounded-3xl shadow-black shadow-lg">

    <h1 class=" text-5xl text-center pb-5">
        Forgot Password
    </h1>
    <form class="card card-md" action="{{ route('login.post') }}" method="post" autocomplete="off">
        @csrf

        <div class="card-body flex flex-col">

            <div class="mb-3 flex flex-col space-y-3">
                <label class="form-label">Email / Username</label>
                <input type="email" name="email" value="" class="px-3 form-control @error('email') is-invalid @enderror rounded-md h-9 bg-gray-300" placeholder="Email" required autofocus tabindex="1">
                <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn bg-secondary border-[1px] rounded-md px-5 py-2" type="submit">Submit</button>

            </div>
        </div>
    </form>
</div>
</div>
@endsection
@extends('layouts.side-bar')


@section('content')
<div class="max-w-screen-xl flex flex-col items-center justify-between mx-auto p-20">

    <h1 class=" text-5xl text-center py-5">
        Create new user
    </h1>
    <form class="card card-md form-control" action="{{ route('users.store') }}" method="post" autocomplete="off">
        @csrf

        <div class="card-body flex flex-col ">

            <div class="mb-3 flex flex-col space-y-2">
                <label class="form-label">Username</label>
                <input type="name" name="name" value="" class="text-black px-3 form-control @error('email') is-invalid @enderror w-80 rounded-lg h-9 bg-gray-300" placeholder="Username" required autofocus tabindex="1">
            </div>

            <div class="mb-3 flex flex-col space-y-2">
                <label class="form-label">Email</label>
                <input type="email" name="email" value="" class="text-black px-3 form-control @error('email') is-invalid @enderror w-80 rounded-lg h-9 bg-gray-300" placeholder="Email" required autofocus tabindex="1">
            </div>
            <div class="mb-3 flex flex-col space-y-2">
                <label class="form-label">Password</label>
                <input type="password" name="password" value="" class="text-black px-3 form-control @error('email') is-invalid @enderror w-80 rounded-lg h-9 bg-gray-300" placeholder="Password" required autofocus tabindex="1">
            </div>
            <div class="mb-3 flex flex-col space-y-2">
            <label class="form-label">Role</label>
            <select name="role" class="text-black px-3 form-control @error('email') is-invalid @enderror w-80 rounded-lg h-9 bg-gray-300">
                <option value='1'>Admin</option>
                <option value='2'>User</option>

            </select>
            </div>
        </div>
        <div class="mb-3 flex flex-row justify-between">
            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn bg-my_secondary border-[1px] rounded-md px-5 p-2" type="submit">Add</button>
        </div>
    </form>
</div>

@endsection

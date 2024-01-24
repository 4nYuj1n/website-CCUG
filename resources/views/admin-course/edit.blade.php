@extends('layouts.side-bar')


@section('content')

<div class="max-w-screen-xl flex flex-col items-center justify-between mx-auto p-20">

    <h1 class=" text-5xl text-center py-5">
        Update course
    </h1>
    <form class="card card-md form-control" action="{{ route('admin-course.update',['admin_course'=>$data->id]) }}" enctype="multipart/form-data" method="post" autocomplete="off">
    @method('PUT')    
    @csrf

        <div class="card-body flex flex-col ">

            <div class="mb-3 flex flex-col space-y-2">
                <label class="form-label">Title</label>
                <input type="title" name="title" value="{{$data->title}}" class="text-black px-3 form-control @error('email') is-invalid @enderror w-80 rounded-lg h-9 bg-gray-300" placeholder="Title" required autofocus tabindex="1">
            </div>

            <div class="mb-3 flex flex-col">
                <label class="form-label">
                    Gambar
                </label>
                <input type="file" name="gambar" class="text-black px-3 mb-2 form-control w-80 rounded-lg h-9 bg-gray-200" placeholder="{{ $data->gambar }}" required tabindex="2">
            </div>
        </div>
        <div class="mb-3 flex flex-row justify-between">
            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn bg-my_secondary border-[1px] rounded-md px-5 p-2" type="submit">Update</button>
        </div>
    </form>
</div>

@endsection

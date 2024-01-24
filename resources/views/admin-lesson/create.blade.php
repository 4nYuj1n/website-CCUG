@extends('layouts.side-bar')


@section('content')
<script src="//cdn.quilljs.com/1.0.0/quill.min.js"></script>
<link href="//cdn.quilljs.com/1.0.0/quill.snow.css" rel="stylesheet" /> 
<div class="w-full flex flex-col p-20">

    <h1 class=" text-5xl text-center py-5">
        Add new lesson
    </h1>
    <form class="card card-md form-control" action="{{ route('admin-lesson.store') }}" method="post" autocomplete="off">
        @csrf

        <div class="card-body flex flex-col ">

            <div class="mb-3 flex flex-col space-y-2">
                <label class="form-label">Course</label>
                <select name="id_course" value="" class="text-black px-3 form-control @error('email') is-invalid @enderror w-80 rounded-lg h-9 bg-gray-300" placeholder="Title" required autofocus tabindex="1">
                    @foreach ($data as $i )
                    <option value="{{ $i->id }}">{{ $i->title }}</option>
                        
                    @endforeach
                </select>
            </div>
            <div class="mb-3 flex flex-col space-y-2">
                <label class="form-label">Title</label>
                <input type="title" name="title" value="" class="text-black px-3 form-control @error('email') is-invalid @enderror w-80 rounded-lg h-9 bg-gray-300" placeholder="Title" required autofocus tabindex="1">
            </div>
            
            <div class="mb-3 flex flex-col space-y-2">
                <label class="form-label">Content</label>
                <textarea name="content" value="" class="text-black px-3 form-control @error('email') is-invalid @enderror w-10/12 rounded-lg h-52 bg-gray-300" placeholder="Title" required autofocus tabindex="1">
                </textarea>
            </div>
        </div>
        <div class="mb-3 flex flex-row justify-between">
            <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn bg-my_secondary border-[1px] rounded-md px-5 p-2" type="submit">Add</button>
        </div>
    </form>
</div>
@endsection


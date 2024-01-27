@extends(auth()->guest() ? 'layouts.top-bar' : 'layouts.top-bar-auth')

@section('content')
<div class="mx-auto max-w-4xl p-5 items-center">
    <div class="px-32">
    <img src="{{ url('img/24487817_6962105.svg') }}" height="600" width="600">
    </div>
    <h1 class="text-4xl text-center ">
    Fitur ini sedang dirancang
    </h1>
</div>
@endsection
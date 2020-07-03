@extends('template.main')
@section('title', 'Larahub Home')
@section('content')

<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Welcome To LaraHub!
        </div>

        <div class="links">
            <a href="{{url('/')}}">Home</a>
            <a href="{{url('/pertanyaan')}}">Forum</a>
        </div>
    </div>
</div>
@endsection

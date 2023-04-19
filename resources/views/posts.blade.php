@extends('layout.default')

@section('title')
POSTS
@endsection

@section('content')
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
     @foreach ($posts as $post)
         @include('layout.components.post')
     @endforeach
    </div >
@endsection







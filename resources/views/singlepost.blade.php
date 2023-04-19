@extends('layout.default')
@section('content')
<h1>{{$post->title}}</h1>
<p>{{$post->body}}</p>

<form action='createcomment' method='POST'>
    @csrf
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Body</label>
        <textarea type="text" class="form-control" name="body"></textarea>
        <input type="hidden" value="{{$post->id}}" name="post_id">
      </div>
      <button type="submit" class="btn btn-primary">Create Post</button>
</form>

@foreach ($post->comments as $comment)
<div class="container">
    <p>{{$comment->body}}</p>
</div>
@include('layout.error')
@include('layout.status')
    
@endforeach
@endsection


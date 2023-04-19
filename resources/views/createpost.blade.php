@extends('layout.default')
@section('content')
<div>
<form action="{{url('create')}}" method="POST">
  @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" class="form-control" name="title" aria-describedby="emailHelp">
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Body</label>
      <textarea type="text" class="form-control" name="body"></textarea>
    </div>
 
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Img-url</label>
        <input type="text" class="form-control" name="img_url" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
    
    <button type="submit" class="btn btn-primary">Create Posts</button>
  </form>
</div>
@include('layout.error')
@include('layout.status')
@endsection
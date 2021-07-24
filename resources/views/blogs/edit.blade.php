@extends('layout.app')



@section('navbar')

<?php
$id_url=$post['id']
?>
  {{ Form::open(array('url' => "/blogs/$id_url", 'method' => 'PUT', 'class'=>'col-md-12')) }}
@csrf
{{ method_field('PUT') }}
<div class="mb-3">
  
  <label for="formGroupExampleInput" class="form-label">Title</label>
  <input type="text" class="form-control" id="formGroupExampleInput" value='{{$post ? $post['title'] : ""}}' placeholder="Title" name="title">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Description</label>
  <textarea type="text" class="form-control" id="formGroupExampleInput3"  placeholder="Description" name="description">{{$post ? $post['description'] : ""}}</textarea>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Author</label>
  <select name='user_id'>
    @foreach ($users as $user)
    <option value={{$user['id']}} {{$post['user_id']==$user['id'] ? "selected" : null}}>{{$user['name']}}</option>
    
    @endforeach
    
  </select>
</div>

<div class="mb-3">
    <button class="btn btn-primary">Add blog</button>
</div>
{{ Form::close() }}
@endsection
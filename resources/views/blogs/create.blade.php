@extends('layout.app')



@section('navbar')


<form method="POST" action="{{route('blogs.store')}}">
@csrf

<div class="mb-3">
  
  <label for="formGroupExampleInput" class="form-label">Title</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Title" name="title">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Description</label>
  <textarea type="text" class="form-control" id="formGroupExampleInput3"  placeholder="Description" name="description"></textarea>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Author</label>
  <select name='user_id'>
    @foreach ($users as $user)
    <option value={{$user['id']}}>{{$user['name']}}</option>
    
    @endforeach
    
  </select>
</div>

<div class="mb-3">
    <button class="btn btn-primary">Add blog</button>
</div>
</form>
@endsection
@extends('layout.app')


@section('navbar')

<div class='mb-3 mt-3'>
  <a class="btn btn-success" href="{{route('blogs.create')}}">Create Post</a>
</div>  

<table class="table container mt-5">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">posted_by</th>
      <th scope="col">created_at</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
@foreach ($posts as $post)
    <tr>
      <th scope="row">{{ ($loop->index)+1 }}</th>
      <td>{{$post['title']}}</td>
      <td>{{$post->myUserRealation ? $post->myUserRealation->name : "user not found"}}</td>
      <td>{{$post['created_at']}}</td>
      <td>
        <a class="btn btn-primary" href="/blogs/{{$post['id']}}">View</a>
        <a class="btn btn-info" >Edit</a>
        <a class="btn btn-danger" href='/showerrormsg/{{$post['id']}}'>Delete</a>
        <!--
        1-confirmation msg 
        2-delete it 
        -->
      </td>
    </tr>
@endforeach


  </tbody>
</table>
@endsection


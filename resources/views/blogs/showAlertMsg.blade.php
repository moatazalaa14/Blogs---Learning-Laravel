

@extends('layout.app')


@section('navbar')

<h1> Are you sure delete it ?</h1>
<a type="button" class="btn btn-success" href='/deleteblogs/{{$post['id']}}' >Success</a>
<a type="button" class="btn btn-danger" >Danger</a>

@endsection


@extends('master')

@section('title', 'Edit Computer')
@section('content')

@if ($errors->any())

<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
        <div class="mb-2">{{$error}}</div>
    @endforeach
</div>
    
@endif

<form action="{{url('/computer-update/'.$computer->id)}}" method="post">
    @csrf
    @method('put')
    <div class="container">
        <input value="{{$computer->name}}" type="text" name="name">
        <input value="{{$computer->year}}" type="text" name="year">
        <button class="btn btn-success" type="submit">Update</button>
    </div>
</form>

@endsection
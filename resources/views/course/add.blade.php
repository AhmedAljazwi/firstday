@extends('master')

@section('title', 'New Course')

@section('content')

@if($errors->any())

<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
        <div class="mb-2">{{$error}}</div>
    @endforeach
</div>

@endif

<div class="container">
    <form action="{{url('/add-course')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="">Number</label>
        <input class="form-control" type="text" name="number">
    </div>
    
    <div class="mb-3">
        <label for="">Name</label>
        <input class="form-control" type="text" name="name">
    </div>

    <button class="btn btn-primary" type="submit">Create</button>
</form>
</div>

@endsection
@extends('master')

@section('title', 'New Computer')
@section('content')


    @if($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
        <div class="mb-2">{{$error}}</div>
        @endforeach
    </div>
    @endif



<div class="container">
    <form action="{{url('/computer-store')}}" method="post">
        @csrf
        <input placeholder="Computer Name" class="form-control" type="text" name="name">
        <input placeholder="Computer Year" class="form-control" type="text" name="year">
        <button class="btn btn-primary" type="submit">Send</button>
    </form>
    
</div>

@endsection
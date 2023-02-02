@extends('master')

@section('title', 'Edit Computer')
@section('content')

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
@extends('master')

@section('content')

<form action="{{url('/computer-update')}}" method="post">
    @csrf
    @method('put')
    <div class="container">
        <input type="text" name="name">
        <button class="btn btn-success" type="submit">Update</button>
    </div>
</form>

@endsection
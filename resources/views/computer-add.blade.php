@extends('master')

@section('content')

<div class="container">
    <form action="{{url('/computer-store')}}" method="post">
        @csrf
        <input type="text" name="name">
        <button class="btn btn-primary" type="submit">Send</button>
    </form>
    
</div>

@endsection
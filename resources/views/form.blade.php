@extends('master')

@section('content')

<div class="container mt-3">
    <form action="{{url('/form-send')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Username</label>
            <input type="text" name="username" class="form-control">
        </div>

        <div class="mb-1">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control">
        </div>

        <button class="btn btn-primary" type="submit">Send</button>
    </form>
</div>

@endsection
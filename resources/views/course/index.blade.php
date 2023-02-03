@extends('master')

@section('title', 'Courses')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th>Number</th>
        <th>Name</th>
    </thead>
    <tbody>
      @foreach ($courses as $course)
        <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->number}}</td>
            <td>{{$course->name}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>

@endsection
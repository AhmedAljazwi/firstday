@extends('master')

@section('title', 'Computers')
@section('content')

<div class="container mt-5 mr-5 ml-5">
    <table class="table table-bordered border-primary">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th>Year</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($computers as $computer)
        <tr>
            <td>{{$computer->id}}</td>
            <td>{{$computer->name}}</td>
            <td>{{$computer->year}}</td>
            <td>
              <a class="btn btn-success" href="{{url('/computer-edit/'.$computer->id)}}">Edit</a>
            </td>
            <td>
              <a class="btn btn-danger" href="{{url('/computer-delete/'.$computer->id)}}">Delete</a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>



@endsection
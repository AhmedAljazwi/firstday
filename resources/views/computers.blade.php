@extends('master')

@section('content')

<div class="container mt-5 mr-5 ml-5">
    <table class="table table-bordered border-primary">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach($computers as $computer)
        <tr>
            <td>{{$computer->id}}</td>
            <td>{{$computer->name}}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>



@endsection
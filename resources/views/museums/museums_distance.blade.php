@extends('layout.main')

@section('content')
<main>
<div class="container my-4">
  <div class="d-flex justify-content-between">
    <h1 class="mb-4">Museums Distance</h1>
  </div>

  <div class="border border-1 w-50">
    <table class="table mb-0 table-hover">
      <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Distance</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($museums as $museum)
          <tr class="vertical-align-middle">
            <th scope="row">{{$museum->id}}</th>
            <td>{{$museum->name}}</td>
            <td>{{$museum->distance}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</main>

@endsection

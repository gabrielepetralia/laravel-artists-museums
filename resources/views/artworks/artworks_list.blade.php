@extends('layout.main')

@section('content')
<main>
<div class="container my-4">
  <div class="d-flex justify-content-between">
    <h1 class="mb-4">Lista Opere d'arte</h1>
  </div>

  <div class="border border-1 w-50">
    <table class="table mb-0 table-hover">
      <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Param</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($artworks as $artwork)
          <tr class="vertical-align-middle">
            <th scope="row">{{$artwork->id}}</th>
            <td>{{$artwork->name}}</td>
            <td>{{$artwork->distance}}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</main>

@endsection

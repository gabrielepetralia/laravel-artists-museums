@extends('layout.main')

@section('content')
<main>
<div class="container my-4">
  <div class="d-flex justify-content-between">
    <h1 class="mb-4">Elenco Musei</h1>
    <div>
      <a href="{{ route('museums.create')}}" title="Add New Museum" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
    </div>
  </div>

  @if (session('trashElement'))
      <div class="alert alert-success" role="alert">
          {{ session('trashElement') }}
      </div>
  @endif

  <div class="border border-1">
    <table class="table mb-0 table-hover">
      <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">City</th>
            <th scope="col">Actions</th>
          </tr>
      </thead>
      <tbody>
        @foreach ($museums as $museum)
          <tr class="vertical-align-middle">
            <th scope="row">{{$museum->id}}</th>
            <td>{{$museum->name}}</td>
            <td>{{$museum->city}}</td>
            <td>
              <a href="{{route('museums.show', $museum)}}" class="btn btn-primary text-white"><i class="fa-regular fa-eye" title="Vedi"></i></a>
              <a href="{{route('museums.edit', $museum)}}" class="btn btn-warning"><i class="fa-regular fa-pen-to-square text-white" title="Modifica"></i></a>

              <form action="{{route('museums.destroy', $museum)}}" onsubmit="return confirm('Confermi l\'eliminazione di {{ $museum->title }} ?')" method="POST" class="d-inline">

                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-danger text-white"><i class="fa-regular fa-trash-can" title="Elimina"></i></button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</main>

@endsection

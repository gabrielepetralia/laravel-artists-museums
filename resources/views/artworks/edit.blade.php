@extends('layout.main')

@section('content')
    <div class="container my-5">
        <h1 class="my-3">Modifica opera d'arte</h1>

        <form action="{{ route('artworks.update', $artwork) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="form-label">Name</label>
                <input
                  id="name"
                  value="{{ old('name', $artwork->name) }}"
                  class="form-control"
                  name="name"
                  placeholder="Insert Name"
                  type="text"
                >
            </div>

            <div class="mb-4">
                <label for="date" class="form-label">Date</label>
                <input
                  id="date"
                  value="{{ old('date', $artwork->date) }}"
                  class="form-control"
                  name="date"
                  placeholder="Insert Date"
                  type="date"
                >
            </div>

            <div class="mb-4">
                <label for="artist" class="form-label">Artist</label>
                <select class="form-select" name="artist" id="artist">
                  <option value="">Select Artist</option>
                  @foreach ($artists as $artist)
                    <option>{{$artist->name}}</option>
                  @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="museum" class="form-label">Artist</label>
                <select class="form-select" name="museum" id="museum">
                  <option value="">Select Museum</option>
                  @foreach ($museums as $museum)
                    <option>{{$museum->name}}</option>
                  @endforeach
                </select>
                {{-- <input
                  id="date"
                  value="{{($artwork->artist) }}"
                  class="form-control"
                  name="date"
                  placeholder="Insert Date"
                  type="select"
                > --}}
            </div>



                <button type="submit" class="btn btn-success">Salva</button>
                <button type="reset" class="btn btn-danger">Cancella</button>
                <a href="{{route('artworks.index')}}" class=" btn btn-primary align-self-center">Indietro</a>
            </form>
        </div>
    </main>
@endsection



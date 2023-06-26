<header class="p-3">

  <ul class="nav nav-tabs">
      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() === 'home' ? "active" : ""}}" href="{{ route('home') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() === 'artists.index' ? "active" : ""}}" href="{{ route('artists.index')}}">Artists</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() === 'museums.index' ? "active" : ""}}" href="{{ route('museums.index')}}">Museums</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() === 'artworks.index' ? "active" : ""}}" href="{{ route('artworks.index')}}">Artworks</a>
      </li>
  </ul>

</header>

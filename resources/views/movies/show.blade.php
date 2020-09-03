<div>
  <h2>Titolo: {{ $movie->title }}</h2>
  <p>Anno: {{ $movie->year }}</p>
  <p>Rating: {{ $movie->rating }}</p>
  <p>Descrizione: {{ $movie->description }}</p>
  <a href="{{ route('movies.index')}}">Indietro</a>
</div>

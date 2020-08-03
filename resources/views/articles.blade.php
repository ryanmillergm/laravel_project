@extends ('layoutTemplate')

@section('content')
  <div id="wrapper">
    <div id="page" class="container">
      <div id="content">
        @foreach ($articles as $article)
          <ul>
            <li class="first">
              <h3>
                <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
              </h3>
              
              <p>{{ $article->excerpt }}</p>
            </li>
          </ul>
        @endforeach
      </div>
    </div>
  </div>
@endsection
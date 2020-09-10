@extends ('layoutTemplate')

@section('content')
  <div id="wrapper">
    <div id="page" class="container">
      <div id="content">

        @forelse ($articles as $article)
          <ul>
            <li class="first">
              <h2>
                {{-- <a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a> --}}
                <a href="{{ $article->path() }}">{{ $article->title }}</a>
              </h2>

              <br>

              <p>
                <img src="/images/banner.jpg" alt="" class="image image-full" />
              </p>

              <p>{!! $article->excerpt !!}</p>
            </li>
          </ul>
        @empty
          <p>No relevant articles yet.</p>
        @endforelse

      </div>
    </div>
  </div>
@endsection

@extends ('layoutTemplate')

@section('content')
  <div id="wrapper">
    <div id="page" class="container">
      <div id="content">

        @foreach ($articles as $article)
          <ul>
            <li class="first">
              <h2>
                <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
              </h2>
              
              <br>

              <p>
                <img src="/images/banner.jpg" alt="" class="image image-full" /> 
              </p>

              <p>{!! $article->excerpt !!}</p>
            </li>
          </ul>
        @endforeach

      </div>
    </div>
  </div>
@endsection
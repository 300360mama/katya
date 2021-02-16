@extends('blocks.layout')


@section('content')
    @foreach ($articles as $article)
        <article>
            <h3 class="article-title">{{ $article['title'] }}</h3>
            <section class="article-content">
                {!! preg_replace('/&nbsp;/', ' ', html_entity_decode($article['content'])) !!}
            </section>

        <a class="read-link" href="{{route('show-article', ['id' => $article->id])}}">Читати статтю...</a>
        </article>
    @endforeach

    {{ $articles->links() }}
@endsection
@extends('blocks.layout')


@section('content')


    <article>
        <a class="read-link" href="{{ url()->previous() }}">Повернутись до списку статей</a>
        <h3 class="article-title">{{ $article['title'] }}</h3>
        <section class="article-content">
            {!! preg_replace('/&nbsp;/'," ", html_entity_decode($article["content"])) !!}
        </section>

    </article>

    
@endsection

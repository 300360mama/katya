@extends('blocks.layout')


@section('content')
    <article>
        <h3 class="article-title">{{ $article['title'] }}</h3>
        <section class="article-content">
            {!! html_entity_decode($article["content"]) !!}
            
        </section>

    </article>
@endsection

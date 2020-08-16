@extends('blocks.layout')


@section('content')
    <article>
        <h3 class="article-title">{{ $article['title'] }}</h3>
        <section class="article-content">
            {{ $article["content"] }}
        </section>

    </article>
@endsection

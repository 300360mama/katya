@extends('blocks.layout')


@section("content")
   <article>
      

       @if ($article_number === 1)
     
        @include('blocks.article1')
        @yield("article1")

       @elseif($article_number === 2)
    
        @include('blocks.article2')
        @yield('article2')

       @elseif($article_number === 3)
    
        @include('blocks.article3')
        @yield('article3')

       @elseif($article_number === 4)
    
        @include('blocks.article4')
        @yield('article4')

       @elseif($article_number === 5)
    
        @include('blocks.article5')
        @yield('article5')
       @else
    
       article not found
       @endif
     

      

    
   </article>
@endsection
@extends('blocks.layout')

@section("content")
   <article>
       <h3 class="article-title">ДІЯЛЬНІСНИЙ ПІДХІД В РІХНИХ ВИДАХ АКТИВНОСТЕЙ ДИТИНИ</h3>

       @if ($article_number === 1)
       <section class="article-content">
        Content 1
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione corporis explicabo similique, quo obcaecati assumenda dolore dolor? Doloremque quaerat inventore quia amet quidem eaque, deserunt, quisquam eum recusandae molestiae rerum.
       </section>
       @elseif($article_number === 2)
       <section class="article-content">
        Content 2
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione corporis explicabo similique, quo obcaecati assumenda dolore dolor? Doloremque quaerat inventore quia amet quidem eaque, deserunt, quisquam eum recusandae molestiae rerum.
       </section>

       @elseif($article_number === 3)
       <section class="article-content">
        Content 3
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione corporis explicabo similique, quo obcaecati assumenda dolore dolor? Doloremque quaerat inventore quia amet quidem eaque, deserunt, quisquam eum recusandae molestiae rerum.
       </section>

       @elseif($article_number === 4)
       <section class="article-content">
        Content 4
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione corporis explicabo similique, quo obcaecati assumenda dolore dolor? Doloremque quaerat inventore quia amet quidem eaque, deserunt, quisquam eum recusandae molestiae rerum.
       </section>

       @elseif($article_number === 5)
       <section class="article-content">
        Content 5
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione corporis explicabo similique, quo obcaecati assumenda dolore dolor? Doloremque quaerat inventore quia amet quidem eaque, deserunt, quisquam eum recusandae molestiae rerum.
       </section>
       @else
       <section class="article-content">
       article not found
       </section>
       @endif
     

      

    
   </article>
@endsection
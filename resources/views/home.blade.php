@extends('blocks.layout')

@section("content")
  <section class="home">
      <img class="home_logo" src="./images/home-logo.png" alt="Banner">

      <h1 class="home_title">Cучасний центр розвитку дитини</h1>

      <ul class="home_list">
          <li>передшкільна освіта</li>
          <li>англомовлення</li>
          <li>підготовки дитини до нових вимог НУШ</li>
      </ul>

      <section class="info">
          <address>
              вул. Київська 77 б, <br>
              2 поверх, каб. 8
          </address>
          <section class="telephones">
              <span>тел. : 
                  <a href="tel:+380966506593" class="tel">096 650 65 93</a>
               </span>
              <a href="tel:+380660747727" class="tel">066 074 77 27</a>
          </section>
      </section>
  </section>
@endsection
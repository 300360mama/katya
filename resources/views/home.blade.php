@extends('blocks.layout')

@section("content")
  <section class="home">
      <img class="home_logo" src="./images/home-logo.png" alt="Banner">

      <h1 class="home_title">Cучасний центр розвитку дитини</h1>
      <h4 class="subtitle">Ключові напрямки діяльності</h4>
      <ul class="home_list">
          <li>поглиблене англомовлення</li>
          <li>підготовка дитини до навчання в новій українській школі</li>
          <li>формування базових компетентностей сучасної дитини</li>
      </ul>

      <section class="info">
          <h5 class="info_title">Чекаємо вас за адресою:</h5>
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
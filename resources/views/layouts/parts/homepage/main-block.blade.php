<div class="uk-background-cover uk-height-1-1" style="background-image: url(images/homepage/tile.jpg);">
  <div class="uk-container uk-container-large uk-padding-large">
    <div class="uk-width-2-3@m">
      <h1 class="uk-heading-large" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 100">Слуховые аппараты</h1>
      <h2 class="uk-heading-medium uk-margin-remove" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 200"><i class="fas fa-caret-right uk-text-danger"></i> огромный выбор</h2>
      <h2 class="uk-heading-medium uk-margin-remove" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 300"><i class="fas fa-caret-right"></i> полное сопровождение</h2>

      <h4 uk-scrollspy="cls: uk-animation-fade; delay: 500"><mark>без скрытых платежей - вы платите только раз</mark></h4>
      <div uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 700">
        <p><b>Почему вам стоит заказать слуховые аппараты у нас</b></p>
        <ul class="uk-list uk-list-bullet">
          <li>35 лет опыта в Украине и за рубежом</li>
          <li>слуховые аппараты исключительно от ведущих производителей (Германия, Швейцария, Дания, США ...)</li>
          <li><span class="uk-text-danger"><b>3 года гарантии</b></span> на все слуховые аппараты</li>
          <li>консультация бесплатно</li>
        </ul>
      </div>
      <div class="uk-margin-large">
        @component('components.main-button')
          @slot('id') contacts  @endslot
          @slot('title') Подобрать сейчас @endslot
          @slot('event') Showcontacts  @endslot
        @endcomponent
      </div>
    </div>
  </div>
</div>


{{-- <div class="uk-background-default">
  <div class="uk-container uk-container-large uk-padding-large">
    <div class="uk-grid uk-grid-large" uk-grid>
        <div class="uk-width-1-3@m" uk-scrollspy="cls: uk-animation-slide-left-medium; delay: 300">
          <div class="uk-box-shadow-medium">
            <img data-src="images/title-book.jpg" alt="7 неочевидных ошибок" uk-img>
          </div>
        </div>
        <div class="uk-width-2-3@m">
          <h1 class="uk-heading-large" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 100">7 неочевидных ошибок, которые совершают при покупке слухового аппарата</h1>
          <h4 uk-scrollspy="cls: uk-animation-fade; delay: 200"><mark>4 из них критичны и могут навредить вашему здоровью</mark></h4>
          <div uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 400">
            <p>Эта информация поможет вам:</p>
            <ul class="uk-list uk-list-bullet">
              <li>быстро выбрать и заказать слуховой аппарат, который подойдет именно для вас</li>
              <li>не переплачивать за не нужные (и нужные) услуги в центрах слуха</li>
              <li>отличать хорошего специалиста-аудиолога от плохого</li>
              <li>ориентироваться в рынке слуховых аппаратов,  вы узнаете принцип ценообразования и почему в разных клиниках стоимость аппаратов отличается</li>
            </ul>
          </div>
          <div class="uk-margin-large">
            @component('components.main-button')
              @slot('id') mail  @endslot
              @slot('title') Скачать сейчас  @endslot
            @endcomponent
          </div>
        </div>
    </div>
  </div>
</div> --}}

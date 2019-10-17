<div class="uk-background-default">
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
              <li>ориентироватся в рынке слуховых аппаратов,  вы узнаете принцып ценообразования и почему в разных клиниках стоимость аппаратов отличается</li>
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
</div>

<div class="uk-background-default">
  <div class="uk-container uk-padding-large">
    <div class="uk-grid uk-grid-large" uk-grid>
        <div class="uk-width-1-3@m" uk-scrollspy="cls: uk-animation-slide-left-medium; delay: 200">
          <img data-src="images/company.jpg" alt="ребенок на приеме" uk-img>
        </div>
        <div class="uk-width-2-3@m">
          <h2 class="uk-heading-large" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 100">О компании</h2>
          <h4 uk-scrollspy="cls: uk-animation-fade; delay: 300"><mark>Лучшие результаты по реабилитации слуха, среди лицензированных центров слуха</mark></h4>
          <ul class="uk-list uk-list-bullet" uk-scrollspy="cls: uk-animation-slide-bottom-medium; delay: 500">
            <li>более 35 лет опыта в отрасли слухопротезирования из которых более 5 в Украине</li>
            <li>12 центров реабилитации слуха в 9-ти регионах Украины</li>
            <li>сотрудничество с 17 фирмами-лидерами по производству слуховых аппаратов</li>
            <li>наш каталог слуховых аппаратов насчитывает более 5 000 наименований</li>
            <li>более 4500 слуховых аппаратов и более 3000 благодарных пациентов в год</li>
          </ul>

          <div class="uk-margin-large">
            @component('components.main-button')
              @slot('id') mail  @endslot
              @slot('title') Скачать чек-лист  @endslot        
            @endcomponent
          </div>

        </div>
    </div>
  </div>
</div>

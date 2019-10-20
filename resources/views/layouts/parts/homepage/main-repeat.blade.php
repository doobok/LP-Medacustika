<div class="uk-background-secondary">
  <div class="uk-container uk-padding-large">
    <div class="uk-grid uk-grid-large" uk-grid>
        <div class="uk-width-1-3@m" uk-scrollspy="cls: uk-animation-slide-left-medium; delay: 200">
          <div>
            <img data-src="images/homepage/ha.png" alt="Слуховой аппарат" uk-img>
          </div>
        </div>
        <div class="uk-width-2-3@m">
          <div class="uk-light">
            <h2 class="uk-heading-large" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 100">Медицинские слуховые аппараты</h2>
            <h2 class="uk-heading-small" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 200"><i class="fas fa-caret-right uk-text-danger"></i> огромный выбор</h2>
            <h2 class="uk-heading-small" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 300"><i class="fas fa-caret-right uk-text-danger"></i> <span class="uk-text-danger">ТРИ</span> года гарантии</h2>
            <h2 class="uk-heading-small" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 400"><i class="fas fa-caret-right"></i> полное сопровождение</h2>
          </div>
          <div class="uk-margin-large">
            @component('components.main-button')
              @slot('id') contacts  @endslot
              @slot('title') Подобрать аппарат  @endslot
            @endcomponent
          </div>
        </div>

    </div>
  </div>
</div>

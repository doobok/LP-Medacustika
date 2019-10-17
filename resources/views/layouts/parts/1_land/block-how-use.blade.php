<div class="uk-background-primary">
  <div class="uk-container uk-padding-large">
    <div class="uk-light">
      <div class="uk-flex-center" uk-grid>
        <h2 class="uk-heading-large" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 100">Как использовать документ</h2>
      <div>

        <div class="uk-child-width-1-4@s uk-text-center" uk-grid>
          <div uk-scrollspy="cls: uk-animation-scale-down; delay: 200">
            <i class="fas fa-download fa-5x"></i>
            <p>Скачать документ</p>
          </div>
          <div uk-scrollspy="cls: uk-animation-scale-down; delay: 300">
            <i class="fas fa-list-ol fa-5x"></i>
            <p>Ознакомиться со списком</p>
          </div>
          <div uk-scrollspy="cls: uk-animation-scale-down; delay: 400">
            <i class="fab fa-leanpub fa-5x"></i>
            <p>Изучить ошибки</p>
          </div>
          <div uk-scrollspy="cls: uk-animation-scale-down; delay: 500">
            <i class="fas fa-thumbs-up fa-5x"></i>
            <p>Действовать следуя рекомендациям</p>
          </div>
      </div>

      </div>
    </div>
    </div>

    <div class="uk-text-center uk-margin-large">
      @component('components.main-button')
        @slot('id') mail  @endslot
        @slot('title') Скачать PDF  @endslot
      @endcomponent
    </div>

  </div>
</div>

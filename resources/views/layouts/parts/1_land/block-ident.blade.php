<div class="uk-background-muted">
  <div class="uk-container uk-padding-large">
    <div class="uk-flex-center" uk-grid>
      <h2 class="uk-heading-medium" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 100">Кому будет полезна эта информация</h2>
      <div>

      <div class="uk-flex-center uk-margin-large-top" uk-grid>

        <div class="uk-card uk-width-2-3@m uk-margin-small-bottom">
          <div class="uk-grid-medium uk-flex-middle" uk-grid>
            <div class="uk-width-auto" uk-scrollspy="cls: uk-animation-slide-left; delay: 100">
              <i class="fas fa-notes-medical fa-4x uk-text-primary"></i>
            </div>
            <div class="uk-width-expand" uk-scrollspy="cls: uk-animation-fade; delay: 150">
              <h5 class="uk-margin-remove-bottom uk-text-italic">для людей у которых есть показания к ношению слуховых аппаратов</h5>
            </div>
          </div>
        </div>
        <div class="uk-card uk-width-2-3@m uk-margin-small-bottom">
          <div class="uk-grid-medium uk-flex-middle" uk-grid>
            <div class="uk-width-auto" uk-scrollspy="cls: uk-animation-slide-left; delay: 200">
              <i class="fas fa-users fa-4x uk-text-primary"></i>
            </div>
            <div class="uk-width-expand" uk-scrollspy="cls: uk-animation-fade; delay: 250">
              <h5 class="uk-margin-remove-bottom uk-text-italic">их родственников, друзей, близких</h5>
            </div>
          </div>
        </div>
        <div class="uk-card uk-width-2-3@m uk-margin-small-bottom">
          <div class="uk-grid-medium uk-flex-middle" uk-grid>
            <div class="uk-width-auto" uk-scrollspy="cls: uk-animation-slide-left; delay: 300">
              <i class="fas fa-frown fa-4x uk-text-primary"></i>
            </div>
            <div class="uk-width-expand" uk-scrollspy="cls: uk-animation-fade; delay: 350">
              <h5 class="uk-margin-remove-bottom uk-text-italic">вы уже носите слуховые аппараты но результат вас не устраивает</h5>
            </div>
          </div>
        </div>
        <div class="uk-card uk-width-2-3@m uk-margin-bottom">
          <div class="uk-grid-medium uk-flex-middle" uk-grid>
            <div class="uk-width-auto" uk-scrollspy="cls: uk-animation-slide-left; delay: 400">
              <i class="fas fa-user-md fa-4x uk-text-primary"></i>
            </div>
            <div class="uk-width-expand" uk-scrollspy="cls: uk-animation-fade; delay: 450">
              <h5 class="uk-margin-remove-bottom uk-text-italic">у вас проблемы со слухом и вы ищете хорошего врача</h5>
            </div>
          </div>
        </div>

      </div>

      </div>
    </div>
    <div class="uk-text-center uk-margin-large">
      @component('components.main-button')
        @slot('id') mail  @endslot
        @slot('title') Скачать список  @endslot
      @endcomponent
    </div>
  </div>
</div>

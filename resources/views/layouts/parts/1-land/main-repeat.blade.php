<div class="uk-background-secondary">
  <div class="uk-container uk-padding-large">
    <div class="uk-grid uk-grid-large" uk-grid>
        <div class="uk-width-1-3@m" uk-scrollspy="cls: uk-animation-slide-left-medium; delay: 200">
          <div class="uk-box-shadow-medium">
            <img data-src="images/title-book-s.jpg" alt="7 неочевидных ошибок" uk-img>
          </div>
        </div>
        <div class="uk-width-2-3@m">
          <div class="uk-light">
            <p uk-scrollspy="cls: uk-animation-slide-top-small; delay: 80">Чек-лист</p>
            <h2 class="uk-heading-small" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 100">Скачайте 7 неочевидных ошибок, которые совершают при покупке слухового аппарата</h2>
          </div>
          <div class="uk-margin-large">
            @component('components.main-button')
              @slot('id') mail  @endslot
              @slot('title') Скачать сейчас  @endslot
              @slot('event') ShowgetmailForm  @endslot
            @endcomponent
          </div>
        </div>

    </div>
  </div>
</div>

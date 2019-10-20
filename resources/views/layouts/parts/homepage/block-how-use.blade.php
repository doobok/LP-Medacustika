<div class="uk-background-primary">
  <div class="uk-container uk-padding-large">
    <div class="uk-light">
      <div class="uk-flex-center" uk-grid>
        <h2 class="uk-heading-small" uk-scrollspy="cls: uk-animation-slide-right-medium; delay: 100">Эффективная реабилитация слуха в центрах Медакустика</h2>
        <h4 uk-scrollspy="cls: uk-animation-fade; delay: 300"><mark>Мы стремимся не продать вам слуховой аппарат, а сделать вашу <span class="uk-text-danger">жизнь лучше! </span></mark> </h4>
        <h5 uk-scrollspy="cls: uk-animation-fade; delay: 600" class="uk-margin-remove-top uk-margin-large-bottom"><mark>этот процесс непростой и требует постепенного выполнения нескольких шагов</mark></h5>
      <div>

        <div class="uk-child-width-1-4@s uk-text-center" uk-grid>
          <div uk-scrollspy="cls: uk-animation-scale-down; delay: 800">
            <i class="fas fa-user-md fa-5x"></i>
            <p>Пройти обследование слуха</p>
          </div>
          <div uk-scrollspy="cls: uk-animation-scale-down; delay: 1000">
            <i class="fas fa-assistive-listening-systems fa-5x"></i>
            <p>На его основании подобрать слуховой аппарат</p>
          </div>
          <div uk-scrollspy="cls: uk-animation-scale-down; delay: 1200">
            <i class="fas fa-cogs fa-5x"></i>
            <p>Настроить аппарат в соответствии с получеными на обследовании данными</p>
          </div>
          {{-- <div uk-scrollspy="cls: uk-animation-scale-down; delay: 1400">
            <i class="fas fa-thumbs-up fa-5x"></i>
            <p>Регулярно носить свой слуховой аппарат</p>
          </div> --}}
          <div uk-scrollspy="cls: uk-animation-scale-down; delay: 1400">
            <i class="fas fa-user-cog fa-5x"></i>
            <p>Посещать своего врача для коррекции настроек аппаратов (график определяет врач)</p>
          </div>
      </div>

      </div>
    </div>
    </div>

    <div class="uk-text-center uk-margin-large">
      @component('components.main-button')
        @slot('id') contacts  @endslot
        @slot('title') хочу консультацию  @endslot
      @endcomponent
    </div>

  </div>
</div>

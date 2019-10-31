@extends('app')

@section('title')
  Спасибо за то, что оставили заявку. С уважением, Медакустика
@endsection

@section('content')

      <div class="uk-container-expand">
          <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
              <div class="uk-padding-large">
                  <h1 class="uk-heading-small" uk-scrollspy="cls: uk-animation-slide-left-medium; delay: 100">Поздравляем! Ваш контактный номер успешно отправлен.</h1>
                  <h4 uk-scrollspy="cls: uk-animation-fade; delay: 100"><mark>В ближайшее время он будет обработан нашим менеджером</mark> </h4>

                  <p uk-scrollspy="cls: uk-animation-slide-left-medium; delay: 200"> <b>Оставайтесь на связи</b>, обычно мы звоним в течение 15-30 минут</p>
                  <p uk-scrollspy="cls: uk-animation-slide-left-medium; delay: 400">Заявки оставленные не в рабочее время будут обработаны на следующий рабочий день.</p>

              </div>
              <div class="uk-background-cover" style="background-image: url('images/call-menedzher.jpg');" uk-height-viewport></div>
          </div>
      </div>


@endsection

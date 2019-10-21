<!DOCTYPE html>
<html lang="ru">
    <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-30077483-13"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-30077483-13');
      </script>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>
        @yield('title')
      </title>

      <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap&subset=cyrillic" rel="stylesheet">
      <link rel="stylesheet" href="css/app.css">

    </head>
    <body>

      {{-- шапка --}}
      <div class="uk-background-primary">
        <div class="uk-container uk-container-large">

        <nav class="uk-navbar-container uk-light uk-navbar-transparent uk-margin" uk-navbar>
            <div class="uk-navbar-left">

                <a class="uk-logo uk-margin-small uk-margin-small-top" href="#">
                  <img src="logo_white.png" alt="Medacustika" width="230px">
                </a>


              </div>
              <div class="uk-navbar-right uk-visible@s">
                <ul class="uk-navbar-nav">
                    <li>(044) 227-92-15
                      {{-- <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i> --}}
                    </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>

        @yield('content')


        {{-- footer --}}
        <div class="uk-background-secondary uk-light">
          <hr>
          <div class="uk-container">
            <div class="uk-text-center">
              <p class="uk-text-muted uk-text-small">Copyright © 2019 Medacustika.UA All Rights Reserved.</p>

            </div>

          </div>
        </div>


    </body>
    <script type="text/javascript" src="js/app.js"></script>

</html>

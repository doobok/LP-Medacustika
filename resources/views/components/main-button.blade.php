<a href="#{{ $id }}" class="uk-button uk-button-default uk-button-large"
uk-scrollspy="cls: uk-animation-scale-up; delay: 700"
onclick="gtag('event', '{{$event}}', {'event_category': 'Button', 'event_label': '{{$title}}'}); return true;"
 uk-toggle>
{{ $title }}
</a>

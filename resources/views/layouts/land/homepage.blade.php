@extends('app')

@section('title')
  Медакустика - сеть центров реабилитации слуха
@endsection

@section('content')

  {{-- главный блок --}}
  @include('layouts.parts.homepage.main-block')

  {{-- блок повышения ценности --}}
  @include('layouts.parts.homepage.block-how-use')

  {{-- блок на доверие --}}
  @include('layouts.parts.homepage.block-reputation')

  {{-- повторный главный блок --}}
  @include('layouts.parts.homepage.main-repeat')

  {{-- модальные окна --}}
  @include('layouts.parts.homepage.window-show-phone')


@endsection

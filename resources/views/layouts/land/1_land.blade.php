@extends('app')

@section('title')
  7 неочевидных ошибок, которые совершают при покупке слухового аппарата
@endsection

@section('content')

  {{-- главный блок --}}
  @include('layouts.parts.1_land.main-block')

  {{-- блок узнаваемости себя --}}
  @include('layouts.parts.1_land.block-ident')

  {{-- блок погружения в будущее --}}
  @include('layouts.parts.1_land.block-how-use')

  {{-- блок на доверие --}}
  @include('layouts.parts.1_land.block-reputation')

  {{-- повторный главный блок --}}
  @include('layouts.parts.1_land.main-repeat')

  {{-- модальные окна --}}
  @include('layouts.parts.1_land.window-get-mail')


@endsection

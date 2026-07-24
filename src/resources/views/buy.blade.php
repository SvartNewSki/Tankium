@extends ('layouts.main')

@section('content')
@dump($notEnough)
Вы купили всё из корзины
    <a href="{{ route('main') }}" class="btn-continue">Продолжить покупки</a>

@endsection
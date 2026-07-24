@extends ('layouts.main')

@section('content')
Вы купили всё из корзины
    <a href="{{ route('main') }}" class="btn-continue">Продолжить покупки</a>

@endsection
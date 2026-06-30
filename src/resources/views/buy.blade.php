@extends ('layouts.main')

@section('content')
Вы купили всё из корзины
@foreach ($cart as $item)
var_dump $item
@endsection
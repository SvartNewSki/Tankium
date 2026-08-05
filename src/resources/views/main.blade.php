@extends('layouts.main')

@section('content')
@vite(['resources/css/item.css'])
<div class="main">
    @foreach($products as $product)
        <div class="product-item">
            <h3><a href="/item/{{$product->id}}">{{ $product->name }}</a></h3>
            <p>Наличие: {{ $product->amount }} шт.</p>
            <p>{{ $product->description }}</p>
            @if ($product->amount >= 1)
            <form action="/cart/add/{{$product->id}}" method="POST">
                @csrf
                <button type="submit">Добавить в корзину</button>
            </form>
            @else 
            Товар закончился
            @endif
            {{-- <a href="/clear"><span class="del">Удалить</span>_clear_<span class="del">Удалить</span></a> --}}
            <form action="/cart/clear" method="POST">
            @csrf
            <button type="submit">Очистить корзину</button>
            </form>
        </div>
    @endforeach
</div>
@endsection
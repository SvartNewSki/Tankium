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
            <a href="/addToCart/{{$product->id}}">добавить</a>
            @else 
            Товар закончился
            @endif
            <a href="/clear"><span class="del">Удалить</span>_clear_<span class="del">Удалить</span></a>
        </div>
    @endforeach
</div>
@endsection
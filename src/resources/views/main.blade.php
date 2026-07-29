@extends('layouts.main')

@section('content')
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
            <a href="/clear"><span>Удалить</span>_clear_<span>Удалить</span></a>
            
        </div>
    @endforeach
    <div>
    </div>
@endsection
@extends('layouts.main')

@section('content')
    @foreach($products as $product)
        <div class="product-item">
            <h3>{{ $product->name }}</h3>
            <p>Наличие: {{ $product->amount }} шт.</p>
            <p>{{ $product->description }}</p>
            <a href="/addToCart/{{$product->id}}">добавить</a>
            
        </div>
    @endforeach
    <div>
    </div>
@endsection
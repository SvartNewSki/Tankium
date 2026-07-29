@extends ('layouts.main')

@section('content')
<p>{{$item->name }}</p> 
<p>{{$item->price}}</p>
<p>{{$item->description}}</p>
    @if ($item->amount >= 1)
        <a href="/addToCart/{{$item->id}}">добавить в корзину</a>
    @else 
        Товар закончился
    @endif
@endsection
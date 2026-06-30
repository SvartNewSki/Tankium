{{-- @extends('layouts.main')
    @section('content')
    CART
    {{$cart = 5}}
    <p>{{$cart}}</p>
@endsection
</body>
</html> --}}
@extends('layouts.main')

@section('content')
    <div class="cart-container">
        <h1>Корзина</h1>
        
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        
        @if(empty($cart))
            <div class="empty-cart">
                <p>Ваша корзина пуста</p>
                <a href="{{ route('main') }}" class="btn-continue-shopping">Продолжить покупки</a>
            </div>
        @else
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Товар</th>
                        <th>Цена</th>
                        <th>Количество</th>
                        <th>Сумма</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $id => $item)
                        <tr>
                            <td>
                                <span class="cart-item-name">{{ $item['name'] }}</span>
                            </td>
                            <td>{{ number_format($item['price'], 2) }} ₽</td>
                            <td>
                                <div class="quantity-control">
                                    <span class="quantity">{{ $item['quantity'] }}</span>
                                </div>
                            </td>
                            <td>{{ number_format($item['price'] * $item['quantity'], 2) }} ₽</td>
                            <td>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-right"><strong>Итого:</strong></td>
                        <td colspan="2"><strong>{{ number_format($total, 2) }} ₽</strong></td>
                    </tr>
                </tfoot>
            </table>
            
            <div class="cart-actions">
               
                <a href="{{ route('main') }}" class="btn-continue">Продолжить покупки</a>
                <a href="/buy" class="btn-checkout">Оформить заказ</a>
            </div>
        @endif
    </div>
@endsection
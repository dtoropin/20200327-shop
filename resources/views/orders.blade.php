@extends('layouts.main')

@section('content')
    @if (Auth::check())
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Мои заказы</div>
            </div>
            <div class="content-head__search-block">
                <div class="search-container">
                    <form class="search-container__form">
                        <input type="text" class="search-container__form__input">
                        <button class="search-container__form__btn">search</button>
                    </form>
                </div>
            </div>
        </div>
        @if ($goods)
            <div class="cart-product-list">
                {{--<pre>--}}
                    {{--{{ var_dump($goods) }}--}}
                {{--</pre>--}}
                @foreach($goods as $good)
                    <div class="cart-product-list__item">
                        <div class="cart-product__item__product-photo"><img
                                    src="{{ asset('img/cover/' . $good->image) }}"
                                    class="cart-product__item__product-photo__image">
                        </div>
                        <div class="cart-product__item__product-name">
                            <div class="cart-product__item__product-name__content">
                                <a href="{{ url('product/' . $good->id) }}">{{ $good->name }}</a>
                            </div>
                        </div>
                        <div class="cart-product__item__cart-date">
                            <div class="cart-product__item__cart-date__content">{{ $good->created_at }}</div>
                        </div>
                        <div class="cart-product__item__product-price"><span class="product-price__value">{{ $good->price }}
                                рублей</span>
                        </div>
                    </div>
                @endforeach
                <div class="cart-product-list__result-item">
                    <div class="cart-product-list__result-item__text">Итого</div>
                    <div class="cart-product-list__result-item__value">{{ $totalPrice }} рублей</div>
                </div>
            </div>
            <div class="content-footer__container">
                <div class="btn-buy-wrap">
                    <a
                            href="#"
                            class="btn-buy-wrap__btn-link"
                            data-obj='{
                            "user_id": {{ Auth::id() }},
                            "goods": "{{ $goodsList }}",
                            "total": {{ $totalPrice }}
                            }'
                    >Перейти к оплате</a>
                </div>
            </div>
        @else
            <div class="cart-product-list">
                У Вас нет покупок...
            </div>
        @endif
    @else
        <div class="content-head__container">
            <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Мои заказы</div>
            </div>
        </div>
        <div class="cart-product-warning">
            <p>Для просмотра заказов и оплаты</p>
            <p><a href="{{ url('/login') }}">авторизуйтесь</a> или <a
                        href="{{ url('/register') }}">зарегистрируйтесь</a></p>
        </div>
    @endif
@endsection
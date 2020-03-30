<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ Route::current()->getName() }} | {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/libs.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<div class="main-wrapper">
    <header class="main-header">
        <div class="logotype-container"><a href="{{ url('/') }}" class="logotype-link"><img
                        src="{{ asset('img/logo.png') }}" alt="Логотип"></a>
        </div>
        <nav class="main-navigation">
            <ul class="nav-list">
                <li class="nav-list__item">
                    <a href="{{ url('/') }}" class="nav-list__item__link">Главная</a>
                </li>
                <li class="nav-list__item">
                    <a href="{{ url('orders') }}" class="nav-list__item__link">Мои заказы</a>
                </li>
                <li class="nav-list__item">
                    <a href="{{ url('news') }}" class="nav-list__item__link">Новости</a>
                </li>
                <li class="nav-list__item">
                    <a href="{{ url('about') }}" class="nav-list__item__link">О компании</a>
                </li>
            </ul>
        </nav>
        <div class="header-contact">
            <div class="header-contact__phone"><a href="tel:3333333" class="header-contact__phone-link">Телефон:
                    33-333-33</a>
            </div>
        </div>
        <div class="header-container">
            <div class="payment-container">
                <div class="payment-basket__status">
                    <div class="payment-basket__status__icon-block">
                        <a href="{{ url('orders')  }}" class="payment-basket__status__icon-block__link">
                            <i class="fa fa-shopping-basket"></i>
                        </a>
                    </div>
                    <div class="payment-basket__status__basket">
                        <span class="payment-basket__status__basket-value">0</span>
                        <span class="payment-basket__status__basket-value-descr">товаров</span>
                    </div>
                </div>
            </div>
            <div class="authorization-block">
                @if (Auth::check())
                    <a href="{{ url('/home') }}" class="authorization-block__link">{{ Auth::user()->name }}</a>
                @else
                    <a href="{{ url('/register') }}" class="authorization-block__link">Регистрация</a>
                    <a href="{{ url('/login') }}" class="authorization-block__link">Войти</a>
                @endif
            </div>
        </div>
    </header>
    <div class="middle">
        <div class="sidebar">
            <div class="sidebar-item">
                <div class="sidebar-item__title">Категории</div>
                <div class="sidebar-item__content">
                    <ul class="sidebar-category">
                        <li class="sidebar-category__item">
                            <a href="{{ url('category/1') }}" class="sidebar-category__item__link">Action</a>
                        </li>
                        <li class="sidebar-category__item">
                            <a href="{{ url('category/2') }}" class="sidebar-category__item__link">RPG</a>
                        </li>
                        <li class="sidebar-category__item">
                            <a href="{{ url('category/4') }}" class="sidebar-category__item__link">Квесты</a>
                        </li>
                        <li class="sidebar-category__item">
                            <a href="{{ url('category/5') }}" class="sidebar-category__item__link">Онлайн-игры</a>
                        </li>
                        <li class="sidebar-category__item">
                            <a href="{{ url('category/3') }}" class="sidebar-category__item__link">Стратегии</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="sidebar-item">
                <div class="sidebar-item__title">Последние новости</div>
                <div class="sidebar-item__content">
                    <div class="sidebar-news">
                        <div class="sidebar-news__item">
                            <div class="sidebar-news__item__preview-news"><img src="{{ asset('img/cover/game-2.jpg') }}"
                                                                               alt="image-new"
                                                                               class="sidebar-new__item__preview-new__image">
                            </div>
                            <div class="sidebar-news__item__title-news"><a href="#"
                                                                           class="sidebar-news__item__title-news__link">О
                                    новых играх в режиме VR</a></div>
                        </div>
                        <div class="sidebar-news__item">
                            <div class="sidebar-news__item__preview-news"><img src="{{ asset('img/cover/game-1.jpg') }}"
                                                                               alt="image-new"
                                                                               class="sidebar-new__item__preview-new__image">
                            </div>
                            <div class="sidebar-news__item__title-news"><a href="#"
                                                                           class="sidebar-news__item__title-news__link">О
                                    новых играх в режиме VR</a></div>
                        </div>
                        <div class="sidebar-news__item">
                            <div class="sidebar-news__item__preview-news"><img src="{{ asset('img/cover/game-4.jpg') }}"
                                                                               alt="image-new"
                                                                               class="sidebar-new__item__preview-new__image">
                            </div>
                            <div class="sidebar-news__item__title-news"><a href="#"
                                                                           class="sidebar-news__item__title-news__link">О
                                    новых играх в режиме VR</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-content">
            <div class="content-top">
                <div class="content-top__text">Купить игры недорого, без регистрации, смс, с торента, получить компакт
                    диск, скачать Steam игры после оплаты
                </div>
                <div class="slider"><img src="{{ asset('img/slider.png') }}" alt="Image" class="image-main"></div>
            </div>
            <div class="content-middle">

                @yield('content')

            </div>
            <div class="content-bottom"></div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer__footer-content">
            <div class="random-product-container">
                <div class="random-product-container__head">Случайный товар</div>
                <div class="random-product-container__content">
                    <div class="item-product">
                        <div class="item-product__title-product"><a href="#" class="item-product__title-product__link">The
                                Witcher 3: Wild Hunt</a></div>
                        <div class="item-product__thumbnail"><a href="#" class="item-product__thumbnail__link"><img
                                        src="{{ asset('img/cover/game-1.jpg') }}" alt="Preview-image"
                                        class="item-product__thumbnail__link__img"></a></div>
                        <div class="item-product__description">
                            <div class="item-product__description__products-price"><span
                                        class="products-price">400 руб</span></div>
                            <div class="item-product__description__btn-block">
                                <a href="#" class="btn btn-blue" data-id="1">Купить</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__footer-content__main-content">
                <p>
                    Интернет-магазин компьютерных игр ГЕЙМСМАРКЕТ - это
                    онлайн-магазин игр для геймеров, существующий на рынке уже 5 лет.
                    У нас широкий спектр лицензионных игр на компьютер, ключей для игр - для активации
                    и авторизации, а также карты оплаты (game-card, time-card, игровые валюты и т.д.),
                    коды продления и многое друго. Также здесь всегда можно узнать последние новости
                    из области онлайн-игр для PC. На сайте предоставлены самые востребованные и
                    актуальные товары MMORPG, приобретение которых здесь максимально удобно и,
                    что немаловажно, выгодно!
                </p>
            </div>
        </div>
        <div class="footer__social-block">
            <ul class="social-block__list bcg-social">
                <li class="social-block__list__item"><a href="https://ru-ru.facebook.com/"
                                                        class="social-block__list__item__link" target="_blank"><i
                                class="fa fa-facebook"></i></a></li>
                <li class="social-block__list__item"><a href="https://twitter.com/explore"
                                                        class="social-block__list__item__link" target="_blank"><i
                                class="fa fa-twitter"></i></a></li>
                <li class="social-block__list__item"><a href="https://www.instagram.com/?hl=ru"
                                                        class="social-block__list__item__link" target="_blank"><i
                                class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </footer>
</div>
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
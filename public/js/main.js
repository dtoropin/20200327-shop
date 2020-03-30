(function () {

    let init = function () {
        _addEventListener();
        _basket();
    };

    let _addEventListener = function () {
        $('.btn-blue').on('click', _addBasket);
        $('.btn-buy-wrap__btn-link').on('click', _buyGoods);
    };

    let _addBasket = function (e) {
        e.preventDefault();
        let id = $(e.target).attr('data-id');
        let arr = _getCookieArray($.cookie('basket'));
        $.cookie('basket', _convertStringInCookie(arr, id), {path: '/'});
        _basket();
    };

    let _basket = function () {
        let count = $.cookie('basket') ? _getCookieArray($.cookie('basket')).length : 0;
        $('.payment-basket__status__basket-value').text(count);
    };

    let _getCookieArray = function (cookie) {
        return cookie ? eval(cookie) : [];
    };

    let _convertStringInCookie = function (arr, el) {
        arr.push(el);
        return JSON.stringify(arr);
    };

    let _buyGoods = function (e) {
        e.preventDefault();
        let obj = JSON.parse($(e.target).attr('data-obj'));
        $.ajax({
            type: 'POST',
            url: '/ajax',
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            },
            data: obj,
            success: function (data) {
                console.log(data.msg);
                $.removeCookie('basket');
                alert('Спасибо за заказ!\nЖдите письмо на почту: ' + data.msg + '!');
                window.location.href = '/orders';
            }
        });
    };

    return init();
})();
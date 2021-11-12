$(function () {
    $.get('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,binancecoin&amp;vs_currencies=usd,ngn')
    .done(function (response) {
        let crypto = response
        $('#eth').html(`$ ${crypto.ethereum.usd}`);
        $('#ethn').html(`ngn: ${crypto.ethereum.ngn}`);
        $('#bit').html(`$ ${crypto.bitcoin.usd}`);
        $('#bitn').html(`ngn: ${crypto.bitcoin.ngn}`);
        $('#doge').html(`$ ${crypto.binancecoin.usd}`);
        $('#dogen').html(`ngn: ${crypto.binancecoin.ngn}`);
    })
    .fail(function (err) {
        alert('error occured')
    })
})

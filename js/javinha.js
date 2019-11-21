var zero = 0;
$(document).ready(function () {
    $(window).on('scroll', function () {
        $('.navbarMenuItens').toggleClass('hide', $(window).scrollTop() > zero);
    })
})


var zero = 0;
$(document).ready(function () {
    $(window).on('scroll', function () {
        $('.fundoLogo').toggleClass('svgRetrat', $(window).scrollTop() > zero);
        $('.svgLogo').toggleClass('logoRetrat', $(window).scrollTop() > zero);
    })
})

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$(function () {
    $('#datetimepicker6').datetimepicker();
});
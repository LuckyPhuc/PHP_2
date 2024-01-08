$(document).ready(function () {
    $('.brand__tool').click(function () {
        $('.sidebar__text , .logo, .__icon, .form-control,.bi-chevron-right ,.menu__dropdown').toggleClass('hidden');
        $('.nav__vertical').toggleClass('nav__vertical_collapsed');
        $('.brand__tool').toggleClass('flip');
    });
    $('.vertical__menu').click(function () {
        $(this).next('.menu__dropdown').find('a').toggleClass('active');
        $(this).find('.__icon').toggleClass('rotated');
    });
});


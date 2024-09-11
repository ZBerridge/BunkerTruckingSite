/*
 * Copyright (c) 2022. Designed and built by Zachary Berridge.
 */
import $ from 'jquery';
import 'slick-carousel';

$(document).ready(function() {
    $('.slider-nav').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        asNavFor: '.slider-content',
        dots: false,
        arrows: true,
        focusOnSelect: true,
        prevArrow: '<i class=\'fa fa-angle-left slick-arrow\' style=\'display: block;\'></i>',
        nextArrow: '<i class=\'fa fa-angle-right slick-arrow\' style=\'display: block;\'></i>',
        responsive: [
            {
                breakpoint: 420,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 5,
                }
            }]
    });
    $('.slider-content').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
})

$(document).ready(function() {
    $('.banner-carousel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        fade: true,
        autoplay: true,
        autoplaySpeed: 5000,
        prevArrow: '<i class=\'fa fa-angle-left slick-prev slick-arrow\' style=\'display: block;\'></i>',
        nextArrow: '<i class=\'fa fa-angle-right slick-next slick-arrow\' style=\'display: block;\'></i>' 
    })
})

$(document).ready(function() {
    $('.testimonial-carousel').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 5000,
        prevArrow: '<i class=\'fa fa-angle-left slick-prev slick-arrow\' style=\'display: block;\'></i>',
        nextArrow: '<i class=\'fa fa-angle-right slick-next slick-arrow\' style=\'display: block;\'></i>' 
    })
})
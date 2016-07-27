$ = jQuery;

$(window).ready(function(){

    setProjectContainers();
    setGrid();
    moveGalleries();

    $(".wait-for-load").each(function() {
        fadeIn($(this));
    });

});

$(window).resize(function(){

    setProjectContainers();

});

function setGrid() {
    $('#projects-container').masonry({
        itemSelector: '.project-container'
    });
}

function setProjectContainers() {
    var height = $('.project-container').outerWidth() * 0.65;
    $('.project-container').each(function(){
        var thisHeight = height;
        if ($(this).hasClass('portrait')) {
            thisHeight = height * 2 + 6;
        }
        $(this).css('height', thisHeight);
    })
}

function fadeIn (element) {
    if (element.hasClass('bg-loader')) {
        bgLoader(element);
    } else {
        imgLoader(element);
    }
}

function imgLoader(element) {
    var images = element.find('img'),
        counter = 0;
    images.each(function () {
        var img = new Image();
        img.onload = function () {
            counter++;
            if(counter === images.length) {
                element.addClass('loaded');
            }
        };
        img.src = $(this).attr('src');
    });
}

function bgLoader(element) {
    var subElement = element.find('.bg-load-element'),
        src = subElement.data('link');
    function loadImage(src) {
        var img = new Image();
        img.onload = function () {
            element.addClass('loaded');
        };
        img.src = src;
    }
    loadImage(src);
}

function moveGalleries() {
    $('.gallery').addClass('wait-for-load');
    $('.gallery').appendTo($('.con-gallery'));
}
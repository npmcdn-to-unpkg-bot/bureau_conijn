$ = jQuery;

$(window).ready(function(){

    setProjectContainers();
    setGrid();
    moveGalleries();

    $(".project-main-image").each(function() {
        fadeIn($(this));
    });

});

$(window).resize(function(){

    setProjectContainers();

});

function setGrid() {
    $('#projects-container').masonry({
        // options
        itemSelector: '.project-container'});

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
    var src = element.data('link');
    function loadImage(src) {
        var img = new Image();
        img.onload = function () {
            element.parent().addClass('loaded');
        };
        img.src = src;
    }
    loadImage(src);
}

function moveGalleries() {
    $('.gallery').appendTo($('.con-gallery'));
}
var Slider = function(container) {

    this.current = 0;
    this.total = 6;

    this.config = {
        width: 0,
        height: 0,
        margin: {
            bottom: 10
        }
    };
    
    this.elements = {
        container: $(container),
        carrier: $(container).find('.home-slide-carrier')
    };
    
    this.timer = null;
};

Slider.prototype.init = function() {
    this.config.width = this.elements.container.outerWidth();
    this.config.height = $(window).outerHeight() - this.elements.container.offset().top - this.config.margin.bottom;
    this.elements.container.css('height', this.config.height);
    this.play();
};

Slider.prototype.play = function() {
    var self = this;
    this.timer = setInterval(function(){
        self.nextSlide();
    }, 3500);
};

Slider.prototype.nextSlide = function() {
    this.elements.carrier.css('left', -1 * this.current * this.config.width);
    this.current++;
    if (this.current >= this.total) {
        this.current = 0;
    }
};


Slider.prototype.stop = function() {
    clearInterval(this.timer);
};
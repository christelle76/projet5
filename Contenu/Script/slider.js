
$(function(){
    
    
    initSlider();

    function initSlider() {
        var slides = document.getElementsByClassName("mySlides");
        var index = 0;

        var timer = setInterval(function() {
            var sliderLength = 1;
            slides[index].classList.toggle('visible');
            index++;

            if (index > sliderLength) {
                index = 0;
            } 
            slides[index].classList.toggle('visible');

        }, 5000);
    }

});
class Slider {
    constructor() {
        this.sliderLength = 1;
        this.initSlider();
    }

    switchSlide(i) {
        var slides = document.getElementsByClassName("mySlides");
        console.log(slides[i+1]);
        
        if (i == this.sliderLength) {
            slides[i].style.visibility = "hidden";
            var i = 0;
            slides[i].style.visibility = "visible";
        } else {
            slides[i].style.visibility = "hidden";
            i++;
            slides[i].style.visibility = "visible";
        }
        //var timer = setInterval(this.switchSlide(i), 5000);
    }

    initSlider() {
        var i = 0;
        var slides = document.getElementsByClassName("mySlides");
        slides[i+1].style.visibility = "hidden";
        var timer = this.switchSlide(0);
    }
}
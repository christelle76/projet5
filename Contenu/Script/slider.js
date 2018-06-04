
var slides = document.getElementsByClassName("mySlides");
var i = 0;
initSlider();


function initSlider() {
    slides[i+1].style.visibility = "hidden";
    setInterval(switchSlide(i), 1000);
}

function switchSlide(i) {
    
    console.log("dfdfdf");

    if (i == this.sliderLength) {
        slides[i].style.visibility = "hidden";
        var i = 0;
        slides[i].style.visibility = "visible";
        console.log("1");
    } else {
        slides[i].style.visibility = "hidden";
        i++;
        slides[i].style.visibility = "visible";
        console.log("2");
    }
    
}


var slideIndex = 1;
showbottomSlides(slideIndex);

// Next/previous controls
function plusSlides2(n) {
  showbottomSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide2(n) {
  showbottomSlides(slideIndex = n);
}

function showbottomSlides(n) {
  var i;
  var slides = document.getElementsByClassName("bottomSlides");
  var dots = document.getElementsByClassName("dot2");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
}

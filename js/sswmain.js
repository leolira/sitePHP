var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("slideShow");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1}
    x[slideIndex-1].style.display = "inline";
    x[slideIndex-1].style.position = "relative";
    x[slideIndex-1].style.top = "50";
    x[slideIndex-1].style.left = "50";
    setTimeout(carousel, 5000); // Tempo para mudar
}
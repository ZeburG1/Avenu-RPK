const logo = document.querySelector(".logo");


logo.addEventListener('mouseenter', function() {
    logo.style.transitition = "0.2s";
    logo.style.filter = "drop-shadow(0 0 25px white)";
    logo.style.scale = 1.1;
});
logo.addEventListener('mouseleave', function() {
    logo.style.transitition = "0.2s";
    logo.style.filter = "drop-shadow(0 0 0 #000)";
    logo.style.scale = 1.0;
});
const scrollable_background = document.querySelector(".class");

window.addEventListener("scroll", function() {
    let offset = window.pageYOffset;
    scrollable_background.style.backgroundPositionY = offset * 0.7 + "px";
});
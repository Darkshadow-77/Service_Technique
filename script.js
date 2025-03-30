const scrollable_background = document.querySelector(".accueil");

window.addEventListener("scroll", function() {
    let offset = window.pageYOffset;
    console.log(offset);
    scrollable_background.style.backgroundPositionY = offset * (-0.7) + "px";
});
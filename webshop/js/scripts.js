document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function() {
        var preloader = document.querySelector(".preloader");
        preloader.classList.add('preloader-hidden');
        preloader.addEventListener('transitionend', function() {
            preloader.style.display = 'none';
        });
    }, 1500);
});

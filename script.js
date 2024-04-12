$(document).ready(function() {

    $('.counter').each(function () {
$(this).prop('Counter',0).animate({
    Counter: $(this).text()
}, {
    duration: 6000 ,
    easing: 'swing',
    step: function (now) {
        $(this).text(Math.ceil(now));
    }
});
});

});  


document.querySelector('.scroll-down-button').addEventListener('click', function() {
    const section = document.querySelector('.homepage-v9-banner-slider-main');
    const offsetTop = section.offsetTop;

    window.scrollTo({
        top: offsetTop,
        behavior: 'smooth'
    });
});

        
        



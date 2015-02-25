$('.grid').hover(
    function() {
        sound = $(this).children()[0];
        sound.play();
    }, function() {
        sound.pause();
        sound.currentTime = 0;
    }
);
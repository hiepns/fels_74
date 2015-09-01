$(function() {
    $('.speak').each(function () {
        $(this).click(function () {
            responsiveVoice.speak($(this).siblings('#nihon').text(), 'Japanese Female');
        });
    });
});
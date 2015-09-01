$(function() {
    $('.speak').each(function () {
        $(this).click(function () {
            responsiveVoice.speak($(this).closest('.result').find('.nihon').text(), 'Japanese Female');
        });
    });
});
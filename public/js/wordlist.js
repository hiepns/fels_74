$('#filter').click(function(){ 
    var option = $('input[type="radio"]:checked').val();
    var category_id = $('select[name="category"]').val();

    $.ajax({
        url: $('#filter').data('url'),
        type: 'GET',
        dataType: 'html',
        data: {
            'option': option,
            'category_id': category_id 
        },
        success: function(data) {
            $("#word-list").html(data);
        }
    });
});

$(".answer").on("click", function() {
    $(this).attr('id', 'choice'+num);

    $.ajax({
        url: $(this).data('url'),
        type: 'POST',
        data: {
            _method: 'PUT',
            'word_id': $(this).data('wordid'),
            'answer_id': $(this).data('answerid')
        },
        success: function(isCorrect) {
            if (isCorrect == 1) {
                $('#choice'+num).addClass('true-answer');
            } else {
                $('#choice'+num).addClass('wrong-answer');
            }  

            num++;          
            if (num == total_words) {
                setTimeout(function () {
                    window.location.href = result_url;
                }, 600);
            }

            setTimeout(function () {
                next(num - 1);
            }, 600);
        }
    });
}); 

function next(num) {
    $("#word-" + num).addClass('hide');
    $("#word-" + (num + 1)).removeClass('hide');
}

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

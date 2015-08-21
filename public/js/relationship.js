$('.follow').click(function(){
    $.ajax({
        url: $(this).data('url'),
        type: 'post',
        data: {'followed_id': $(this).data('followedid')},
        success: function() {
            $('#follow').hide();
            $('#remove').show();
            $('#followers').html(function(i, val) { return +val+1 });
        },
        fail: function() {
            alert('There was something wrong!');
        }
    }); 

    return false;
});

$('.remove').click(function(){
    $.ajax({
        url: $(this).data('url'),
        type: 'post',
        data: {_method: 'delete'},
        success: function() {
            $('#remove').hide();
            $('#follow').show();
            $('#followers').html(function(i, val) { return +val-1 }); 
        },
        fail: function() {
            alert('There was something wrong!');
        }
    }); 
 
    return false;
});

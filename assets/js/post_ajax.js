jQuery(document).ready(function($){

    $('#morePosts').on('click', function(e){
        e.preventDefault(); // отмена редиректа
        var offSet = $('.news-item').length;
        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: MyAjax.ajaxurl,
            data:{
                action: 'getFreshNews',
                offSet: offSet,
                ajax:true,
            },
            success: function(data) {
                $('.news-content-page').append(data.news);
                if(data.button == false){
                  $('.see-more-btn').remove();
                }
                console.log(data.button);
                console.log(data.posts);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('ERROR');
            }
        })
    });

});

$('.Post').mouseup(function(){
    $('.postBox').toggle();
    $('.postContainer').toggle();
})

$('#post').mouseup(function(){
    var title = $('#input_title').val();
    var category = $('#input_category').val();
    var content = $('#input_content').val();
    if(title !='' && category!=''&& content !=''){
        $.post("upload.php",{
            title:title,
            category:category,
            content:content,
            },function(data,status){
            if(status=='success')
            {
                alert(data);
            }
            else alert(status);
        });
    }
    else alert('Not enough information.')
})

$('.refresh').mouseup(function(){
    $('#data').load('loadPost.php',{});
})
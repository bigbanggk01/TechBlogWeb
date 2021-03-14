$(document).ready(function(){
    $('.Logout').mouseup(function(){
        $.post("logout.php",{},function(data,status){
            if(data=='OK_Logout_good')
            {
                window.location.href = "index.php";
            }
            else alert(status);
        });
    })

    $('.Post').mouseup(function(){
        $('.postBox').toggle();
        $('.postContainer').toggle();
    })

})
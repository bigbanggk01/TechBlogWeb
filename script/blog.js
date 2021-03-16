$(document).ready(function(){    
    bindLogoutClick();
})

function bindLogoutClick(){
    $('.Logout').mouseup(function(){
        $.post("logout.php",{},function(data,status){
            if(data=='OK_Logout_good')
            {
                window.location.href = "index.php";
            }
        });
    });
}
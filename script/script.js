$(document).ready(function(){
    $('.header1').click(function(){
        $('.modal').show();
    })
    $('.header3').click(function(){
        window.location.href = "blog.php";
    })
    $('#Reg').mouseup(function(){
        var user = $('#reg_user').val();
        var pass = $('#reg_pass').val();
        var conf = $('#reg_confirm').val();

        if(user!=''&& pass!="" && conf!=""){
            if(validation(user,pass)==false){
                alert('Input is not alphanumeric');
                return;
            }
            if(pass!=conf) {
                alert('Password confirmation do NOT equal to password');
                return;
            }
            $.post("reg.php", {
                user:user,
                pass:pass
            },function(data,status){
                if(status=='success')
                {
                    alert(data);
                }
                else alert(status);
            });
        }
        else alert('You haven\'t written enough yet!');
    })

    $('#Login').mouseup(function(){
        var user = $('#log_user').val();
        var pass = $('#log_pass').val();
        if(validation(user,pass)==false){
            alert('Input is not alphanumeric');
            return;
        }
        if(user==""&&pass=="")       alert('Please enter username and password');
        else if(user==''&& pass!="") alert('Please enter username');
        else if(user!=''&& pass=="") alert('Please enter password');
        else if(user!=''&& pass!="") {
            $.post("login.php", {
                user:user,
                pass:pass
            },function(data,status){
                if(status=='success'&& data==user)
                {
                    $.post("blog.php", {
                        user:user
                    },);
                    window.location.href = "blog.php";
                }
                else alert('Password or username is wrong !');
            });
        };
    })

    $('.switch').click(function(){
        if($('.switch').text() == "Don't have any account?"){
            $('#log_form').hide();
            $('#reg_form').show();
            $('.switch').text('back');
        }
        else {
            $('#log_form').show();
            $('#reg_form').hide();
            $('.switch').text('Don\'t have any account?');
        }
    })
})

$(document).mouseup(function(e) 
{
    var container = $(".modal");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        container.hide();
    }
})


function validation(user, pass){
    if(/[^a-zA-Z0-9\-\/]/.test(user) || /[^a-zA-Z0-9\-\/]/.test(pass)) return false;
    return true;     
}
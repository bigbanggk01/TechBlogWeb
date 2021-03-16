<?php
    include_once 'connect.php';

    $conn= mysqli_connect($db_hostname, $db_user, $db_pass, $db_name);
    $sql= "SELECT accounts.user , posts.category, posts.title 
    FROM posts
    INNER JOIN accounts 
    ON posts.author_ID= accounts.acc_id";

    $result = mysqli_query($conn,$sql);
            echo('
            <!DOCTYPE html>
            <style>
            table, th, td {
            border: 1px solid black;
            }
            </style>');
            echo('
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
            <script>
                $(document).ready(function(){    
                    $(".postComment").hide();
                })    
            </script>
                <table style="width:100%">
                <tr>
                    <th>author</th>
                    <th>category</th> 
                    <th>title</th>
                </tr>
            ');

    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            echo('
                <tr>
                    <td>'.$row['user'].'</td>
                    <td>'.$row['category'].'</td>
                    <td><button class=\''.$row['title'].'\'>'.$row['title'].'</button></td>
                </tr>
            ');

            echo('
                <script>
                    
                    $(document).ready(function(){
                        var title = "'.$row["title"].'";   
                        $(".'.$row['title'].'").mouseup(function(){
                            $("table").hide();
                            $.post("loadContent.php", 
                            {
                                title: title,
                            },
                            function(result){

                                $(".dataX").html(result);
                                $(".dataX").css({
                                    "border-color": "#333", 
                                    "position":"relative",
                                    "left":"24px",
                                    "border-width":"1px", 
                                    "border-style":"solid",
                                    "width": "1000px",
                                    "height": "600px",
                                    "overflow-y": "scroll",
                                    "display":"inline-block",
                                });

                                $(".comment").css({
                                    "position":"relative",
                                    "left":"24px",
                                    "width": "550px",
                                    "height": "600px",
                                    "display":"inline-block ",
                                });

                                $(".commentX").css({
                                    "position":"relative",
                                    "overflow-y": "scroll",
                                    "border-color": "#333",
                                    "border-width":"1px", 
                                    "border-style":"solid",
                                    "left":"24px",
                                    "width": "550px",
                                    "height": "550px",
                                    "display":"block",
                                });

                                $(".postComment").css({
                                    "position":"relative",
                                    "left":"24px",
                                    "width": "550px",
                                    "height": "50px",
                                    "display":"block",
                                });
                                
                                $(".commentSide").css({
                                    "position":"relative",
                                    "overflow-y": "auto",
                                    "border-color": "#333",
                                    "border-width":"1px", 
                                    "border-style":"solid",
                                    "left":"0px",
                                    "top" : "0px",
                                    "width": "470px",
                                    "height": "50px",
                                    "display":"inline-block",
                                });

                                $(".postCommentButton").css({
                                    "position":"relative",
                                    "overflow-y": "auto",
                                    "top":"-20px",
                                    "left":"0px", 
                                    "width": "70px",
                                    "height": "50px",
                                    "display":"inline-block",
                                });
                            });


                            $.post("loadComment.php",{

                                title:title,

                            },function(result){
                                
                                $(".commentX").html(result);
                            });

                        })
                    })
                </script>
            ');
        }
    }
            echo('</table>');

            echo('
                <div class="dataX"></div>
                <div class="comment">
                    <div class="commentX"></div>
                    <div class="postComment">
                            <textarea class="commentSide">

                            </textarea>
                            <button class="postCommentButton">
                                Send
                            </button>
                    </div>
                </div>
                <script>
                    $(document).ready(function(){
                        $(".postCommentButton").mouseup(function(){
                            $.post("upLoadComment.php",{
                                    comment:$(".commentSide").val()
                                },function(result){
                                    alert(result);
                            });
                        })    
                    })
                </script>
            ');
            
    mysqli_close($conn);
?>

<!-- $.post("upLoadComment.php",{

comment:"$(".commentSide").val()",

},function(result=="Uploaded"){
alert("Please refresh to see your comment");
}); -->
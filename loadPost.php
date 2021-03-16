<?php
include_once 'connect.php';

$conn= mysqli_connect($db_hostname, $db_user, $db_pass, $db_name);
$sql= "SELECT author_ID, category, title FROM posts WHERE 1";

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
            
            <table style="width:100%">
            <tr>
                <th>author_ID</th>
                <th>category</th> 
                <th>title</th>
            </tr>
        ');
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
        echo('
            <tr>
                <td>'.$row['author_ID'].'</td>
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
                            $(".dataX").css({"border-color": "#333", 
                                "position":"relative",
                                "left":"24px",
                                "border-width":"1px", 
                                "border-style":"solid",
                                "width": "1600px",
                                "height": "600px",
                                "overflow-y": "scroll",
                            });
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
        ');
mysqli_close($conn);
?>
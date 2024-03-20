<?php
    session_start();
    include('config/config.php');
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "select * from tbl_admin where username ='".$username."' and password ='".$password."' LIMIT 2";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count > 0){
            $_SESSION['login']= $username;
            header("Location:index.php");
        }
        else
        {
            echo'<script>alert("failed")</script>';
            header("Location:login.php");
        }
    }


?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="with=device-width , initial-scale=1.0">
    <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Fasthand&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Fasthand&family=La+Belle+Aurore&display=swap" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css2?family=Gwendolyn:wght@400;700&family=Lavishly+Yours&family=Mooli&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Mooli&display=swap" rel="stylesheet">

        <style type = "text/css">
            body{
                background: #f2f2f2;
            }
            .login{
                width: 30%;
                margin: 0 auto;
            }
            div{
                display: block;
            }
        </style>
            
</head>
<body>
        <div class="login">
            <form action="" autocomplete="off" method="$_POST" >  
                <tr>
                    <td>username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2"> <input type ="submit" name ="login" value ="login">   </td>
                </tr>
            </table>
            </form>
            
        </div>


<script type ="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"> </script>
</body>
</html
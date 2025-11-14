<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="login.php">
        Username: <input type="text" name="Username"><br><br>
        Password: <input type="password" name="Password"><br><br>
        <input type="submit" value="Log in">
        <input type="reset" value="Cancel">
    </form>
</body>
<?php
     if($_SERVER['REQUEST_METHOD'] == "POST")
     {
        $a = $_POST['Username'];
        $b = $_POST['Password'];
        if(empty($a) and empty($b))
        {
            echo '<script>alert("Username or Password is empty")</script>';
        }
        else if($a ==='admin' and $b === 'admin123')//or,and
        {
            echo '<script>window.open('login1.php','_self')</script>';
        }
        else
        {
            echo '<script>alert("Username or Password is incorrect!")</script>';
        }
     }
     ?>
</html>
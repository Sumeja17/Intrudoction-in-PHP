<?php 
$connect=mysqli_connect('localhost','root','','login1'); //Open a connection to a MySQL Server
    mysqli_select_db($connect, 'login1'); //Select a MySQL database
    
    if(isset($_POST['login']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];

            $login = "SELECT * FROM admin_login WHERE username='$username' AND password='$password'";
            
            $con = mysqli_query($connect, $login);//Send a MySQL query

            if(mysqli_num_rows($con)>0)// Get number of rows in result
            {
                $_SESSION['username']=$username;

                echo "<script>;
                window.open('admin.php', '_self');
               </script>";
                   }
         elseif(empty($username) || empty($password))
                   {
                       echo "<script>alert('Username ose Password jane te zbrazeta!');</script>";
                   }
            else {
                echo "Username or Password is incorrect";
            }
        }
        ?>
        
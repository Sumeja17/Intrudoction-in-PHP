<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <?php 
    // define variables and set to empty values
    $name = $lastName = $email = $password = $confirmPassword = $gender = $birthday="";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name =$_POST['name'];
        $lastName =$_POST['lastName'];
        $email =$_POST['email'];
        $password =$_POST['password'];
        $confirmPassword =$_POST['confirmPassword'];
        $gender =$_POST['gender'];
        $birthday =$_POST['birthday'];
    }
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="name">
        <br><br>
        Last Name: <input type="text" name="lastName">
        <br><br>
        Email: <input type="text" name="email">
        <br><br>
        Password: <input type="password" name="password">
        <br><br>
        Confrim Password: <input type="password" name="confirmPassword">
        <br><br>
        Gender: <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="Femer") echo "checked";?>
        value="Femer">F
        <input type="radio" name="gender"
        <?php if (isset($gender) && $gender=="Mashkull") echo "checked";?>
        value="Mashkull">M
        <br><br>
        Birthday: <input type="date" name="birthday">
        <br><br>
        <input type="submit" value="Log in">
        <input type="cancel" value="Cancel">
    </form>
    <?php 
        echo "<h2>Rezultati:</h2>";
        echo $name.'<br>';
        echo $lastName.'<br>';
        echo $email.'<br>';
        echo $password.'<br>';
        echo $confirmPassword.'<br>';
        echo $gender.'<br>';
        echo $birthday.'<br>'; 
        ?>
</body>
</html>
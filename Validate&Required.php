<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validate & Required</title>
    <style>
        .empty {color: red;}
    </style>
</head>
<body>
    <?php 
    $empUsername = "";
    $empEmail = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username =secure($_POST['username']);
        if(empty($username))
        {
            $empUsername ="Username is required";
        }
        elseif (!preg_match("/^[a-zA-ZëË]*$/", $username))
        {
            $empUsername = "Only letters and white spaces allowed";
        }
    $email =secure($_POST['email']);
    if(empty($email))
    {
        $empEmail ="Email is required";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $empEmail = "Invalid email format";
    }
}
function secure($x) {
    $x = htmlspecialchars($x);
    $x = trim($x);
    $x = stripslashes($x);
    return $x;
}
    ?>
    <p><span class="empty">* Required</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        Username: <input type="text" name="username">
        <span class="empty">*<?php echo $empUsername;?></span><br><br>
         Email: <input type="text" name="email">
        <span class="empty">*<?php echo $empEmail;?></span><br><br>
        <input type="submit" value="Log in">
        <input type="reset" value="Cancel">
    </form>

    <?php 
    echo $username;
    echo "<br>";
    echo $email;
    ?>
</body>
</html>
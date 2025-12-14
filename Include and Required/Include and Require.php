<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php 
    //require ('include/form.php')
    
    include ('include/form.php');
    
    //echo 'forma e pare';
?>
<form method="post" action="Include and Require.php">
    Username: <input type="text" name="Username">
    <span class="empty">*<?php echo $empUsername;?></span><br><br>
    Password: <input type="text" name="Password">
    <span class="empty">*<?php echo $empPassword;?></span><br><br>
    <input type="submit" value="Log in">
    <input type="reset" value="Cancel">
</form>
</body>
</html>
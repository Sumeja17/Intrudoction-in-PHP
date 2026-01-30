<?php 
 echo include('Login1.php'); //perfshin dhe vlereson skedarin e specifikuar.
 ?>
 <html>
    <head>
        <title>Login</title>

        <link rel="stylesheet" href="" media="all">
<!-- Atributi media specifikon se per cfare media / pajisje eshte optimizuar burimi i synuar.
 Kjo atribut perdoret me se shumti me fletet e stilit CSS per te specifikuar stile te ndryshme per llojet all--Default.
 Used for all media type devices (Perdoret per te gjitha pajisjet e tipit mediatik)-->
    </head>
    <body>
        <form action="post" action="Login.php"><!--action-> specifikon se ku te dergohen te dhenat e formularit ku-->
            Username: <input type="text" name="Username"><br><br>
            Password: <input type="password" name="Password"><br><br>
            <input type="submit" name="Login" value="Log in">
            <input type="reset" name="Cancel" value="Cancel">
        </form>
    </body>
 </html>
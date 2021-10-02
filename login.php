<?php 

    include("head.php");
    include("redirect_login.php");
    
    extract($_POST);
    
    if(isset($_POST['submit']))
    {
    $uname=trim($username);
    $pass=$password;
    $query="select * from users where email='$uname' and password='$pass'";
    $sel=mysqli_query($con,$query);
    $row=mysqli_num_rows($sel);

    if($row>0)
    {
        $_SESSION['uname']=$username;
        header("location:index.php");
		ob_flush();
    }
    else{
        $message = "Invalid username and password !!";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
} 

?>

        <div class="loginbox">
            <img src="Images/user.png"/>
            <h2>LOGIN</h2>
            <form name="loginform" method="post">
                <p>Username</p>
                <input type="text" name="username" placeholder="Username" autocomplete="off"/>
                <p>Password</p>
                <input type="text"  autocomplete="off" name="password" placeholder="********" style="-webkit-text-security: circle;"/>
                <input type="submit" name="submit" value="Login"/>
                <a href="register.php"><input type="button" name="register" value="Register"/></a>
                <a href="forgetpass.php">Forget Id or Password</a>
            </form>
        </div>
    </body>
</html>
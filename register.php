<?php
include("head.php");

extract($_POST);
if(isset($_POST['submit']))
{

$uname=$flname;
$uemail=trim($email);
$pass=$password;
$query="select * from users where email='$uemail'";
$sel=mysqli_query($con,$query);
$row=mysqli_num_rows($sel);

    if($row>0)
    {      
    $message = "You are already registered !!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else{

    $query="insert into users values(NULL,'$uname','$email','$pass')";
    $sel=mysqli_query($con,$query);
    
    if($sel)
    {
    session_start();
    $_SESSION['uname']=$uemail;
    header("location:index.php");
    ob_flush();
    } 

    }
}
?>


<?php

if(!(empty($_SESSION['uname'])))
{
    header("location:index.php");
}

?>
        <div class="rb">
            <img src="Images/user.png" class="user"/>
            <h2>REGISTER</h2>

            <form name="registerform" method="post">
                <p>Full Name</p>
                <input type="text" name="flname" placeholder="Enter Full Name" required autocomplete="off"/>
                
                <p>Email Id<sup><font style="color: red;"> *</font></sup></p>
                <input type="email" name="email" placeholder="abc@abc.abc" required autocomplete="off"/>
                
                <p>Create Password<sup><font style="color: red;"> *</font></sup></p>
                <input type="text" name="password" placeholder="Minimum 6 Characters" style="-webkit-text-security: circle;" minlength="6" required autocomplete="off"/>

                <input type="submit" name="submit" value="Register"/>
                <a href="login.php"><input type="button"  name="login" value="Login"/></a>
            </form>
        </div>
    </body>
</html>
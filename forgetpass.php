<?php 

    include("head.php");
    extract($_POST);
    
    if(isset($_POST['submit']))
    {
    $detail=trim($details);
    $query="select * from users where email='$detail' or password='$detail'";
    $sel=mysqli_query($con,$query);
    $row=mysqli_fetch_array($sel);

    //echo $query;

    if($row)
    {

        echo "<script type='text/javascript'>alert('Your Id: '+'$row[email]'+'   Your Pass: '+'$row[password]');</script>";
    }
    else{
        $message = "Invalid Details";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
} 

?>

        <div class="loginbox" style="height: 300px;">
            <img src="Images/user.png" class="user"/>
            <form name="" method="post">
                <p>Enter Username / Password</p><br>
                <input type="text" name="details" placeholder="Enter Username or Password" autocomplete="off"/>
                <input type="submit" name="submit" value="Submit"/>
                <a href="login.php">Know Id And Pass ? Login Here</a>
            </form>
        </div>
    </body>
</html>
<?php 

    $uname=$_SESSION['uname'];
    $query="select name from users where email='$uname'";
    $sel=mysqli_query($con,$query);
    $row=mysqli_fetch_array($sel);
?>

<div>
        <ul>
            <li class="udetail"><img src="Images/logo.png" alt="Logo"></li>
            <li class="udetail">Welcome <b><?php echo ucwords($row['name']);?></b></li>
            <li><a href="logout.php">Logout</a></li>
            <li><a href="Videos.php">Videos</a></li>
            <li>  <div class="dropdown">
    <button class="dropbtn">Programs 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="bg_progs.php">Beginner's Programs</a>
      <a href="me_progs.php">Medium Programs</a>
      <a href="ad_progs.php">Advance Programs</a>
    </div>
  </div> </li>
            <li><a href="history.php">History</a></li>
            <li class="active"><a href="index.php">Home</a></li>
        </ul>
</div>


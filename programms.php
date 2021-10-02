<?php
include("head.php");
if(empty($_SESSION['uname'])){header("location:login.php");}
?>

<?php include("navbar.php");?>

<div class="parent-div" style="overflow: auto;height: 500px;">
<h1 class="heading-main"><b>Select Program Level</b></h1>
<ol>
     <a href="bg_progs.php" style="text-decoration:none;color:orange;font-weight:100;"><li>Beginner's Programs</li></a>
     <a href="me_progs.php" style="text-decoration:none;color:orange;font-weight:100;"><li>Medium Programs</li></a>
     <a href="ad_progs.php" style="text-decoration:none;color:orange;font-weight:100;"><li>Advance Programs</li></a>
</ol>

</div>
<?php include("footer.php");?>



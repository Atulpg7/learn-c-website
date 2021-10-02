<?php include("head.php");?>
<?php include("navbar.php");
if(empty($_SESSION['uname'])){header("location:login.php");}
?>
<div class="section-heading" style="overflow: auto;height: 500px;">
<h1 class="heading-main"><b>Medium Programs In C</b></h1>

<ol>
<a href="binary.php" class="b-progs"><li>Binary Search Program</li></a>
    <a href="linear.php" class="b-progs"><li>Linear Search Program</li></a>
    <a href="bubble.php" class="b-progs"><li>Bubble Sort Program</li></a>
    <a href="insertion.php" class="b-progs"><li>Insertion Sort Program</li></a>
    <a href="#" class="b-progs"><li>Count No of Capital & Small Letters,Numbers and Special Charaters in a String Program</li></a>
    <a href="#" class="b-progs"><li>Find Greatest From 3 No's Using #define macro preprocessor Program</li></a>
</ol>
</div>

<?php include("footer.php");?>

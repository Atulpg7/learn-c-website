<?php include("head.php");?>
<?php include("navbar.php");
if(empty($_SESSION['uname'])){header("location:login.php");}
?>
<div class="section-heading" style="overflow: auto; height: 500px;">

<h1 class="heading-main"><b>Advance Programs In C</b></h1>

<ol>
	<a href="quicksort.php" class="m-progs"><li>Quick Sort Program</li></a>
	<a href="mergesort.php" class="m-progs"><li>Merge Sort Program</li></a>
	<a href="#" class="m-progs"><li>Remove Numbers and Special Charaters from a String Program</li></a>
	<a href="#" class="m-progs"><li>Reverse a String Program</li></a>
</ol>

</div>

<?php include("footer.php");?>

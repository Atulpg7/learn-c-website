<?php include("head.php");?>
<?php include("navbar.php");
if(empty($_SESSION['uname'])){header("location:login.php");}
?>
<div class="section-heading" style="overflow: auto;height: 500px;">
<h1 class="heading-main"><b>Beginners Programs In C</b></h1>

<ol>
<a href="helloworld.php" class="a-progs"><li>Print Hello World Program</li></a>
    <a href="scannos.php" class="a-progs"><li>Scan No Program</li></a>
    <a href="addnos_predefine.php" class="a-progs"><li>Add 2 No's (Pre-defined Values) Program</li></a>
    <a href="airthmatic_Predef.php" class="a-progs"><li>Do all Airthmetic Operations(Pre-defined Values) Program</li></a>
    <a href="#" class="a-progs"><li>Find String Length Program</li></a>
    <a href="#" class="a-progs"><li>Print String using Pointer Program</li></a>

</ol>
</div>

<?php include("footer.php");?>

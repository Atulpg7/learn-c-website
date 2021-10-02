<?php
include("head.php");
if(empty($_SESSION['uname'])){header("location:login.php");}
?>

<?php include("navbar.php");?>

<div class="parent-div" style="overflow: auto;height: 500px;">

    <h1 class="heading-main"><b>Quick Links</b></h1>
<ol>
    <a href="history.php" class="a_main"><li>History of C.</li></a>
    <a href="programms.php" class="a_main"><li>Programs of C.</li></a>
</ol>

<h1 class="heading-main"><b>Programs</b></h1>
<ol>
    <a href="helloworld.php" class="b-progs"><li>WAP to Print Hello World</li></a>
    <a href="scannos.php" class="b-progs"><li>WAP to Scan No</li></a>
    <a href="addnos_predefine.php" class="b-progs"><li>WAP to Add 2 No's (Pre-defined Values)</li></a>
    <a href="airthmatic_Predef.php" class="b-progs"><li>WAP to do all Airthmetic Operations(Pre-defined Values)</li></a>
    <a href="binary.php" class="b-progs"><li>WAP of Binary Search</li></a>
    <a href="linear.php" class="b-progs"><li>WAP of Linear Search</li></a>
    <a href="quicksort.php" class="b-progs"><li>WAP of Quick Sort</li></a>
    <a href="mergesort.php" class="b-progs"><li>WAP of Merge Sort</li></a>
    <a href="insertion.php" class="b-progs"><li>WAP of Insertion Sort</li></a>
    <a href="bubble.php" class="b-progs"><li>WAP of Bubble Sort</li></a>
</ol>

<!--<h1 class="heading-main"><b>Extra Links</b></h1>
<ol>
    <a href="#" class="a-progs"><li>About Us.</li></a>
</ol>-->

</div>
<?php include("footer.php");?>



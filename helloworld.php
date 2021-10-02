<?php include("head.php");?>
<?php include("navbar.php");
if(empty($_SESSION['uname'])){header("location:login.php");}
?>

<div class="section-heading" style="overflow: auto;height: 500px;">
    <h1><b>Programm to print Hello World in C</b></h1>
<pre style="font-size: 20px;">
<code>#include <<x>stdio.h></code>
int main()
{
  printf("Hello World");
  
  return 0;
}


<b><u>Output</u>

Hello World</b>
</pre>
</div>

<?php include("footer.php");?>

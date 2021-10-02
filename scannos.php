<?php include("head.php");?>
<?php include("navbar.php");
if(empty($_SESSION['uname'])){header("location:login.php");}?>

<div class="section-heading" style="overflow: auto;height: 500px;">
<h1><b>Programm to scan no's in C</b></h1>
<pre style="font-size: 20px;">
<code>#include <<x>stdio.h></code>
int main()
{
  int a,b;
  printf("Enter a: ");
  scanf("%d",&a);
  printf("Enter b: ");
  scanf("%d",&b);
  printf("a: %d & b: %d",a,b); 
  return 0;
}

<b><u>Output</u>
    
Enter a: 10
Enter b: 20
a: 10 & b: 20</b>
</pre>
</div>

<?php include("footer.php");?>

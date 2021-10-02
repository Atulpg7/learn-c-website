<?php include("head.php");?>
<?php include("navbar.php");?>

<div class="section-heading" style="overflow: auto;height: 500px;">
<h1><b>Programm to do Airthmatic operations on 2 no's (Pre-defined Values) in C</b></h1>
<pre style="font-size: 20px;">
<code>#include <<x>stdio.h></code>
int main()
{
  int a=20,b=10,sum,div,mul,sub,mod;
  sum=a+b;
  div=a/b;
  mul=a*b;
  sub=a-b;
  mod=a%b;
  printf("Sum: %d\n",sum);
  printf("Div: %d\n",div); 
  printf("Mul: %d\n",mul); 
  printf("Sub: %d\n",sub); 
  printf("Mod: %d\n",mod);  
  return 0;
}

<b><u>Output</u>
    
Sum: 30
Div: 2
Mul: 200
Sub: 10
Mod: 0</b>
</pre>
</div>

<?php include("footer.php");?>

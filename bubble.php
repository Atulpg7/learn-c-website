<?php include("head.php");?>
<?php include("navbar.php");
if(empty($_SESSION['uname'])){header("location:login.php");}?>

<div class="section-heading" style="overflow: auto;height: 500px;">
<h1><b>Programm of Bubble Sort in C</b></h1>
<pre style="font-size: 20px;">
<code>#include <<x>stdio.h></code>
int main()
{
    int n, temp, pos, arr[100];
    printf("Enter the total elements in the array:  ");
    scanf("%d", &n);
 
    printf("Enter the array elements: ");
    for (int i = 0; i < n; i++)
    {
        scanf("%d", &arr[i]);
    }
 
 
 for(int i=0;i<<x>n-1;i++)
 {
     for(int j=0;j<<x>n-1;j++)
     {
         if(arr[j]>arr[j+1])
         {
             temp=arr[j];
             arr[j]=arr[j+1];
             arr[j+1]=temp;
         }
     }
 } 
 
 printf("\n\nYour Array: ");
 for(int i=0;i<<x>n;i++)
 {
     printf("%d\t",arr[i]);
 }
    
    return 0;
    
}

<b><u>Output</u>
    
Enter the total elements in the array: 5
Enter the array elements: 1 4 3 2 5

Your Array: 1 2 3 4 5</b>
</pre>
</div>

<?php include("footer.php");?>

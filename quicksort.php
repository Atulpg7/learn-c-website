<?php include("head.php");?>
<?php include("navbar.php");
if(empty($_SESSION['uname'])){header("location:login.php");}?>

<div class="section-heading" style="overflow: auto;height: 500px;">
<h1><b>Programm of Quick Sort in C</b></h1>
<pre style="font-size: 20px;">
<code>#include <<x>stdio.h></code>
int partiton(int arr[],int lb,int ub)
{
 int temp;
 int pivot=arr[lb];
 int start=lb;
 int end=ub;
 
 while(start<<x>end)
 {
     
     while(arr[start]<=pivot)
     {
         start++;
     }
     
     while(arr[end]>pivot)
     {
         end--;
     }
     
     if(start<<x>end)
     {
         temp=arr[start];
         arr[start]=arr[end];
         arr[end]=temp;
     }
 }
 
 temp=arr[lb];
 arr[lb]=arr[end];
 arr[end]=temp;
 
 return end;

}

void Sort(int arr[],int lb,int ub)
{
    int loc;
    
    if(lb<<x>ub)
    {
    
    loc=partiton(arr,lb,ub);
    Sort(arr,lb,loc-1);
    Sort(arr,loc+1,ub);
    
    }

}

int main()
{
    
    int a[10],i,n,s;
    printf("Enter Length of Array: ");
    scanf("%d",&n);
    
    for(i=0;i<<x>n;i++)
    {
        scanf("%d",&a[i]);
    }
    
    Sort(a,0,n-1);
    
    printf("Your Array: ");
    for(i=0;i<<x>n;i++)
    {
        printf("%d\t",a[i]);
    }
    
    
    return 0;
}

<b><u>Output</u>
    
Enter Length of Array: 5
1 4 3 2 5

Your Array: 1 2 3 4 5</b>
</pre>
</div>

<?php include("footer.php");?>

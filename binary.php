<?php include("head.php");?>
<?php include("navbar.php");
if(empty($_SESSION['uname'])){header("location:login.php");}
?>
<div class="section-heading" style="overflow: auto;height: 500px;">
<h1><b>Programm of Binary Search in C</b></h1>
<pre style="font-size: 20px;">
<code>#include <<x>stdio.h></code>
void Search(int arr[],int lb,int ub,int s)
{
    int i=0;
    int mid=(lb+ub)/2;
    int found=0;
   
    while(lb<<x>ub)
    {
        if(s==mid)
        {
            found=1;
            break;
        }
        if(s<<x>mid)
        {
            ub=mid-1;
        }
        else if(s>mid)
        {
            lb=mid+1;
        }
        
        mid=(lb+ub)/2;
    }

    if(found==0)
    {
        printf("Element Not Found");
    }
    else
    {
        printf("Element Found");
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
    printf("\nEnter Element you want to search: ");
    scanf("%d",&s);
    Search(a,0,n-1,s);
    
    return 0;
}

<b><u>Output</u>
    
Enter Length of Array: 5
1 2 3 4 5
Enter Element you want to search: 2

Element Found</b>
</pre>
</div>

<?php include("footer.php");?>

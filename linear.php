<?php include("head.php");?>
<?php include("navbar.php");
if(empty($_SESSION['uname'])){header("location:login.php");}?>

<div class="section-heading" style="overflow: auto;height: 500px;">
<h1><b>Programm of Linear Search in C</b></h1>
<pre style="font-size: 20px;">
<code>#include <<x>stdio.h></code>
int Search(int arr[], int value, int index, int n)
{
    int pos = 0;
 
    if(index >= n)
    {
        return 0;
    }
    
    else if (arr[index] == value)
    {
        pos = index + 1;
        return pos;
    }
    
    else
    {
        return Search(arr, value, index+1, n);
    }
    return pos;
}
 
int main()
{
    int n, value, pos, m = 0, arr[100];
    printf("Enter the total elements in the array:  ");
    scanf("%d", &n);
 
    printf("Enter the array elements\n");
    for (int i = 0; i < n; i++)
    {
        scanf("%d", &arr[i]);
    }
 
    printf("Enter the element to search:  ");
    scanf("%d", &value);
 
    pos =  Search(arr, value, 0, n);
    
    if (pos != 0)
    {
        printf("Element found at pos %d ", pos);
    }
    else
    {
        printf("Element not found");
    }
    return 0;
}

<b><u>Output</u>
    
Enter the total elements in the array: 5
12 2 35 42 500
Enter the element to search: 2

Element found at pos 2</b>
</pre>
</div>

<?php include("footer.php");?>

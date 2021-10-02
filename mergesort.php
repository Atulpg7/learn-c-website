<?php include("head.php");?>
<?php include("navbar.php");
if(empty($_SESSION['uname'])){header("location:login.php");}?>

<div class="section-heading" style="overflow: auto;height: 500px;">
<h1><b>Programm of Merge Sort in C</b></h1>
<pre style="font-size: 20px;">
<code>#include <<x>stdio.h></code>
void mergeShot(int arr[],int lb,int ub);
void merge(int a[],int s1,int e1,int s2,int e2);

int main() {
    
    int n,arr[50],lb=0;

	scanf("%d",&n);
	
	for(int i=0;i<<x>n;i++)
	{
	    scanf("%d",&arr[i]);
	}
	
	mergeShot(arr,lb,n-1);
	
	printf("\n Your Array: ");
		for(int i=0;i<<x>n;i++)
	{
	    printf("%d\t",arr[i]);
	}
	
	return 0;
}


void mergeShot(int arr[],int lb,int ub)
{
   
	int mid;
		
	if(lb<<x>ub)
	{
		mid=(lb+ub)/2;
		mergeShot(arr,lb,mid);		
		mergeShot(arr,mid+1,ub);	
		merge(arr,lb,mid,mid+1,ub);	
	}
}


void merge(int a[],int s1,int e1,int s2,int e2)
{
	int temp[50];
	int i,j,k;
	i=s1;
	j=s2;	
	k=0;
	
	while(i<=e1 && j<=e2)	
	{
		if(a[i]<<x>a[j])
			temp[k++]=a[i++];
		else
			temp[k++]=a[j++];
	}
	while(i<=e1)	
		temp[k++]=a[i++];
		
	while(j<=e2)	
		temp[k++]=a[j++];
		

	for(i=s1,j=0;i<=e2;i++,j++)
		a[i]=temp[j];

}

<b><u>Output</u>
    
Enter Length of Array: 5
1 4 3 2 5

Your Array: 1 2 3 4 5</b>
</pre>
</div>

<?php include("footer.php");?>

#include<iostream>
// #include<conio.h>

using namespace std;

void display(int a[],int n)
{
     cout<<"\n";
   for(int i=0;i<n;i++)
        cout<<"  "<<a[i];
        cout<<"\n";
}
void swap(int &x,int &y)
{
    int k=x;
    x=y;y=k;
}

void quick_sort(int *a,int l,int r)
{
       if(l>=r)
       return;

       int pivot=a[l];
       int i=l,j=r+1;
       while(1)
       {
            do{i++;}while(pivot>a[i]);
            do{j--;}while(pivot<a[j]);
            if(i>j)break;

            swap(a[i],a[j]);

       }

       swap(a[l],a[j]);
       display(a,10);
       quick_sort(a,l,j-1);
       quick_sort(a,j+1,r);
}

int main()
{
    int a[]={4,2,9,5,8,3,1,6,0,7};
    display(a,10);
    quick_sort(a,0, 9);
     display(a,10);

// getch();
return 0;

}

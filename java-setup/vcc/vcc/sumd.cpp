#include<iostream>
using  namespace std;
int main()
{
 int t ;
 cin>>t;
int m,n;
while(t--)
{
 cin>>m>>n;
int a[m][n];
 for(int i=0;i<m;i++)
 for(int j=0;j<n;j++)
  cin>>a[i][j];
int ans1=0; 
 for(int i=0;i<m;i++)
   for(int j=0;j<n;j++)
    if(i==j)
       ans1+=a[i][j];

int ans2=0; 
 for(int i=m-1;i>=0;i--)
   for(int j=0;j<n;j++)
    if(i==j)
       ans2+=a[i][j];
 cout<<ans1<<" "<<ans2<<endl;
}
 return 0;
}
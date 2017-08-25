#include<stdio.h>
#include<iostream>
using namespace std;
int main()
{
 int n;
cin>>n;
int a[n];
for(int i=0;i<n;i++)
cin>>a[i];
int q;
cin>>q;
int srch;
for(int i=0;i<q;i++)
{
 cin>>srch;
int flag=0;
		for(int j=0;j<n;j++)
		 {
		  if(a[j]==srch)
		 {
		  flag=1;
			break;
		}
		}
if(flag==1)
cout<<"1"<<endl;
else
cout<<"0"<<endl;
}
return 0;
}



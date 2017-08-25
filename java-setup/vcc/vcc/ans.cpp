#include<iostream>
using namespace std;
int main()
{
 int t;
cin>>t;
int n;
while(t--)
{
 cin>>n;
 int temp=n;
 int num=0;
	while(temp!=0)
	{
	 int x=temp%10;
	 num=num*10+x;
	temp/=10;
	}

	if(num==n)
	{
	 cout<<num<<endl;
	}

}
 return 0;
}

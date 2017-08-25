#include <iostream>
using namespace std;

int main() {
	// your code goes here
	unsigned long long int ans=0,c = 1;
	//ans = -1;
	//cout<<ans<<endl;
	//ans=0;
	int t;
	cin>>t;
	
	while(t--) {
		ans=0;
		int n;
		cin>>n;
		 if (n<=1) {
			cout<<"0\n";
		} else {
			unsigned long long int a=0;
			unsigned long long int b=1;
			c=a+b;
			for(int i=2;i<=n;i++) {
				ans+=b;
				a=b;
				b=c;
				c=a+b;
			}
			cout<<ans<<endl;
		}
			
	}
	
	
	return 0;
}
// 1 2 3 4 5 6  7  8   9
// 0 1 1 2 3 5  8  13 21
// 0 1 2 4 7 12 20 33 54
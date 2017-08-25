#include <iostream>
#include <stdio.h>
using namespace std;

int main() {

int t;
cin>>t;
getchar();
while(t--) {
	char s[100];
	char ch = getchar();
	int len = 0;
	
	while(ch != '\n') {
		s[len++]=ch;
		ch=getchar();
	}
	s[len]='\0';


	if(len == 0 || len == 1 ) { cout<<"1"<<endl; continue; }
	
	int mid = (len%2==0) ? 0 : 1;
	int i;		
	for(i=0;i<len/2;i++) {
		if( s[i] != s[len/2 + mid + i] ) {
			break;
		} 	
		
	}
	if(i<len/2) {
	cout<<"0"<<endl;	
	} else {
	cout<<"1"<<endl;
	}
}

return 0;
}

/*

abba
len = 4
len/2 = 2
mid = 0

abcba 
len = 5
len/2 = 2
mid = 1

*/	

#include<stdio.h>

int main() {
    
    int tc;
    scanf("%d",&tc);
    
    while(tc--) {
        long long int n,sum=0,t,d;
        scanf("%lld",&n);
        t=n;
        while(t>0) {
            d = t%10;
            sum=(sum*10)+d;
	    t/=10;
        }
	//printf("sum is %lld  n is  %lld\n",sum,n);
        if(sum==n) {
            printf("%lld\n",sum);
        }
        
    }
    
    return 0;
}

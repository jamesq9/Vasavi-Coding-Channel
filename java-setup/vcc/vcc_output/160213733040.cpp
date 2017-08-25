
#include<iostream>
#include<stdlib.h>
using namespace std;
int main()
{
    int T,N,M,i,j;
    cin>>T;
    cout<<endl;
    if(T<=0||T>10)
    exit(0);
    else
    {
        for(i=0;i<T;i++)
        {
            cin>>M>>N;
            if(M!=N||M<0||M>5||N<0||N>5)
            exit(0);
            else
            {
                int a[M][M];
                for(j=o;j<M;j++)
                {
                    for(int k=0;k<N;k++)
                    cin>>a[M][M];
                    cout<<endl;
                    for(a=0;a<M;a++)
                    {
                        sum=sum+A[a][M-a-1];                
                        sum1=sum1+A[a][b];
                    }
                    cout<<sum<<sum1<<endl;
                
            }
    }
    
    return 0;
}

#include<stdio.h>
#include<string.h>
#define N strlen(key)
char data[28],cs[28],key[50];
int a,e,c;

void xorfunction(){
    for(c = 1;c < N; c++)
    cs[c] = (( cs[c] == key[c])?'0':'1');
}

void crc(){
	// e=3 
    for(e=0;e<N;e++)
        cs[e]=data[e];
	// e=11
    do{
        if(cs[0]=='1')
            xorfunction();
		//c=2

		// cs = 1010
		// cs = 010.

        for(c=0;c<N-1;c++)
            cs[c]=cs[c+1];

        cs[c]=data[e++];

    }while(e<=a+N-1);
}

void error(int e)
{
    if(e==0)
    {
        do{
            printf("\nEnter the position where error is to be inserted : ");
            scanf("%d",&e);
        }while(e==0 || e>a+N-1);
		
        data[e-1]=(data[e-1]=='0')?'1':'0';
        printf("\nErroneous data : %s\n",data);
    }
}

int main()
{
    printf("\nEnter data : ");
    scanf("%s",data);
    printf("Generating polynomial : %s",key);
    scanf("%s",key);
    a=strlen(data);
    for(e=a;e<a+N-1;e++)
        data[e]='0';
    printf("\nNew Data is : %s",data);

    crc();
    printf("\nCRC-bit is : %s",cs);
	// a=6 N=4 6<=e<=8
    for(e=a;e<a+N-1;e++)
        data[e]=cs[e-a];
	
    printf("\nFinal data to be sent : %s",data);

    printf("\nTest error detection 0(yes) 1(no)? : ");
    scanf("%d",&e);
    error(e);
	
    crc();
    for(e=0;(e<N-1) && (cs[e]!='1');e++);
        if(e<N-1)
            printf("\nError detected\n\n");
        else
            printf("\nNo error detected\n\n");
    
	return 0;

	//
}
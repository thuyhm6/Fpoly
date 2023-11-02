//hoandoi
#include <stdio.h>
void hoanDoi1(int a, int b){
	int temp;
	temp = a;
	a = b;
	b = temp;
}

void hoanDoi2(int *a, int *b){
	int temp;
	temp = *a;
	*a = *b;
	*b = temp;
}

int main() {
	int a = 100;
	int b = 200;
	
	printf("Truoc khi hoan doi thi gia tri cua a la: %d\n",a);
	printf("Truoc khi hoan doi thi gia tri cua b la: %d\n",b);
	
	//hoanDoi1(a,b);
	
	hoanDoi2(&a,&b);
	
	printf("Sau khi hoan doi thi gia tri cua a la: %d\n",a);
	printf("Sau khi hoan doi thi gia tri cua b la: %d\n",b);
	
}
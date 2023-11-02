#include <stdio.h>

int nhapSo(int a) {
	int x;
	do {
		printf("Nhap so thu %d: ", a);
		scanf("%d", &x);
	} while (x<0); 
	
	return x;
}
int main() {

	int x, y, z; 
	
	x = nhapSo(1);
	y = nhapSo(2);
	z = nhapSo(3);
	
	int tong = x + y + z;
	printf("Tong 3 so la %d", tong);
}
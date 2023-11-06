#include <stdio.h>

int main(){
	//Khai báo 2 biến a và b
	float a,b;
	//Nhập 2 số a và b từ bàn phím
	printf("Moi ban nhap a: ");
	scanf("%f", &a);
	printf("Moi ban nhap b: ");
	scanf("%f", &b);
	//Xét điều kiện a = 0
	if(a == 0) {
		//Xét điều kiện b = 0
		if(b == 0) {
			printf("\nPhuong trinh co vo so nghiem");
		} else {
			printf("\nPhuong trinh vo nghiem");
		}
	} 
	//Khi a != 0 thì 
	else {
		printf("\nPhuong trinh co nghiem la: %f", -(b/a));
	}
}
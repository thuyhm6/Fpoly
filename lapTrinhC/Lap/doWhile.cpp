#include <stdio.h>

int main(){
	//Khai báo biến
	int a, b, i = 1, tong = 0;
	printf("Ban muon nhap may so: ");
	scanf("%d", &a);
	//Chạy vòng lặp với số lần là a
	do {
		printf("So thu %d la: ", i);
		scanf("%d", &b);
		//Gán biến tổng = tổng các giá trị nhập vào
		tong += b; // tong = tong + b 
		
		i++;//Tăng i lên 1 đơn vị
		
	} while(i <= a);
	
	printf("Tong cua %d so la: %d", a, tong);
}
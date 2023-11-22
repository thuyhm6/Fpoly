#include "library.h"

int nhapSoNguyenDuong(){
	//Dùng vòng lặp Do While để nhập số sau đó kiểm tra số đấy
	int n;
	do {
		printf("Nhap so nguyen: ");
		scanf("%d", &n);
		if(n <= 0){
			printf("Ban da nhap sai, moi nhap lai so lon hon 0! \n");
		}
	} while(n <= 0);
	return n;
}

float nhapSoThucDuong(){
	//Dùng vòng lặp Do While để nhập số sau đó kiểm tra số đấy
	float n;
	do {
		printf("Nhap so thuc: ");
		scanf("%f", &n);
		if(n <= 0){
			printf("Ban da nhap sai, moi nhap lai so lon hon 0! \n");
		}
	} while(n <= 0);
	return n;
}
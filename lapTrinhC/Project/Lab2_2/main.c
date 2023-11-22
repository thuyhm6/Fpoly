#include <stdio.h>
#include <stdlib.h>
#include "thuVien.h"


int main(int argc, char *argv[]) {
	
	printf("++------------------------------------++\n");
	printf("|Chuc nang 1: Tinh trung binh tong     |\n");
	printf("|Chuc nang 2: Tim so nguyen to         |\n");
	printf("|Chuc nang 3: Tim so chinh Phuong      |\n");
	printf("|Chuc nang 4: Thoat                    |\n");
	printf("++------------------------------------++\n");
	
	int a, x;
	scanf("%d", &a);
	switch(a){
		case 1:
			break;
		case 2:
			printf("Ban dang di vao chuong trinh tim so nguyen to         |\n");
			x = nhapSoNguyenDuong();
			soNguyenToKhongTraVe(x);
			break;
		case 3:
			printf("Ban dang di vao chuong trinh tim so chinh phuong        |\n");
			x = nhapSoNguyenDuong();
			//soChinhPhuongKhongTraVe(x);
			break;
		default:
			break;	
	}

	
//	int x = nhapSoNguyenDuong();
//	printf("So vua nhap la: %d\n", x);
	//soNguyenTo(x);
	
//	if(soNguyenTo(x) == 0){
//		printf("Ham soNguyenTo(%d) tra ve gia tri la %d\n",x, soNguyenTo(x));
//		printf("So %d la so nguyen to\n", x);
//	}else {
//		printf("Ham soNguyenTo(%d) tra ve gia tri la %d\n",x, soNguyenTo(x));
//		printf("So %d khong phai la so nguyen to\n", x);
//	}
//	if(soChinhPhuong(x) == 0){
//		printf("So %d la so chinh phuong\n", x);
//	}else {
//		printf("So %d khong phai la so chinh phuong\n", x);
//	}
	
	return 0;
}
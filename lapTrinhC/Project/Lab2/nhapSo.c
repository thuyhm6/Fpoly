#include "thuVien.h"
//Nhập số nguyên từ bàn phím, nếu nhập số <= 0 thì yêu cầu nhập lại

int nhapSoNguyenDuong(){
	//Dùng vòng lặp Do While để nhập số sau đó kiểm tra số đấy
	int n;
	do {
		printf("Nhap so: ");
		scanf("%d", &n);
		if(n <= 0){
			printf("Ban da nhap sai, moi nhap lai so lon hon 0! \n");
		}
	} while(n <= 0);
	return n;
}
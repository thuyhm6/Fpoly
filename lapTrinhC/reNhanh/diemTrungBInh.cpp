#include <stdio.h>

int main() {
	//Khai báo biến điểm
	float diem;
	//Nhập điểm từ bàn phím
	printf("Moi ban nhap diem: ");
	scanf("%f", &diem);
	//Bắt đầu xét các điều kiện
	if (diem >= 9){
		printf("Sinh vien nay co hoc luc XUAT SAC");
	} else if (diem >= 8) {
		printf("Sinh vien nay co hoc luc GIOI");
	} else if (diem >= 6.5){
		printf("Sinh vien nay co hoc luc KHA");
	} else if (diem >= 5){
		printf("Sinh vien nay co hoc luc TRUNG BINH");
	} else if (diem >= 3.5){
		printf("Sinh vien nay co hoc luc YEU");
	} else {
		printf("Sinh vien nay co hoc luc KEM");
	}
}
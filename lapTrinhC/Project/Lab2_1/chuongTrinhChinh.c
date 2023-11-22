#include <stdio.h>
#include <stdlib.h>
#include "library.h"

//Chuong trình tính học lực
void tinhHocLuc(){
	float diem;
	printf("Nhap diem cua sinh vien: ");
	//Gọi hàm nhập số thực và gán gía trị đấy cho biến diem
	diem = nhapSoThucDuong();
	if (diem >= 9){
		printf("Hoc luc xuat sac\n");
	}else if (diem >= 8){
		printf("Hoc luc gioi\n");
	}else if (diem >= 6.5){
		printf("Hoc luc kha\n");
	}else if (diem >= 5){
		printf("Hoc luc trung binh\n");
	}else if (diem >= 3.5){
		printf("Hoc luc yeu\n");
	}else {
		printf("Hoc luc kem\n");
	}
}

//CHƯƠNG TRÌNH GIẢI PHƯƠNG TRÌNH BẬC 1
void giaiPhuongTrinhBac1(){
	float a,b;
	printf("Giai phuong trinh ax + b = 0\n");
	printf("Nhap vao so a: ");
	scanf("%f", &a);
	printf("Nhap vao so b: ");
	scanf("%f", &b);
	if (a == 0) {
		if (b == 0){
			printf("Phuong trinh vo so nghiem\n");
		} else {
			printf("Phuong trinh vo nghiem\n");
		}
	} else {
		printf("Phuong trinh co nghiem la: %f\n", -a/b);
	}
}


//CHƯƠNG TRÌNH GIẢI PHƯƠNG TRÌNH bẬC 2
void giaiPhuongTrinhBac2(){
	float a,b,c,delta;
	printf("Giai phuong trinh ax2 + bx + c = 0\n");
	printf("Nhap vao so a: ");
	scanf("%f", &a);
	printf("Nhap vao so b: ");
	scanf("%f", &b);
	printf("Nhap vao so c: ");
	scanf("%f", &c);
	if (a == 0){
		if (b == 0) {
			if (c == 0){
				printf("Phuong trinh vo so nghiem\n");
			} else {
				printf("Phuong trinh vo nghiem\n");
			}
		} else {
			printf("Phuong trinh co nghiem la: %f\n", -c/b);
		}
	} else {
		delta = b*b - 4*a*c;
		if (delta < 0){
			printf("Phuong trinh vo nghiem\n");
		} else if (delta == 0){
			printf("Phuong trinh co nghiem kep x = %f\n", -b/(2*a));
		} else {
			printf("Phuong trinh co 2 ngihem x1 = %f, va x2 = %f\n", (-b + sqrt(delta))/(2*a), (-b + sqrt(delta))/(2*a));
		}
	}
}

//CHƯƠNG TRÌNH TÍNH TIỀN ĐIỆN
void tinhTienDien(){
	int soDien;
	printf("Chuong trinh tinh tien dien\n");
	printf("Moi ban nhap so dien: ");
	//Gọi hàm nhập số nguyên và gán gía trị đấy cho biến soDien
	soDien = nhapSoNguyenDuong();
	if (soDien >= 401){
		printf("So tien dien phia dong la: %d\n"
		"", (50*1678) + (50*1734) + (100*2014) + (100*2536) + (100*2834) + (soDien-400)*2927);
	}else if (soDien >= 301){
		printf("So tien dien phia dong la: %d\n"
		"", (50*1678) + (50*1734) + (100*2014) + (100*2536) + (soDien-300)*2834);
	}else if (soDien >= 201){
		printf("So tien dien phia dong la: %d\n"
		"", (50*1678) + (50*1734) + (100*2014) + (soDien-200)*2536);
	}else if (soDien >= 101){
		printf("So tien dien phia dong la: %d\n"
		"", (50*1678) + (50*1734) + (soDien-100)*2014);
	}else if (soDien >= 51){
		printf("So tien dien phia dong la: %d\n"
		"", (50*1678) + (soDien-50)*1734);
	}else {
		printf("So tien dien phia dong la: %d\n", 1678 * soDien);
	}
}
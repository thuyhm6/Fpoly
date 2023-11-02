#include <stdio.h>

//ham khong co dau vao va khong co dau ra
void tinhTong1(){	
	int a,b;
	printf("Nhap vao so thu nhat: ");
	scanf("%d", &a);
	printf("Nhap vao so thu hai: ");
	scanf("%d", &b);
	printf("Tong cua hai so la: %d", (a+b));
}

//Ham co dau vao va khong co dau ra
void tinhTong2(int a, int b){
	printf("Tong cua 2 so la: %d", (a+b));
}

//Ham khong co dau vao nhung co dau ra
int tinhTong3(){
	int a,b;
	printf("Nhap so thu nhat: ");
	scanf("%d", &a);
	printf("Nhap so thu hai: ");
	scanf("%d", &b);
	return a+b;
}

int tinhTong4(int a, int b);

int main(){
	//tinhTong1();
	//tinhTong4(1,2);
	printf("Tong cua hai so la: %d", tinhTong4(1,2));
}

//Ham co dau vao va co dau ra
int tinhTong4(int a, int b){
	return a+b;
}
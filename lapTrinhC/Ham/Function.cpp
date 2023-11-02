#include <stdio.h>
#include <math.h>

//Ham khong co dau vao va dau ra
void tinhTong1(){
	int a,b;
	printf("Nhap so thu nhat: ");
	scanf("%d", &a);
	printf("Nhap so thu hai: ");
	scanf("%d", &b);
	
	printf("Tong cua 2 so la: %d",(a+b));
}

//Ham co dau vao nhung khong co dau ra
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

int main() {
	//tinhTong1();
	//tinhTong2(12,36);
	//int tong = tinhTong3();
	printf("5 mu 3 la :%f",pow(5, 2));
}

//Ham co dau vao va co dau ra
int tinhTong4(int a, int b){
	return a+b;
}
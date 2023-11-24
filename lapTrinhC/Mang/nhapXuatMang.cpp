#include <stdio.h>

int main(){
	//Khai báo mảng số nguyên có số phần tử từ bàn phím
	int n;
	printf("Ban muon nhap mang bao nhieu phan tu");
	scanf("%d", &n);
	int mang[n];
	for(int i = 0; i < n; i++){
		printf("Nhap phan tu thu %d: ", i+1);
		scanf("%d", &mang[i]);
	}	
	printf("-----------Hien thi so phan tu trong mang ------\n");
	for(int i = 0; i < n; i++){
		printf("Phan tu thu %d la: %d\n", i+1, mang[i]);
	}
}
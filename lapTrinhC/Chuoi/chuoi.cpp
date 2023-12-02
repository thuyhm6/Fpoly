#include <stdio.h>
#include <string.h>

int main(){
	//Khai báo 1 chuỗi
	char chuoi[100] = {'f', 'p', 'o', 'l', 'y', 'h', 'c', 'm'};
	//printf("Nhap chuoi: ");
	//Nhập chuỗi với hàm scanf
	//scanf("%s", &chuoi);
	//Nhập chuỗi với hàm gets
	gets(chuoi);
	char chuoi_copy[100];
	//Hiển thị ra bằng hàm puts
	//puts(chuoi);
	//Hiển thị ra bằng hàm printf
	printf("Chuoi ban dau: %s\n", chuoi);
	strcpy(chuoi_copy, chuoi);
	printf("Chuoi sau khi copy: %s\n",chuoi_copy);
	//Ghép 2 chuỗi
	strcat(chuoi_copy,chuoi);
	printf("Kich thuoc chuoi : %d", sizeof(chuoi));
	
}
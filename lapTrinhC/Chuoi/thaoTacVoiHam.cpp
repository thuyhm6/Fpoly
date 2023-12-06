#include <stdio.h>
#include <string.h>

int main() {
	//Khai bao chuoi
	char chuoi1[20], chuoi2[20];
	printf("Nhap chuoi thu 1: "); //Nhap chuoi tu ban phim
	gets(chuoi1);
	printf("Nhap chuoi thu 2: ");
	gets(chuoi2);
	//Dung cham strcmp de so sanh 2 chuoi
	if (strcmp(chuoi1, chuoi2) == 0){
		printf("2 chuoi bang nhau\n");
	} else if (strcmp(chuoi1, chuoi2) > 0){
		printf("chuoi 1 lon hon chuoi 2\n");
	} else {
		printf("chuoi 1 nho hon chuoi 2\n");
	}
	//Ham strrev de dao nguoc chuoi
	//printf("chuoi 1 khi dao nguoc la: %s\n", strrev(chuoi1));
	//Ham chuyen thanh chu thuong
	//printf("chuoi 1 khi chuyen thanh chu thuong: %s\n", strlwr(chuoi1));
	//Ham chuyen thanh chu HOA
	//printf("Chuoi 1 khi chuyen thanh chu HOA: %s\n", strupr(chuoi1));
	//Tim chuoi con trong chuoi con lai
	if (strstr(chuoi1, chuoi2) != NULL){
		printf("Tim thay\n");
	} else {
		printf("Khong tim thay\n");
	}
}
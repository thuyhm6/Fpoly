#include <stdio.h>
#include <stdlib.h>
#include "library.h"

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int a;
	do {
		printf("++-------------------------------------------++\n");
		printf("|Chuc nang 1: Tinh hoc luc                    |\n");
		printf("|Chuc nang 2: Giai phuong trinh bac 1         |\n");
		printf("|Chuc nang 3: Giai phuong trinh bac 2         |\n");
		printf("|Chuc nang 3: Tinh tien dien                  |\n");
		printf("|Chuc nang 4: Thoat                           |\n");
		printf("++-------------------------------------------++\n");
		printf("Moi ban nhap chuc nang muon thuc hien: ");
		scanf("%d", &a);
		switch(a){
			case 0:
				break;
			case 1:
				tinhHocLuc();
				break;
			case 2:
				giaiPhuongTrinhBac1();
				break;
			case 3:
				giaiPhuongTrinhBac2();
				break;
			case 4:
				tinhTienDien();
				break;
			default:
				printf("Ban da nhap sai, moi nhap lai: \n");
		}
	} while(a != 0);
	
	return 0;
}
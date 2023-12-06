#include <stdio.h>

struct sinhVien {
	char maSV[10];
	char tenSV[30];
	int sdt;
};
int main() {
	int n;
	printf("Nhap so luong sinh vien: ");
	scanf("%d", &n);
	struct sinhVien sv[n];
	//Dùng vòng lặp for để nhập thông tin sinh viên
	for (int i = 0; i < n; i++){
		printf("Nhap thong tin sinh vien thu %d\n", i+1);
		printf("Ma sinh vien: ");
		scanf("%s",&sv[i].maSV);
		printf("Ten sinh vien: ");
		scanf("%s", &sv[i].tenSV);
		printf("So dien thoai: ");
		scanf("%d", &sv[i].sdt);
	}
	//Dùng vòng lặp for để in ra thông tin sinh viên
	for (int i = 0; i < n; i++){
		printf("---Thong tin sinh vien thu %d---\n", i+1);
		printf("Ma sinh vien: %s\n",sv[i].maSV);
		printf("Ten sinh vien: %s\n", sv[i].tenSV);
		printf("So dien thoai: %d\n", sv[i].sdt);
	}
}
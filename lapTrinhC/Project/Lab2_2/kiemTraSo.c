#include "thuVien.h"

//Hàm số nguyên tố có giá trị trả về
int soNguyenTo(int x){
	int count = 0;
	if(x == 2){
		return count;
	}
	for(int i = 3; i < x/2; i+=2){
		if(x%i == 0){
			count = 1;
			break;
		}
	}
	return count;
}

//Hàm số nguyên tố không có giá trị trả về
void soNguyenToKhongTraVe(int x){
	int count = 0;
	if(x == 2){
		return count;
	}
	for(int i = 3; i < x/2; i+=2){
		if(x%i == 0){
			count = 1;
			break;
		}
	}
	if(count == 0){
		printf("So %d la so nguyen to\n", x);
	}else {
		printf("So %d khong phai la so nguyen to\n", x);
	}
}

int soChinhPhuong(int x){
	int count = 0;
	for (int i = 2; i < x; i++){
		if(i*i == x){
			count = 1;
			break;
		}
	}
	return count;
}
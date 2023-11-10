#include <stdio.h>

int main() {
	//Khai báo biến i, n
	int i = 1, n;
	printf("Ban muon hien thi bang cuu chuong may: ");
	scanf("%d", &n);
	printf("Bang cua chuong %d nhu sau:\n", n);
	//dùng vòng lặp while để hiển thị bảng cửu chương
	while (i <= 10){
		printf("%d x %d = %d\n", n, i, n*i);
		i++; //Tăng i lên 1 đơn vị
	}
	
	return 0;
}
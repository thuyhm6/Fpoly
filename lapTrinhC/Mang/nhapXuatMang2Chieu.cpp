//Nhập xuất mảng 2 chiều từ bàn phím
#include <stdio.h>

int main() {
	//Nhập mảng 2 chiều có m hàng, n cột từ bàn phím
	int m,n;
	printf("Ban muon nhap mang 2 chieu may dong: ");
	scanf("%d", &m);
	printf("May cot: ");
	scanf("%d", &n);
	//Khai báo mang
	int maTran[m][n];
	//Nhập các phần tử của mảng
	for (int i=0; i < m; i++){
		for (int j = 0; j < n; j++){
			printf("Nhap so hang %d, cot %d: ", i+1, j+1);
			scanf("%d", &maTran[i][j]);
		}
	}
	//Hiển thị mảng vừa nhập ra màn hình
	printf("\nMa tran vua nhap co %d hang %d cot la: \n", m, n);
	for (int i = 0; i < m ; i++){
		for (int j = 0; j < n; j++){
			printf("%d ", m.aTran[i][j]);
		}
		printf("\n");
	}
}
//Nhập mảng số nguyên có số phẩn tử được nhập từ bàn phím, 
//sau đó sắp xếp theo thứ tự tăng dần
#include <stdio.h>
int main(){
	int n;
	printf("Nhap mag so nguyen bao nhieu: ");
	scanf("%d", &n);
	//Khai báo mảng;
	int a[n];
	//Nhập các số vào trong mảng
	for (int i=0; i < n; i++){
		printf("Nhap so thu %d: ", i+1);
		scanf("%d", &a[i]);
	}
	//Hiển thị mảng vừa nhập
	printf("Mang ban vua nhap la: ");
	for (int i = 0; i < n; i++){
		printf("%d, ", a[i]);
	}
	//Sắp xếp mảng vừa nhập theo thứ tự tăng dần
	//Khai báo biến tạm
	int tam;
	for(int i = 0; i < n-1; i++){
		for (int j = i+1; j < n; j++){
			if(a[i] > a[j]){
				tam = a[i];
				a[i] = a[j];
				a[j] = tam;
			}
		}
	}
	
	//Mảng sau khi sắp xếp tăng dần là
	printf("\nMang sau khi sap xep la: ");
	for (int i = 0; i < n; i++){
		printf("%d, ", a[i]);
	}
	
}
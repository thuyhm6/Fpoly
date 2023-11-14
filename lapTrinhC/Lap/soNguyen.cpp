//Đề Bài: Nhập và in ra số nguyên lớn hơn 0 từ bàn phím, 
//nếu nhập sai thì yêu cầu nhập lại (Ví dụ: -1 --> nhập lại)

#include <stdio.h>

int main(){
	//Khởi tạo biến số nguyên
	int soNguyen;
	//Tạo vòng lặp do while với điều kiện số nguyên <=0
	do {
		printf("Nhap so nguyen duong lon hon 0: ");
		scanf("%d", &soNguyen);
		//Nếu nhập số bé hơn hoặc bằng 0 thì báo nhập sai
		if(soNguyen <= 0){
			printf("Ban da nhap sai, moi nhap lai\n");
		}
	} while(soNguyen <= 0); //Nếu số nguyên bé hơn hoặc bằng 0 thì lặp lại
	
	printf("Ban da nhap so nguyen duong la: %d\n", soNguyen);
}
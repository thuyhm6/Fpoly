#include <stdio.h>

int main(){
	//Hiển thị câu hỏi
	printf("Viet Nam co bao nhieu dan toc anh em:\n");
	printf("a. 52\nb. 53\nc. 54\nc. 55\n");
	printf("Xin moi ban chon dap an (a, b, c, d):");
	//Khai báo biến dapAn và nhập đáp án từ bàn phím
	char dapAn;
	scanf("%c", dapAn);
	//Xét từng điều kiện khi nhập đáp án
	switch (dapAn){
		case 'a':
			printf("Dap an cua ban la sai");
			break;
		case 'b':
			printf("Dap an cua ban la sai");
			break;
		case 'c':
			printf("Dap an dung");
			break;
		case 'd':
			printf("Dap an cua ban la sai");
			break;
		default:
			printf("Ban dang nhap cai quai gi vay");
			break;
	}
}
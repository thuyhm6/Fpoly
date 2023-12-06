#include <stdio.h>
#include <string.h>

int main(){
	char sys_user[20] = "thuyhm";
	char sys_pass[20] = "12345";
	char user[20], pass[20];
	printf("Nhap user name: ");
	gets(user);
	printf("Nhap password: ");
	gets(pass);
	if (strcmp(sys_user,user) == 0 && strcmp(sys_pass, pass) == 0){
		printf("Dang nhap thanh cong");
	} else {
		printf("Dang nhap that bai");
	}
}
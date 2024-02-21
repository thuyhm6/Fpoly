SELECT * FROM ql_du_an.du_an;
#Tạo index
create index idx_luong on nhan_vien(luong);
#Tạo user truy cập vào database
#Cú pháp: create user 'tên user'@'Tên cơ sở dữ liệu' identified by 'mật khẩu';
create user 'thuyhm'@'localhost' identified by 'thuyhm';
#Cấp quyền truy cập
grant select on ql_du_an.du_an to 'thuyhm'@'localhost';
grant insert on ql_du_an.du_an to 'thuyhm'@'localhost';
grant all privileges on *.* to 'thuyhm'@'localhost';
#xóa quyền
revoke all privileges on *.* from 'thuyhm'@'localhost';
#Xóa user
drop user 'thuyhm'@'localhost';

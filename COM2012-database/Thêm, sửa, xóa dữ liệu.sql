#Tạo bảng từ dữ liệu của bảng khác;
create table du_an_20240219 as select * from du_an;

#Viết câu lệnh tạo ra 1 bảng mới có tên nhan_vien_2024 lấy dữ liệu từ bảng nhan_vien có lương > 1000.
create table nhan_vien_2024 as select * from nhan_vien where luong > 1000;

#Thêm dữ liệu
insert into du_an(ma_du_an, ten_du_an, ma_phong_ban, dia_diem) values ('DA006','Class','pb005','Hà Nội');
#sữa dữ liệu
update du_an set dia_diem = 'Hà Nội' where ma_du_an = 'DA004';
#Cập nhật dữ liệu từ bảng khác (Trường hộp hôm nay thầy nói, nếu sửa nhầm dữ liệu, muốn lấy lại dữ liệu từ bảng mà mình đã backup)
update du_an da set da.dia_diem = (select da2.dia_diem from du_an_20240219 da2 where da.ma_du_an = da2.ma_du_an) ;
#xóa dữ liệu
delete from du_an where ten_du_an = 'Class';
#Thêm dữ liệu từ bảng khác (Trường hợp thầy nói mà mình xóa nhầm dữ liệu, giờ muốn lấy lại dữ liệu từ bảng backup)
Insert into du_an (ma_du_an, ten_du_an, ma_phong_ban, dia_diem) select da2.ma_du_an, da2.ten_du_an, da2.ma_phong_ban, da2.dia_diem from du_an_20240219 da2 where da2.ten_du_an = 'Class';

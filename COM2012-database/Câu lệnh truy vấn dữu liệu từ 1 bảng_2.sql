#Hiển thị mã nhân viên, tên nhân viên có lương trên 800$
select ma_nhan_vien, ten, luong from nhan_vien where luong > 800;
#Hiển thị mã nhân viên, tên nhân viên có lương nằm trong khoảng 800$ đến 1000$
select ma_nhan_vien, ten, luong from nhan_vien where luong > 800 and luong < 1000;
#Hiển thị tất cả các thông tin nhân viên có ngày sinh lớn hơn ngày 01/01/1990
select * from nhan_vien where ngay_sinh > '1990-01-01';
#Hiển thị tất cả các thông tin nhân viên có ngày sinh nằm trong khoảng từ 01/01/1989 đến 01/01/1992
select * from nhan_vien where ngay_sinh between '1989-01-01' and '1992-01-01';
#Hiển thị thông tin của các phòng ban có chứa chuỗi ‘Sản xuất’
select * from phong_ban where ten_phong_ban like '%San xuat%';
#Hiển thị thông tin mã, tên, 
#lương của nhân viên có lương thấp hơn 800$ và mã phòng ban là ‘PB002’
select ma_nhan_vien, ten, luong, ma_phong_ban from nhan_vien 
where luong < 800 
and ma_phong_ban = 'PB003';

# Lương lớn nhất trong bảng nhân viên
select max(luong) from nhan_vien;
# Lương nhỏ nhất trong bảng nhân viên
select min(luong) from nhan_vien;
# Lương trung bình trong bảng nhân viên
select avg(luong) from nhan_vien;
#Tổng lương của nhân viên trong bảng nhân viên
select sum(luong) from nhan_vien;
#Đếm số lượng nhân viên trong bảng
select count(*) from nhan_vien where luong > 800;

#Nhóm dữ liệu - Group by
#Đếm số lượng nhân viên theo từng phòng ban
select ma_phong_ban, count(*) from nhan_vien group by ma_phong_ban;
#Tổng lương nhân viên theo từng phòng ban
select ma_phong_ban, avg(luong) from nhan_vien group by ma_phong_ban;

#Sắp xếp nhân viên theo lương giảm dần (desc)
select * from nhan_vien order by luong desc;
#Sắp xếp nhân viên theo lương tăng dần (asc)
select * from nhan_vien order by luong asc;
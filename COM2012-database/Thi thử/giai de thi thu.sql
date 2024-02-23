#Tạo mưới database
CREATE DATABASE PTPM_COM2012_PA00196 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

use PTPM_COM2012_PA00196;

#Tạo bảng;
create table SanPham(
MaSanPham varchar(10) not null primary key, 
TenSanPham varchar(100) not null, 
GiaHienHanh decimal(10,3) not null, 
SoLuongTon int not null);

create table HoaDon(
MaHoaDon varchar(10) not null primary key, 
NgayLap datetime not null, 
SoDienThoai int);

create table HoaDonChiTiet(
MaSanPham varchar(10) not null ,
MaHoaDon varchar(10) not null, 
SoLuongMua int , 
GiaMua decimal(10,3),
primary key (MaSanPham, MaHoaDon),
constraint MaSanPham_fk foreign key (MaSanPham) references SanPham(MaSanPham),
constraint MaHoaDon_fk foreign key (MaHoaDon) references HoaDon(MaHoaDon) );

#Thêm dữ liệu vào bảng
insert into SanPham values ('SP01','San pham 1',2000,5),
('SP02','San pham 2',3000,6),
('SP03','San pham 2',4000,7);

insert into HoaDon values ('HD01','2024-01-01',1234655),
('HD02','2024-01-02',null),
('HD03','2024-01-03',12346555);

insert into HoaDonChiTiet values ('SP01','HD01',25,100000),
('SP02','HD02',35,900000),
('SP03','HD03',45,1000000);

#3. Hiển thị danh sách sản phẩm gồm: Tên sản phẩm và Giá hiện hành theo điều kiện
select tensanpham, giahienhanh from sanpham where giahienhanh > 2000;

#4. Hiển thị danh sách hóa đơn của khách vãng lai (trường số điện thoại trống)
select * from hoadon where sodienthoai is null;

#5. Viết câu lệnh cập nhập số lượng sản phẩm theo mã
update sanpham set soluongton = 5 where masanpham = 'SP01';

#6. Viết câu lệnh xóa sản phẩm có số lượng tồn bằng 0
delete from sanpham where soluongton = 0;

#7. Hiển thị danh sách chi tiết hóa đơn gồm: 
#Mã hóa đơn, Tên sản phẩm, Số lượng mua, Giá mua và Thành tiền (= Số lượng mua x Giá mua)
select hdct.mahoadon, sp.tensanpham, hdct.soluongmua, hdct.giamua, (hdct.soluongmua * hdct.giamua) as thanhtien
from HoaDonChiTiet hdct join sanpham sp on hdct.masanpham = sp.masanpham;

#8. Hiển thị thông tin biến động giá của một sản phẩm được sắp xếp theo thời gian, 
#gồm: Tên sản phẩm, Giá khi bán, Thời điểm bán
select sp.tensanpham as tensanpham, hdct.giamua as giakhiban, hd.ngaylap as thoidiemban
from hoadonchitiet hdct join hoadon hd on hdct.mahoadon = hd.mahoadon
join sanpham sp on hdct.masanpham = sp.masanpham
order by hd.ngaylap ;


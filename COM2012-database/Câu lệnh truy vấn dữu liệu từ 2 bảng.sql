#lấy dữ liệu từ 2 bảng nhan_vien (tên rút gọn là a) và phong_ban (tên rút gọn là b)
#với điệu kiện là chung ma_phong_ban, có địa điểm là ở Thanh Hóa
select * from nhan_vien a, phong_ban b
where a.ma_phong_ban = b.ma_phong_ban
and b.dia_diem = 'Thanh Hoa';

#có địa điểm là Thanh Hóa hoặc Hà Nội
select * from du_an da, phong_ban pb, nhan_vien nv
where da.ma_phong_ban = pb.ma_phong_ban
and nv.ma_phong_ban = pb.ma_phong_ban
#and (pb.dia_diem = 'Thanh Hoa' or pb.dia_diem = 'Ha Noi')
and pb.dia_diem in ('Thanh Hoa', 'Ha Noi')


#Lấy ra mã nhân viên, ten, mã phòng ban và tên phòng ban 
#từ 2 bảng nhan_vien và phong_ban
select a.ma_nhan_vien, a.ten, a.ma_phong_ban, b.ten_phong_ban from nhan_vien a, phong_ban b
where a.ma_phong_ban = b.ma_phong_ban;
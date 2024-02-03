use ql_du_an;

select * from nhan_vien;
select * from phong_ban;
select * from du_an;

#phép tích
select a.ma_nhan_vien, a.ten, b.ten_phong_ban from nhan_vien a , phong_ban b 
where  a.ma_phong_ban = b.ma_phong_ban;
#phép inner join
select a.ma_nhan_vien, a.ten, b.ma_phong_ban, b.ten_phong_ban from nhan_vien a join phong_ban b on  a.ma_phong_ban = b.ma_phong_ban
join du_an c on c.ma_phong_ban = b.ma_phong_ban
where b.ma_phong_ban = 'PB001';

#Left join
select *
from nhan_vien a  left join phong_ban b on  a.ma_phong_ban = b.ma_phong_ban;

#Right join
select *
from nhan_vien a  right join phong_ban b on  a.ma_phong_ban = b.ma_phong_ban;

#Full outer join
select *
from nhan_vien a  left join phong_ban b on  a.ma_phong_ban = b.ma_phong_ban
union
select *
from nhan_vien a  right join phong_ban b on  a.ma_phong_ban = b.ma_phong_ban;

#self join
select nv1.ma_nhan_vien, nv1.ten, nv1.nguoi_quan_ly, nv2.ten as ten_nguoi_quan_ly from nhan_vien nv1 join nhan_vien nv2 on nv1.nguoi_quan_ly = nv2.ma_nhan_vien;

#Sử dụng JOIN hoặc phép tích để hiển thị thông tin của 3 bảng gồm: tên nhân viên, lương, tên phòng ban mà nhân viên thuộc về, tên dự án, địa điểm dự án
#phép tích
select nv.ten, nv.luong, pb.ten_phong_ban, da.ten_du_an, da.dia_diem
   from nhan_vien nv, phong_ban pb, du_an da
where nv.ma_phong_ban = pb.ma_phong_ban
and pb.ma_phong_ban = da.ma_phong_ban;

#Join
select nv.ten, nv.luong, pb.ten_phong_ban, da.ten_du_an, da.dia_diem
from nhan_vien nv join phong_ban pb 
on nv.ma_phong_ban = pb.ma_phong_ban
join du_an da 
on  pb.ma_phong_ban = da.ma_phong_ban;

#Viết câu truy vấn hiển thị các thông tin bao gồm tên, lương của nhân viên, tên dự án với điều kiện nhân viên thuộc phòng ban có tên ‘Quan ly Chat Luong’, trưởng phòng là ‘nv005’
select nv.ten, nv.luong,  da.ten_du_an
from nhan_vien nv join phong_ban pb 
on nv.ma_phong_ban = pb.ma_phong_ban
join du_an da 
on  pb.ma_phong_ban = da.ma_phong_ban
where pb.ten_phong_ban = 'Quan ly chat luong'
and pb.truong_phong = 'nv005';

#Sử dụng câu truy vấn con để hiển thị thông tin các nhân viên có lương lớn hơn mức lương trung bình của bảng nhan_vien
select * from nhan_vien nv where nv.luong > (select avg(luong) from nhan_vien);

#Sử dụng câu truy vấn con để hiển thị thông tin các nhân viên thuộc phòng ban đã có dự án đang thực hiện
select * from nhan_vien nv where nv.ma_phong_ban in (select distinct ma_phong_ban from du_an)

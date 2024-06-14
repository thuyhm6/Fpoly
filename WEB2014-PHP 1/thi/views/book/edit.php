<h1>Trang sửa sản phẩm</h1>
<form action="" method="post" enctype="multipart/form-data">
    <label for="">Tên sách</label>
    <input type="text" name="title" value="<?= $data['title'] ?>"><br/>
    <input type="hidden" name="id" value="<?= $data['id'] ?>"><br/>

    <label for="">Bìa sách</label>
    <input type="file" name="cover_image"><br/>
    
    <label for="">Tác giả</label>
    <input type="text" name="author"><br/>

    <label for="">Nhà xuất bản</label>
    <input type="text" name="publisher"><br/>

    <label for="">Ngày xuất bản</label>
    <input type="text" name="publish_date"><br/>
    
    <button>Lưu</button>
</form>
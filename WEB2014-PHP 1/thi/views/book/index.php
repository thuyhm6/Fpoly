<a href="/thi/book/create"><button>Thêm mới</button></a>
<table>
    <thead>
        <tr>
            <th>Định danh</th>
            <th>tên sách</th>
            <th>Ảnh bìa sách</th>
            <th>Tác giả</th>
            <th>Nhà xuất bản</th>
            <th>Ngày xuất bản</th>
            <th>Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $book): ?>
            <tr>
                <td><?= $book['id'] ?></td>
                <td><?= $book['title'] ?></td>
                <td><img width="50px" src="<?= $book['cover_image'] ?>" alt=""></td>
                <td><?= $book['author'] ?></td>
                <td><?= $book['publisher'] ?></td>
                <td><?= $book['publish_date'] ?></td>
                <td>
                    <a href="<?= base_url ?>/book/edit?id=<?= $book['id'] ?>"><button>Sửa</button></a>
                    <a href="/thi/book/delete?id=<?= $book['id'] ?>"><button>Xóa</button></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
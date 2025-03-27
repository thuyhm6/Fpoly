<h1>Đây là trang thêm mới sản phẩm</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <label for="name">Tên sản phẩm:</label>
    <input type="text" id="name" name="name" required>
    <br><br>

    <label for="price">Giá:</label>
    <input type="number" id="price" name="price" required>
    <br><br>

    <label for="description">Mô tả:</label>
    <textarea id="description" name="description"></textarea>
    <br><br>

    <button type="submit">Thêm sản phẩm</button>
</form>
<h1>Đây là trang thêm mới sản phẩm</h1>
<form action="{{ route('products.update') }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Tên sản phẩm:</label>
    <input type="text" id="name" name="name" value="{{ $product->name }}" required>
    <br><br>

    <label for="price">Giá:</label>
    <input type="number" id="price" name="price" value="{{ $product->price }}" required>
    <br><br>

    <label for="description">Mô tả:</label>
    <textarea id="description" name="description" value="{{ $product->description }}"></textarea>
    <br><br>

    <button type="submit">Sửa sản phẩm</button>
</form>
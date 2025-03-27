@extends('client')
@section('content')
<h1>Đây là trang thêm mới sản phẩm</h1>
<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <label for="name">Tên sản phẩm:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" >
    @error('name')
        <span class="alert alert-danger text-center">{{ $message }}</span>
    @enderror
    <br><br>

    <label for="description">Mô tả:</label>
    <textarea id="description" name="description">{{ old('description') }}</textarea>
    @error('description')
        <span class="alert alert-danger text-center">{{ $message }}</span>
    @enderror
    <br><br>

    <button type="submit">Thêm sản phẩm</button>
</form>
@endsection
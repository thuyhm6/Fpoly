@extends('client')
@section('title',"Danh sách danh mục sản phẩm")
@push('styles')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<style>
    header {
    color: red;
    font-size: 50px;
}
</style>
@endpush
@section('content')
<h1>Đây là trang danh mục sản phẩm</h1>
<button><a href="{{ route('category.add') }}">Thêm mới danh mục sản phẩm</a></button>
@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p> 
@endif
    <table class="table">
        <thead>
            <tr>
                <th>Tên danh mục sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
        @php
            if($category->name != 'Iphone 20'):
        @endphp
        {{-- @if ($category->name != 'Xiaomi') --}}
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    {{-- <a href="{{ route('product.edit', ['id'=>$product->id]) }}">Sửa</a>
                    <form action="{{ route('product.delete', ['id'=>$product->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        Xóa
                    </form> --}}
                </td>
            </tr>
        {{-- @endif --}}
        @php
            endif;
        @endphp
        @endforeach

        </tbody>
    </table>


@endsection
@extends('client')
@section('title',"Danh sách sản phẩm")
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
<h1>Đây là trang sản phẩm</h1>
<h2>Loại sản phẩm là : {{ $category }}</h2>
<h2>Tổng số sản phẩm là : {{ $countProduct }}</h2>
<button><a href="{{ route('product.add') }}">Thêm mới sản phẩm</a></button>
@if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success') }}</p> 
@endif
    <table class="table">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Mô tả</th>
                <th>Loại sản phẩm</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
        @php
            if($product->name != 'Iphone 20'):
        @endphp
        {{-- @if ($product->name != 'Xiaomi') --}}
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->category->name }}</td>
                <td>
                    <a href="{{ route('product.edit', ['id'=>$product->id]) }}" class="btn btn-warning">Sửa</a>
                    <form action="{{ route('product.delete', ['id'=>$product->id]) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Xóa</button>
                    </form>
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
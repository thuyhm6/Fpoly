<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {
        $category = 'Điện thoại';
        
        $products = Product::orderBy('created_at', 'DESC')->paginate(5);
        //Product::withTrashed()->get();
        //Product::where('name','=','Xiaomi Note 9')->first();
        $countProduct = Product::all()->count(1);
        
        return view('products', compact('category', 'products','countProduct'));
    }

    public function addProduct() {
        return view('product-add');
    }

    public function storeProduct(Request $request){
        // Validate dữ liệu nhập vào
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        // Chèn dữ liệu vào database bằng Query Builder
        // DB::table('products')->insert([
        //     'name' => $request->input('name'),
        //     'price' => $request->input('price'),
        //     'description' => $request->input('description'),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();

        // Quay lại trang danh sách hoặc thông báo thành công
        return redirect()->route('products')->with('success', 'Sản phẩm đã được thêm thành công!');
    }

    public function editProduct($id) {
        $product = Product::find($id);
        return view('product-edit', compact('product'));
    }

    public function updateProduct(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
        ]);

        $product = Product::find($request->input('id'));
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();

        return redirect()->route('products')->with('success', 'Sản phẩm đã được cập nhật thành công!');
    }
    public function deleteProduct($id) {
        $product = Product::find($id);
        // $product->delete();
        $product->forceDelete(); //Xóa cứng
        return redirect()->route('products')->with('success', 'Sản phẩm đã được xóa thành công!');
    }

    // Khôi phục lại xóa mềm
    public function restoreProduct($id) {
        $product = Product::withTrashed()->find($id);
        $product->restore();
        return redirect()->route('products')->with('success', 'Sản phẩm đã được xóa thành công!');
    }
}

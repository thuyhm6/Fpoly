<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::orderBy('created_at', 'DESC')->paginate(5);
        return view('category.index', compact('categories'));
    }

    public function addCategory() {
        return view('category.add');
    }

    public function storeCategory(Request $request){
        // Validate dữ liệu nhập vào
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|required|string',
        ]);

        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();

        // Quay lại trang danh sách hoặc thông báo thành công
        return redirect()->route('categories')->with('success', 'Sản phẩm đã được thêm thành công!');
    }
}

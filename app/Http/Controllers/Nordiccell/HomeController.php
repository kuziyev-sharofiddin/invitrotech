<?php

namespace App\Http\Controllers\Nordiccell;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ParentCategory;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\SubCategoryItem;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $parentCategories = ParentCategory::query()->get();
        return view('nordiccell.pages.home', compact('parentCategories'));
    }

    public function allProduct() {
        $parentCategories = ParentCategory::query()->get();
        $products = Product::query()->get();
        return view('nordiccell.pages.all_products', compact('products','parentCategories'));
    }
}

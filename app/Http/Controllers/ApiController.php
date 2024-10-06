<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubCategoryItem;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function fetchCategory(Request $request)
    {
        $data['categories'] = Category::where("parent_category_id", $request->parent_category_id)
            ->get(["name", "id"]);

        return response()->json($data);
    }

    public function fetchSubCategory(Request $request)
    {
        $data['subCategories'] = SubCategory::where("category_id", $request->category_id)
            ->get(["name", "id"]);

        return response()->json($data);
    }

    public function fetchSubCategoryItem(Request $request)
    {
        $data['subCategoryItems'] = SubCategoryItem::where("sub_category_id", $request->sub_category_id)
            ->get(["name", "id"]);

        return response()->json($data);
    }
}

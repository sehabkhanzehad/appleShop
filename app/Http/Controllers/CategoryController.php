<?php

namespace App\Http\Controllers;

use App\Helper\Respons;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryList()
    {
        $data = Category::all();
        return Respons::respons("success", $data, "200");
    }
}

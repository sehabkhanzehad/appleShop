<?php

namespace App\Http\Controllers;

use App\Helper\Respons;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function brandList()
    {
        $data = Brand::all();
        return Respons::respons("success", $data, 200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function getProduct()
    {
        $jsonData = json_decode(Storage::get('public/data.json'));
        return view('layouts.productCard', ['data' => $jsonData]);
    }
}

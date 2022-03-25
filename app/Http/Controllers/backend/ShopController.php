<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Used Models
use App\Models\ShopCategory;
use App\Models\Product;

class ShopController extends Controller
{
    public function index()
    {
        return 'working';
    }
}

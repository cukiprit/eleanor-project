<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductInModel;
use App\Models\ProductModel;

class Admin extends BaseController
{
    public function index()
    {
        $products_in = new ProductInModel();
        $result_in = $products_in->select('sum(quantity) as Total')->first();

        $data = [
            'products' => $products_in->joinProducts(),
            'sum_product_in' => $result_in['Total'],
        ];

        return view('admin/index', $data);
    }
}

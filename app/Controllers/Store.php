<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Store extends BaseController
{
    public function index()
    {
        $products = new ProductModel();
        $result_product = $products->select('count(product_code) as Total')->first();

        $data = [
            'product' => $result_product['Total'],
            'products' => $products->paginate(12, 'products'),
            'pager' => $products->pager
        ];

        // $active = uri_string() == 'store';

        return view('stores',  $data);
    }

    public function detail($product_code = NULL)
    {
        $product = new ProductModel();

        $data['product'] = $product->find($product_code);

        return view('detail_store', $data);
    }
}

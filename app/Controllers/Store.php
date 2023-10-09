<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Store extends BaseController
{
    public function index()
    {
        $products = new ProductModel();

        $data = [
            'products' => $products->paginate(9, 'products'),
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

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Store extends BaseController
{
    protected $ProductModel;
    public function __construct()
    {
        $this->ProductModel = new ProductModel();
    }

    public function index()
    {
        $result_product = $this->ProductModel->select('count(product_code) as Total')->first();

        $data = [
            'product'   => $result_product['Total'],
            'products'  => $this->ProductModel->paginate(12, 'products'),
            'pager'     => $this->ProductModel->pager
        ];

        // $active = uri_string() == 'store';

        return view('stores',  $data);
    }

    public function detail($product_code = NULL)
    {
        $data['product'] = $this->ProductModel->find($product_code);

        return view('detail_store', $data);
    }
}

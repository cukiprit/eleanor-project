<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductInModel;
use App\Models\ProductOutModel;

class Admin extends BaseController
{
    protected $ProductIn;
    protected $ProductOut;

    public function __construct()
    {
        $this->ProductIn = new ProductInModel();
        $this->ProductOut = new ProductOutModel();
    }
    public function index()
    {
        $result_in = $this->ProductIn->select('sum(quantity) as Total')->first();
        $result_out = $this->ProductOut->select('sum(quantity) AS Total')->first();

        $data = [
            'products' => $this->ProductIn->joinProducts(),
            'sum_product_in' => $result_in['Total'],
            'sum_product_out' => $result_out['Total']
        ];

        return view('admin/index', $data);
    }

    public function chart()
    {
        $data = [
            'products_in' => $this->ProductIn->orderBy('date_in', 'ASC')->findAll(),
            'products_out' => $this->ProductOut->orderBy('date_out', 'ASC')->findAll()
        ];

        return $this->response->setJSON($data);
    }
}

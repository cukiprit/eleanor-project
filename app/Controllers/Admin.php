<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductInModel;
use App\Models\ProductModel;
use App\Models\ProductOutModel;

class Admin extends BaseController
{
    protected $ProductInModel;
    protected $ProductOutModel;
    protected $ProductModel;

    public function __construct()
    {
        $this->ProductModel = new ProductModel();
        $this->ProductInModel = new ProductInModel();
        $this->ProductOutModel = new ProductOutModel();
    }
    public function index()
    {
        $data = [
            'products_in'   => $this->ProductInModel->joinProducts(),
            'products_out'  => $this->ProductOutModel->joinProducts(),
        ];

        return view('admin/index', $data);
    }

    public function chart()
    {
        $data = [
            'products_in' => $this->ProductInModel->orderBy('date_in', 'ASC')->findAll(),
            'products_out' => $this->ProductOutModel->orderBy('date_out', 'ASC')->findAll()
        ];

        return $this->response->setJSON($data);
    }
}

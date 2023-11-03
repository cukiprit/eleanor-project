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
        $currentMonth = date('m');
        $currentYear = date('Y');

        $data = [
            'products_in' => $this->ProductInModel->where('month(date_in)', $currentMonth)->where('year(date_in)', $currentYear)->orderBy('date_in', 'ASC')->findAll(),
            'products_out' => $this->ProductOutModel->where('month(date_out)', $currentMonth)->where('year(date_out)', $currentYear)->orderBy('date_out', 'ASC')->findAll()
        ];

        return $this->response->setJSON($data);
    }
}

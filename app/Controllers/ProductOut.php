<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\ProductOutModel;
use Faker\Factory;

class ProductOut extends BaseController
{
    protected $ProductOutModel;
    protected $ProductModel;
    protected $validation;

    public function __construct()
    {
        helper(['form', 'url']);

        $this->ProductOutModel = new ProductOutModel();
        $this->ProductModel = new ProductModel();
        $this->validation = \Config\Services::validation();
    }
    public function index()
    {
        $data = [
            'products_out' => $this->ProductOutModel->joinProducts(),
            'products' => $this->ProductModel->orderBy('product_name', 'asc')->findAll(),
            'validation' => $this->validation
        ];

        return view('admin/barang_keluar', $data);
    }

    public function create()
    {
        $faker = Factory::create();

        $product_name = $this->request->getPost('product_name');
        $date_out = $this->request->getPost('date_out');
        $quantity = $this->request->getPost('quantity');

        $data = [
            'code_product_out' => $faker->uuid(),
            'date_out' => $date_out,
            'quantity' => $quantity,
            'product_code' => $product_name
        ];

        if ($this->validate('product_out')) {
            $this->ProductOutModel->insert($data);

            return redirect('admin/barang_keluar');
        }
        return redirect()->back()->withInput();
    }

    public function edit($code_product_out)
    {
        $productOut = $this->ProductOutModel->where('code_product_out', $code_product_out)->first();

        return $this->response->setJSON($productOut);
    }

    public function edit_data($code_product_out)
    {
        $product_name = $this->request->getPost('product_name');
        $date_out = $this->request->getPost('date_out');
        $quantity = $this->request->getPost('quantity');

        $data = [
            'date_out' => $date_out,
            'quantity' => $quantity,
            'product_code' => $product_name
        ];

        if ($this->validate('product_out')) {
            $this->ProductOutModel->update($code_product_out, $data);

            return redirect('admin/barang_keluar');
        }
        return redirect()->back()->withInput();
    }

    public function delete_barang($code_product_out)
    {
        $deleted = $this->ProductOutModel->delete($code_product_out);

        return $this->response->setJSON(['success' => $deleted]);
    }
}

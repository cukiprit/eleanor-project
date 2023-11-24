<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductInModel;
use App\Models\ProductModel;
use Faker\Factory;

class ProductIn extends BaseController
{
    protected $ProductModel;
    protected $ProductInModel;
    protected $validation;

    public function __construct()
    {
        helper(['form', 'url']);

        $this->ProductInModel = new ProductInModel();
        $this->ProductModel = new ProductModel();
        $this->validation = \Config\Services::validation();
    }

    public function index()
    {
        $data = [
            'products_in'   => $this->ProductInModel->joinProducts(),
            'products'      => $this->ProductModel->orderBy('product_name', 'asc')->findAll(),
            'validation'    => $this->validation
        ];

        return view('admin/barang_masuk', $data);
    }

    public function create()
    {
        $faker = Factory::create();

        $product_name = $this->request->getPost('product_name');
        $date_in = $this->request->getPost('date_in');
        $quantity = $this->request->getPost('quantity');

        $data = [
            'code_product_in' => $faker->uuid(),
            'date_in' => $date_in,
            'quantity' => $quantity,
            'product_code' => $product_name
        ];
        $stock = $this->ProductModel->where('product_code', $product_name)->first();

        $updatedData = [
            'product_stock' => $stock['product_stock'] + $quantity
        ];

        $this->ProductModel->update($product_name, $updatedData);

        $this->ProductInModel->insert($data);

        return redirect('admin/barang_masuk');
    }

    public function edit($code_product_in)
    {
        $productIn = $this->ProductInModel->where('code_product_in', $code_product_in)->first();

        return $this->response->setJSON($productIn);
    }

    public function edit_data($code_product_in)
    {

        $product_name = $this->request->getPost('product_name');
        $date_in = $this->request->getPost('date_in');
        $quantity = $this->request->getPost('quantity');

        $data = [
            'date_in' => $date_in,
            'quantity' => $quantity,
            'product_code' => $product_name
        ];

        $this->ProductInModel->update($code_product_in, $data);

        return redirect('admin/barang_masuk');
    }

    public function delete_barang($code_product_in)
    {
        $deleted = $this->ProductInModel->delete($code_product_in);

        return $this->response->setJSON(['success' => $deleted]);
    }
}

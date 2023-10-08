<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use Faker\Factory;

class Product extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();

        return view('admin/tambah_barang', $data);
    }

    public function create()
    {
        $model = new ProductModel();
        $faker = Factory::create();

        $file = $this->request->getFile('gambar_barang');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/img', $newName);
        }

        $data = [
            'product_code' => $faker->uuid(),
            'product_name' => $this->request->getPost('nama_barang'),
            'product_description' => $this->request->getPost('deskripsi_barang'),
            'product_picture' => $newName,
            'product_stock' => $this->request->getPost('stok_barang'),
            'product_price' => $this->request->getPost('harga_barang'),
        ];

        $model->insert($data);

        return redirect('admin/tambah_barang');
    }

    public function edit($product_code)
    {
        $model = new ProductModel();
        $product = $model->where('product_code', $product_code)->first();

        return $this->response->setJSON($product);
    }

    public function edit_data($product_code)
    {
        $model = new ProductModel();

        $file = $this->request->getFile('product_picture');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/img', $newName);
        }

        $data = [
            'product_name' => $this->request->getPost('product_name'),
            'product_description' => $this->request->getPost('product_description'),
            'product_picture' => $newName,
            'product_stock' => $this->request->getPost('product_stock'),
            'product_price' => $this->request->getPost('product_price'),
        ];

        $model->update($product_code, $data);

        return redirect('admin/tambah_barang');
    }

    public function delete($product_code)
    {
        $model = new ProductModel();

        $model->delete($product_code);

        return redirect('admin/tambah_barang');
    }
}

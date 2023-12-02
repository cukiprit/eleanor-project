<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use Faker\Factory;

class Product extends BaseController
{
    protected $ProductModel;

    public function __construct()
    {
        helper(['form', 'url']);

        $this->ProductModel = new ProductModel();
    }

    public function index()
    {
        $data = [
            'products'  => $this->ProductModel->paginate(10, 'products'),
            'pager'     => $this->ProductModel->pager
        ];

        return view('admin/tambah_barang', $data);
    }

    public function create()
    {
        $faker = Factory::create();

        $file = $this->request->getFile('product_picture');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/img', $newName);
        }

        $data = [
            'product_code'          => $faker->uuid(),
            'product_name'          => $this->request->getPost('product_name'),
            'product_description'   => $this->request->getPost('product_description'),
            'product_picture'       => $newName,
            'product_stock'         => $this->request->getPost('product_stock'),
            'product_price'         => $this->request->getPost('product_price'),
        ];

        $this->ProductModel->insert($data);

        return redirect('admin/tambah_barang');
    }

    public function edit($product_code)
    {
        $product = $this->ProductModel->where('product_code', $product_code)->first();

        return $this->response->setJSON($product);
    }

    public function edit_data($product_code)
    {
        $file = $this->request->getFile('product_picture');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/img', $newName);
        }

        $data = [
            'product_name'          => $this->request->getPost('product_name'),
            'product_description'   => $this->request->getPost('product_description'),
            'product_picture'       => $newName,
            'product_stock'         => $this->request->getPost('product_stock'),
            'product_price'         => $this->request->getPost('product_price'),
        ];

        $this->ProductModel->update($product_code, $data);

        return redirect('admin/tambah_barang');
    }

    public function delete_barang($product_code)
    {
        // $deleted_image = $this->ProductModel->select('product_picture')->where('product_code', $product_code)->first();
        // $file_name = $deleted_image->product_picture;

        // if (file_exists(FCPATH . 'uploads/img/' . $file_name)) {
        //     unlink(FCPATH . 'uploads/img/' . $file_name);
        // }

        $deleted = $this->ProductModel->delete($product_code);

        return $this->response->setJSON(['success' => $deleted]);
    }
}

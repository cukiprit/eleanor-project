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
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama_barang' => 'required|min_length[3]|max_length[100]',
            'harga_barang' => 'required|numeric',
            'stok_barang' => 'required|numeric',
            'deskripsi_barang' => 'required|min_length[10]',
            'gambar_barang' => 'uploaded[gambar_barang]|max_size[gambar_barang,1024]|is_image[gambar_barang]',

        ]);
        $products = new ProductModel();

        if ($this->request->getServer('REQUEST_METHOD') == 'POST') {
            $isDataValid = $validation->withRequest($this->request)->run();

            if ($isDataValid) {
                $faker = Factory::create();

                $file = $this->request->getFile('gambar_barang');
                if ($file->isValid() && !$file->hasMoved()) {
                    $newName = $file->getRandomName();
                    $file->move(FCPATH . 'uploads/img', $newName);
                }

                $data = [
                    'product_id' => $faker->uuid(),
                    'product_name' => $this->request->getPost('nama_barang'),
                    'product_description' => $this->request->getPost('deskripsi_barang'),
                    'product_picture' => $newName,
                    'product_stock' => $this->request->getPost('stok_barang'),
                    'product_price' => $this->request->getPost('harga_barang'),
                ];

                $products->insert($data);

                return redirect('admin/tambah_barang');
            } else {
                $data['errors'] = $validation->getErrors();
                return view('admin/tambah_barang', $data);
            }
        } else {
            $data['products'] = $products->findAll();

            return view('admin/tambah_barang', $data);
        }
    }

    public function create()
    {
        $model = new ProductModel();
        $faker = Factory::create();

        $file = $this->request->getFile('gambar_barang');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(base_url('uploads/img'), $newName);
        }

        $data = [
            'product_id' => $faker->uuid(),
            'product_name' => $this->request->getPost('nama_barang'),
            'product_description' => $this->request->getPost('deskripsi_barang'),
            'product_picture' => $newName,
            'product_stock' => $this->request->getPost('stok_barang'),
            'product_price' => $this->request->getPost('harga_barang'),
        ];

        $model->insert($data);
    }
}

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Product extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function index()
    {
        $products = new ProductModel();

        $data['products'] = $products->findAll();

        return view('admin/tambah_barang', $data);
    }

    public function create()
    {
        $rules = [
            'nama_barang' => 'required|min_length[3]|max_length[50]',
            'deskripsi_barang' => 'required|min_length[3]|max_length[50]',
            'harga_barang' => 'required|min_length[3]|max_length[50]',
            'stok_barang' => 'required|min_length[3]|max_length[50]',
            'gambar_barang' => 'uploaded[gambar_barang]|max_size[gambar_barang,2048]|is_image[gambar_barang]|mime_in[gambar_barang,image/jpg,image/jpeg,image/png]',
        ];

        if ($this->validate($rules)) {
            $model = new ProductModel();

            $data = [
                'product_name' => $this->request->getVar('nama_barang'),
                'product_description' => $this->request->getVar('deskripsi_barang'),
                'product_price' => $this->request->getVar('harga_barang'),
                'product_stock' => $this->request->getVar('stok_barang'),
                'product_picture' => $this->request->getFile('gambar_barang')->getRandomName(),
            ];

            if ($model->save($data) === false) {
                $errors = $model->errors();

                $data = [
                    'validation' => $errors,
                    'products' => $model->findAll(),
                ];
                return redirect('admin/tambah_barang');
            } else {

                return redirect('admin/tambah_barang');
            }
        } else {
            $model = new ProductModel();

            $data = [
                'validation' => $this->validator,
                'products' => $model->findAll(),
            ];
            return redirect('admin/tambah_barang');
        }
    }
}

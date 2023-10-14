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
        $file = $this->request->getFile('gambar_barang');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . 'uploads', $newName);
        }

        // $data;
    }
}

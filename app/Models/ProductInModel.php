<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductInModel extends Model
{
    protected $table            = 'product_in';
    protected $primaryKey       = 'code_product_in';

    protected $returnType       = 'array';

    protected $allowedFields    = ['code_product_in', 'date_in', 'quantity', 'product_code'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'product_name'  => 'required|is_not_unique[products.product_name]',
        'date_in'       => 'required|valid_date',
        'quantity'      => 'required|numeric|greater_than[0]',
    ];
    protected $validationMessages   = [
        'product_name'      => [
            'required'      => 'Nama produk harus diisi',
            'is_not_unique' => 'Nama produk telah ada',
        ],
        'date_in'           => [
            'required'      => 'Tanggal produk harus diisi',
            'valid_date'    => 'Format tanggal tidak sesuai',
        ],
        'quantity'          => [
            'required'      => 'Jumlah produk harus diisi',
            'numeric'       => 'Jumlah produk harus berupa angka',
            'greater_than'  => 'Jumlah produk harus lebih dari 0',
        ]
    ];
    protected $skipValidation       = false;

    protected $afterInsert = ['updateQuantity'];
    protected $afterDelete = ['updateQuantity'];

    public function joinProducts()
    {
        return $this->select('*')
            ->join('products', 'products.product_code = product_in.product_code', 'left')
            ->orderBy('date_in', 'ASC')
            ->findAll();
    }
}

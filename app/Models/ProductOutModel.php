<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductOutModel extends Model
{
    protected $table            = 'product_out';
    protected $primaryKey       = 'code_product_out';

    protected $returnType       = 'array';

    protected $allowedFields    = ['code_product_out', 'date_out', 'quantity', 'product_code'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'product_name'  => 'required|is_not_unique[product.product_code]',
        'date_out'      => 'required|valid_date',
        'quantity'      => 'required|numeric|greater_than[0]'
    ];
    protected $validationMessages   = [
        'product_name'      => [
            'required'      => 'Field nama tidak boleh kosong',
            'is_not_unique' => 'Product ini tidak dapat ditemukan'
        ],
        'date_out'          => [
            'required'      => 'Field date out tidak boleh kosong',
            'valid_date'    => 'Tangga keluar harus tanggal yang valid'
        ],
        'quantity'          => [
            'required'      => 'Field jumlah barang keluar tidak boleh kosong',
            'numeric'       => 'Field jumlah barang keluar harus angka',
            'greater_than'  => 'Field quantity harus lebih besar dari 0'
        ]
    ];

    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    protected $beforeInsert = ['checkQuantity'];
    protected $afterInsert = ['updateQuantity'];
    protected $afterDelete = ['updateQuantity'];

    public function joinProducts()
    {
        return $this->select('*')
            ->join('products', 'products.product_code = product_out.product_code', 'left')
            ->orderBy('date_out', 'ASC')
            ->findAll();
    }

    protected function checkQuantity(array $data)
    {
        $product_code = $data['data']['product_code'];
        $quantity = $data['data']['quantity'];

        $product = $this->db->table('product')->select('product_stock')->where('product_code', $product_code)->get()->getRowArray();

        if ($product['product_stock'] == 0 || $product['product_stock'] < $quantity) {
            $this->validation->setError('quantity', 'The quantity of the product is not enough');

            return false;
        }
    }
}

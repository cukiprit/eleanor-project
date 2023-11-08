<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'product_code';

    protected $returnType = 'array';

    protected $allowedFields = ['product_code', 'product_name', 'product_description', 'product_picture', 'product_stock', 'product_price'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

    protected $afterInsert = ['updateQuantity'];

    protected function updateQuantity(array $data)
    {
        $product_code = $data['data']['product_code'];
        $quantity = $data['data']['quantity'];

        $product_in = $this->db->table('product_in')
            ->selectSum('quantity')->where('product_code', $product_code)
            ->get()->getRowArray();

        $product_out = $this->db->table('product_out')
            ->selectSum('quantity')->where('product_code', $product_code)
            ->get()->getRowArray();

        $new_quantity = $product_in['quantity'] - $product_out['quantity'];

        $this->db->table('product')->set('product_stock', $new_quantity)
            ->where('product_code', $product_code)->update();
    }
}

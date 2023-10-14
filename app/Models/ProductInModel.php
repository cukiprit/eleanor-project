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
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;

    public function joinProducts()
    {
        return $this->select('*')
            ->join('products', 'products.product_code = product_in.product_code', 'left')
            ->orderBy('date_in', 'ASC')
            ->findAll();
    }
}

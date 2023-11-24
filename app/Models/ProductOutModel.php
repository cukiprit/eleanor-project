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
    protected $validationRules      = [];
    protected $validationMessages   = [];

    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    public function joinProducts()
    {
        return $this->select('*')
            ->join('products', 'products.product_code = product_out.product_code', 'left')
            ->orderBy('date_out', 'ASC')
            ->findAll();
    }
}

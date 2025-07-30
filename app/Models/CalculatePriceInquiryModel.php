<?php

namespace App\Models;

use CodeIgniter\Model;

class CalculatePriceInquiryModel extends Model
{
    protected $table      = 'calculate_price_inquiries';
    protected $primaryKey = 'id';

    protected $allowedFields = ['name', 'email', 'phone'];

    protected $useTimestamps = true;
}

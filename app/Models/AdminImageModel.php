<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminImageModel extends Model
{
    protected $table      = 'admin_images';
    protected $primaryKey = 'id';

    protected $allowedFields = ['admin_id', 'image'];

    protected $useTimestamps = true;
}

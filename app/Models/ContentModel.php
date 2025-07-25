<?php

namespace App\Models;

use CodeIgniter\Model;

class ContentModel extends Model
{
    protected $table = 'contents';
    protected $primaryKey = 'id';

    protected $allowedFields = ['title', 'slug', 'description'];
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class SeoModel extends Model
{
    protected $table = 'seo_pages';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'page_url',
        'meta_title',
        'meta_description',
        'meta_keywords'
    ];
}

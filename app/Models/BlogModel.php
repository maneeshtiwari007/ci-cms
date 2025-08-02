<?php

namespace App\Models;
use CodeIgniter\Model;

class BlogModel extends Model
{
    protected $table = 'blogs';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'title', 'slug', 'cat_id', 'meta_title', 'meta_description',
        'meta_keywords', 'tags', 'publication_date', 'description', 'image'
    ];
}

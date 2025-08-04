<?php

namespace App\Models;

use CodeIgniter\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'slug', 'description', 'image'];
    protected $useTimestamps = true;


    public function getWithBlogCount()
    {
        return $this->select('categories.*, COUNT(blogs.id) as blog_count')
                    ->join('blogs', 'blogs.cat_id = categories.id', 'left')
                    ->groupBy('categories.id')
                    ->findAll();
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admins'; // Table name
    protected $primaryKey = 'id';

    protected $allowedFields = ['first_name','last_name','role','email', 'password', 'name']; // Allow insert/update
}

<?php
namespace App\Models;
use CodeIgniter\Model;

class JobApplicationModel extends Model
{
    protected $table = 'job_applications';
    protected $allowedFields = ['name', 'email', 'message', 'resume'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
}

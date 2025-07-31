<?php

namespace App\Models;
use CodeIgniter\Model;

class ItCostInquiryModel extends Model
{
    protected $table = 'it_cost_inquiries';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'helpdesk_support',
        'num_computers',
        'num_printers',
        'num_network_devices',
        'has_servers',
        'num_servers',
        'onsite_support_rate',
        'store_offsite_backup',
        'offsite_backup_cost',
        'imaging_based_backup',
        'imaging_backup_cost',
        'name',
        'email',
        'phone',
        'cost_summary',
        'total_monthly_cost',
        'created_at'
    ];
}

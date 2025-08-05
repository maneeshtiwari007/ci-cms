<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class SeoPages extends BaseConfig
{
    public $pages = [
        '/' => 'Home',
        'calculate-price' => 'Calculate Price',
        'about/why-choose-us' => 'Why Choose Us',
        'prime-it/careers' => 'Careers',
        'services/web-development' => 'Web Development',
        'services/complete-business' => 'Complete Business Service',
        'services/digital-marketing' => 'Digital Marketing',
        'services/business-it-support' => 'Business IT Support',
        'services/cloud-storage-backup' => 'Cloud Storage & Backup',
        'services/email-support-and-services' => 'Email Support & Services',
        'contact-us' => 'Contact Us',
    ];
}

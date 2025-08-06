<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class SeoPages extends BaseConfig
{
    public $pages = [
        '/' => 'Home',
        '/about/why-choose-us' => 'Why Choose Us',
        '/prime-it/careers' => 'Careers',
        '/services/web-development' => 'Web Development',
        '/calculate-price' => 'Calculate Price',
        '/services/complete-business' => 'Complete Business Service',
        '/services/digital-marketing' => 'Digital Marketing',
        '/services/business-it-support' => 'Business IT Support',
        '/services/cloud-storage-backup' => 'Cloud Storage & Backup',
        '/services/email-support-and-services' => 'Email Support & Services',
        '/blog'       =>'blog',
        '/contact-us' => 'Contact Us',
    ];
}

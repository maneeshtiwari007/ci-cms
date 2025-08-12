<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public string $fromEmail  = 'codeyiizen@gmail.com';

    public string $adminEmail  = 'mahendra@codeyiizen.com';
    public string $fromName   = 'Prime IT';
    public string $recipients = '';

    public string $userAgent = 'CodeIgniter';
    public string $protocol  = 'smtp';

    public string $mailPath  = '/usr/sbin/sendmail';

    public string $SMTPHost  = 'smtp.gmail.com';
    public string $SMTPUser  = 'codeyiizen@gmail.com';
    public string $SMTPPass  = 'bwdclkdpoiablhkt'; // Gmail App Password

    
    public int    $SMTPPort  = 587;
    public int    $SMTPTimeout = 5;
    public bool   $SMTPKeepAlive = false;
    public string $SMTPCrypto   = 'tls';

    public bool   $wordWrap = true;
    public int    $wrapChars = 76;
    public string $mailType  = 'html'; // HTML format for email
    public string $charset   = 'UTF-8';
    public bool   $validate  = false;

    public int    $priority = 3;
    public string $CRLF     = "\r\n";
    public string $newline  = "\r\n";

    public bool   $BCCBatchMode = false;
    public int    $BCCBatchSize = 200;
    public bool   $DSN = false;
}

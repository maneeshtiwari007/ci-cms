<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Inquiry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0px 2px 8px rgba(0,0,0,0.1);
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 15px 20px;
            text-align: center;
            font-size: 20px;
            font-weight: bold;
        }
        .content {
            padding: 20px;
        }
        .content p {
            margin: 8px 0;
            color: #333333;
            font-size: 15px;
        }
        .label {
            font-weight: bold;
            color: #555555;
        }
        .footer {
            background: #f1f1f1;
            padding: 10px;
            text-align: center;
            font-size: 12px;
            color: #666666;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">New Contact Inquiry</div>
        <div class="content">
            <p><span class="label">Name:</span> <?= esc($name) ?></p>
            <p><span class="label">Email:</span> <?= esc($email) ?></p>
            <p><span class="label">Contact No:</span> <?= esc($contact_no) ?></p>
            <p><span class="label">Subject:</span> <?= esc($subject) ?></p>
            <p><span class="label">Message:</span><br><?= nl2br(esc($message)) ?></p>
        </div>
        <div class="footer">
            This email was sent from your website contact form.
        </div>
    </div>
</body>
</html>

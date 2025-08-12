<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>IT Cost Inquiry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 700px;
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
            font-size: 22px;
            font-weight: bold;
        }
        .content {
            padding: 20px;
        }
        .content p {
            margin: 6px 0;
            color: #333333;
            font-size: 15px;
        }
        .label {
            font-weight: bold;
            color: #555555;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        table th, table td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: center;
        }
        table th {
            background-color: #f1f1f1;
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
        <div class="header">New IT Cost Inquiry</div>
        <div class="content">
            <p><span class="label">Name:</span> <?= esc($name) ?></p>
            <p><span class="label">Email:</span> <?= esc($email) ?></p>
            <p><span class="label">Phone:</span> <?= esc($phone) ?></p>
            
            <h3>Cost Summary</h3>
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Cost</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cost_summary as $item): ?>
                        <tr>
                            <td><?= esc($item['item']) ?></td>
                            <td><?= esc($item['quantity']) ?></td>
                            <td>$<?= number_format($item['cost'], 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <p><span class="label">Total Monthly Cost:</span> $<?= number_format($total_monthly_cost, 2) ?></p>
        </div>
        <div class="footer">
            This email was sent from your IT cost calculator form.
        </div>
    </div>
</body>
</html>

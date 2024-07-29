<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Inquiry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
            margin: 0;
            width: 100%;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
        }
        .header, .footer {
            text-align: center;
            margin-bottom: 20px;
        }
        .header img, .footer img {
            max-width: 100%;
            height: auto;
        }

        .h1{

            color: a0527a;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="{{ url('assets/images/header.png') }}" alt="Radeeef">
            <h1>Support Inquiry</h1>
        </div>
        <p>Dear {{ $inquiry->name }},</p>
        <p>{{ $messageContent }}</p>
        <div class="footer">
            <img src="{{ url('assets/images/footer.png') }}" alt="Radeeef">
        </div>
    </div>
</body>
</html>

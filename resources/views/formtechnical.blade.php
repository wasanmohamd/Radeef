<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Support</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 90%;
            max-width: 800px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            box-sizing: border-box;
            text-align: center;
        }
        .main-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .main-content h1 {
            color: #a0527a;
            margin-bottom: 20px;
            font-size: 2em;
        }
        .main-content .date {
            margin-bottom: 20px;
            color: #555;
        }
        .main-content .info {
            margin-bottom: 20px;
            width: 100%;
            text-align: left;
        }
        .main-content .info div {
            margin-bottom: 10px;
        }
        .main-content .info p {
            margin: 0;
        }
        .main-content form {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }
        .main-content form input,
        .main-content form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .main-content form textarea {
            resize: none;
            height: 150px;
        }
        .main-content form button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #a0527a;
            color: white;
            cursor: pointer;
        }
        .main-content form button:hover {
            background-color: #a0527a;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="main-content">
            <h1>Technical Support</h1>
            <div class="date"><p>Today is {{ \Carbon\Carbon::now()->format('l, F j, Y') }}</p></div>
            <div class="info">
                <div>
                   
                </div>
                <div class="email">
                    
                </div>
                <div>
                   
                </div>
            </div>
            <form method="POST" action="submit_inquiry.php">
                <input type="text" name="name" placeholder="Your Name" required aria-label="Your Name">
                <input type="email" name="email" placeholder="Your Email" required aria-label="Your Email">
                <input type="text" name="ticket" placeholder="Ticket Address" required aria-label="Ticket Address">
                <textarea name="inquiry" placeholder="Write your Inquiry here" required aria-label="Write your Inquiry here"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
</body>
</html>

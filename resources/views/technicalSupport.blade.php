<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['notification'])) {
    $notification = $_GET['notification'] ?? '';

    // Here you can handle the form submission, e.g., save the notification to a database or send an email.
    // For demonstration, we are just displaying the notification.
    echo "<p>Notification received: $notification</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Support Form</title>
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
            display: flex;
            width: 80%;
            height: 80%;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .sidebar {
            width: 30%;
            background-color: #e8d4dc;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
        .sidebar h2 {
            margin-top: 0;
            color: #a0527a;
        }
        .sidebar .search-box {
            margin-bottom: 20px;
        }
        .sidebar .search-box input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .sidebar .accounts {
            flex: 1;
            overflow-y: auto;
        }
        .sidebar .account {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            cursor: pointer;
        }
        .sidebar .account:hover {
            background-color: #a0527a;
        }
        .sidebar .actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .sidebar .actions button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #a0527a;
            color: white;
            cursor: pointer;
        }
        .sidebar .actions button:hover {
            background-color: #a0527a;
        }
        .main-content {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .main-content h1 {
            color: #a0527a;
        }
        .main-content .date {
            margin-bottom: 20px;
            color: #555;
        }
        .main-content form {
            width: 100%;
            max-width: 500px;
        }
        .main-content form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: none;
            height: 150px;
            margin-bottom: 20px;
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
            background-color: #722e39;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Select the accounts</h2>
            <div class="search-box">
            <div class="row justify-content-center">
                <input type="text" placeholder="Search...">
            </div>
    </div>
            <div class="accounts">
                <div class="account">Ahmad Omar</div>
                <div class="account">Amal Khaled</div>
                <div class="account">Abdallah Mohamed</div>
                <div class="account">Wissam Saeed</div>
                <div class="account">Raghad Abdel Aziz</div>
            </div>
            <div class="actions">
                <button>Select</button>
                <button>All accounts</button>
            </div>
        </div>
        <div class="main-content">
            <h1>Technical Support</h1>
            <div class="date"><p>Today is {{ \Carbon\Carbon::now()->format('l, F j, Y') }}</p></div>
            <form method="GET" action="">
                <textarea name="notification" placeholder="Write your Notification here"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
</body>
</html>
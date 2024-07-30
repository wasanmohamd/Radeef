<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Progress</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .container {
            background-color: #f8e1e1;
            border-radius: 15px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .back-arrow {
            display: inline-block;
            margin-bottom: 20px;
            cursor: pointer;
        }

        .back-arrow svg {
            width: 24px;
            height: 24px;
        }

        .progress-ring {
            position: relative;
            width: 100px;
            height: 100px;
            margin: 0 auto 20px;
        }

        .progress-ring circle {
            fill: transparent;
            stroke-width: 10;
        }

        .progress-ring__circle {
            stroke: #e57373;
            stroke-dasharray: 251.2;
            stroke-dashoffset: calc(251.2 * (1 - (50 / 100))); /* 50% progress */
            transition: stroke-dashoffset 0.35s;
        }

        .progress-ring__background {
            stroke: #f5a5a5;
        }

        .progress-ring__text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1.5em;
            color: #e57373;
        }

        .task-details {
            background-color: #e8c4c4;
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
        }

        .task-details p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="back-arrow" onclick="history.back()">
            <svg viewBox="0 0 24 24">
                <path fill="currentColor" d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
            </svg>
        </div>
        <h2>Task progress</h2>
        <div class="progress-ring">
            <svg width="100" height="100">
                <circle class="progress-ring__background" cx="50" cy="50" r="40"/>
                <circle class="progress-ring__circle" cx="50" cy="50" r="40"/>
            </svg>
            <div class="progress-ring__text">50%</div>
        </div>
        <div class="task-details">
            <p>Total Tasks: 2</p>
            <p>Completed Tasks: 1</p>
            <p>Remaining Tasks: 1</p>
        </div>
    </div>
</body>
</html>
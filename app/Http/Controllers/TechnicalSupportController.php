<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technical Support Inquiries</title>
    <style>
        .container {
            width: 80%;
            margin: 0 auto;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .btn-export, .btn-email {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-email {
            background-color: #2196F3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Technical Support Inquiries</h1>
        <a href="{{ route('technicalSupport.export') }}" class="btn-export">Export to CSV</a>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Ticket</th>
                    <th>Inquiry</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inquiries as $inquiry)
                <tr>
                    <td>{{ $inquiry->name }}</td>
                    <td>{{ $inquiry->email }}</td>
                    <td>{{ $inquiry->ticket }}</td>
                    <td>{{ $inquiry->inquiry }}</td>
                    <td>{{ $inquiry->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>
                        <a href="{{ route('write.email', $inquiry->id) }}" class="btn-email">Send Email</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
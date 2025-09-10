<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        h2 {
            color: #555;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }
        p {
            margin: 10px 0;
        }
        strong {
            color: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>New Inquiry from Website Contact Form</h2>
        <p>You have received a new message from your website's contact form.</p>
        <hr>
        <p><strong>Name:</strong> {{ $data['name'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Subject:</strong> {{ $data['subject'] }}</p>
        <div>
            <strong>Message:</strong>
            <p style="white-space: pre-wrap; background-color: #f9f9f9; padding: 15px; border-radius: 4px;">{{ $data['message'] }}</p>
        </div>
    </div>
</body>
</html>

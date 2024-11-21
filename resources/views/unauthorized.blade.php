<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unauthorized</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f8f9fa;
            color: #333;
            padding: 2rem;
        }

        h1 {
            color: #e3342f;
        }

        a {
            color: #3490dc;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>403 - Unauthorized Access</h1>
    <p>You do not have permission to view this page.</p>
    <a href="{{ url('/') }}">Go to Homepage</a>
</body>

</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance - MTS Sunan Kalijaga</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            background: linear-gradient(135deg, #f9a825, #f57c00);
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin: 0;
            overflow: hidden;
        }
        h1 {
            font-size: 3em;
            animation: fadeIn 2s ease-in-out;
        }
        p {
            font-size: 1.2em;
            animation: fadeIn 3s ease-in-out;
        }
        .gear {
            width: 100px;
            height: 100px;
            animation: spin 3s infinite linear;
        }
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <img src="https://cdn-icons-png.flaticon.com/512/190/190681.png" class="gear" alt="Maintenance">
    <h1>Website Sedang Dalam Pemeliharaan</h1>
    <p>Tim IT <strong>MTS Sunan Kalijaga</strong> sedang melakukan peningkatan sistem.<br>Silakan kembali lagi nanti.</p>
</body>
</html>

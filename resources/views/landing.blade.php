<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
        }
        .container img {
            width: 150px; /* bisa disesuaikan */
            height: auto;
            margin-bottom: 20px;
            border-radius: 50%; /* opsional, bikin jadi lingkaran */
        }
        h1 {
            color: #333;
            margin-bottom: 10px;
        }
        p {
            color: #666;
            font-size: 18px;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #4facfe;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Tambahkan gambar di sini -->
        <img src="poltek.png">
        <h1>Selamat Datang!</h1>
        <p>Ini adalah landing page sederhana dengan Laravel.</p>
    </div>
</body>
</html>

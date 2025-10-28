<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Tiket Wisata</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #b2f7b2, #fff3b0);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            text-align: center;
            width: 420px;
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
        }

        h1 {
            color: #2e7d32;
            font-size: 26px;
            margin-bottom: 15px;
        }

        p {
            color: #555;
            margin-bottom: 20px;
        }

        a {
            display: block;
            background: linear-gradient(90deg, #2e7d32, #9ccc65);
            color: white;
            text-decoration: none;
            padding: 12px;
            margin: 8px 0;
            border-radius: 10px;
            font-weight: 500;
            transition: 0.3s ease;
        }

        a:hover {
            background: linear-gradient(90deg, #7cb342, #cddc39);
            color: #2e7d32;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🌿 Selamat Datang di Sistem Tiket Wisata 💛</h1>
        <p>Pilih tempat wisata untuk melihat harga tiketnya:</p>

        <a href="{{ url('/tiket/Papuma/20000') }}">Pantai Papuma - Rp 20.000</a>
        <a href="{{ url('/tiket/WatuUlo/15000') }}">Watu Ulo - Rp 15.000</a>
        <a href="{{ url('/tiket/Rembangan/10000') }}">Puncak Rembangan - Rp 10.000</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Tiket Wisata</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #b2f7b2, #fff3b0);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 35px;
            text-align: center;
            width: 360px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
            animation: fadeIn 0.6s ease;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }

        h2 {
            color: #2e7d32;
            font-size: 24px;
            margin-bottom: 10px;
        }

        p {
            color: #333;
            font-size: 18px;
            margin: 10px 0;
        }

        a {
            display: inline-block;
            background: linear-gradient(90deg, #2e7d32, #9ccc65);
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 8px;
            margin-top: 15px;
            transition: 0.3s;
        }

        a:hover {
            background: linear-gradient(90deg, #7cb342, #cddc39);
            color: #2e7d32;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Informasi Tiket Wisata</h2>
        <p><b>Tempat Wisata:</b> {{ ucfirst($tempat) }}</p>
        <p><b>Harga Tiket:</b> Rp {{ number_format($harga, 0, ',', '.') }}</p>
        <a href="{{ url('/') }}">Kembali ke Halaman Utama</a>
    </div>
</body>
</html>

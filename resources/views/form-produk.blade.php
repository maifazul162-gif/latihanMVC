<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Input Produk</title>
  <style>
    /* ====== Gaya Umum ====== */
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #007bff, #ffe259);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    /* ====== Container Form ====== */
    .form-container {
      background: #ffffffd9;
      padding: 30px 40px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
      width: 350px;
      text-align: center;
      backdrop-filter: blur(10px);
    }

    /* ====== Judul ====== */
    h2 {
      color: #0056b3;
      margin-bottom: 20px;
      font-size: 24px;
    }

    /* ====== Label dan Input ====== */
    label {
      display: block;
      text-align: left;
      font-weight: 600;
      color: #333;
      margin-top: 10px;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 2px solid #007bff;
      border-radius: 10px;
      font-size: 14px;
      outline: none;
      transition: 0.3s;
    }

    input:focus, select:focus {
      border-color: #ffcc00;
      box-shadow: 0 0 5px #ffcc00;
    }

    /* ====== Tombol ====== */
    button {
      margin-top: 20px;
      width: 100%;
      padding: 12px;
      background: linear-gradient(90deg, #007bff, #ffcc00);
      border: none;
      border-radius: 10px;
      color: white;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s ease;
    }

    button:hover {
      transform: scale(1.05);
      box-shadow: 0 0 10px #ffd700;
    }

    /* ====== Efek Responsif ====== */
    @media (max-width: 400px) {
      .form-container {
        width: 85%;
        padding: 25px;
      }
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Form Input Produk</h2>
    <form action="/kirim-produk" method="POST">
      @csrf
      <label>Nama Produk:</label>
      <input type="text" name="nama" required>

      <label>Harga Produk:</label>
      <input type="number" name="harga" required>

      <label>Kategori:</label>
      <select name="kategori">
        <option value="Makanan">Makanan</option>
        <option value="Minuman">Minuman</option>
        <option value="Elektronik">Elektronik</option>
      </select>

      <button type="submit">Kirim</button>
    </form>
  </div>
</body>
</html>

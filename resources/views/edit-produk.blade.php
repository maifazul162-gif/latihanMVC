<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data Produk</title>
  <style>
    /* ====== Gaya Umum ====== */
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #d3d3d3, #f5f5f5);
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* ====== Container Form ====== */
    .form-container {
      background: #ffffffd9;
      padding: 35px 40px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      width: 360px;
      text-align: center;
      backdrop-filter: blur(10px);
    }

    /* ====== Judul ====== */
    h2 {
      color: #444;
      font-weight: 700;
      font-size: 24px;
      margin-bottom: 20px;
      border-bottom: 3px solid #ffcc00;
      display: inline-block;
      padding-bottom: 5px;
    }

    /* ====== Label dan Input ====== */
    label {
      display: block;
      text-align: left;
      color: #333;
      font-weight: 600;
      margin-top: 10px;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 2px solid #bbb;
      border-radius: 10px;
      font-size: 14px;
      background-color: #fafafa;
      outline: none;
      transition: all 0.3s ease;
    }

    input:focus, select:focus {
      border-color: #ffcc00;
      box-shadow: 0 0 8px #ffeb99;
      background-color: #fff;
    }

    /* ====== Tombol ====== */
    button {
      margin-top: 20px;
      width: 100%;
      padding: 12px;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      font-weight: 600;
      color: #333;
      background: linear-gradient(90deg, #ffcc00, #ffdf70);
      cursor: pointer;
      transition: all 0.3s ease;
    }

    button:hover {
      transform: scale(1.05);
      box-shadow: 0 0 10px #ffcc00;
    }

    /* ====== Efek Responsif ====== */
    @media (max-width: 420px) {
      .form-container {
        width: 85%;
        padding: 25px;
      }
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Form Edit Produk</h2>
    <form action="/produk/update" method="POST">
      @csrf
      @method('PUT')

      <label>Nama Produk:</label>
      <input type="text" name="nama" value="Laptop Lama" required>

      <label>Harga Produk:</label>
      <input type="number" name="harga" value="5000000" required>

      <label>Kategori:</label>
      <select name="kategori">
        <option value="Elektronik" selected>Elektronik</option>
        <option value="Makanan">Makanan</option>
        <option value="Minuman">Minuman</option>
      </select>

      <button type="submit">Perbarui Data</button>
    </form>
  </div>
</body>
</html>

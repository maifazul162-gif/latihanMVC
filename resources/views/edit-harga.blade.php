<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Harga Produk</title>
  <style>
    /* ====== Gaya Dasar ====== */
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #a8e063, #f8ffae);
      margin: 0;
      padding: 0;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* ====== Container ====== */
    .form-container {
      background: #ffffffd9;
      padding: 35px 40px;
      border-radius: 20px;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
      width: 360px;
      text-align: center;
      backdrop-filter: blur(10px);
      animation: fadeIn 1s ease;
    }

    /* ====== Judul ====== */
    h2 {
      color: #2e7d32;
      font-weight: 700;
      font-size: 24px;
      margin-bottom: 20px;
      border-bottom: 3px solid #ffeb3b;
      display: inline-block;
      padding-bottom: 5px;
    }

    /* ====== Informasi Produk ====== */
    p {
      font-size: 15px;
      color: #333;
      margin: 6px 0;
    }

    b {
      color: #2e7d32;
    }

    /* ====== Input dan Label ====== */
    label {
      display: block;
      text-align: left;
      color: #444;
      font-weight: 600;
      margin-top: 15px;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 2px solid #81c784;
      border-radius: 10px;
      font-size: 14px;
      background-color: #f9fff6;
      outline: none;
      transition: all 0.3s ease;
    }

    input:focus {
      border-color: #ffeb3b;
      box-shadow: 0 0 8px #fff176;
      background-color: #ffffff;
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
      color: #2e7d32;
      background: linear-gradient(90deg, #ffeb3b, #cddc39);
      cursor: pointer;
      transition: all 0.3s ease;
    }

    button:hover {
      transform: scale(1.05);
      box-shadow: 0 0 12px #fbc02d;
    }

    /* ====== Animasi ====== */
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* ====== Responsif ====== */
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
    <h2>Form Ubah Harga Produk</h2>
    <p>Nama Produk: <b>Laptop ASUS</b></p>
    <p>Kategori: <b>Elektronik</b></p>
    <p>Harga Saat Ini: <b>Rp5.000.000</b></p>

    <form action="/produk/update-harga" method="POST">
      @csrf
      @method('PATCH')

      <label>Harga Baru:</label>
      <input type="number" name="harga" value="5000000" required>

      <button type="submit">Perbarui Harga</button>
    </form>
  </div>
</body>
</html>

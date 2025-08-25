<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
  <?php include "navigasi.php"?>
</head>
<body>
  <!-- ===== Kontak & Reservasi Section ===== -->
<section id="kontak">
  <div class="container">
    <h2 class="section-title">Kontak & Reservasi</h2>
    <p class="section-sub">Hubungi kami atau pesan meja untuk acara keluarga/rapat kecil.</p>
    
    <form id="formReservasi" novalidate>
      <div class="two">
        <div class="field">
          <label for="nama">Nama</label>
          <input id="nama" name="nama" placeholder="Nama lengkap" required />
        </div>
        <div class="field">
          <label for="telepon">No. Telepon</label>
          <input id="telepon" name="telepon" placeholder="08xxxxxxxxxx" required />
        </div>
      </div>
      <div class="two">
        <div class="field">
          <label for="tanggal">Tanggal</label>
          <input id="tanggal" name="tanggal" type="date" required />
        </div>
        <div class="field">
          <label for="jam">Jam</label>
          <input id="jam" name="jam" type="time" required />
        </div>
      </div>
      <div class="two">
        <div class="field">
          <label for="jumlah">Jumlah Tamu</label>
          <select id="jumlah" name="jumlah">
            <option>1–2</option>
            <option>3–4</option>
            <option>5–8</option>
            <option>> 8</option>
          </select>
        </div>
        <div class="field">
          <label for="catatan">Catatan</label>
          <input id="catatan" name="catatan" placeholder="Kebutuhan khusus (opsional)" />
        </div>
      </div>
      <button class="btn btn-primary" type="submit">Kirim Reservasi</button>
      <p id="formMsg" class="section-sub" aria-live="polite"></p>
    </form>
  </div>
</section>
</body>
<?php include "footer.php"?>
</html>

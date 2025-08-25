<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* ===== Footer ===== */
    footer { background: #111114; color: #e8e8ea; }
    .footer-inner { max-width: 1080px; margin: 0 auto; padding: 28px 16px; display: grid; gap: 18px; }
    .foot-grid { display: grid; grid-template-columns: 1.2fr 1fr 1fr; gap: 16px; }
    .foot-grid a { color: #bbbbc4; text-decoration: none; }
    .foot-grid a:hover { color: white; }
    .copy { border-top: 1px solid #202028; padding-top: 14px; font-size: 14px; color: #9a9a9f; }
    @media (max-width: 860px){ .foot-grid{ grid-template-columns: 1fr; } }
    </style>
</head>
<body>
    <!-- ===== Footer ===== -->
  <footer>
    <div class="footer-inner">
      <div class="foot-grid">
        <div>
          <div style="display:flex; align-items:center; gap:10px; margin-bottom:8px;">
            <div class="logo" aria-hidden="true">RM</div>
            <strong>Rumah Makan Anjass</strong>
          </div>
          <p>Jl. Kenanga No. 123, Jakarta
            <br>Buka: 09.00–22.00 (Setiap Hari)
            <br>Telp: (0812-4546-1097)</p>
        </div>
        <div>
          <strong>Menu</strong>
          <ul style="list-style:none; padding-left:0; margin:8px 0 0; display:grid; gap:6px;">
            <li><a href="#menu">Makanan</a></li>
            <li><a href="#menu">Minuman</a></li>
            <li><a href="#promo">Promo</a></li>
          </ul>
        </div>
        <div>
          <strong>Bantuan</strong>
          <ul style="list-style:none; padding-left:0; margin:8px 0 0; display:grid; gap:6px;">
            <li><a href="#kontak">Reservasi</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="#beranda">Ke Atas</a></li>
          </ul>
        </div>
      </div>
      <div class="copy">© <span id="year">2025</span> Rumah Makan Anjass • Dibuat dengan rasa cinta</div>
    </div>
</body>
</html>

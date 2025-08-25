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
  </section>  <!-- ===== Menu ===== -->  <section id="menu">
    <div class="container">
      <h2 class="section-title">Menu Andalan</h2>
      <p class="section-sub">Pilih kategori untuk menyaring makanan dan minuman.</p><div class="filters" role="tablist" aria-label="Filter kategori menu">
    <button class="chip active" data-filter="semua" role="tab" aria-selected="true">Semua</button>
    <button class="chip" data-filter="makan" role="tab">Makanan</button>
    <button class="chip" data-filter="minum" role="tab">Minuman</button>
    <button class="chip" data-filter="paket" role="tab">Paket Hemat</button>
  </div>

  <div class="grid" id="menuGrid" aria-live="polite">
    <!-- Card 1 -->
    <article class="card" data-cat="makan">
      <div class="img" style="background-image:url('https://images.unsplash.com/photo-1604908554027-8923c571f1c1?q=80&w=1400&auto=format&fit=crop');"></div>
      <div class="content">
        <div class="title">Ayam Bakar Madu</div>
        <div class="tag">Pedes manis • Nasi • Lalap</div>
        <div class="price">Rp28.000</div>
        <button class="btn btn-ghost" aria-label="Tambah Ayam Bakar Madu ke pesanan">Tambah</button>
      </div>
    </article>

    <!-- Card 2 -->
    <article class="card" data-cat="makan paket">
      <div class="img" style="background-image:url('https://images.unsplash.com/photo-1574484284002-952d92456975?q=80&w=1400&auto=format&fit=crop');"></div>
      <div class="content">
        <div class="title">Paket Rendang</div>
        <div class="tag">Rendang • Nasi • Sayur • Es Teh</div>
        <div class="price">Rp35.000</div>
        <button class="btn btn-ghost">Tambah</button>
      </div>
    </article>

    <!-- Card 3 -->
    <article class="card" data-cat="minum">
      <div class="img" style="background-image:url('https://images.unsplash.com/photo-1541976076758-347942db1970?q=80&w=1400&auto=format&fit=crop');"></div>
      <div class="content">
        <div class="title">Es Teh Manis</div>
        <div class="tag">Teh melati pilihan</div>
        <div class="price">Rp6.000</div>
        <button class="btn btn-ghost">Tambah</button>
      </div>
    </article>

    <!-- Card 4 -->
    <article class="card" data-cat="makan">
      <div class="img" style="background-image:url('https://images.unsplash.com/photo-1505253758473-96b7015fcd40?q=80&w=1400&auto=format&fit=crop');"></div>
      <div class="content">
        <div class="title">Ikan Bakar Dabu-Dabu</div>
        <div class="tag">Ikan segar • Sambal dabu</div>
        <div class="price">Rp32.000</div>
        <button class="btn btn-ghost">Tambah</button>
      </div>
    </article>

    <!-- Card 5 -->
    <article class="card" data-cat="minum">
      <div class="img" style="background-image:url('https://images.unsplash.com/photo-1464305795204-6f5bbfc7fb81?q=80&w=1400&auto=format&fit=crop');"></div>
      <div class="content">
        <div class="title">Jus Alpukat</div>
        <div class="tag">Kental • Susu cokelat</div>
        <div class="price">Rp18.000</div>
        <button class="btn btn-ghost">Tambah</button>
      </div>
    </article>

    <!-- Card 6 -->
    <article class="card" data-cat="makan paket">
      <div class="img" style="background-image:url('https://img-global.cpcdn.com/recipes/f408cf2e63a88055/1200x630cq80/photo.jpg');"></div>
      <div class="content">
        <div class="title">Paket Ayam Geprek</div>
        <div class="tag">Level pedas bisa pilih</div>
        <div class="price">Rp25.000</div>
        <button class="btn btn-ghost">Tambah</button>
      </div>
    </article>
  </div>
</div>
</body
    <div class="container promo">
      <div class="promo-card">
        <h3>Promo Hari Ini</h3>
        <p><strong>Beli 2 gratis 1</strong> untuk <em>Es Teh Manis</em> setiap pukul 14.00–17.00. Tersedia untuk makan di tempat dan bungkus.</p>
      </div>
      <div class="promo-card">
        <h3>Langganan Hemat</h3>
        <p>Paket makan siang mingguan mulai <strong>Rp120.000</strong> (5 porsi). Antar area sekitar toko.</p>
      </div>  
</body>
<?php include "footer.php"?>
</html>
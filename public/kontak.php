<?php
require __DIR__ . '/../app/bootstrap.php';
$title = 'Kontak';
$active = 'kontak';
require __DIR__ . '/../app/header.php';
?>

<section class="page-intro">
  <div class="container">
    <p class="eyebrow"><span class="signal"></span> KANAL PELAPORAN &amp; KOMUNIKASI</p>
    <h1>HUBUNGI KAMI.</h1>
    <p>Laporkan kebakaran hutan dan lahan, atau hubungi tim SIJARLA untuk pertanyaan dan koreksi data.</p>
  </div>
</section>

<section class="container section">

  <!-- Emergency Banner -->
  <div class="kontak-emergency-banner mb-5">
    <div class="emergency-left">
      <span class="emergency-icon" aria-hidden="true">&#128293;</span>
      <div>
        <strong class="emergency-title">DARURAT KARHUTLA?</strong>
        <p class="emergency-desc mb-0">Hubungi layanan darurat segera &mdash; bebas pulsa, aktif 24 jam.</p>
      </div>
    </div>
    <div class="emergency-actions">
      <a class="action primary" href="tel:112">&#128222; 112 &mdash; Darurat Terpadu</a>
      <a class="action light-outline" href="tel:110">&#128222; 110 &mdash; Call Center Polri</a>
    </div>
  </div>

  <div class="section-head mb-4">
    <div>
      <p class="eyebrow">KANAL RESMI</p>
      <h2>Pelaporan Karhutla</h2>
    </div>
  </div>

  <div class="row g-4 mb-5">

    <div class="col-md-6">
      <div class="kontak-card h-100">
        <div class="kontak-card-icon" aria-hidden="true">&#127795;</div>
        <div class="kontak-card-body">
          <h3 class="kontak-card-title">Posko Karhutla Kementerian Kehutanan</h3>
          <p class="kontak-card-desc">Laporkan asap, titik api, atau dugaan kebakaran hutan dan lahan ke posko nasional.</p>
          <ul class="kontak-info-list">
            <li><span class="kontak-info-label">WhatsApp</span><span class="kontak-info-value">0813-1003-5000</span></li>
            <li><span class="kontak-info-label">Telepon</span><span class="kontak-info-value">021-5704618</span></li>
            <li><span class="kontak-info-label">Email</span><span class="kontak-info-value">posko.karhutla@kehutanan.go.id</span></li>
          </ul>
          <a class="action primary w-100 mt-3" href="https://wa.me/6281310035000" target="_blank" rel="noopener noreferrer">
            Laporkan via WhatsApp &#8594;
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="kontak-card h-100">
        <div class="kontak-card-icon" aria-hidden="true">&#9878;</div>
        <div class="kontak-card-body">
          <h3 class="kontak-card-title">Pengaduan Gakkum Kehutanan</h3>
          <p class="kontak-card-desc">Sampaikan dugaan pelanggaran hukum di bidang kehutanan melalui portal pengaduan resmi.</p>
          <ul class="kontak-info-list">
            <li><span class="kontak-info-label">Telepon</span><span class="kontak-info-value">(021) 5790 2925</span></li>
            <li><span class="kontak-info-label">Email</span><span class="kontak-info-value">pengaduan.gakkum@kehutanan.go.id</span></li>
          </ul>
          <a class="action primary w-100 mt-3" href="https://pengaduan.gakkum.kehutanan.go.id/" target="_blank" rel="noopener noreferrer">
            Buka Portal Pengaduan &#8594;
          </a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="kontak-card h-100">
        <div class="kontak-card-icon" aria-hidden="true">&#127968;</div>
        <div class="kontak-card-body">
          <h3 class="kontak-card-title">BPBD / Damkar Setempat</h3>
          <p class="kontak-card-desc">Hubungi Badan Penanggulangan Bencana Daerah atau Dinas Pemadam Kebakaran di kabupaten atau kota tempat kejadian.</p>
          <div class="kontak-tips-box mt-3">
            <strong>Tips Melapor:</strong>
            <ul class="mb-0 mt-1 ps-3">
              <li>Sampaikan lokasi tepat (nama desa / koordinat GPS)</li>
              <li>Sebutkan waktu pertama kali api atau asap terlihat</li>
              <li>Deskripsikan kondisi dari tempat yang aman</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="kontak-card kontak-card-team h-100">
        <div class="kontak-card-icon" aria-hidden="true">&#128187;</div>
        <div class="kontak-card-body">
          <h3 class="kontak-card-title">Tim SIJARLA</h3>
          <p class="kontak-card-desc">Untuk koreksi data, pertanyaan, atau masukan terkait konten portal ini. Sertakan tautan artikel atau tanggal pengamatan pada peta.</p>
          <div class="kontak-team-meta mt-3">
            <div class="kontak-team-row">
              <span class="kontak-info-label">Portal</span>
              <span class="kontak-info-value">sijarla.vercel.app</span>
            </div>
            <div class="kontak-team-row">
              <span class="kontak-info-label">GitHub</span>
              <span class="kontak-info-value">github.com/shxxdel/SIJARLA</span>
            </div>
          </div>
          <a class="action outline w-100 mt-3" href="tentang.php">
            Tentang &amp; Metodologi &#8594;
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="section-head mb-4">
    <div>
      <p class="eyebrow">NAVIGASI CEPAT</p>
      <h2>Jelajahi Portal</h2>
    </div>
  </div>
  <div class="row g-3">
    <div class="col-sm-6 col-lg-3">
      <a class="kontak-nav-card" href="index.php">
        <span class="kontak-nav-icon" aria-hidden="true">&#127968;</span>
        <strong>Beranda</strong>
        <span>Halaman utama portal</span>
        <span class="kontak-nav-arrow" aria-hidden="true">&#8594;</span>
      </a>
    </div>
    <div class="col-sm-6 col-lg-3">
      <a class="kontak-nav-card" href="artikel.php">
        <span class="kontak-nav-icon" aria-hidden="true">&#128196;</span>
        <strong>Arsip Laporan</strong>
        <span>Semua laporan karhutla</span>
        <span class="kontak-nav-arrow" aria-hidden="true">&#8594;</span>
      </a>
    </div>
    <div class="col-sm-6 col-lg-3">
      <a class="kontak-nav-card" href="peta.php">
        <span class="kontak-nav-icon" aria-hidden="true">&#128205;</span>
        <strong>Peta GIS</strong>
        <span>Sebaran titik panas</span>
        <span class="kontak-nav-arrow" aria-hidden="true">&#8594;</span>
      </a>
    </div>
    <div class="col-sm-6 col-lg-3">
      <a class="kontak-nav-card" href="tentang.php">
        <span class="kontak-nav-icon" aria-hidden="true">&#128214;</span>
        <strong>Tentang</strong>
        <span>Metodologi &amp; sumber data</span>
        <span class="kontak-nav-arrow" aria-hidden="true">&#8594;</span>
      </a>
    </div>
  </div>

</section>

<?php require __DIR__ . '/../app/footer.php'; ?>

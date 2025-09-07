<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUMDes Gunung Mulia - Website Resmi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="logo">
                <img src="assets/logo.png" alt="BUMDes Gunung Mulia">
                <h1>BUMDes Gunung Mulia</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html" class="active">Beranda</a></li>
                    <li><a href="tentang.html">Tentang Kami</a></li>
                    <li><a href="struktur.html">Struktur Kepengurusan</a></li>
                    <li><a href="layanan.html">Layanan</a></li>
                    <li><a href="berita.html">Berita</a></li>
                    <li><a href="galeri.html">Galeri</a></li>
                    <li><a href="kontak.html">Kontak</a></li>
                </ul>
            </nav>
            <div class="admin-btn">
                <a href="admin/login.php"><i class="fas fa-user-lock"></i> Admin</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="slider">
            <div class="slide active" style="background-image: url('assets/slide1.jpg');">
                <div class="container">
                    <h2>Mewujudkan Kesejahteraan Bersama</h2>
                    <p>Badan Usaha Milik Desa Gunung Mulia hadir untuk memajukan ekonomi masyarakat</p>
                    <a href="tentang.html" class="btn">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <div class="slide" style="background-image: url('assets/slide2.jpg');">
                <div class="container">
                    <h2>Layanan Terbaik untuk Masyarakat</h2>
                    <p>Berbagai layanan dan produk berkualitas untuk memenuhi kebutuhan Anda</p>
                    <a href="layanan.html" class="btn">Lihat Layanan</a>
                </div>
            </div>
            <div class="slide" style="background-image: url('assets/slide3.jpg');">
                <div class="container">
                    <h2>Bergabung Bersama Kami</h2>
                    <p>Wujudkan potensi diri Anda dan kembangkan usaha bersama BUMDes</h2>
                    <a href="kontak.html" class="btn">Hubungi Kami</a>
                </div>
            </div>
        </div>
        <div class="slider-controls">
            <span class="prev"><i class="fas fa-chevron-left"></i></span>
            <span class="next"><i class="fas fa-chevron-right"></i></span>
        </div>
    </section>

    <!-- Statistik -->
    <section class="stats">
        <div class="container">
            <div class="stat-item">
                <i class="fas fa-users"></i>
                <h3>500+</h3>
                <p>Masyarakat Terbantu</p>
            </div>
            <div class="stat-item">
                <i class="fas fa-handshake"></i>
                <h3>20+</h3>
                <p>Mitra Kerjasama</p>
            </div>
            <div class="stat-item">
                <i class="fas fa-store"></i>
                <h3>15</h3>
                <p>Unit Usaha</p>
            </div>
            <div class="stat-item">
                <i class="fas fa-award"></i>
                <h3>5</h3>
                <p>Penghargaan</p>
            </div>
        </div>
    </section>

    <!-- Visi Misi -->
    <section class="visi-misi">
        <div class="container">
            <div class="section-title">
                <h2>Visi & Misi</h2>
                <div class="divider"></div>
            </div>
            <div class="vm-content">
                <div class="visi">
                    <div class="icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Visi</h3>
                    <p>Terwujudnya BUMDes Gunung Mulia sebagai motor penggerak ekonomi masyarakat yang mandiri, inovatif, dan berkelanjutan pada tahun 2030.</p>
                </div>
                <div class="misi">
                    <div class="icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Misi</h3>
                    <ul>
                        <li>Mengembangkan potensi ekonomi desa melalui pemberdayaan masyarakat</li>
                        <li>Menyediakan layanan dan produk berkualitas untuk memenuhi kebutuhan masyarakat</li>
                        <li>Membangun jaringan kerjasama yang luas dengan berbagai pihak</li>
                        <li>Menerapkan prinsip good governance dalam pengelolaan BUMDes</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Layanan Unggulan -->
    <section class="layanan-unggulan">
        <div class="container">
            <div class="section-title">
                <h2>Layanan Unggulan</h2>
                <div class="divider"></div>
            </div>
            <div class="layanan-grid">
                <div class="layanan-item">
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Toko Desa</h3>
                    <p>Menyediakan berbagai kebutuhan pokok dan produk lokal dengan harga terjangkau</p>
                    <a href="layanan.html#toko" class="btn-small">Detail</a>
                </div>
                <div class="layanan-item">
                    <div class="icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3>Lembaga Keuangan Mikro</h3>
                    <p>Memberikan akses permodalan bagi pelaku usaha mikro dan kecil di desa</p>
                    <a href="layanan.html#lkm" class="btn-small">Detail</a>
                </div>
                <div class="layanan-item">
                    <div class="icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Jasa Transportasi</h3>
                    <p>Layanan transportasi untuk mendukung mobilitas masyarakat dan distribusi produk</p>
                    <a href="layanan.html#transportasi" class="btn-small">Detail</a>
                </div>
                <div class="layanan-item">
                    <div class="icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h3>Internet Desa</h3>
                    <p>Menyediakan akses internet murah untuk mendukung aktivitas digital masyarakat</p>
                    <a href="layanan.html#internet" class="btn-small">Detail</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Berita Terkini -->
    <section class="berita-terkini">
        <div class="container">
            <div class="section-title">
                <h2>Berita Terkini</h2>
                <div class="divider"></div>
            </div>
            <div class="berita-grid">
                <div class="berita-item">
                    <div class="berita-img">
                        <img src="assets/berita1.jpg" alt="Pelatihan Kewirausahaan">
                    </div>
                    <div class="berita-content">
                        <div class="berita-meta">
                            <span><i class="fas fa-calendar"></i> 15 Mei 2023</span>
                            <span><i class="fas fa-user"></i> Admin</span>
                        </div>
                        <h3>Pelatihan Kewirausahaan untuk Pemuda Desa</h3>
                        <p>BUMDes Gunung Mulia mengadakan pelatihan kewirausahaan untuk 50 pemuda desa guna meningkatkan skill dan wawasan dalam berbisnis...</p>
                        <a href="berita-detail.html" class="btn-small">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="berita-item">
                    <div class="berita-img">
                        <img src="assets/berita2.jpg" alt="Pembukaan Toko Baru">
                    </div>
                    <div class="berita-content">
                        <div class="berita-meta">
                            <span><i class="fas fa-calendar"></i> 5 Mei 2023</span>
                            <span><i class="fas fa-user"></i> Admin</span>
                        </div>
                        <h3>Peresmian Toko Desa Cabang Kedua</h3>
                        <p>Setelah sukses dengan toko pertama, BUMDes Gunung Mulia kembali meresmikan toko cabang kedua untuk memudahkan akses masyarakat...</p>
                        <a href="berita-detail.html" class="btn-small">Baca Selengkapnya</a>
                    </div>
                </div>
                <div class="berita-item">
                    <div class="berita-img">
                        <img src="assets/berita3.jpg" alt="Kerjasama dengan Bank">
                    </div>
                    <div class="berita-content">
                        <div class="berita-meta">
                            <span><i class="fas fa-calendar"></i> 28 April 2023</span>
                            <span><i class="fas fa-user"></i> Admin</span>
                        </div>
                        <h3>Penandatanganan MoU dengan Bank BRI</h3>
                        <p>BUMDes Gunung Mulia menjalin kerjasama dengan Bank BRI untuk memperluas akses permodalan bagi pelaku usaha di desa...</p>
                        <a href="berita-detail.html" class="btn-small">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="berita.html" class="btn">Lihat Semua Berita</a>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="testimoni">
        <div class="container">
            <div class="section-title">
                <h2>Apa Kata Masyarakat</h2>
                <div class="divider"></div>
            </div>
            <div class="testimoni-slider">
                <div class="testimoni-item active">
                    <div class="testimoni-content">
                        <i class="fas fa-quote-left"></i>
                        <p>"Terima kasih BUMDes Gunung Mulia, dengan adanya pinjaman modal usaha, saya bisa mengembangkan usaha kerajinan tangan yang selama ini menjadi impian saya."</p>
                        <div class="testimoni-author">
                            <img src="assets/testimoni1.jpg" alt="Ibu Siti">
                            <div>
                                <h4>Ibu Siti</h4>
                                <p>Pengrajin Anyaman</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimoni-item">
                    <div class="testimoni-content">
                        <i class="fas fa-quote-left"></i>
                        <p>"Toko Desa sangat membantu, saya tidak perlu jauh-jauh ke kota untuk belanja kebutuhan sehari-hari. Harganya juga terjangkau."</p>
                        <div class="testimoni-author">
                            <img src="assets/testimoni2.jpg" alt="Bapak Ahmad">
                            <div>
                                <h4>Bapak Ahmad</h4>
                                <p>Warga Desa</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimoni-item">
                    <div class="testimoni-content">
                        <i class="fas fa-quote-left"></i>
                        <p>"Internet Desa membuat anak-anak bisa belajar online dengan lancar. Sekarang desa kami tidak ketinggalan informasi lagi."</p>
                        <div class="testimoni-author">
                            <img src="assets/testimoni3.jpg" alt="Bapak Hasan">
                            <div>
                                <h4>Bapak Hasan</h4>
                                <p>Kepala Dusun</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimoni-controls">
                <span class="prev"><i class="fas fa-chevron-left"></i></span>
                <span class="next"><i class="fas fa-chevron-right"></i></span>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <div class="logo">
                        <img src="assets/logo-white.png" alt="BUMDes Gunung Mulia">
                        <h3>BUMDes Gunung Mulia</h3>
                    </div>
                    <p>Badan Usaha Milik Desa Gunung Mulia hadir untuk memajukan ekonomi masyarakat melalui berbagai layanan dan produk berkualitas.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.html">Beranda</a></li>
                        <li><a href="tentang.html">Tentang Kami</a></li>
                        <li><a href="struktur.html">Struktur Kepengurusan</a></li>
                        <li><a href="layanan.html">Layanan</a></li>
                        <li><a href="berita.html">Berita</a></li>
                        <li><a href="kontak.html">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4>Kontak Kami</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Jl. Desa No. 1, Gunung Mulia, Kec. Mulya</li>
                        <li><i class="fas fa-phone"></i> (0274) 123456</li>
                        <li><i class="fas fa-envelope"></i> info@bumdesgunungmulia.desa.id</li>
                        <li><i class="fas fa-clock"></i> Senin - Sabtu: 08.00 - 16.00</li>
                    </ul>
                </div>
                <div class="footer-newsletter">
                    <h4>Newsletter</h4>
                    <p>Dapatkan informasi terbaru dari kami</p>
                    <form action="#" method="post">
                        <input type="email" name="email" placeholder="Email Anda" required>
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 BUMDes Gunung Mulia. All Rights Reserved.</p>
                <p>Designed by <a href="#">Tim IT BUMDes</a></p>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
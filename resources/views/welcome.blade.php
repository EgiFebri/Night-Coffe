<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Night Coffe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1445116572660-236099ec97a0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0;
            text-align: center;
        }

        .feature-box {
            padding: 30px;
            text-align: center;
            transition: all 0.3s ease;
            border-radius: 10px;
            background-color: #f8f5f2;
        }

        .feature-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .feature-icon {
            font-size: 40px;
            color: #6F4E37; /* Warna kopi */
            margin-bottom: 20px;
        }

        .menu-section {
            background-color: #f8f5f2;
            padding: 80px 0;
        }

        .menu-card {
            border: none;
            transition: all 0.3s ease;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
        }

        .menu-card:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .menu-card img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }

        .btn-coffee {
            background-color: #6F4E37;
            color: white;
        }

        .btn-coffee:hover {
            background-color: #5a3c29;
            color: white;
        }

        .navbar {
            background-color: #6F4E37 !important;
        }

        .testimonial-section {
            background-color: #fff;
            padding: 80px 0;
        }

        .testimonial-card {
            border-left: 4px solid #6F4E37;
            padding: 20px;
            background-color: #f8f5f2;
        }
    </style>
</head>

<body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Night Coffe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang Kami</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Masuk</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link">Daftar</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="display-4 mb-4">Night Coffe</h1>
            <p class="lead mb-4">Nikmati kopi terbaik dicikarang</p>
            <a href="#menu" class="btn btn-coffee btn-lg me-3">Lihat Menu</a>
            <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg">Gabung Komunitas Kami</a>
        </div>
    </section>

    <!-- Fitur Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <h3>Biji Kopi Premium</h3>
                        <p>Dipetik etis dari daerah penghasil kopi terbaik dunia, disangrai dengan sempurna.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-mug-hot"></i>
                        </div>
                        <h3>Minuman Handmade</h3>
                        <p>Setiap cangkir disiapkan dengan penuh perhatian oleh barista ahli kami.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3>Suasana Nyaman</h3>
                        <p>Tempat sempurna untuk bersantai, bekerja, atau bertemu teman.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="menu-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Menu Kami</h2>
                <p class="text-muted">Temukan minuman spesial andalan kami</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="menu-card">
                        <img src="https://images.unsplash.com/photo-1517701550927-30cf4ba1dba5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Espresso">
                        <div class="card-body">
                            <h5 class="card-title">Espresso</h5>
                            <p class="card-text">Kopi pekat dengan crema emas yang kaya rasa.</p>
                            <span class="fw-bold">Rp35.000</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="menu-card">
                        <img src="https://images.unsplash.com/photo-1580915411954-282cb1b0d780?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cappuccino">
                        <div class="card-body">
                            <h5 class="card-title">Cappuccino</h5>
                            <p class="card-text">Perpaduan sempurna espresso, susu steamed, dan busa.</p>
                            <span class="fw-bold">Rp45.000</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="menu-card">
                        <img src="https://images.unsplash.com/photo-1572442388796-11668a67e53d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Cold Brew">
                        <div class="card-body">
                            <h5 class="card-title">Cold Brew</h5>
                            <p class="card-text">Kopi lembut yang diseduh dingin selama 18 jam.</p>
                            <span class="fw-bold">Rp47.500</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-coffee">Lihat Menu Lengkap</a>
            </div>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Apa Kata Pelanggan Kami</h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"Kopi terbaik di kota! Saya datang ke sini setiap pagi sebelum kerja."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle me-3" width="50" alt="Pelanggan">
                            <div>
                                <h6 class="mb-0">Sarah Johnson</h6>
                                <small>Pelanggan Setia</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"Suasana luar biasa dan kopinya lebih enak lagi. Tempat favorit saya untuk kerja remote."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" class="rounded-circle me-3" width="50" alt="Pelanggan">
                            <div>
                                <h6 class="mb-0">Michael Chen</h6>
                                <small>Desainer Freelance</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="testimonial-card">
                        <p>"Latte labu musiman mereka luar biasa! Saya selalu menantikannya setiap hari."</p>
                        <div class="d-flex align-items-center">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle me-3" width="50" alt="Pelanggan">
                            <div>
                                <h6 class="mb-0">Emily Rodriguez</h6>
                                <small>Warga Lokal</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Kami Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Cerita Kami</h2>
                    <p>Didirikan pada 2024, Night Coffe bermula sebagai gerobak kopi kecil dengan misi sederhana: menyajikan kopi istimewa. Kini kami telah berkembang menjadi kedai favorit anak muda, tanpa melupakan akar kami.</p>
                    <p>Kami bekerja langsung dengan petani untuk mendapatkan biji kopi berkualitas tinggi, menyangrainya dalam batch kecil, dan menyiapkan setiap minuman dengan penuh perhatian.</p>
                    <a href="#" class="btn btn-coffee">Pelajari Lebih Lanjut</a>
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1453614512568-c4024d13c247?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" class="img-fluid rounded" alt="Interior Kafe">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Night Coffe</h5>
                    <p>Jalan Kopi No. 123<br>Kota Anda, 12345</p>
                </div>
                <div class="col-md-4">
                    <h5>Jam Buka</h5>
                    <p>Senin-Jumat: 09:00 - 23:00<br>
                    Sabtu-Minggu: 09:00 - 24:00</p>
                </div>
                <div class="col-md-4">
                    <h5>Hubungi Kami</h5>
                    <div class="social-icons">
                        <a href="#" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <p class="mb-0">&copy; 2024 Night Coffe.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
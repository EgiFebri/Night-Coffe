<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Night Coffe </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Coffee shop colors and style */
        body {
            background-color: #f3f0e3;
            font-family: 'Roboto', sans-serif;
        }

        .sidebar {
            height: 100vh;
            background-color: #8e735b;
            padding-top: 30px;
            position: fixed;
            left: 0;
            width: 250px;
            transition: width 0.3s ease;
        }

        .sidebar:hover {
            width: 300px;
        }

        .sidebar .nav-link {
            color: #fff;
            padding: 20px;
            margin: 10px 0;
            border-radius: 10px;
            font-weight: bold;
            transition: background-color 0.3s ease, padding-left 0.3s ease;
        }

        .sidebar .nav-link:hover {
            background-color: #a67c52;
            padding-left: 30px;
        }

        .sidebar .nav-link i {
            margin-right: 15px;
            font-size: 1.4rem;
        }

        /* Main content styling */
        .main-content {
            margin-left: 250px;
            padding: 30px;
            flex: 1;
            background-color: #f9f4e3;
            border-radius: 10px;
        }

        /* Navbar */
        .navbar {
            background-color: #f5deb3;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px 20px;
            border-radius: 10px;
            z-index: 999;
        }

        .navbar .navbar-brand {
            font-weight: bold;
            font-size: 1.8rem;
            color: #8e735b;
        }

        .navbar-nav .nav-link {
            font-size: 1.2rem;
            margin-left: 20px;
            color: #8e735b;
        }

        .navbar-nav .nav-link:hover {
            color: #a67c52;
        }

        /* Statistics Cards */
        .card-dashboard {
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card-dashboard:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
        }

        .stat-icon {
            font-size: 3rem;
            color: #8e735b;
        }

        /* Footer */
        footer {
            background-color: #8e735b;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-top: 2px solid #a67c52;
            margin-top: 30px;
        }

        footer a {
            color: #fff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Responsive adjustments */
        @media (max-width: 767px) {
            .sidebar {
                width: 100%;
                position: relative;
                height: auto;
            }

            .main-content {
                margin-left: 0;
            }

            .navbar {
                margin-left: 0;
            }
        }

        /* Styling for buttons and interactions */
        .btn-primary {
            background-color: #a67c52;
            border-color: #a67c52;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #8e735b;
            border-color: #8e735b;
        }

        .table td,
        .table th {
            padding: 15px;
            text-align: center;
        }

        .status-delivered {
            color: #27ae60;
        }

        .status-transit {
            color: #f39c12;
        }

        .status-pending {
            color: #e74c3c;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="text-center mb-4">
           
        </div>
        <ul class="nav flex-column">
        
  
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
            </li>
        </ul>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Night Coffe </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
            
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    

    <!-- Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Night Coffe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background: url('https://images.unsplash.com/photo-1509042239860-f550ce710b93') no-repeat center center fixed;
            background-size: cover;
            backdrop-filter: blur(3px);
        }

        .coffee-card {
            background-color: rgba(255, 250, 243, 0.95);
            border: none;
            border-radius: 15px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
            animation: fadeIn 1.2s ease-in-out;
        }

        .coffee-header {
            background-color: #6f4e37;
            color: white;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            font-weight: bold;
            text-align: center;
            padding: 1rem;
            font-size: 1.5rem;
        }

        .btn-coffee {
            background-color: #6f4e37;
            border: none;
        }

        .btn-coffee:hover {
            background-color: #5a3e2d;
        }

        .link-login {
            color: #6f4e37;
            text-decoration: none;
        }

        .link-login:hover {
            text-decoration: underline;
        }

        .logo {
            display: block;
            margin: 0 auto 20px;
            width: 80px;
        }

        @keyframes fadeIn {
            from {
                transform: translateY(30px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card coffee-card">
                    <div class="coffee-header">
                        ☕ Join Night Coffe
                    </div>
                    <div class="card-body">
                        <img src="https://cdn-icons-png.flaticon.com/512/924/924514.png" alt="Coffee Logo" class="logo">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ url('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>
                            <button type="submit" class="btn btn-coffee w-100 text-white">Register</button>
                            <div class="text-center mt-3">
                                <a href="{{ route('login') }}" class="link-login">Already have an account? Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

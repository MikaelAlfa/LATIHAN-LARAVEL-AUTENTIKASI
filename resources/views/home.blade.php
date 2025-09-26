<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
        body {
            background: linear-gradient(135deg, #a3c6ecff, #3761ebff);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .hero-card {
            background: rgba(255, 255, 255, 0.9);
            color: #212529;
            border-radius: 15px;
            padding: 40px;
            max-width: 500px;
            width: 90%;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.3);
            animation: fadeIn 1s ease-in-out;
        }
        .btn-custom {
            transition: transform 0.2s ease-in-out;
        }
        .btn-custom:hover {
            transform: scale(1.05);
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="hero-card text-center">
        <h1 class="mb-3"><i class="bi bi-person-circle"></i> Selamat Datang</h1>
        <p class="mb-4">Lihat portofolio Anda disini.</p>

        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <a href="{{ route('register') }}" class="btn btn-primary btn-lg m-2 btn-custom">
            <i class="bi bi-person-plus"></i> Register
        </a>
        <a href="{{ route('login') }}" class="btn btn-outline-dark btn-lg m-2 btn-custom">
            <i class="bi bi-box-arrow-in-right"></i> Login
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

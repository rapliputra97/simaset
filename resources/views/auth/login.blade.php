<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            margin: 0;
            background: linear-gradient(135deg, #d1fadd, #b1e5c9, #e3ffe7);
            background-size: 400% 400%;
            animation: gradientMove 12s ease infinite;
            font-family: "Inter", sans-serif;
        }

        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .login-wrapper {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .login-card {
            background: #fff;
            width: 380px;
            padding: 35px;
            border-radius: 22px;
            box-shadow: 0 10px 35px rgba(0,0,0,0.15);
            animation: fadeUp 0.7s ease-out;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .title {
            text-align: center;
            font-size: 26px;
            font-weight: 700;
            color: #166534;
            margin-bottom: 5px;
        }

        .subtitle {
            text-align: center;
            font-size: 14px;
            color: #666;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            font-weight: 600;
            color: #065f46;
            margin-bottom: 6px;
            display: block;
        }

        .input-control {
            width: 100%;
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #d1d5db;
            font-size: 15px;
            transition: 0.2s;
        }

        .input-control:focus {
            border-color: #16a34a;
            box-shadow: 0 0 0 3px rgba(16,185,129,0.25);
            outline: none;
        }

        .btn-login {
            background: #16a34a;
            padding: 11px;
            color: white;
            width: 100%;
            border: none;
            border-radius: 12px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: 0.25s;
        }

        .btn-login:hover {
            background: #15803d;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(22,163,74,0.35);
        }

        .error-box {
            background: #fee2e2;
            border-left: 4px solid #dc2626;
            padding: 10px 12px;
            margin-bottom: 15px;
            border-radius: 8px;
            color: #991b1b;
            font-size: 14px;
        }

    </style>
</head>
<body>

<div class="login-wrapper">

    <div class="login-card">

        <h2 class="title">Selamat Datang</h2>
        <p class="subtitle">Silakan login untuk melanjutkan</p>

        @if ($errors->any())
            <div class="error-box">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf

            <div class="form-group">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="input-control" placeholder="Masukkan email" required>
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="input-control" placeholder="Masukkan password" required>
            </div>

            <button class="btn-login">Masuk</button>
        </form>

    </div>

</div>

</body>
</html>

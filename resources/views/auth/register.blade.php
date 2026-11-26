<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Akun Baru</title>
    <style>
        * { box-sizing: border-box; font-family: system-ui, -apple-system, sans-serif; }
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f3f4f6;
            color: #1f2937;
            padding: 1.5rem 1rem;
        }
        .register-card {
            background: #ffffff;
            width: 100%;
            max-width: 420px;
            padding: 2.25rem 2rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
        }
        .register-card h2 {
            text-align: center;
            margin: 0 0 1.75rem 0;
            font-size: 1.5rem;
            font-weight: 700;
            color: #374151;
        }
        .form-group { margin-bottom: 1.15rem; }
        label {
            display: block;
            font-size: 0.9rem;
            font-weight: 600;
            color: #4b5563;
            margin-bottom: 0.4rem;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.65rem 0.85rem;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 0.95rem;
            outline: none;
            transition: border-color 0.2s;
        }
        input:focus {
            border-color: #2e7d32;
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.12);
        }
        .btn-register {
            width: 100%;
            padding: 0.7rem;
            margin-top: 0.5rem;
            background-color: #2e7d32;
            color: #ffffff;
            border: none;
            border-radius: 8px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        .btn-register:hover { background-color: #256428; }
        .login-link {
            text-align: center;
            margin-top: 1.25rem;
            font-size: 0.85rem;
            color: #6b7280;
        }
        .login-link a {
            color: #2e7d32;
            text-decoration: none;
            font-weight: 500;
        }
        .login-link a:hover { text-decoration: underline; }
        .error-box {
            background: #fee2e2;
            color: #991b1b;
            padding: 0.65rem 0.85rem;
            border-radius: 8px;
            font-size: 0.85rem;
            margin-bottom: 1rem;
        }
        .error-box ul { margin: 0; padding-left: 1.2rem; }
    </style>
</head>
<body>

    <div class="register-card">
        <h2>Register Akun Baru</h2>

        @if ($errors->any())
            <div class="error-box">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>

            <button type="submit" class="btn-register">Daftar</button>
        </form>

        <div class="login-link">
            Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
        </div>
    </div>

</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Perpustakaan</title>
    <style>
        body {
            max-width: 420px;
            margin: 60px auto;
            padding: 24px;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #1f2937;
        }

        h1 {
            font-size: 26px;
            color: #1e3a8a;
        }

        form div {
            margin-bottom: 16px;
        }

        label {
            display: block;
            margin-bottom: 4px;
        }

        input {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            border: 1px solid #9ca3af;
            border-radius: 4px;
            font: inherit;
        }

        button {
            padding: 10px 20px;
            border: 0;
            border-radius: 4px;
            background: #1d4ed8;
            color: white;
            font: inherit;
            cursor: pointer;
        }

        .errors {
            color: #b91c1c;
        }
    </style>
</head>
<body>
    <h1>Login Sistem Perpustakaan</h1>

    @if ($errors->any())
        <div class="errors">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf

        <div>
            <label for="email">Email</label>
            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email') }}"
                required
            >
        </div>

        <div>
            <label for="password">Password</label>
            <input
                type="password"
                name="password"
                id="password"
                required
            >
        </div>

        <button type="submit">Login</button>
    </form>
</body>
</html>

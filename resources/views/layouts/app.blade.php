<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Library System')</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background: #f3f4f6;
            color: #1f2937;
        }

        .container {
            width: calc(100% - 32px);
            max-width: 1000px;
            margin: 0 auto;
        }

        header {
            padding: 24px 0;
            background: #1e3a8a;
            color: white;
        }

        header h1 {
            margin: 0;
            font-size: 28px;
        }

        header p {
            margin: 4px 0 20px;
            color: #dbeafe;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        nav a,
        .button {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 6px;
            background: #1d4ed8;
            color: white;
            text-decoration: none;
        }

        nav a:hover,
        .button:hover {
            background: #2563eb;
        }

        .content {
            margin: 24px 0;
            padding: 24px;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            background: white;
        }

        h2 {
            margin-top: 0;
            color: #1e3a8a;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 16px;
            margin-top: 24px;
        }

        .stat {
            padding: 20px;
            border: 1px solid #bfdbfe;
            border-radius: 8px;
            background: #eff6ff;
        }

        .stat p {
            margin: 0;
        }

        .stat strong {
            display: block;
            font-size: 32px;
            color: #1e3a8a;
        }

        .table-wrapper {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
            text-align: left;
        }

        th {
            background: #eff6ff;
            color: #1e3a8a;
        }

        tbody tr:nth-child(even) {
            background: #f9fafb;
        }

        .data-list {
            padding-left: 24px;
        }

        .data-list li {
            margin: 8px 0;
        }

        .button {
            margin-top: 12px;
        }

        footer {
            padding: 0 0 24px;
            color: #6b7280;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>Library System</h1>
            <p>Sistem Informasi Perpustakaan</p>

            <nav aria-label="Navigasi utama">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <a href="{{ url('/books') }}">Books</a>
                <a href="{{ url('/books/10') }}">Book Detail</a>
                <a href="{{ url('/categories') }}">Categories</a>
                <a href="{{ url('/members') }}">Members</a>
            </nav>
        </div>
    </header>

    <main class="container">
        <div class="content">
            @yield('content')
        </div>
    </main>

    <footer class="container">
        <p>Library System &copy; 2026 — Salman Al Farisi</p>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #4aa3ff, #0056b3);
            color: white;
            text-align: center;
        }

        header {
            padding: 40px 20px;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            letter-spacing: 1px;
        }

        p.subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        nav {
            margin-top: 30px;
        }

        nav a {
            text-decoration: none;
            color: white;
            background: rgba(255, 255, 255, 0.2);
            padding: 12px 25px;
            border-radius: 8px;
            margin: 10px;
            display: inline-block;
            transition: 0.3s;
        }

        nav a:hover {
            background: rgba(255, 255, 255, 0.35);
            transform: scale(1.05);
        }

        footer {
            margin-top: 50px;
            padding: 20px;
            font-size: 0.9rem;
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <header>
        <h1>Welcome to Our Homepage</h1>
        <p class="subtitle">Your clean and modern Laravel Blade design</p>
    </header>

    <nav>
        <a href="/home">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>

    <footer>
        © 2025 Your Website. All Rights Reserved.
    </footer>

</body>
</html>

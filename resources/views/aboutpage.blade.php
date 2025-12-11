<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #7bffb0, #00995c);
            color: white;
            text-align: center;
        }

        header {
            padding: 40px 20px;
        }

        h1 {
            font-size: 3rem;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        p.subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .about-box {
            background: rgba(255, 255, 255, 0.15);
            width: 85%;
            max-width: 700px;
            margin: 40px auto;
            padding: 25px;
            border-radius: 12px;
            line-height: 1.7;
            font-size: 1.1rem;
            text-align: left;
        }

        nav {
            margin-top: 20px;
        }

        nav a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.2);
            margin: 5px;
            display: inline-block;
            transition: 0.3s;
        }

        nav a:hover {
            background: rgba(255, 255, 255, 0.35);
        }

        footer {
            margin-top: 40px;
            padding: 20px;
            font-size: 0.9rem;
            opacity: 0.85;
        }
    </style>
</head>

<body>

    <header>
        <h1>About Us</h1>
        <p class="subtitle">Learn more about our mission and purpose</p>
    </header>

    <div class="about-box">
        <p>
            Welcome to our website! We are dedicated to providing high-quality content
            and a great user experience. Our goal is to create simple, clean, and 
            modern web pages while helping beginners learn web development one step at a time.
        </p>

        <p>
            This About Page is part of your Laravel Routing Activity. By creating 
            separate pages for Home, About, and Contact, you are practicing how routing 
            works in Laravel and how to structure your project properly.
        </p>

        <p>
            Keep exploring Laravel and continue building more dynamic features. 
            You’re doing great—keep it up!
        </p>
    </div>

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

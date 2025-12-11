<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #ff7b7b, #b30000);
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

        .contact-box {
            background: rgba(255, 255, 255, 0.15);
            width: 80%;
            max-width: 500px;
            margin: 40px auto;
            padding: 25px;
            border-radius: 12px;
            text-align: left;
        }

        label {
            font-size: 1rem;
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            border-radius: 6px;
            border: none;
            margin-top: 5px;
        }

        textarea {
            resize: none;
            height: 100px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 12px;
            border: none;
            background: #ffffff;
            color: #b30000;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #ffdede;
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
            opacity: 0.8;
        }
    </style>

</head>
<body>

    <header>
        <h1>Contact Us</h1>
        <p class="subtitle">We would love to hear from you!</p>
    </header>

    <div class="contact-box">
        <label>Name:</label>
        <input type="text" placeholder="Enter your name">

        <label>Email:</label>
        <input type="email" placeholder="Enter your email">

        <label>Message:</label>
        <textarea placeholder="Type your message here..."></textarea>

        <button>Send Message</button>
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

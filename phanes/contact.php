
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phanes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:white;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .navbar {
            background-color:#1c74b2;
            padding: 15px;
            display: flex;
            align-items: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin-right: 15px;
            font-weight: bold;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgb(100, 151, 179);
            text-align: center;
        }
        h1 {
            color: #222;
        }
        .contact-info {
            margin: 20px 0;
        }
        .contact-info a {
            display: block;
            margin: 10px 0;
            font-size: 18px;
            text-decoration: none;
            color:rgb(50, 151, 179); /* Default LinkedIn color */
        }
        .contact-info a.instagram {
            color: #E1306C;
        }
        .contact-info a.whatsapp {
            color: #25D366;
        }
        .contact-form input, .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .contact-form button {
            background-color: blue;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-top: 10px;
            cursor: pointer;
            width: 100%;
        }
        .contact-form button:hover {
            background-color: blue;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="index.php">Home</a>
        <a href="About.php">About</a>
      </div>

    <!-- Contact Section -->
    <div class="container">
        <h1>Contact Us</h1>
        <p>Have questions? Reach out to us through our social media or send us a message.</p>

        <div class="contact-info">
            <a href="https://www.linkedin.com/in/phanes-creative-960269361/" target="_blank">🔗 LinkedIn</a>
            <a href="https://www.instagram.com/phanescr3tive/" target="" class="instagram">📸 Instagram</a>
            <a href="https://wa.me/+6285694612093" target="" class="whatsapp">📞 WhatsApp</a>
        </div>

        <!-- Optional Contact Form -->
        <h2>Send Us a Message</h2>
        <form class="contact-form">
            <input type="text" placeholder="Your Name" required>
            <input type="email" placeholder="Your Email" required>
            <textarea rows="4" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
    </div>

</body>
</html>

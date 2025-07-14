<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education - Contact Us</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        header {
            background: #1a2a44;
            color: white;
            padding: 1rem 2rem;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 2rem;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            transition: color 0.3s;
        }
        nav ul li a:hover {
            color: #ffcc00;
        }
        .contact {
            padding: 6rem 2rem 2rem;
            max-width: 800px;
            margin: 0 auto;
        }
        .contact h1 {
            font-size: 2.5rem;
            color: #1a2a44;
            text-align: center;
            margin-bottom: 2rem;
        }
        .contact-details, .contact-form {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .contact-details p {
            margin-bottom: 1rem;
        }
        .contact-details a {
            color: #ffcc00;
            text-decoration: none;
        }
        .contact-form form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        .contact-form input, .contact-form textarea {
            padding: 0.8rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }
        .contact-form button {
            background: #ffcc00;
            color: #1a2a44;
            padding: 0.8rem;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }
        .contact-form button:hover {
            background: #e6b800;
        }
        .message {
            color: green;
            text-align: center;
            margin-bottom: 1rem;
        }
        .error {
            color: red;
            text-align: center;
            margin-bottom: 1rem;
        }
        footer {
            background: #0f1a2e;
            color: white;
            text-align: center;
            padding: 1rem;
        }
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
                gap: 1rem;
            }
            .contact h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Rehan.Education</div>
            <ul>
                <li><a href="#" onclick="navigate('index.php')">Home</a></li>
                <li><a href="#" onclick="navigate('curriculum.php')">Curriculum</a></li>
                <li><a href="#" onclick="navigate('courses.php')">Courses</a></li>
                <li><a href="#" onclick="navigate('facilitators.php')">Facilitators</a></li>
                <li><a href="#" onclick="navigate('founder.php')">Founder's Message</a></li>
                <li><a href="#" onclick="navigate('contact.php')">Contact Us</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="contact">
            <h1>Contact Us</h1>
            <div class="contact-details">
                <p><strong>Address:</strong> 123 Digital Avenue, London, UK</p>
                <p><strong>Phone:</strong> <a href="tel:+447418359852">+44 7418 359852</a></p>
                <p><strong>Email:</strong> <a href="mailto:info@rehan.education">info@rehan.education</a></p>
                <p>
                    <a href="https://facebook.com">Facebook</a> |
                    <a href="https://instagram.com">Instagram</a> |
                    <a href="https://twitter.com">Twitter/X</a>
                </p>
            </div>
            <div class="contact-form">
                <?php
                include 'db.php';
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $name = htmlspecialchars($_POST['name']);
                    $email = htmlspecialchars($_POST['email']);
                    $message = htmlspecialchars($_POST['message']);
                    if (!empty($name) && !empty($email) && !empty($message)) {
                        $stmt = $conn->prepare("INSERT INTO inquiries (name, email, message) VALUES (?, ?, ?)");
                        $stmt->bind_param("sss", $name, $email, $message);
                        if ($stmt->execute()) {
                            echo "<p class='message'>Message sent successfully!</p>";
                        } else {
                            echo "<p class='error'>Error sending message. Please try again.</p>";
                        }
                        $stmt->close();
                    } else {
                        echo "<p class='error'>All fields are required.</p>";
                    }
                }
                ?>
                <form method="POST" action="contact.php">
                    <input type="text" name="name" placeholder="Your Name" required>
                    <input type="email" name="email" placeholder="Your Email" required>
                    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Rehan.Education. All rights reserved.</p>
    </footer>
    <script>
        function navigate(page) {
            window.location.href = page;
        }
    </script>
</body>
</html>

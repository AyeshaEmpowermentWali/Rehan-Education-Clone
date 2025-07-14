<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education - Home</title>
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
        .hero {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: url('https://source.unsplash.com/random/1920x1080?education') no-repeat center/cover;
            color: white;
            padding: 2rem;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin-bottom: 2rem;
        }
        .btn {
            background: #ffcc00;
            color: #1a2a44;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #e6b800;
        }
        .features {
            padding: 4rem 2rem;
            text-align: center;
            background: white;
        }
        .features h2 {
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #1a2a44;
        }
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        .feature-card {
            background: #f9f9f9;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .contact-info {
            background: #1a2a44;
            color: white;
            padding: 2rem;
            text-align: center;
        }
        .contact-info a {
            color: #ffcc00;
            text-decoration: none;
            margin: 0 1rem;
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
            .hero h1 {
                font-size: 2rem;
            }
            .hero p {
                font-size: 1rem;
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
        <section class="hero">
            <div>
                <h1>Digital Mastery for a Connected World</h1>
                <p>Empowering teens to unleash their digital potential and impact 10 million lives through AI-enabled education and financial independence.</p>
                <a href="#" onclick="navigate('contact.php')" class="btn">Join Now</a>
            </div>
        </section>
        <section class="features">
            <h2>Why Choose Rehan.Education?</h2>
            <div class="feature-grid">
                <div class="feature-card">
                    <h3>AI-Enabled Education</h3>
                    <p>Leverage cutting-edge AI tools to enhance learning and teaching experiences.</p>
                </div>
                <div class="feature-card">
                    <h3>Digital Skills Acquisition</h3>
                    <p>Master essential digital skills to thrive in the modern world.</p>
                </div>
                <div class="feature-card">
                    <h3>Online Teaching Proficiency</h3>
                    <p>Learn to create and deliver impactful online courses.</p>
                </div>
            </div>
        </section>
        <section class="contact-info">
            <h2>Contact Us</h2>
            <p>Call/WhatsApp: <a href="tel:+447418359852">+44 7418 359852</a></p>
            <p>
                <a href="https://facebook.com">Facebook</a> |
                <a href="https://instagram.com">Instagram</a> |
                <a href="https://twitter.com">Twitter/X</a>
            </p>
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

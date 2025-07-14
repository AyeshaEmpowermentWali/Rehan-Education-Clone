<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education - Facilitators</title>
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
        .facilitators {
            padding: 6rem 2rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        .facilitators h1 {
            font-size: 2.5rem;
            color: #1a2a44;
            text-align: center;
            margin-bottom: 2rem;
        }
        .facilitator-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        .facilitator-card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s;
        }
        .facilitator-card:hover {
            transform: translateY(-5px);
        }
        .facilitator-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 1rem;
        }
        .facilitator-card a {
            color: #ffcc00;
            text-decoration: none;
            margin: 0 0.5rem;
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
            .facilitators h1 {
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
        <section class="facilitators">
            <h1>Meet Our Facilitators</h1>
            <div class="facilitator-grid">
                <div class="facilitator-card">
                    <img src="https://source.unsplash.com/random/100x100?person" alt="Facilitator 1">
                    <h3>John Doe</h3>
                    <p>Expert in AI and Digital Education</p>
                    <p>
                        <a href="https://linkedin.com">LinkedIn</a> |
                        <a href="https://twitter.com">Twitter</a>
                    </p>
                </div>
                <div class="facilitator-card">
                    <img src="https://source.unsplash.com/random/100x100?person2" alt="Facilitator 2">
                    <h3>Jane Smith</h3>
                    <p>Specialist in Online Teaching</p>
                    <p>
                        <a href="https://linkedin.com">LinkedIn</a> |
                        <a href="https://twitter.com">Twitter</a>
                    </p>
                </div>
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

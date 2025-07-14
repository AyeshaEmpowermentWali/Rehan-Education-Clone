<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education - Curriculum</title>
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
        .curriculum {
            padding: 6rem 2rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        .curriculum h1 {
            font-size: 2.5rem;
            color: #1a2a44;
            text-align: center;
            margin-bottom: 2rem;
        }
        .curriculum-section {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            margin-bottom: 2rem;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .curriculum-section h2 {
            color: #1a2a44;
            margin-bottom: 1rem;
        }
        .curriculum-section ul {
            list-style: disc;
            margin-left: 2rem;
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
            .curriculum h1 {
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
        <section class="curriculum">
            <h1>Our Innovative Curriculum</h1>
            <div class="curriculum-section">
                <h2>Digital Skills</h2>
                <p>Master essential digital skills to navigate and succeed in the modern world.</p>
                <ul>
                    <li>Web Development</li>
                    <li>Graphic Design</li>
                    <li>Digital Marketing</li>
                </ul>
            </div>
            <div class="curriculum-section">
                <h2>AI Tools</h2>
                <p>Learn to leverage AI technologies to enhance learning and productivity.</p>
                <ul>
                    <li>AI Content Creation</li>
                    <li>Machine Learning Basics</li>
                    <li>Data Analysis with AI</li>
                </ul>
            </div>
            <div class="curriculum-section">
                <h2>Online Teaching Method программу</h2>
                <p>Develop skills to create and deliver impactful online courses.</p>
                <ul>
                    <li>Course Design</li>
                    <li>Engagement Strategies</li>
                    <li>Platform Management</li>
                </ul>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan.Education - Courses</title>
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
        .courses {
            padding: 6rem 2rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }
        .courses h1 {
            font-size: 2.5rem;
            color: #1a2a44;
            text-align: center;
            margin-bottom: 2rem;
        }
        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }
        .course-card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .course-card:hover {
            transform: translateY(-5px);
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
            .courses h1 {
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
        <section class="courses">
            <h1>Our Courses</h1>
            <div class="course-grid">
                <div class="course-card">
                    <h3>Web Development</h3>
                    <p>Learn to build modern websites using HTML, CSS, and JavaScript.</p>
                </div>
                <div class="course-card">
                    <h3>AI for Beginners</h3>
                    <p>Introduction to AI tools and their applications in education.</p>
                </div>
                <div class="course-card">
                    <h3>Online Teaching</h3>
                    <p>Master the art of creating and delivering online courses.</p>
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

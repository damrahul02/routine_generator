<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routine Generator - Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
      
        .hero {
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
        }
        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.2rem;
        }
        .features {
            padding: 3rem 0;
            background-color: #ffffff;
        }
        .features h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            text-align: center;
        }
        .feature-item {
            margin-bottom: 2rem;
        }
        .footer {
            text-align: center;
            padding: 1rem;
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
   <?php include 'nav.php'; ?>

    <!-- Hero Section -->
    <div class="hero">
        <div class="text-center">
            <h1>Welcome to Routine Generator</h1>
            <p>Effortlessly manage class and exam routines</p>
            <a href="#" class="btn btn-light">Get Started</a>
        </div>
    </div>

    <!-- Features Section -->
    <div class="features container mt-5" id="features">
        <h2>Why Choose Us?</h2>
        <div class="row">
            <div class="col-md-4 feature-item">
                <h4>Automated Routine Generation</h4>
                <p>Generate class and exam routines with just a few clicks, minimizing conflicts and errors.</p>
            </div>
            <div class="col-md-4 feature-item">
                <h4>Customizable and Flexible</h4>
                <p>Manually adjust generated routines to fit specific needs and preferences.</p>
            </div>
            <div class="col-md-4 feature-item">
                <h4>Easy Access</h4>
                <p>Teachers and students can view routines anytime, anywhere.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2025 Routine Generator. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

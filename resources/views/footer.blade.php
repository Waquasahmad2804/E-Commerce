
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
  <style>
    * {
    box-sizing: border-box;
}

    html, body {
    margin: 0;
    padding: 0;
    width: 100%;
}

footer {
    width: 100%;
    background-color: #222;
    color: #fff;
    padding: 30px 0;
    font-family: Arial, sans-serif;
}
.footer-container {
    display: flex;
    justify-content: space-between;
    width: 100%; /* Ensure it takes up the full width */
    margin: 0 auto; /* Center it if you have a width limit */
    padding: 0 20px; /* Add padding as needed */
}


.footer-content {
  width: 1200px;
  margin: 0 auto;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: center;
}

.footer-content p {
  font-size: 14px;
  margin-bottom: 0;
}

.footer-content nav ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
}

.footer-content nav ul li {
  margin-right: 20px;
}

.footer-content nav ul li a {
  color: #fff;
  text-decoration: none;
  font-size: 14px;
}

.footer-content nav ul li a:hover {
  color: #ccc;
}

.social-links {
  display: flex;
  align-items: center;
}

.social-links a {
  color: #fff;
  text-decoration: none;
  margin-left: 20px;
  font-size: 14px;
}

.social-links a:hover {
  color: #ccc;
}
  </style>
</head>
<body>
<footer>
    <div class="footer-container">
        <div class="footer-left">
            <p>&copy; 2024 ShopNest. All Rights Reserved.</p>
        </div>
        
        <div class="footer-center">
            <nav>
                <ul>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/portfolio">Portfolio</a></li>
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                    <li><a href="/terms">Terms & Conditions</a></li>
                </ul>
            </nav>
        </div>

        <div class="footer-right">
            <div class="social-media">
                <a href="https://facebook.com/yourpage" target="_blank" class="social-icon"><i class="fab fa-facebook"></i></a>
                <a href="https://twitter.com/yourhandle" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="https://linkedin.com/company/yourcompany" target="_blank" class="social-icon"><i class="fab fa-linkedin"></i></a>
                <a href="https://instagram.com/yourhandle" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <!-- Scroll to top button -->
    <button class="scroll-to-top" id="scrollToTopBtn">↑</button>
</footer>

</body>
</html>


  
 
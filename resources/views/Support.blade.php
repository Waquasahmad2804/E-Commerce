<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Contact and Support Page Styling */
:root {
    --primary-color: #2c5364;
    --secondary-color: #203a43;
    --accent-color: #0f2027;
    --background-color: #f8fafc;
    --text-color: #2d3748;
    --border-radius: 12px;
}

body {
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
    line-height: 1.6;
    background-color: var(--background-color);
    color: var(--text-color);
    margin: 0;
    padding: 2rem;
}

.contact-support-container {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 3rem;
    padding: 2rem;
}

/* Contact Form Styling */
.contact-form {
    background: white;
    padding: 2.5rem;
    border-radius: var(--border-radius);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
}

.form-title {
    color: var(--primary-color);
    font-size: 2rem;
    margin-bottom: 2rem;
    position: relative;
    padding-bottom: 0.5rem;
}

.form-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 4px;
    background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
    border-radius: 2px;
}

.form-group {
    margin-bottom: 1.5rem;
}

label {
    display: block;
    margin-bottom: 0.5rem;
    color: var(--text-color);
    font-weight: 500;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 0.8rem;
    border: 2px solid #e2e8f0;
    border-radius: var(--border-radius);
    font-size: 1rem;
    transition: all 0.3s ease;
}

input[type="text"]:focus,
input[type="email"]:focus,
textarea:focus {
    outline: none;
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(44, 83, 100, 0.1);
}

button[type="submit"] {
    background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
    color: white;
    padding: 1rem 2rem;
    border: none;
    border-radius: 30px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    width: 100%;
}

button[type="submit"]:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

/* Support Column Styling */
.support-column {
    background: white;
    padding: 2.5rem;
    border-radius: var(--border-radius);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
}

.support-column h3 {
    color: var(--primary-color);
    margin-top: 2rem;
    margin-bottom: 1rem;
    font-size: 1.5rem;
    position: relative;
    padding-bottom: 0.5rem;
}

.support-column h3::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 40px;
    height: 3px;
    background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
    border-radius: 2px;
}

.support-column ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.support-column li {
    margin-bottom: 1rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.support-column a {
    color: var(--primary-color);
    text-decoration: none;
    transition: color 0.3s ease;
}

.support-column a:hover {
    color: var(--secondary-color);
    text-decoration: underline;
}

/* Social Media Links */
.social-links {
    display: flex;
    gap: 1rem;
    margin-top: 1rem;
}

.social-link {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1rem;
    background: #f1f5f9;
    border-radius: 20px;
    transition: all 0.3s ease;
}

.social-link:hover {
    background: var(--primary-color);
    color: white;
    transform: translateY(-2px);
}

/* Business Hours Badge */
.business-hours {
    background: #f1f5f9;
    padding: 1rem;
    border-radius: var(--border-radius);
    margin-top: 1rem;
    border-left: 4px solid var(--primary-color);
}

/* Responsive Design */
@media (max-width: 992px) {
    .contact-support-container {
        grid-template-columns: 1fr;
        gap: 2rem;
        padding: 1rem;
    }

    .contact-form,
    .support-column {
        padding: 1.5rem;
    }
}

@media (max-width: 480px) {
    body {
        padding: 1rem;
    }

    .form-title {
        font-size: 1.5rem;
    }

    button[type="submit"] {
        padding: 0.8rem 1.5rem;
    }
}

/* Animation */
@keyframes slideIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-slide-in {
    animation: slideIn 0.5s ease forwards;
}
    </style>
</head>
<body>
    <div class="container">
<form action="" method="POST">
  <label for="name">Full Name:</label><br>
  <input type="text" id="name" name="name" required><br><br>

  <label for="email">Email Address:</label><br>
  <input type="email" id="email" name="email" required><br><br>

  <label for="message">Your Message:</label><br>
  <textarea id="message" name="message" rows="4" required></textarea><br><br>

  <button type="submit">Submit</button>
</form>
</div>
<div class="support-column">
  <h3>Customer Support</h3>
  
  <p>If you have any questions or need assistance, our team is here to help! Here’s how you can get in touch with us:</p>
  
  <ul>
    <li><strong>Phone:</strong> +1-800-123-4567</li>
    <li><strong>Email:</strong> <a href="mailto:support@shopnest.com">support@shopnest.com</a></li>
    <li><strong>Live Chat:</strong> Contact US on WhatsApp</li>
  </ul>

  <h3>Helpful Links</h3>
  <ul>
    <li><a href="/faq">FAQs</a></li>
    <li><a href="/track-order">Track Your Order</a></li>
    <li><a href="/returns-policy">Returns & Exchanges</a></li>
    <li><a href="/shipping-info">Shipping Information</a></li>
  </ul>

  <h3>Business Hours</h3>
  <p>Monday - Friday: 9 AM - 6 PM (IST)</p>

  <h3>Follow Us</h3>
  <ul>
    <li><a href="https://www.facebook.com/shopnest">Facebook</a></li>
    <li><a href="https://www.instagram.com/shopnest">Instagram</a></li>
    <li><a href="https://twitter.com/shopnest">Twitter</a></li>
  </ul>

  <h3>Feedback & Suggestions</h3>
  <p>We value your opinion. Send your suggestions to <a href="mailto:feedback@shopnest.com">feedback@shopnest.com</a>.</p>
</div>

</body>
</html>


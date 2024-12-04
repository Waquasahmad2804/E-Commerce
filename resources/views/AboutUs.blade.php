




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Modern About Us Page Styling */
.about-us-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 2rem;
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
    color: #2d3748;
    line-height: 1.6;
}

/* Hero Section */
.hero-section {
    background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
    color: white;
    padding: 4rem 2rem;
    border-radius: 20px;
    margin-bottom: 3rem;
    text-align: center;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
}

.hero-section h1 {
    font-size: 3.5rem;
    margin-bottom: 1rem;
    font-weight: 800;
    background: linear-gradient(to right, #fff, #e2e8f0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Section Styling */
.section {
    margin-bottom: 4rem;
    padding: 2rem;
    background: white;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease;
}

.section:hover {
    transform: translateY(-5px);
}

.section h2 {
    color: #1a202c;
    font-size: 2rem;
    margin-bottom: 1.5rem;
    position: relative;
    padding-bottom: 0.5rem;
}

.section h2::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 4px;
    background: linear-gradient(to right, #0f2027, #2c5364);
    border-radius: 2px;
}

/* Product Grid */
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-top: 2rem;
}

.product-category {
    background: #f7fafc;
    padding: 1.5rem;
    border-radius: 10px;
    text-align: center;
    transition: all 0.3s ease;
}

.product-category:hover {
    background: #edf2f7;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

/* Features List */
.features-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1.5rem;
    background: #f8fafc;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.feature-item:hover {
    background: #edf2f7;
    transform: translateY(-3px);
}

.feature-icon {
    font-size: 1.5rem;
    color: #2c5364;
}

/* Call to Action */
.cta-section {
    text-align: center;
    padding: 4rem 2rem;
    background: linear-gradient(135deg, #0f2027, #203a43);
    color: white;
    border-radius: 20px;
    margin-top: 3rem;
}

.cta-button {
    display: inline-block;
    padding: 1rem 2rem;
    background: white;
    color: #0f2027;
    text-decoration: none;
    border-radius: 30px;
    font-weight: 600;
    margin-top: 1.5rem;
    transition: all 0.3s ease;
}

.cta-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

/* Social Media Links */
.social-links {
    display: flex;
    justify-content: center;
    gap: 1.5rem;
    margin-top: 2rem;
}

.social-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #edf2f7;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.social-icon:hover {
    background: #2c5364;
    color: white;
    transform: translateY(-3px);
}

/* Responsive Design */
@media (max-width: 768px) {
    .hero-section h1 {
        font-size: 2.5rem;
    }

    .section {
        padding: 1.5rem;
    }

    .features-list {
        grid-template-columns: 1fr;
    }
}

/* Animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fadeIn 0.8s ease forwards;
}
    </style>
</head>
<body>
<div class="about-us-container">
    <div class="hero-section animate-fade-in">
        <h1>Welcome to Shopnest</h1>
        <p>Your one-stop online store for all things electronics</p>
    </div>

    <section class="section animate-fade-in">
        <h2>Our Story</h2>
        <p>We are your one-stop online store for all things electronics. Whether you're looking for the latest smartphone, cutting-edge gadgets, or home appliances, we have it all. Founded in 2024, Shopnest was created with a clear mission: to provide customers with top-quality electronics at affordable prices, all in one place.</p>
    </section>

    <section class="section animate-fade-in">
        <h2>Our Mission</h2>
        <p>Our mission is to offer a seamless shopping experience, providing you with the best of electronics from trusted brands. We pride ourselves on having a product catalog that’s constantly updated with the latest technology, ensuring you always have access to the best gadgets on the market.

At Shopnest, we’re committed to offering products that blend functionality, innovation, and affordability. Our goal is to make sure you get the best value for your money without compromising on quality.</p>
    </section>

    <section class="section animate-fade-in">
        <h2>Why Shop With Us?</h2>
        <div class="features-list">
            <div class="feature-item">
                <span class="feature-icon">📦</span>
                <div>
                    <h3>Wide Selection</h3>
                    <p>Wide Selection: From smartphones, laptops, tablets, and cameras to gaming consoles, accessories, and home appliances, Shopnest is your go-to for all things electronics.<br>
Affordable Prices: We offer competitive prices and regular discounts to ensure you get the best deals without breaking the bank.<br>
Fast Shipping: With quick processing and reliable delivery options, your orders will reach you in no time.<br>
Customer Service: Our friendly customer support team is always ready to assist with any queries, ensuring a hassle-free shopping experience.<br>
Safe and Secure: We use the latest encryption technology to ensure your transactions are always safe.</p>
                </div>
            </div>
            
        </div>
    </section>

    <section class="section animate-fade-in">
        <h2>Our Products</h2>
        <div class="product-grid">
            <div class="product-category">
                <<h3>Smartphones</h3>

<h3>Laptops & Computers</h3>

<h3>Tablets & E-readers</h3>

<h3>Smart Watches & Wearables</h3>

<h3>Cameras & Photography Equipment</h3>

<h3>Headphones & Earbuds</h3>

<h3>Gaming Consoles & Accessories</h3>

<h3>Home Appliances (TVs, Refrigerators, etc.)</h3>

<h3>Smart Home Devices (Lights, Thermostats, etc.)</h3>

            </div>
            <!-- Add more product categories -->
        </div>
    </section>

    <div class="cta-section animate-fade-in">
        <h2>Join the Shopnest Family</h2>
        <p>Browse our vast collection of electronics</p>
        <a href="#" class="cta-button">Shop Now</a>
        
        <div class="social-links">
            <!-- Add social media icons/links -->
            <a href="#" class="social-icon">FB</a>
            <a href="#" class="social-icon">TW</a>
            <a href="#" class="social-icon">IG</a>
        </div>
    </div>
</div>
</body>
</html>
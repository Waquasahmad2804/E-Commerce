<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Modern Registration Form Styling */
:root {
    --primary-color: #4a90e2;
    --secondary-color: #357abd;
    --success-color: #28a745;
    --background-color: #f8fafc;
    --text-color: #2d3748;
    --border-radius: 8px;
    --box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

body {
    background: linear-gradient(135deg, #f6f9fc 0%, #edf2f7 100%);
    min-height: 100vh;
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    color: var(--text-color);
    line-height: 1.6;
}

.container {
    max-width: 800px !important;
}

/* Form Container Styling */
.registration-container {
    background: white;
    padding: 2.5rem;
    border-radius: var(--border-radius);
    box-shadow: var(--box-shadow);
    margin-top: 3rem !important;
    margin-bottom: 3rem !important;
}

/* Form Title Styling */
h2 {
    color: var(--text-color);
    font-weight: 700;
    margin-bottom: 2rem;
    position: relative;
    padding-bottom: 0.5rem;
}

h2::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 60px;
    height: 4px;
    background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
    border-radius: 2px;
}

/* Form Group Styling */
.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    font-weight: 500;
    color: var(--text-color);
    margin-bottom: 0.5rem;
}

/* Input Field Styling */
.form-control {
    border: 2px solid #e2e8f0;
    border-radius: var(--border-radius);
    padding: 0.75rem 1rem;
    transition: all 0.3s ease;
    background-color: #f8fafc;
}

.form-control:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
    outline: none;
    background-color: white;
}

/* Placeholder Styling */
.form-control::placeholder {
    color: #a0aec0;
}

/* Submit Button Styling */
.btn-primary {
    background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
    border: none;
    padding: 0.75rem 2rem;
    font-weight: 600;
    border-radius: 30px;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(74, 144, 226, 0.2);
    width: 100%;
    margin-top: 1rem;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(74, 144, 226, 0.3);
    background: linear-gradient(to right, var(--secondary-color), var(--primary-color));
}

.btn-primary:focus {
    box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.3);
}

/* Input Validation Styling */
.form-control.is-valid {
    border-color: var(--success-color);
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
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

/* Responsive Design */
@media (max-width: 768px) {
    .registration-container {
        padding: 1.5rem;
        margin-top: 2rem !important;
        margin-bottom: 2rem !important;
    }

    h2 {
        font-size: 1.75rem;
    }

    .btn-primary {
        padding: 0.6rem 1.5rem;
    }
}

/* Password Strength Indicator */
.password-strength {
    height: 4px;
    margin-top: 0.5rem;
    border-radius: 2px;
    transition: all 0.3s ease;
}

.strength-weak {
    background: #fc8181;
    width: 30%;
}

.strength-medium {
    background: #f6e05e;
    width: 60%;
}

.strength-strong {
    background: #68d391;
    width: 100%;
}

/* Form Section Dividers */
.form-section {
    position: relative;
    padding-top: 1rem;
    margin-top: 2rem;
}

.form-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(to right, #e2e8f0 0%, transparent 100%);
}
    </style>
</head>
<body>
    <div class="container">
        <div class="registration-container animate-slide-in">
            <h2>Create Your Account</h2>
            <form action="/UserRegistration" method="post">
                @csrf
                
                <!-- Full Name -->
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" 
                           placeholder="Enter your full name" required>
                </div>

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" 
                           placeholder="name@example.com" required>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" 
                           placeholder="Create a strong password" required>
                    <div class="password-strength"></div>
                </div>

                <!-- Phone Number -->
                <div class="form-group">
                    <label for="phoneno">Phone Number</label>
                    <input type="tel" class="form-control" id="phoneno" name="phoneno" 
                           placeholder="Enter your phone number" required>
                </div>

                <!-- Address -->
                <div class="form-group">
    <label for="address">Delivery Address</label>
    <textarea class="form-control" name="Address" rows="3" 
              placeholder="Enter your complete delivery address" required></textarea>
</div>


                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Create Account</button>
            </form>
        </div>
    </div>
    @if(session('alert'))
        <script>
            // Display the alert message
            alert('{{ session('alert') }}');
        </script>
    @endif
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
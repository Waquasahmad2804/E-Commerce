
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
.form-label, .form-control {
    margin-top: 0;
}

.container-fluid {
    display: flex;
    justify-content: center;
    align-items: center;
}

.login-form-container {
    background-color: #fff; /* Optional: Add background color to the form */
    padding: 30px;
    border-radius: 8px; /* Optional: Rounded corners for a modern look */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Optional: Add shadow for depth */
    max-width: 400px; /* Limit the width of the form */
    width: 100%; /* Make sure it takes up full width within the max-width limit */
}

/* Ensure the form fields and button are spaced and aligned well */
.form-label {
    font-size: 14px;
}

.btn {
    width: 100%; /* Make the button full width */
}

/* Optional: If you want to add some spacing at the bottom of the page */
/* body {
    margin-bottom: 60px; /* Ensure footer is at the bottom */
} */

/* Mobile-friendly: Centering and form resizing */
@media (max-width: 576px) {
    .login-form-container {
        width: 90%; /* Form takes up more space on smaller screens */
    }
}

  </style>
</head>
<body>
@extends('master')
@section('content')
<div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="login-form-container">
        <form action="login" method="post">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary btn- my-3">Login</button>
            <p>Don't have an account? <a href="/UserRegistration">Register Yourself</a></p>
        </form>
    </div>
</div>

@endsection

</body>
</html>

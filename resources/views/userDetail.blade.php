<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Modern User Details Card */
.user-details-container {
    max-width: 600px;
    margin: 2rem auto;
    padding: 2rem;
    background: linear-gradient(145deg, #ffffff, #f5f7fa);
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
}

.user-header {
    position: relative;
    padding-bottom: 1.5rem;
    margin-bottom: 1.5rem;
    border-bottom: 2px solid #eee;
}

.user-header h2 {
    color: #2d3748;
    font-size: 1.8rem;
    font-weight: 600;
    margin: 0;
}

.user-info-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1.2rem;
    padding: 0.8rem;
    background-color: #ffffff;
    border-radius: 8px;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.user-info-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
}

.user-info-label {
    min-width: 120px;
    color: #718096;
    font-weight: 500;
    font-size: 0.95rem;
}

.user-info-value {
    color: #2d3748;
    font-weight: 400;
    font-size: 1rem;
    word-break: break-word;
}

/* Icon styles */
.user-info-item::before {
    content: '';
    display: inline-block;
    width: 24px;
    height: 24px;
    margin-right: 12px;
    background-size: contain;
    background-repeat: no-repeat;
    opacity: 0.7;
}

.user-info-item.name::before {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%234A5568'%3E%3Cpath d='M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z'/%3E%3C/svg%3E");
}

.user-info-item.email::before {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%234A5568'%3E%3Cpath d='M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z'/%3E%3C/svg%3E");
}

.user-info-item.phone::before {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%234A5568'%3E%3Cpath d='M6.62 10.79c1.44 2.83 3.76 5.15 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z'/%3E%3C/svg%3E");
}

.user-info-item.address::before {
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%234A5568'%3E%3Cpath d='M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z'/%3E%3C/svg%3E");
}

/* Responsive adjustments */
@media (max-width: 640px) {
    .user-details-container {
        margin: 1rem;
        padding: 1.5rem;
    }

    .user-info-item {
        flex-direction: column;
    }

    .user-info-label {
        margin-bottom: 0.5rem;
    }
}
        </style>
</head>
<body>
<div class="user-details-container">
    <div class="user-header">
        <h2>User Details</h2>
    </div>
    
    <div class="user-info-item name">
        <span class="user-info-label">Name</span>
        <span class="user-info-value">{{$user->name}}</span>
    </div>
    
    <div class="user-info-item email">
        <span class="user-info-label">Email</span>
        <span class="user-info-value">{{$user->email}}</span>
    </div>
    
    <div class="user-info-item phone">
        <span class="user-info-label">Phone</span>
        <span class="user-info-value">{{$user->phoneno}}</span>
    </div>
    
    <div class="user-info-item address">
        <span class="user-info-label">Address</span>
        <span class="user-info-value">{{$user->Address}}</span>
    </div>
</div>
</body>
</html>


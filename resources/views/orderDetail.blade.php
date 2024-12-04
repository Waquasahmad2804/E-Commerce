


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Container styling */
.container {
    max-width: 800px;
    margin: 40px auto;
    padding: 30px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
}

/* Heading styles */
h1 {
    color: #2d3748;
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 30px;
    text-align: center;
}

/* Table styles */
.table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin-bottom: 30px;
}

.table th,
.table td {
    padding: 16px;
    text-align: left;
    border-bottom: 1px solid #e2e8f0;
}

.table th {
    font-weight: 600;
    color: #4a5568;
    background-color: #f7fafc;
}

.table td {
    color: #2d3748;
}

/* Amount row styling */
.table tr:last-child td {
    font-weight: 600;
    color: #2d3748;
    background-color: #f7fafc;
}

/* Select dropdown styling */
select {
    width: 100%;
    padding: 12px;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
    background-color: white;
    font-size: 16px;
    color: #4a5568;
    cursor: pointer;
    transition: all 0.2s ease;
    appearance: none;
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%234a5568' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M6 9l6 6 6-6'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 12px center;
}

select:hover {
    border-color: #cbd5e0;
}

select:focus {
    outline: none;
    border-color: #4299e1;
    box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.2);
}

/* Proceed button styling */
a {
    display: block;
    width: 100%;
    padding: 14px;
    background-color: #4299e1;
    color: white;
    text-align: center;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 500;
    margin-top: 20px;
    transition: background-color 0.2s ease;
}

a:hover {
    background-color: #3182ce;
}

/* Responsive adjustments */
@media (max-width: 640px) {
    .container {
        padding: 20px;
        margin: 20px;
    }
    
    h1 {
        font-size: 24px;
    }
    
    .table th,
    .table td {
        padding: 12px;
    }
}

/* Currency formatting */
td:last-child {
    font-family: monospace;
    font-size: 15px;
}
    </style>
</head>
<body>
<div class="container">
    <h1>Your Order Details</h1>
    <table class="table bordered-5">
        <tbody>
            <!-- Amount -->
            <tr>
                <th scope="row">1</th>
                <td>Amount</td>
                <td>₹{{ number_format($price, 2) }}</td> <!-- Display price with ₹ sign -->
            </tr>

            <!-- GST (Tax) -->
            <tr>
                <th scope="row">2</th>
                <td>Total GST (9%)</td>
                <td>₹{{ number_format($tax, 2) }}</td> <!-- Display tax with ₹ sign -->
            </tr>

            <!-- Total Amount -->
            <tr>
                <th scope="row">3</th>
                <td>Total Amount</td>
                <td>₹{{ number_format($totalAmount, 2) }}</td> <!-- Display total amount with ₹ sign -->
            </tr>
        </tbody>
    </table>
    <br><br><br>
    <select> <option>Select Option For Payment</option>
        <option>UPI</option>
        <option>Card</Option>
    </select>
    <br><br>
    <p>Delivery Address: </p>
    <textarea cols="85" rows="5"></textarea>
    <br><br>
    <a href="">Proceed</a>
</div>

</body>
</html>

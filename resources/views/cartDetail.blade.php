<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #f8fafc;
            --accent-color: #e2e8f0;
            --text-color: #1e293b;
        }

        body {
            background-color: #f1f5f9;
            color: var(--text-color);
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        h1 {
            font-family: 'Kanit', sans-serif;
            font-weight: 600;
            color: var(--text-color);
            margin-bottom: 2rem;
            font-size: 2.5rem;
            border-bottom: 3px solid var(--primary-color);
            display: inline-block;
            padding-bottom: 0.5rem;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
            display: grid;
            grid-template-columns: auto 1fr auto;
            gap: 2rem;
            align-items: center;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        li:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1);
        }

        li img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 8px;
        }

        .product-info {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .product-name {
            font-family: 'Kanit', sans-serif;
            font-size: 1.25rem;
            font-weight: 500;
            color: var(--text-color);
            margin: 0;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-color);
        }

        .product-category {
            font-size: 0.875rem;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .product-description {
            font-size: 0.95rem;
            color: #475569;
            line-height: 1.5;
            margin-top: 0.5rem;
        }

        .back-button , .buy-button {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            margin-top: 2rem;
            transition: background-color 0.2s;
        }

        .back-button:hover {
            background-color: #1d4ed8;
            color: white;
        }
        .buy-button:hover {
            background-color: #1d4ed8;
            color: white;
        }

        .empty-cart {
            text-align: center;
            padding: 3rem;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
        }

        .empty-cart p {
            font-size: 1.25rem;
            color: #64748b;
            margin-bottom: 1.5rem;
        }

        @media (max-width: 768px) {
            li {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 1rem;
            }

            li img {
                margin: 0 auto;
            }
        }
        .total-amount {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--primary-color);
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Your Cart</h1>
    @if(isset($cartitems) && $cartitems->isEmpty())
        <div class="empty-cart">
            <p>Your cart is empty.</p>
            <a href="/home" class="back-button">Back To Shopping</a>
        </div>
    @else
        <ul>
            @php $totalAmount = 0; @endphp
            @foreach($cartitems as $item)
                <li>
                    <img src="{{ $item->gallery }}" alt="{{ $item->name }}">
                    <div class="product-info">
                        <h2 class="product-name">{{ $item->name }}</h2>
                        <div class="product-category">{{ $item->category }}</div>
                        <div class="product-price">₹{{ number_format($item->price, 2) }}</div>
                        <div class="product-description">{{ $item->description }}</div>
                        <form action="{{ route('deleteCartItem') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $item->id }}" name="cartitem">
                            <button class="btn btn-primary">Remove Item From Cart</button>
                        </form>
                    </div>
                </li>
                @php $totalAmount += $item->price; @endphp
            @endforeach

            <div class="total-amount">
                <h3>Total Amount: ₹{{ number_format($totalAmount, 2) }}</h3>
            </div>
        </ul>
        <a href="/home" class="back-button">Back To Shopping</a>
        <a href="" class="buy-button">Buy Items</a>
    @endif
</div>

</body>
</html>
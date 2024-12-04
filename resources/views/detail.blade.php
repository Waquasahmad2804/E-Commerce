
@extends('master')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        .itemDetails{
            font-family:Kanit ,'sans-serif';
        }
        /* Container and layout */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Product details styling */
.itemDetails {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    padding: 30px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

/* Image styling */
#detailProductImage {
    width: 100%;
    max-width: 400px;
    height: auto;
    object-fit: cover;
    border-radius: 8px;
    grid-column: 1;
}

/* Product info container */
.product-info {
    grid-column: 2;
    display: flex;
    flex-direction: column;
    gap: 15px;
}

/* Text styling */
.itemDetails p {
    font-family: 'Kanit', sans-serif;
    margin: 0;
    line-height: 1.6;
}

.itemDetails p:nth-child(1) { 
    font-size: 28px;
    font-weight: 600;
    color: #333;
    margin-bottom: 10px;
}

.itemDetails p:nth-child(2) { 
    font-size: 16px;
    color: #666;
    margin-bottom: 20px;
}

.itemDetails p:nth-child(3) { 
    font-size: 24px;
    font-weight: 500;
    color: #2c5282;
}

.itemDetails p:nth-child(4) { 
    font-size: 14px;
    color: #666;
    text-transform: uppercase;
    letter-spacing: 1px;
}


 .btn1 {
    padding: 12px 24px;
    border: none;
    border-radius: 6px;
    font-family: 'Kanit', sans-serif;
    font-weight: 500;
    font-size: 13px;
    cursor: pointer;
    transition: all 0.2s ease;
    margin-right: 10px;
    margin-top: 20px;
} 

 .btn-primary {
    background-color: #3182ce;
    color: white;
}

.btn-primary:hover {
    background-color: #2c5282;
    transform: translateY(-2px);
} 

/* Responsive design */
@media (max-width: 768px) {
    .itemDetails {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    #detailProductImage {
        max-width: 100%;
        grid-column: 1;
    }

    .product-info {
        grid-column: 1;
    }

    .itemDetails p:nth-child(1) {
        font-size: 24px;
    }

    .itemDetails p:nth-child(3) {
        font-size: 20px;
    }
}

@media (max-width: 480px) {
    .container {
        padding: 10px;
    }

    .itemDetails {
        padding: 15px;
    }

    .btn1 {
        width: 100%;
        margin-bottom: 10px;
    }
}
        </style>
</head>
<body>
    <div class="container">
   
        <div class="row">
            <div class="itemDetails my-3" >
                <div class="col-lg-6">
               
        <p>{{$details['name']}}</p>
<p>About The Product : {{$details['description']}}</p>
<p>Price : {{$details['price']}}</p>
 <p>Category : {{$details['category']}}</p>
</div> <div class="col-lg-6">
 <img id="detailProductImage"src= "{{$details['gallery']}}">
 <form action="/add_to_cart" method="POST">
    @csrf 
    @if(Session()->has('user'))
    <input type="hidden" name="product_id" value="{{$details['id']}}"> 
 <button class=" btn1 btn btn-primary">Add To Cart</button>

@else
<a href="/" class=" btn1 btn btn-primary">Add To Cart</a>
@endif
</form>
<a href="/order/{{ $details->id }}" class="btn1 btn btn-success">Buy Now</a>

 <a href="/home" class="my-3">Go Back</a></div>
 
   

   
</body>
</html>

@endsection

@php
    $showFooter = false;
@endphp

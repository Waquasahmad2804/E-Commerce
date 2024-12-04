@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>

 .container {
    padding: 40px 20px;
    max-width: 1200px;
    margin: 0 auto;
}
.carousel-control-prev,
.carousel-control-next {
    position: absolute;
    top: 50%; 
    transform: translateY(-50%); 
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.7); 
    border-radius: 50%; 
    z-index: 10; 
    opacity: 0.7;
    transition: opacity 0.3s ease;
/*     
    left: 50%; */
    transform: translate(-50%, -50%);
}

.carousel-control-prev {
    margin-left: -60px; /* Adjust the left position */
}

.carousel-control-next {
    margin-left: 60px; /* Adjust the right position */
}

/* Show arrows when hovering over the carousel */
#myCarousel:hover .carousel-control-prev,
#myCarousel:hover .carousel-control-next {
    opacity: 1; /* Make the arrows fully visible on hover */
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #2c3e50;
    padding: 15px;
    border-radius: 50%;
    background-size: 50%;
} */

.custom-product {
    max-width: 1000px;
    margin: 0 auto;
    background: #ffffff;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    padding: 30px;
}

/* Carousel styling */
#myCarousel {
    position: relative;
    
}

/* Image styling */
#ProductImages {
    height: 500px;
    width: 100%;
    object-fit: contain;
    border-radius: 10px;
    transition: transform 0.3s ease;
}

/* Product information styling */
.product-info {
    padding: 25px 15px;
    text-align: center;
    background: linear-gradient(to bottom, rgba(255,255,255,0.95), #ffffff);
    border-radius: 0 0 10px 10px;
}

.product-info h3 {
    font-size: 24px;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 15px;
    transition: color 0.3s ease;
}

.product-info p {
    font-size: 16px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 15px;
    padding: 0 20px;
}

/* Navigation arrows styling */
.carousel-control-prev,
.carousel-control-next {
    width: 50px;
    height: 50px;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
    opacity: 0;
    transition: all 0.3s ease;
    margin: 0 20px;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #2c3e50;
    padding: 15px;
    border-radius: 50%;
    background-size: 50%;
}

#myCarousel:hover .carousel-control-prev,
#myCarousel:hover .carousel-control-next {
    opacity: 1;
}

/* Indicators styling */
.carousel-indicators {
    position: relative;
    margin-top: 20px;
    margin-bottom: 0;
}

.carousel-indicators li {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    margin: 0 5px;
    background-color: #cbd5e0;
    transition: all 0.3s ease;
    border: none;
    opacity: 0.5;
}

.carousel-indicators .active {
    width: 12px;
    height: 12px;
    background-color: #2c3e50;
    opacity: 1;
}

/* Carousel item transitions */
.carousel-item {
    transition: transform 0.6s ease-in-out;
}


/* Link styling */
.carousel-item a {
    text-decoration: none;
    display: block;
}

/* Hover effects */
.carousel-item:hover #ProductImages {
    transform: scale(1.02);
}

.carousel-item:hover .product-info h3 {
    color: #3498db;
}

/* Responsive design */
@media (max-width: 992px) {
    #ProductImages {
        height: 400px;
    }
    
    .product-info h3 {
        font-size: 22px;
    }
    
    .product-info p {
        font-size: 15px;
    }
}

@media (max-width: 768px) {
    .container {
        padding: 20px 10px;
    }
    
    .custom-product {
        padding: 15px;
    }
    
    #ProductImages {
        height: 350px;
    }
    
    .product-info h3 {
        font-size: 20px;
    }
    
    .product-info p {
        font-size: 14px;
        padding: 0 10px;
    }
    
    .carousel-control-prev,
    .carousel-control-next {
        width: 40px;
        height: 40px;
        margin: 0 10px;
    }
}

@media (max-width: 576px) {
    #ProductImages {
        height: 300px;
    }
    
    .product-info {
        padding: 15px 10px;
    }
    
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        padding: 12px;
    }
}

/* Animation keyframes for smooth transitions */
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

/* Apply animations */
.carousel-item.active .product-info {
    animation: fadeIn 0.6s ease-out forwards;
}
/* Container styling */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Container styling */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Trending section wrapper */
.trending-wrapper {
    margin: 30px 0;
}

.trending-wrapper > h3 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

/* Fixed grid layout for trending items */
.trending-wrapper {
    display: grid;
    /* Changed to a fixed 4-column grid */
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    padding: 15px;
}

/* Individual trending item styling */
.trending-item {
    border: 1px solid #eee;
    border-radius: 8px;
    padding: 15px;
    transition: transform 0.2s ease-in-out;
    background: white;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    /* Added to ensure consistent width */
    width: 100%;
}

.trending-item:hover {
    transform: translateY(-5px);
}

/* Link styling */
.trending-item a {
    text-decoration: none;
    color: inherit;
    display: block;
}

/* Image styling */
.trending-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 6px;
    margin-bottom: 10px;
}

/* Product name styling */
.trending-item h3 {
    font-size: 18px;
    margin: 10px 0;
    color: #333;
}

/* Responsive adjustments */
@media (max-width: 1024px) {
    .trending-wrapper {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .trending-wrapper {
        grid-template-columns: repeat(2, 1fr);
    }
    
    .trending-image {
        height: 180px;
    }
}

@media (max-width: 480px) {
    .trending-wrapper {
        grid-template-columns: 1fr;
    }
    
    .trending-image {
        height: 250px;
    }
}
</style>
</head>
<body>
    <div class="container">
        <div class="custom-product">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Wrapper for slides -->
                
                <div class="carousel-inner">
                    @foreach ($products as $index => $item)
                    @if($index<5)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <a href="detail/{{ $item['id'] }}" class="text-decoration-none">
                                <img class="slider-img" id="ProductImages" src="{{ $item['gallery'] }}" alt="{{ $item['name'] }}">
                                <div class="product-info">
                                    <h3>{{ $item['name'] }}</h3>
                                    <p>{{ $item['description'] }}</p>
                                </div>
                            </a>
                        </div>
                        @endif
                    @endforeach
                 
                </div>

                <!-- Left and right controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach ($products as $index => $item)
                        <li data-bs-target="#myCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
<div class="container-fluid">
    <div class="row">
        <h3 class="text-center my-5">Trending Items</h3>
        <div class="col-lg-12 my-2">
    <div class="trending-wrapper">
        

        @foreach($products as $item)
            <div class="trending-item">
                <a href="detail/{{ $item['id'] }}">
                    <img class="trending-image" id="trendingProductimages" src="{{ $item['gallery'] }}" alt="{{ $item['name'] }}">
                    <div>
                        <h3 class="text-black">{{ $item['name'] }}</h3>
                    </div>
                </a>
            </div>
        @endforeach
</div>
</div>
</div>
    </div>
    </div>
</div>
</div>
</body>
</html>

@endsection

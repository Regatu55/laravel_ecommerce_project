
<!DOCTYPE html>
<html>
<head>
    <title> Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
</head>
<body>
    <section id="header">
        <a href="#"><img src="{{asset('assets/images/logo/favicon.ico')}}" class="logo" width="80" height="80"></a>
    <div>

    <ul id="navbar">
<li><a class="active" href="{{route('index')}}">Home</a></li>

<li><a href="{{ route('shop') }}">Shop</a></li>
<li><a href="{{ route('blog') }}">Blog</a></li>
<li><a  href="{{route('about')}}">About</a></li>
<li><a href="{{route('contact')}}">Contact Us</a></li>
<li id="lg-bag"><a href="{{route('product.list')}}"><i class='bx bx-shopping-bag'></i></a></li>
<li><a  href="{{route ('logout') }}"><button class="btn-login">Logout</button></a></li>
    </section>


<div class="container mt-5">
    @php
    $totalQuantity = 0;
    @endphp
    
    @if(session('cart'))
    @foreach(session('cart') as $item)
        @php
        $totalQuantity += $item['quantity'];
        @endphp
    @endforeach
    @endif

    <div class="col-12">
        <div class="dropdown" >
            <a class="btn btn-outline-dark" href="{{ route('cart.list') }}">
               <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge text-bg-danger" id="cart-quantity">{{ $totalQuantity }}</span>
            </a>
        </div>
    </div>
</div>


<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
    @yield('content')
</div>

@yield('scripts')

</body>

<footer class="section-p1">
    <div class="col">
        <img class="logo" src="{{asset('assets/images/logo/favicon.ico')}}" width="80" height="80">
        <h4>Contact</h4>
        <p><strong>Address:</strong>Adama</p>
        <p><strong>Phone:</strong> +251-9-55-97-85-65</p>
        <p><strong>Hours:</strong>10:00 - 18:00, Mon-Sat </p>
       <div class="follow">
        <h4>Follow us</h4>
        <div class="icon">
            <i class='bx bxl-facebook-circle'></i>
            <i class='bx bxl-twitter'></i>
            <i class='bx bxl-instagram-alt'></i>
            <i class='bx bxl-pinterest-alt'></i>
            <i class='bx bxl-youtube' ></i>
        </div>
       </div>
    </div>
<div class="col">
    <h4>About</h4>
    <a  href="#">Delivery Information</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Terms & Conditions</a>
    <a href="#">Contact Us</a>
</div>
<div class="col">
    <h4>My Account</h4>
    <a  href="#">Sign In</a>
    <a href="#">View Cart</a>
    <a href="#">My Wishlist</a>
    <a href="#">Track My Order</a>
    <a href="#">Help</a>
</div>

<div class="col install">
    <h4>Install App</h4>
    <p>From App Store or Google Play</p>
    <div class="row">
        <img src="{{asset('assets/images/app/appstore.png')}}" alt="">
        <img src="{{asset('assets/images/app/playstore.png')}}" alt="">
    </div>
    <p>Secured Payment Gateways</p>
    <img src="{{asset('assets/images/payment/payment.png')}}" alt="">
</div>


<div class="copyright">
    <p>Copyright @2024 - ecommerce-website</p>
</div>
</footer>

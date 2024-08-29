<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce website</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{ asset('js/app.js') }}"></script>

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
    <section id="header">
        <a href="#"><img src="{{asset('assets/images/logo/favicon.ico')}}" class="logo" width="80" height="80"></a>
    <div>

    <ul id="navbar">
<li><a  href="{{route('index')}}">Home</a></li>

<li><a href="{{ route('shop') }}">Shop</a></li>
<li><a href="{{ route('blog') }}">Blog</a></li>
<li><a  href="{{route('about')}}">About</a></li>
<li><a href="{{route('contact')}}">Contact Us</a></li>
<li id="lg-bag"><a href="#"><i class='bx bx-shopping-bag'></i></a></li>
<li><a href="{{route ('signup') }}"><button class="btn-login">SignUp</button></a></li>
<!-- <button class="btn-login">Login</button> -->
<a href="#" id="close"><i class='bx bx-window-close'></i></a> 
    </ul>
    </div>
    <div id="mobile">
       
    <a href=""></a><i class='bx bx-shopping-bag'></i>
    
    <i id="bar" class='bx bx-menu'></i>
</div>
    </section>  
   

    @yield('content')

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
    <script src="script.js"></script>
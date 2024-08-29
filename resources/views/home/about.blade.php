@extends('home.layout')
@section('content')
    <section id="page-header" class="about-header">
       <h2>#About Us</h2><br>
       
        </div>
    </section>
 
    <section id="about-head"  class="section-p1">
        <img src="{{asset('assets/images/about/about.png')}}" alt="">
<div>
    <h2>About Us</h2>
    <br>
    <p> welcome you to Ecommerce Website, your one-step destination for describe your products/services.
        Our journey began with a simple vision: to provide a seamless and enjoyable online shopping experience
        for every customer,
        irrespective of their needs or preferences.
        But our dedication to excellence doesn't end with our products.
        We understand that shopping online can sometimes be daunting,
        which is why we've made it our mission to provide unparalleled customer service
    </p>
    
</div>
    </section>
  

<section id="about-app" class="section-p1">
    <h1>Download Our <a href="#">App</a></h1>
    <div class="video">
        <!-- the video play automatically using autoplay attributes and its mute -->
        <video autoplay muted loop src="{{asset('assets/images/video_aboutpage/videoforaboutpage.mp4.mp4')}}"></video>
    </div>

</section>

<section id="feature" class="section-p1">
    <div class="feature-box">
        <img src="{{asset('assets/images/feature/f1.png')}}" alt="">
        <h6>Free Shipping</h6>
    </div>

    <div class="feature-box">
        <img src="{{asset('assets/images/feature/f2.png')}}" alt="">
        <h6>Online order</h6>
    </div>

    <div class="feature-box">
        <img src="{{asset('assets/images/feature/f3.png')}}" alt="">
        <h6>Save money</h6>
    </div>

    <div class="feature-box">
        <img src="{{asset('assets/images/feature/f4.png')}}" alt="">
        <h6>Promotion</h6>
    </div>

    <div class="feature-box">
        <img src="{{asset('assets/images/feature/f5.png')}}" alt="">
        <h6>Happy sell</h6>
    </div>

    <div class="feature-box">
        <img src="{{asset('assets/images/feature/f6.png')}}"alt="">
        <h6>Support</h6>
    </div>
</section>


<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
    </div>
 <div class="form">
    <input type="text" placeholder="Your email address">
    <button class="normal">Sign Up</button>
 </div>
</section>

@endsection

<script src="script.js"></script>
</body>
</html>
@extends('home.layout')
@section('content')

    
    <section id="page-header" class="blog-header">
       <h2>#readmore</h2>
        <p>Read all case studies about our products!</p>
     
        </div>
      
    </section>

   <section id="blog">
     <div class="blog-box">
        <div class="blog-img">
            <img src="{{asset('assets/images/blog/blogimg1.png')}}" alt="">
        </div>
        <div class="blog-details">
            <h4>Shirt style</h4>
            <br>
            <br>
            <p>Finding the perfect shirt is about knowing your body and your style.<br>Love classic looks! <br>

             </p>

            <br>
            
            
        </div>
     </div>

     <div class="blog-box">
        <div class="blog-img">
            <img src="{{asset('assets/images/blog/blogimg2.png')}}" alt="">
        </div>
        <div class="blog-details">
            <h4>How to style</h4>
            <br>
            <p>That drapes beautifully on every body type. <br>Dress it up with heels and statement jewelry for a night out,<br>
                or keep it casual with sandals and a denim jacket.
        </p>
            <br>
           
           
        </div>
     </div>

     <div class="blog-box">
        <div class="blog-img">
            <img src="{{asset('assets/images/blog/blogimg3.png')}}" alt="">
        </div>
        <div class="blog-details">
            <h4>Must-have Skater Girls items</h4>
            <br>
            <p>Being a skater girl is about more than just landing tricks – it's a vibe.<br>
                Top your must-have list with comfy high-top sneakers that can take a beating.
</p>
            <br>
           
           
        </div>
     </div>

     <div class="blog-box">
        <div class="blog-img">
            <img src="{{asset('assets/images/blog/blogimg4.png')}}" alt="">
        </div>
        <div class="blog-details">
            <h4>Runway-Inspired Trends</h4>
            <br>
            <p>This season, fashion embraces the thrill of the unknown with runaway-inspired trends. <br>
                Think flowy maxi dresses evoking a free-spirited escape, <br>
                paired with sturdy combat boots that hint at adventurous journeys.<br>
</p>

            <br>
            
          
        </div>
     </div>

    
   </section>



 <section id="pagination" class="section-1">
    
    <!--pagination for shopping page-->
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#"><i class='bx bx-right-arrow-alt'></i></a>

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
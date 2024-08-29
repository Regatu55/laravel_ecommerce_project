@extends('home.layout')
    @section('content')
    <section id="page-header" class="about-header">
       <h2>#Contact Us</h2><br>
        <p>Leave A Message, We Love To Hear From You!</p>
        </div>
    </section>
 
   <section id="contact-details" class="section-p1">
  <div class="details">
    <span>CONTACT INFO</span>
    <h2>Visit one of our agency locations<br> 
        or contact us today</h2>
    <h3>Head Office</h3>
  <div>
    <li>
        <i class='bx bx-map-alt'></i>
        <p>Adama</p>
    </li>
   <br>
    <li>
        <i class='bx bx-envelope'></i>
        <p>Email:genemoregatu@gmail.com</p>
    </li>
   <br>
    <li>
        <i class='bx bx-phone'></i>
        <p>Phone: +2519 55 97 85 65</p>
    </li>
    <br>
    <li>
        <i class='bx bx-clock'></i>
        <p>Monday to Saturday:2.00am to 1:00pm</p>
    </li>
  </div>
</div>
   
   <!-- Google Map for Arsi University  using iframe tag  -->
   <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.0809850296487!2d39.
    13661197425867!3d7.990573504380148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
    1!3m3!1m2!1s0x17b4e9d3d1d78789%3A0xcc7b949c2590c312!2sArsi%20University%20-%20Univarsiitii%20Arsii!5e0!3m2!1sen!2set!4v1713715520658!5m2!1sen!2set" 
    width="600" height="450" style="border:0;" allowfullscreen="" 
    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>
   </section>

   <section id="form-details">
    <form action="">
        <span>LEAVE A MESSAGE</span>
        
        <input type="text" placeholder="Your Name" required>
        <input type="text" placeholder="Your Email" required>
        <input type="text" placeholder="Subject" required>
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <!-- Global class name -->
        <button class="normal">Send Message</button>
    </form>

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
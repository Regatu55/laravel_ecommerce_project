<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>                      
    <link rel="stylesheet" href="{{asset('assets/css/stylesignup.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
</head>
<body>
<!-- Sign Up Form -->
 <div class="container" id="signUp" ">
    <h1 class="form-title" id="title">Sign Up</h1>
     {{-- $errors any()check if there are  any validation error --}}
     @if($errors->any())
     <div>
       @foreach($errors->all() as $error)
           <div>{{ $error }}</div>
       @endforeach
   </div>  

   @endif
   @if(session()->has('error'))
   <div>{{session('error')}}</div>
   @endif

   
   @if(session()->has('success'))
   <div>{{session('success')}}</div>
   @endif
    <form method="POST" action="{{route('signup.post')}}">
        @csrf
        <div class="input-group" id="nameField">
            <i class='bx bxs-user'></i>
            <input type="text" name="fname" id="fname" placeholder="Frist Name" required>
            <label for="fname">First Name</label>
           
        </div>
            <div class="input-group">
                <i class='bx bxs-user'></i>
                <input type="text" name="lname" id="fname" placeholder="Last Name" required>
                <label for="fname">Last Name</label>
              
            </div>
                <div class="input-group">
                    <i class='bx bxs-envelope'></i>
                    <input type="text" name="email" id="email" placeholder="Email" required>
                    <label for="fname">Email</label>
                   
                </div>
                <div class="input-group">
                    <i class='bx bxs-lock-alt'></i>
                  
                    <input type="password" name="password" id="password" placeholder="password" required>
                   
                    <label for="password">password</label>
                   
                </div>
           <input type="submit" class="btn" value="Sign Up" name="signUp">
        
    </form>
    <div class="links">
        <p>Already Have Account?</p>
               
                <button id="signInButton"> <a href="{{route('signin')}}">Sign In</a></button>
                </div>
 </div>
 </div>
<script src="Formscript.js"></script> 
</body>
</html>

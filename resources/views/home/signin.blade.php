<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <!-- <link rel="stylesheet" href="styleSignup.css"/> -->
    <link rel="stylesheet" href="{{asset('assets/css/stylesignup.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
    
   
</head>
<body>
   <!-- Sign In Form -->


  <div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
     {{-- $errors any()check if there are  any validation error --}}
     @if($errors->any())
     <div>
       @foreach($errors->all() as $error)
           <div>{{ $error }}</div>
       @endforeach
   </div>  

   @endif
   @if(session()->has('error'))
   <div >{{session('error')}}</div>
   @endif

   
   @if(session()->has('success'))
   <div>{{session('success')}}</div>
   @endif
      <form method="POST" action="{{route('signin.post')}}">
          @csrf
      <div class="input-group">
                    <i class='bx bxs-envelope'></i>
                    <input type="text" name="email"  placeholder="Email" required>
                    <label>Email</label>
          
                </div>

                <div class="input-group">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="password" placeholder="password" required>
                    <label>password</label>
                   

                <p class="recover">
                    <a href="#">Recover Password</a>
                </p>

        </div>
        <input type="submit" class="btn" value="Sign In" name="signIn">
    </form>
    <div class="links">
        <p>Already Have Account?</p>
               
                <button id="signUpButton"> <a href="{{route('signup')}}">Sign Up</a></button>
                </div>
 </div>
<script src="Formscript.js"></script>

</body>
</html>


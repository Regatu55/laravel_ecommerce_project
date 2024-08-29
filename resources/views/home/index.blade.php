
@extends('home.layout')
@section('content')


       <!--hero home page--> 
    
      @include('home.hero')

   
    <!--create id feature--> 
    @include('home.feature')
   
    <!--end feature-->

    <!--product section-->

    @include('home.product')
    <!--end product-->

    <!--banner-->
   @include('home.banner')
    <!--end of banner--> 


@endsection('content')
</body>
</html>
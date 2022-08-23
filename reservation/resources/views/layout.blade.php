<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" /> 
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link rel="stylesheet" href="css/style.css">
    
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/Test.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/back.css')}}">
    

    <!-- <title>Southern Online</title> -->

  </head>
  <body>
    @if(Session::has('success'))
      <div class="alert alert-success">
        {{ Session::get('success')  }}
      </div>
    @endif

  <section class="ftco-section">
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
      <img src="{{asset('images/logo.png')}}" class="rounded-circle" alt="Southern Online" width="30">&nbsp;
	    	<a class="navbar-brand" href="{{ url('/welcome')}}">THE LINK</a>
        
        <form action="{{route('search.restaurant')}}" class="searchform order-sm-start order-lg-last" method="POST">
          @csrf
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3"  name="keyword" type="search" placeholder="Search" aria-label="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
          </div>
        </form>&nbsp;
            <!--@guest 
            <button type="button" class="bi bi-cart" onClick="window.location.href='{{route('show.my.cart')}}'">My Cart</button>
            @else 
            <button type="button" class="btn btn-success" onClick="window.location.href='{{route('show.my.cart')}}'">
              My Cart 
              <span class="badge bg-danger">
              
              {{ Session::get('cartItem') }}
              </span>
            </button>
            @endguest--> 
	    	


        <!-- <form class="form-inline my-2 my-lg-0" action="{{route('search.reservation')}}" method="POST">  
        @csrf
        <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>&nbsp; 
      @guest 
      <button type="button" class="btn btn-success" onClick="window.location.href='{{route('show.my.cart')}}'">My Cart</button>
      @else 
      <button type="button" class="btn btn-success" onClick="window.location.href='{{route('show.my.cart')}}'">
        My Cart 
        <span class="badge bg-danger">
        
        {{ Session::get('cartItem') }}
        </span>
      </button>
      @endguest -->



        <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <img src="{{asset('images/logo.png')}}" class="rounded-circle" alt="Southern Online" width="30">&nbsp;
    <a class="navbar-brand" href="#">Southern Online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
	      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button> -->
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav m-auto">
              <li class="nav-item active"><a href="{{ url('/welcome')}}" class="nav-link">Home</a></li>
              <li class="nav-item active"><a href="{{ url('/viewProducts')}}" class="nav-link">Products</a></li>
              <li class="nav-item active"><a href="{{ url('/viewRestaurants')}}" class="nav-link">Restaurant</a></li>
              <li class="nav-item active"><a href="{{ url('/addContact')}}" class="nav-link">Contact</a></li>
              <li class="nav-item active"><a href="{{ url('/viewFeedbacks')}}" class="nav-link">Feedback</a></li>
	        	<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url('/aboutus')}}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admins</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{ url('/addProduct')}}">Add Products</a>
                <a class="dropdown-item" href="{{ url('/showProduct')}}">Show Products</a>
                <a class="dropdown-item" href="{{ url('/addRestaurant')}}">Add Restaurant</a>
                <a class="dropdown-item" href="{{ url('/showRestaurant')}}" method="POST">Show Restaurant</a>
                <a class="dropdown-item" href="{{ url('/showDeposit')}}" method="POST">Show Deposits</a>
                <a class="dropdown-item" href="{{ url('/showRefund')}}" method="POST">Show Refund</a>                   
                <a class="dropdown-item" href="{{ url('/showReservation')}}">Show reservation</a>
                <a class="dropdown-item" href="{{ url('/showPayment')}}">Show Payment</a>
                <a class="dropdown-item" href="{{ url('/showContact')}}">Show Contacts</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('/addAdmin')}}">Add Admin</a>
                <a class="dropdown-item" href="{{ url('/showAdmin')}}">Show Admin</a>
                <a class="dropdown-item" href="{{ url('/viewAdmins')}}">Admin</a>
              </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="{{ url('/aboutus')}}" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{ url('/addFeedback')}}" method="POST">Add Feedback</a>
                <a class="dropdown-item" href="{{ url('/viewReservations')}}" method="POST">My Reservations</a>
                <a class="dropdown-item" href="{{ url('/viewDeposits')}}" method="POST">My deposits</a> 
                <a class="dropdown-item" href="{{ url('/viewPayments')}}" method="POST">My Payment</a>
                <a class="dropdown-item" href="{{ url('/viewRefunds')}}" method="POST">My Refund Deposit</a> 
              </div>
            </li>
	        </ul>
	      </div>
        @guest 
            <button type="button" class="bi bi-cart" onClick="window.location.href='{{route('show.my.cart')}}'">My Cart</button>
            @else 
            <button type="button" class="btn btn-success" onClick="window.location.href='{{route('show.my.cart')}}'">
              My Cart 
              <span class="badge bg-danger">
              
              {{ Session::get('cartItem') }}
              </span>
            </button>
            @endguest 
	    </div>
    </div>
  </nav>

  
@yield('content')


 <!-- footer -->
 <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <footer class="site-footer">  
   <div class="container">  
    <div class="row">  
     <div class="col-sm-12 col-md-6">  
      <h6>About</h6>  
      <p class="text-justify">THE LiNK Reservation And Ordering Systems To Assist Our Users In Resolving Their Dining Problems More Effectively. User Also Can Use Internet Payment, And The Website Is Available Via An App. Ordering On Several Platforms, Including The PC Webpage Or Mobile Phone, Our Website Provides Users With The Convenience Of Making Reservations Anytime, Anywhere.</p>
     </div>  
     <div class="col-6 col-md-3">  
      <h6>Categories</h6>  
      <ul class="footer-links ">  
       <li><a href="#">Website Design</a></li>  
       <li><a href="#">UI Design</a></li>  
       <li><a href="#">Web Development</a></li>  
       <li><a href="#">Video Editor</a></li>  
       <li><a href="#">Theme Creator</a></li>  
       <li><a href="#">Templates</a></li>  
      </ul>  
     </div>  
     <div class="col-6 col-md-3">  
      <h6>Quick Links</h6>  
      <ul class="footer-links">  
       <li><a href="#">About Us</a></li>  
       <li><a href="{{ url('/addContact')}}">Contact Us</a></li>
       <li><a href="#">Contribute</a></li>  
       <li><a href="#">Privacy Policy</a></li>  
       <li><a href="#">Sitemap</a></li>  
      </ul>  
     </div>  
    </div>  
    <hr class="small">  
   </div>  
   <div class="container">  
    <div class="row">  
     <div class="col-md-8 col-sm-6 col-12">  
     <div class="copyright-text"><span>Copyright © 2022</span> | THE LiNK</div> 
      </p>  
     </div>  
     <div class="col-md-4 col-sm-6 col-12">  
      <ul class="social-icons">  
       <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>  
       <li><a class="instagram" href="www.instagram.com"><i class="fab fa-instagram"></i></a></li>
      </ul>  
     </div>  
    </div>  
   </div>  
  </footer> 
<!-- Footer -->

 <!-- end footer --> 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

  <!-- custom js file link  -->
  <script src="js/script.js"></script>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>
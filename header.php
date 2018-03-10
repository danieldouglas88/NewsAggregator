<?php session_start([
    'cookie_lifetime' => 600,
]); 
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Your trusted source for news!</title>
      
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
     <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">
      
      <style>
      
      button{
	margin-right: 20px;
}
      </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">News Aggregator App</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
       
            </li>        
                          <li class="nav-item">
                         <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">News 1
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">WORLD</a></li>
      <li><a href="#loc">LOCAL</a></li>
      <li><a href="#us">US</a></li>
    </ul>
  </div>   
</li>
              <li class="nav-item">
              <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">News 2
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#tech">TECHNOLOGY</a></li>
      <li><a href="#health">HEALTH</a></li>
      <li><a href="#business">BUSINESS</a></li>
    </ul>
  </div>
              </li>
              
        <li class="nav-item">
              <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">News 3 
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#sports">SPORTS</a></li>
      <li><a href="#sci">SCIENCE</a></li>
      <li><a href="#ent">ENTERTAINMENT</a></li>
    </ul>
  </div>
  </li>
              
          </ul>
          </div>
          
          <a href="#db"><button class="btn btn-primary">List/View</button></a>
      </div>
    </nav>      
      
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">NEWS
        <small>Your trusted source.</small>
      </h1>
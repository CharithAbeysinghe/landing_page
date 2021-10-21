<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Landing Page</title>
   
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
     
   </head>
   <body>
<style>
    body {
    padding-top: 56px;
    }
    .jumbotron {
    background: url("img/img.jpg") no-repeat center;
    }
    .btn-primary {
        background-color: #c60063;
        border-color: #c60063;
    }
    .btn-secondary {
        background-color: transparent;
        border-color: #c60063;
        color: #c60063;
    }
    #contact {
    background: url("img/img.jpg") no-repeat center;
    }
</style>
       <!-- Here comes the rest of the code -->

       <script src="scripts/jquery.min.js"></script>
       <script src="scripts/bootstrap.bundle.min.js"></script>
   </body>
</html>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Hello World</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" 
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
        aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
            
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home 
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header class="jumbotron jumbotron-fluid">
    <div class="container-fluid text-center"> 
       <h1 class="display-3">The Best Solution for Your Business</h1>
       <p class="lead pb-4">We help you maximize performance and build a healthy organization.</p>
       <p><a href="#" class="btn btn-primary btn-lg" role="button">Learn More</a></p>
    </div>
</header>
<section id="services" class="container">
   <h2 class="display-4 text-center mt-5 mb-3">Our Services</h2>
   
   <div class="row text-center">
      <div class="col-md-4 mb-4">
         <div class="card h-100">
            <img class="card-img-top" src="img/img.jpg" alt="Design">
            <div class="card-body">
               <h4 class="card-title">Design</h4>
               <p class="card-text">Deliver the best user experience 
               with our carefully designed responsive websites and applications!</p>
            </div>
            <div class="card-footer py-4">
               <a href="#" class="btn btn-secondary">See portfolio &raquo;</a>
            </div>
         </div>
      </div>
      
      <div class="col-md-4 mb-4">
         <div class="card h-100">
            <img class="card-img-top" src="img/img.jpg" alt="Development">
            <div class="card-body">
               <h4 class="card-title">Development</h4>
                  <p class="card-text">You need software that works on every device. 
                  Leverage the latest technologies and the most powerful tools!</p>
            </div>
            <div class="card-footer py-4">
               <a href="#" class="btn btn-secondary">See projects &raquo;</a>
            </div>
         </div>
      </div>
      
      <div class="col-md-4 mb-4">
         <div class="card h-100">
            <img class="card-img-top" src="img/img.jpg" alt="Analytics">
            <div class="card-body">
               <h4 class="card-title">Analytics</h4>
               <p class="card-text">Consult our experts to set up proper goals and 
               find the best stack for your next application!</p>
            </div>
            <div class="card-footer py-4">
               <a href="#" class="btn btn-secondary">See testimonials &raquo;</a>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="container-fluid text-center py-4 mt-4" id="contact">
   <h2 class="display-4 pb-4 my-4">Get in touch with us today!</h2>
   <p class="lead pb-3">Send us a message and we will get back to 
   you as soon as possible.</p>
   <a href="#" class="btn btn-primary btn-lg mb-4" role="button">Contact us</a>
</section>
<footer class="py-3 bg-light">
   <div class="container">
      <p class="text-center">Copyright &copy; Hello World 2021</p>
   </div>
</footer>
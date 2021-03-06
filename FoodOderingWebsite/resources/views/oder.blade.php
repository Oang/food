<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="css/bootstrap.css">
  
    <link href="{{ asset('frontend') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('frontend') }}/img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="{{ asset('frontend') }}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
  <link href="{{ asset('frontend') }}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{ asset('frontend') }}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  
  <link href="{{ asset('frontend') }}/css/style.css" rel="stylesheet">

 

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>  
    <script src="{{ asset('frontend') }}/lib/jquery/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/jquery/jquery-migrate.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/popper/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/easing/easing.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/counterup/jquery.waypoints.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/counterup/jquery.counterup.js"></script>
    <script src="{{ asset('frontend') }}/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/lightbox/js/lightbox.min.js"></script>
    <script src="{{ asset('frontend') }}/lib/typed/typed.min.js"></script>
    
    <script src="{{ asset('frontend') }}/contactform/contactform.js"></script>
  
    
    <script src="{{ asset('frontend') }}/js/main.js"></script>
 

  

   </head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="" class="navbar-brand">FOOD</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#ccs"><span class="navbar-toggler-icon"></span></button> 
        <div class="collapse navbar-collapse justify-content-end" id="ccs">
    
        <ul class="navbar-nav">
        <li class="nav-item"><a href="home" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="types" class="nav-link">Types</a></li>
        <li class="nav-item"><a href="service" class="nav-link">Service</a></li>
        <li class="nav-item"><a href="about" class="nav-link">About</a></li>
        <li class="nav-item"><a href="oder" class="nav-link">Oder</a></li>
        </div>
        
    </nav><br><br>
     <div class="container">
         <div class="carousel slide" data-ride="carousel">
                <div class="carousel slide carousel-fade" data-ride="carousel" id="p">
                        <ol class="carousel-indicators">
                            <li data-target="#p" data-slide-to="0"></li>
                            <li data-target="#p" data-slide-to="1"></li>
                            <li data-target="#p" data-slide-to="2"></li>
                            
                        </ol>
             <div class="carousel-inner">
                 <div class="carousel-item active" >
                     <img src="img/10.jpg" class="d-block w-100" alt="">
                 </div>
                 <div class="carousel-item " >
                        <img src="img/bg_3.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item ">
                            <img src="img/12.jpg" class="d-block w-100" alt="">
                        </div>
                     </div>
                     <a href="#p" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span></a>
                        <a href="#p" class="carousel-control-next" data-slide="next">
                                <span class="carousel-control-next-icon"></span></a>
                        </a>
         </div>
        
       
    </div>
    </div><br><br>
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
            <h1 class="mb-4">Our Meanu</h1>
            <p>Oder and test it...</p>
     <div class="line-mf"></div></div>
          
     
<section class="paralax-mf bg-image sect-mt4 route" style="background-image: url(img/25.jpg)">

  
  <div class="container">
    
      
        <section class="ftco-section contact-section">
            <div class="container mt-5">
              <div class="row block-9">
                          <div class="col-md-4 contact-info ftco-animate">
                              <div class="row">
                                  <div class="col-md-12 mb-4">
                        <h2 class="h4">Contact Information</h2>
                      </div>
                      <div class="col-md-12 mb-3">
                        <p><span>Address:</span> Golden yummy Shop,Colombo 09</p>
                      </div>
                      <div class="col-md-12 mb-3">
                        <p><span>Phone:</span>0112234567</p>
                      </div>
                      <div class="col-md-12 mb-3">
                        <p><span>Email:</span> Golden yummy@gmail.com</p>
                      </div>
                      <div class="col-md-12 mb-3">
                        <p><span>Website:</span>yummy.com</p>
                      </div>
                              </div>
                          </div>
                          <div class="col-md-1"></div>
                <div class="col-md-6 ftco-animate">
                   
            
                  <form action="/save" method="post" class="contact-form">
                    {{csrf_field()}}
                      <div class="row">
                          <div class="col-12">
                          <div class="form-group">
                              @if(count($errors)>0)
                              @foreach($errors->all() as $error)
                              <div class="alert alert-danger ">
                                  {{$error}}</div>
                                  @endforeach 
                                  @endif
                      
                              <input type="text" name="name" class="form-control" placeholder="Your Name">
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="form-group">
                            <input type="text"  name="email" class="form-control" placeholder="Your Email">
                          </div>
                          </div>
                    </div>
                    <div class="form-group">
                      <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                      <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validation"></div></div>
                    <div class="form-group">
                      <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                  
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="footer-copyright text-center py-3">© 2018 Copyright:
            Desing by Sasitha vismith.
            </div>
          </section>
      </div>
    </div>
   </div>
 </section>
 

</body>
</html>
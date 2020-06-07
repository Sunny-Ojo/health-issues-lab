<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Health Lab | Welcome</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="{{asset('css1/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css1/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css1/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a class="navbar-brand" style="color:white" href="#" >Health Lab</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner">Home</a></li>
                <li class=""><a href="#issues">Health Issues</a></li>
                <li class=""><a href="#about">About</a></li>
                <li class=""><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            @if (session()->has('success'))
            <div class=" bglight-blue p-3" style="color:white;padding:3px"> {{session()->get('success')}}</div>
                @endif
            <div class="banner-logo text-center">
               <h1 style="color: red">Health Lab</h1>
            </div>
            <div class="banner-text text-center">
              <h1 class="white project-info">Health Lab at your desk!</h1>
              <p>We Help People know,  <br>and become aware of several Health Medical Issues.</p>
              <a href="#issues" class="btn btn-appoint">Get Started.</a>
            </div>
            <div class="overlay-detail text-center">
              <a href="#issues"><i class="fa fa-angle-down"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->
  <!--service-->



  <!--cta-->
  <section id="issues" class="section-padding">
    <div class="container">
   <div class="row  " >
       <div class="col-md-8"style="margin:0, auto;">
           <div class="card">
               <div class="card-header">Search for a health issue</div>
               <div class="card-body">
                <form action="{{route('issues.search')}}" method="POST" class="myform">
                  @csrf
                    @error('issue') <li style="color: red">{{$message}} @enderror</li>
                      <input type="text" class="form-control" placeholder="select Issue">
                      <input type="submit" value="search" class="btn btn-primary search_more">
                    </form>
               </div>
           </div>
       </div>
   </div>
    </div>
  </section>


  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="section-title">
            <h2 class="head-title lg-line">About Health Lab</h2>
            <hr class="botm-line">
            <p class="sec-para">We Help People know, and become aware of several Health Medical Issues.</p>
          </div>
        </div>
        <div class="col-md-9 col-sm-8 col-xs-12">
          <div style="visibility: visible;" class="col-sm-9 more-features-box">
            <div class="more-features-box-text">
              <div class="more-features-box-text-description">
                <h2>Why You Should Be Concerned About  Health Issues</h2>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>It's extremely important you know your Health Issues.</h3>
                <p>Knowing your Health issues helps you to know what you are up against and know the right steps to take.</p>
              </div>
            </div>
            <div class="more-features-box-text">
              <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
              <div class="more-features-box-text-description">
                <h3>It's also important you stay free from all Health issues.</h3>
                <p>When you know your Health issues, it becomes more easier for you to tackle it and also take the right steps and precautions in becoming free from them.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ about-->

  <!--cta 2-->
  <section id="cta-2" class="section-padding">
    <div class="container">
      <div class=" row">
        <div class="col-md-2"></div>
        <div class="text-right-md col-md-4 col-sm-4">
          <h2 class="section-title white lg-line"> A few words<br> about us </h2>
        </div>
        <div class="col-md-4 col-sm-5">
         Health Lab is a very useful website that helps people become aware of several health issues just by searching for the name of the issue. They have up to 420 health issues listed down.
          <p class="text-right text-primary"><i>— Health Lab</i></p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--contact-->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="ser-title">Contact us</h2>
          <hr class="botm-line">
        </div>
        <div class="col-md-4 col-sm-4">
          <h3>Contact Info</h3>
          <div class="space"></div>
          <p><i class="fa fa-map-marker fa-fw pull-left fa-2x"></i>Lagos State<br> Nigeria</p>
          <div class="space"></div>
          <p><i class="fa fa-envelope-o fa-fw pull-left fa-2x"></i><a href="mailto://jokusunnyojo@gmail.com">Njokusunnyojo@gmail.com</a></p>
          <div class="space"></div>
          <p><i class="fa fa-phone fa-fw pull-left fa-2x"></i><a href="tel://08121225275">08121225275</a></p>
</div>
        <div class="col-md-8 col-sm-8 marb20">
          <div class="contact-info">
            <h3 class="cnt-ttl">Get In Touch With Us</h3>
            <div class="space"></div>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="{{route('contact.form')}}" method="post" role="form" class=>
              @csrf
                <div class="form-group">
                <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                @error('name') <li class="text-danger">{{$message}}</li>@enderror
              </div>
              <div class="form-group">
                <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                @error('email') <li class="text-danger">{{$message}}</li>@enderror
              </div>
              <div class="form-group">
                <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                @error('subject') <li class="text-danger">{{$message}}</li>@enderror
              </div>
              <div class="form-group">
                <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                @error('message') <li class="text-danger">{{$message}}</li>@enderror
              </div>

              <div class="form-action">
                <button type="submit" class="btn btn-form">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ contact-->
  <!--footer-->
  <footer id="footer">
    <div class="top-footer">

              <!--footer-->
              <footer id="footer">
                <div class="top-footer">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                          <h4 class="white no-padding">About Us</h4>
                        </div>
                        <div class="info-sec">
                          <p>We Help People know, and become aware of several Health Medical Issues.</p>
                        </div>

          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Quick Links</h4>
            </div>

            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="#banner"><i class="fa fa-circle"></i>Home</a></li>
                <li><a href="#issues"><i class="fa fa-circle"></i>Health Issues</a></li>
                <li><a href="#contact"><i class="fa fa-circle"></i>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Follow us</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue"><a href="https://web.facebook.com/SunnyOjoNjoku" target="blank"><i class="fa fa-facebook"></i></a></li>
                 <li class="bgdark-blue"><a href="https://www.linkedin.com/in/sunny-ojo-7635221aa/" target="blank"><i class="fa fa-linkedin"></i></a></li>
               <li class="bglight-blue"><a href="https://twitter.com/SunnyOjo4" target="blank"><i class="fa fa-twitter"></i></a> </li>
                <li class="bgred"><a href="https://www.instagram.com/ojoskid_sunny/" target="blank"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            © Copyright SunshineCoder - {{ date('Y') }}. All Rights Reserved.
            <div class="credits">

              Template by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->

  <script src="{{asset('js1/jquery.min.js')}}"></script>
  <script src="{{asset('js1/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js1/bootstrap.min.js')}}"></script>
  <script src="{{asset('js1/custom.js')}}"></script>
  <script src="{{asset('contactform/contactform.js')}}"></script>

</body>

</html>

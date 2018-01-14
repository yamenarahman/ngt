<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>New General Trade</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">

    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
    <link href="favicon.ico" rel="shortcut icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/lib/animate-css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-popover-x.min.css') }}">
    <link href="/css/style.css" rel="stylesheet">
</head>

<body>
    <div id="preloader"></div>

    <!--==========================
  Hero Section
  ============================-->
    <section id="hero">
        <div class="hero-container">
            <div class="wow fadeIn">
                <div class="hero-logo">
                    {{--  <img class="" src="/img/ngt.png" alt="ngt">  --}}
                    <h1><a href="#">New General Trade</a></h1>
                </div>

                <h1>Leading tire importer and distributer</h1>
                <h2>We create
                    <span class="rotating">beautiful graphics, functional websites, working mobile apps</span>
                </h2>
                <div class="actions">
                    <a href="#about" class="btn-get-started">Get Strated</a>
                    <a href="#services" class="btn-services">Our Services</a>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
  Header Section
  ============================-->
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
                {{--  <a href="#hero">
                    <img src="/img/logo.png" alt="" title="" alt="logo">
                </a>  --}}
                <!-- Uncomment below if you prefer to use a text image -->
                <h1><a href="#hero">NGT</a></h1>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active">
                        <a href="#hero">Home</a>
                    </li>
                    <li>
                        <a href="#about">Who we are</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio">Products</a>
                    </li>
                    <li>
                        <a href="#testimonials">Partners</a>
                    </li>
                    <li>
                        <a href="#team">Team</a>
                    </li>
                    {{--  <li class="menu-has-children">
                        <a href="">Drop Down</a>
                        <ul>
                            <li>
                                <a href="#">Drop Down 1</a>
                            </li>
                            <li class="menu-has-children">
                                <a href="#">Drop Down 2</a>
                                <ul>
                                    <li>
                                        <a href="#">Deep Drop Down 1</a>
                                    </li>
                                    <li>
                                        <a href="#">Deep Drop Down 2</a>
                                    </li>
                                    <li>
                                        <a href="#">Deep Drop Down 3</a>
                                    </li>
                                    <li>
                                        <a href="#">Deep Drop Down 4</a>
                                    </li>
                                    <li>
                                        <a href="#">Deep Drop Down 5</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Drop Down 3</a>
                            </li>
                            <li>
                                <a href="#">Drop Down 4</a>
                            </li>
                            <li>
                                <a href="#">Drop Down 5</a>
                            </li>
                        </ul>
                    </li>  --}}
                    <li>
                        <a href="#contact">Contact Us</a>
                    </li>
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header>
    <!-- #header -->

    <!--==========================
  About Section
  ============================-->
    <section id="about">
        <div class="container wow fadeInUp">
            <div class="col-md-12">
                <h3 class="section-title">Who we are</h3>
                <div class="section-title-divider"></div>
                <p class="section-description">
                    <h3>
                        <strong>New General Trade</strong> is one of the pioneers and leading tire importers and distributers in Egypt since 1947.
                    </h3>
                </p>
            </div>
        </div>
        <div class="container about-container wow fadeInUp">
            <div class="row">
                <div class="col-md-6 col-md-push-6 about-content">
                    <p class="about-text">
                        <strong>New General Trade</strong> is a subsidiary sharing association company on family business that was established on 2008 under the umbrella of the <strong>Fouad Nassar</strong> companies that started during the 1940s.
                    </p>
                    <p class="about-text">
                        <strong>Mr. Fouad Nassar</strong> started working in the tire business in Egypt by buying and re-selling old and used tires in several Egyptian governances. By 1958, Mr. Fouad Nassar started trading and retailing in brand new tires specializing in TBB and OTR tires.
                    </p>
                    <p class="about-text">
                        When his son, <strong>Mr. Mohamed</strong> joined the family business in 1984, a new strategy took place which aimed to expand the company’s practices in the tire business especially in importing tires and exporting to neighboring countries.
                    </p>
                    <p class="about-text">
                        The company was able to secure exclusivity deals with a number of high quality tire manufacturers such as Nokian Tires in 1997, Apollo Tires in 2001 and Apollo International in 2004. Now <strong>New General Trade</strong> is one of the leading tire importers in the Egyptian market.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
  Services Section
  ============================-->
    <section id="services">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Our Services</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 service-item">
                    <div class="service-icon">
                        <i class="fa fa-desktop"></i>
                    </div>
                    <h4 class="service-title">
                        <a href="">Lorem Ipsum</a>
                    </h4>
                    <p class="service-description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate
                        non provident</p>
                </div>
                <div class="col-md-4 service-item">
                    <div class="service-icon">
                        <i class="fa fa-bar-chart"></i>
                    </div>
                    <h4 class="service-title">
                        <a href="">Dolor Sitema</a>
                    </h4>
                    <p class="service-description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad
                        limino ata</p>
                </div>
                <div class="col-md-4 service-item">
                    <div class="service-icon">
                        <i class="fa fa-paper-plane"></i>
                    </div>
                    <h4 class="service-title">
                        <a href="">Sed ut perspiciatis</a>
                    </h4>
                    <p class="service-description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                </div>
                <div class="col-md-4 service-item">
                    <div class="service-icon">
                        <i class="fa fa-photo"></i>
                    </div>
                    <h4 class="service-title">
                        <a href="">Magni Dolores</a>
                    </h4>
                    <p class="service-description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                        laborum</p>
                </div>
                <div class="col-md-4 service-item">
                    <div class="service-icon">
                        <i class="fa fa-road"></i>
                    </div>
                    <h4 class="service-title">
                        <a href="">Nemo Enim</a>
                    </h4>
                    <p class="service-description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti
                        atque</p>
                </div>
                <div class="col-md-4 service-item">
                    <div class="service-icon">
                        <i class="fa fa-shopping-bag"></i>
                    </div>
                    <h4 class="service-title">
                        <a href="">Eiusmod Tempor</a>
                    </h4>
                    <p class="service-description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
  Subscribe Section
  ============================-->
    <section id="subscribe">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="subscribe-title">Subscribe For Updates</h3>
                    <p class="subscribe-text">Join our 1000+ subscribers to receive our news, product announcements and much
                        more!</p>
                </div>
                <div class="col-md-4 subscribe-btn-container">
                    <form action="{{ url('/subscribe') }}" method="POST" id="subscription-form">
                        {{ csrf_field() }}
                        <input type="email" class="form-control" name="email" id="subscriber-email" placeholder="Your Email" required>
                    </form>
                    <a class="subscribe-btn" onclick="subscribe()">Subscribe to newsletter</a>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
  Products Section
  ============================-->
    <section id="portfolio">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Products</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">New General Trade offers a variety of products</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-1.jpg);">
                        <div class="details">
                            <h4>OTR</h4>
                            <span><strong>Experts</strong> in selling and advising the right industrial tires for different applications such as ports and factories.</span>
                            <span><strong>Experts</strong> in selling and advising the right earthmoving tires for different applications such as quarries and mines.</span>
                            <span><strong>Supplying</strong> and distributing the following brands: Bridgestone, Triangle, NGT Advance, Armour and Ornet Tires.</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-2.jpg);">
                        <div class="details">
                            <h4>TBB/TBR</h4>
                            <span><strong>Offering</strong> the best Sri Lankan bias tires from Ceat Factory: United Brand.</span>
                            <span><strong>Selling</strong> the best innovative technology in radial tires from the following brands: Bridgestone, Pirelli, Pharos, Aeolus, Ornet and Kapsen.</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-3.jpg);">
                        <div class="details">
                            <h4>LTB/LTR</h4>
                            <span><strong>Exclusively</strong> offering the famous ORNET OR707 from India and United tires from Sri Lanka.</span>
                            <span><strong>Distributing</strong> the famous Bridgestone and Maxxis tires, in addition to, Kapsen White Side Wall tires.</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-4.jpg);">
                        <div class="details">
                            <h4>PCR</h4>
                            <span><strong>Expertly</strong> advising and selling the most suitable size and pattern for each car.</span>
                            <span><strong>Distributing</strong> Bridgestone and Sumitimo in the UHP category.</span>
                            <span><strong>Supplying</strong> economic tires from Habilead, United, GT and Kumho.</span>
                            <span><strong>For information</strong> on price and availability in Egypt call: 0224250807</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a class="portfolio-item" style="background-image: url(img/portfolio-5.jpg);">
                        <div class="details">
                            <h4>3 Wheelers</h4>
                            <span><strong>Covering</strong> the market need through offering our own “AMMAR” and “Innovative” brands from India.</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
  Testimonials Section
  ============================-->
    <section id="testimonials">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Partners</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">Erdo lide, nora porodo filece, salvam esse se, quod concedimus ses haec dicturum fuisse</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="profile">
                        <div class="pic">
                            <img src="img/client-1.jpg" alt="">
                        </div>
                        <h4>Saul Goodman</h4>
                        <span>Lawless Inc</span>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="quote">
                        <b>
                            <img src="img/quote_sign_left.png" alt="">
                        </b> Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium
                        quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        <small>
                            <img src="img/quote_sign_right.png" alt="">
                        </small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="quote">
                        <b>
                            <img src="img/quote_sign_left.png" alt="">
                        </b> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis architecto beatae.
                        <small>
                            <img src="img/quote_sign_right.png" alt="">
                        </small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="profile">
                        <div class="pic">
                            <img src="img/client-2.jpg" alt="">
                        </div>
                        <h4>Sara Wilsson</h4>
                        <span>Odeo Inc</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--==========================
  Team Section
  ============================-->
    <section id="team">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Our Team</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="member">
                        <div class="pic">
                            <img src="img/team-1.jpg" alt="">
                        </div>
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                        <div class="social">
                            <a href="">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="member">
                        <div class="pic">
                            <img src="img/team-2.jpg" alt="">
                        </div>
                        <h4>Sarah Jhinson</h4>
                        <span>Product Manager</span>
                        <div class="social">
                            <a href="">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="member">
                        <div class="pic">
                            <img src="img/team-3.jpg" alt="">
                        </div>
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                        <div class="social">
                            <a href="">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="member">
                        <div class="pic">
                            <img src="img/team-4.jpg" alt="">
                        </div>
                        <h4>Amanda Jepson</h4>
                        <span>Accountant</span>
                        <div class="social">
                            <a href="">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
  Contact Section
  ============================-->
    <section id="contact">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Contact Us</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">Please don't hesitate to send your inquiries below</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-push-2">
                    <div class="info">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p>HeadQuarters: U104 B6, Capital Business Park
                                <br>Sheikh Zayed City, Giza, Egypt
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p>Ghamra Branch: 454 Port Said St.
                                <br>Ghamra, Cairo, Egypt
                            </p>
                        </div>
                        <div>
                            <i class="fa fa-envelope"></i>
                            <p>marketing@ngtammar.com</p>
                        </div>
                        <div>
                            <i class="fa fa-phone"></i>
                            <p>+20 238 653 428</p>
                        </div>
                        <div>
                            <i class="fa fa-phone"></i>
                            <p>+20 109 247 7791</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-md-push-2">
                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>
                        <form action="{{ url('/sendmessage') }}" method="POST" role="form" class="contactForm">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" required>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" required>
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us" placeholder="Message" required></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==========================
  Footer
============================-->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        &copy; Copyright {{ now()->year }}
                        <strong>New General Trade</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        {{--  <a href="https://bootstrapmade.com/">BootstrapMade</a>  --}}
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <!-- Required JavaScript Libraries -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/lib/jquery/jquery.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="/lib/superfish/hoverIntent.js"></script>
    <script src="/lib/superfish/superfish.min.js"></script>
    <script src="/lib/morphext/morphext.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/stickyjs/sticky.js"></script>
    <script src="/lib/easing/easing.js"></script>
    <script src="/js/custom.js"></script>
    <script src="/js/contactform.js"></script>
    <script src="/js/bootstrap-popover-x.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function subscribe() {
            var email = $('#subscriber-email');
            if(email.val() == '') {
                swal("Ops!", "Please fill your email!", "error");
            } else {
                event.preventDefault();
                $('#subscription-form').submit();
            }
        }

        function validateEmail (email) {

        }
    </script>
</body>

</html>

{{--  function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validate() {
  $("#result").text("");
  var email = $("#email").val();
  if (validateEmail(email)) {
    $("#result").text(email + " is valid :)");
    $("#result").css("color", "green");
  } else {
    $("#result").text(email + " is not valid :(");
    $("#result").css("color", "red");
  }
  return false;
}

$("#validate").bind("click", validate);  --}}

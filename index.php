<?php 
$error = ""; $successMessage = "";

if ($_POST) {
    if (!$_POST["form-email"]) {
    $error .= "An email address is required.<br>";
    }

    if (!$_POST["form-message"]) {
        $error .= "The content field is required.<br>";
    }

    if (!$_POST["form-subject"]) {
        $error .= "The subject field is required.<br>";
    }

    if ($_POST['email'] && filter_var($_POST["form-email"], FILTER_VALIDATE_EMAIL) === false) {
        $error .= "The email address is invalid.<br>";
    }

    if ($error != "") {
        $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:<p>' .$error. '</div>';
    }

    else {
        $emailTo = "g.brown.20@hotmail.com";
        $subject = $_POST['form-subject'];
        $message = $_POST['form-message'];
        $headers = "From:" .$_POST['form-email'];

        if (mail($emailTo, $subject, $message, $headers)) {
            $successMessage = '<div class="alert alert-success" role="alert"> Your message was sent, we\'ll get back to you ASAP!</div>';
        }
        else {
            $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gerald Brown Designs</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="KW_progressContainer">
        <div class="KW_progressBar">

        </div>
    </div>
    <div class="page">
        <!-- <nav id="colorlib-main-nav" role="navigation">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
            <div class="js-fullheight colorlib-table">
                 <div class="img" style="background-image: url(images/author-2.jpg);"></div>
                <div class="colorlib-table-cell js-fullheight">
                    <div class="row no-gutters">
                        <div class="col-md-12 text-center">
                            <h1 class="mb-4"><a href="index.html" class="logo">Gerald</a></h1>
                            <ul>
                                <li class="active"><a href="index.html"><span><small>01</small>Home</span></a></li>
                                <li><a href="#services"><span><small>02</small>Services</span></a></li>
                                <li><a href="#portfolio"><span><small>03</small>Portfolio</span></a></li>
                                <li><a href="#contact"><span><small>04</small>Contact</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav> -->

        <div id="colorlib-page">
            <header>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="colorlib-navbar-brand">
                                <a class="colorlib-logo" href="index.html"><span class="logo-img" style="background-image: url(images/gb-small.jpg);"></span>Gerald Brown</a>
                            </div>
                            <!-- <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a> -->
                        </div>
                    </div>
                </div>
            </header>

            <section class="home-slider owl-carousel js-fullheight">
                <div class="slider-item js-fullheight">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">
                            <div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                                <p><a href="#" class="scroll">Hello! I'm</a></p>
                                <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Gerald Brown</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slider-item js-fullheight">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row slider-text align-items-center text-center justify-content-center" data-scrollax-parent="true">
                            <div class="col-md-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                                <p><a href="#" class="scroll">I'm</a></p>
                                <h1 class="mb-3" data-scrollax="properties: {translateY: '30%', opacity: 1.6}">A Full Stack Web Developer</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END slider -->

            <section class="ftco-section about-section" id="aboutme">
                <div class="container">
                    <div class="row d-flex" data-scrollax-parent="true">
                        <div class="col-md-4 author-img" style="background-image: url(images/gb-pic.jpg);" data-scrollax=" properties: { translateY: '-70%'}"></div>
                        <div class="col-md-2"></div>
                        <div class="col-md-6 wrap ftco-animate">
                            <div class="about-desc">
                                <h1 class="bold-text">About</h1>
                                <div class="p-5">
                                    <h2 class="mb-5">Hi! I'm Gerald Brown</h2>
                                    <p>I'm highly motivated with an eagerness to learn and grow. Currently I'm a student Npower with an emphasis on full-stack web development. Pursing an entry level full-stack position with an organization that will assist
                                        in my training and growth within the Web Development field.</p>
                                </div>
                            </div>
                            <!-- <input type="button" class="contact-button ml-5" value="Contact Me" /> -->
                            <button class="contact-button ml-5"><a href="#form">Contact Me</a></button class="contact-button ml-5">
                        </div>
                    </div>
            </section>





            <section class="ftco-section" id="services">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-5">
                        <div class="col-md-7 text-center heading-section ftco-animate">
                            <span>What i do</span>
                            <h2>My services</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services p-3 py-4 d-block text-center">
                                <div class="icon mb-3"><span class="icon-brush"></span></div>
                                <div class="media-body">
                                    <h3 class="heading">HTML5</h3>
                                    <h3 class="heading">CSS3</h3>
                                    <h3 class="heading">JavaScript</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services p-3 py-4 d-block text-center">
                                <div class="icon mb-3"><span class="icon-gears"></span></div>
                                <div class="media-body">
                                    <h3 class="heading">MySQL</h3>
                                    <h3 class="heading">PHP</h3>
                                    <h3 class="heading">Python</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                            <div class="media block-6 services p-3 py-4 d-block text-center">
                                <div class="icon mb-3"><span class="icon-layers"></span></div>
                                <div class="media-body">
                                    <h3 class="heading">Process Planning</h3>
                                    <h3 class="heading">Product Strategy</h3>
                                    <h3 class="heading">Responsive Design</h3>
                                    <h3 class="heading">UI/UX Design</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ftco-section" id="portfolio">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-5">
                        <div class="col-md-7 text-center heading-section ftco-animate">
                            <span>Portfolio</span>
                            <h2>Recent Projects</h2>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
                            <a href="../earldouglasnationalpark/index.html" class="image d-flex justify-content-center align-items-center" style="background-image: url('images/ednp.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
                                <div class="icon d-flex text-center justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <div class="text">
                                <h4 class="subheading">Restrictive Requirements Site</h4>
                                <h2 class="heading"><a href="../earldouglasnationalpark/index.html">Earl Douglas National Park</a></h2>
                                <p>This site was created with specific requirements from my instructor. This site is a fake National Park that I created called Earl Douglass National Park which is a dinosaur themed park. </p>
                                <p><a href="../earldouglasnationalpark/index.html">View Project</a></p>
                            </div>
                        </div>
                        <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
                            <a href="../legacy/index.html" class="image order-2 d-flex justify-content-center align-items-center" style="background-image: url('images/legacy.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
                                <div class="icon d-flex text-center justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <div class="text order-1">
                                <h4 class="subheading">Business Site</h4>
                                <h2 class="heading"><a href="../legacy/index.html">Legacy</a></h2>
                                <p>This a business site that I came up with. Similar to 23andMe and ancestry this site is about your family line. The difference is that this site is foucused on the future and what you can pass down to your desendants.</p>
                                <p><a href="../legacy/index.html">View Project</a></p>
                            </div>
                        </div>
                        <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
                            <a href="../legacylandingapp/index.html" class="image d-flex justify-content-center align-items-center" style="background-image: url('images/legacylanding.jpg'); " data-scrollax=" properties: { translateY: '-30%'}">
                                <div class="icon d-flex text-center justify-content-center align-items-center">
                                    <span class="icon-search"></span>
                                </div>
                            </a>
                            <div class="text">
                                <h4 class="subheading">Legacy landing page for the legacy App</h4>
                                <h2 class="heading"><a href="../legacylandingapp/index.html">Legacy Landing App Page</a></h2>
                                <p>This is a landing page for the legacy app. The app can be found on the andriod google play app store.</p>
                                <p><a href="../legacylandingapp/index.html">View Project</a></p>
                            </div>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </section>


            <h2 class="center">Gerald Brown Designs</h2>
            <h3 class="center" id="contact">Contact for work</h3>
            <form id="form" method="POST">
                <input name="form-name" id="form-name" type="text" class="form-name feedback-input" placeholder="Name" />
                <input name="form-email" id="form-email" type="text" class="form-email feedback-input" placeholder="Email" />
                <input name="form-subject" id="form-subject" type="text" class="form-subject feedback-input" placeholder="Subject" />
                <textarea name="form-message" id="form-message" class="form-message feedback-input" placeholder="Message"></textarea>
                <input type="submit" id="submit" class="submit" value="SUBMIT" />
            </form>





            <footer class="ftco-footer ftco-bg-dark ftco-section ">
                <div class="container ">
                    <div class="row mb-5 justify-content-center ">
                        <div class="col-md-5 text-center ">
                            <div class="ftco-footer-widget mb-5 ">

                            </div>
                            <div class="ftco-footer-widget ">
                                <h2 class="mb-3 ">Contact Me</h2>
                                <p class="h3 email "><a href="# ">g3raldbr0wn@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-12 text-center ">

                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="icon-heart " aria-hidden="true " style="color: red; "></i> by <a href="https://colorlib.com " target="_blank ">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </footer>

            </div>

        </div>


            <script src="js/jquery.min.js"></script>
            <script src="js/jquery-migrate-3.0.1.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.easing.1.3.js"></script>
            <script src="js/jquery.waypoints.min.js"></script>
            <script src="js/jquery.stellar.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/aos.js"></script>
            <script src="js/jquery.animateNumber.min.js"></script>
            <script src="js/scrollax.min.js"></script>
            <script src="js/bootstrap-datepicker.js"></script>
            <script src="js/jquery.timepicker.min.js"></script>
            <script src="js/main.js"></script>


            
            <script type="text/javascript">
                $("form").submit(function(e) {
                    var error = "";
                    if ($("#form-email").val() == "") {
                        error += "The email field is required.<br>";
                    }
            
                    if ($("#form-subject").val() == "") {
                        error += "The subject field is required.<br>";
                    } 
            
                    if ($("#form-message").val() == "") {
                        error += "The content field is required.<br>";
                    }
            
                    if (error != "") {
                        $("error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
                        return false;
                    }
                    else {
                        return true;
                    }
                })
                </script>

</body>

</html>


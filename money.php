
<!DOCTYPE html>
<html lang="en">
<head>
    <title>British Airways - Fly With Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Canadaian Travels Agency">
    <meta name="description" content="Canadaian Travels Agency, have the solution to all your travel requirements!">
    <!-- bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- fontawesome-5.7.0 -->
    <link type="text/css" rel="stylesheet" href="css/fontawesome-5.7.0-min.css" />
    <!-- groviva css -->
    <link type="text/css" rel="stylesheet" href="css/travels-agency.css" />
</head>
<body>
    <!-- header start -->
    <header class="travels-agency-header-wrapper">
        <div class="container">
            <div class="row">
			<img src="images/logo.png" alt="logo" />
                <div class="col-12 col-md-4 travels-agency-logo-wrapper align-self-center">
                    British Airways
                </div>
                <div class="col-12 col-md-12 travels-agency-nav-wrapper">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container travels-agency-nav">
                            <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#innovaTravelsNav"
                            aria-controls="innovaTravelsNav" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
                                class="fas fa-bars fa-1x"></i></span></button>
                            <div class="collapse navbar-collapse" id="innovaTravelsNav">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active"><a href="dashboard.php" class="nav-link">About Us</a></li>
									<li class="nav-item"><a href="flight.php" class="nav-link">Flights</a></li>
                                    <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                                    <li class="nav-item"><a href="contact-us.php" class="nav-link">Customer Support</a></li>
									<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
	    <!-- slide start -->
    <section class="travels-agency-banner-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 p-0 travels-agency-banner-inner-wrapper">
                    <img src="images/money.jpg" alt="Reserve" />
                    <h3>Money Exchange</h3>
                </div>
            </div>
        </div>
    </section>
                <div class="col-12 col-md-12 contact-travels-agency-inner center">
                    <h4 style="text-align: center;">Money Exchange</h4>
                    <form action="reservation.php" method="post">
  <div class="form-group">
    <label for="name"><b>Your Name</b></label>
    <input type="text" id="name" class="form-control" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="form-group">
    <label for="email"><b>Your E-mail</b></label>
    <input type="email" id="email" class="form-control" name="visitor_email" placeholder="john.doe@email.com" required>
  </div>
  <div class="form-group">
    <label for="phone"><b>Your Phone</b></label>
    <input type="tel" id="phone" name="visitor_phone" class="form-control" placeholder="498-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
  </div>
  <hr>
  <div class="form-group">
    <label for="message"><b>Enter details of Money and send us Email will response you as soon as possible</b></label>
	<textarea id="message" rows="8" class="form-control" required="required" id="message" name="message" placeholder="Tell us anything else that might be important."></textarea>
  </div>
<div class="form-group">
                            <button required="required" class="btn travels-agency-btn enquery-btn" name="submit" type="submit">Money Exchange</button>
                        </div>
</form>
                </div>
    <footer class="travels-agency-footer-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 travels-agency-copyright">
                    <p>Copyright ?? 2021. All Rights Reserved</p>
					<p>maninderpalsingh874@gmail.com</p>
					<p>+1 (514) 980-1786</p>
                </div>
                <div class="col-12 col-md-6 travels-agency-footer-socials">
                    <ul>
                        <li class="facebook"><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a></li>
                        <li class="youtube"><a href="https://www.youtube.com/watch?v=ZFb01yTR9bA&t=9s" target="_blank"><i class="fab fa-youtube"></i></a></li>
                        <li class="instagram"><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
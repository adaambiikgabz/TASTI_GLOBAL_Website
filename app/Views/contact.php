<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta charset="utf-8">
  <title>Contact</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** CSS Plugins Needed for the Project ** -->

  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!--Favicon-->
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <!-- Main Stylesheet -->
  <link href="assets/style.css" rel="stylesheet" media="screen" />
</head>

<body>
  <!-- header -->
  <header class="shadow-bottom sticky-top bg-white">
    <nav class="navbar navbar-expand-md navbar-light">
      <div class="container">
        <a class="navbar-brand px-2" href="index.html">Send Us a Message</a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navigation">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link text-dark" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="/faq">Faq</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="/contact">contact</a>
            </li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="/about">About</a>
						</li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <!-- /header -->

  <!-- contact -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="section-title text-primary">Got Any Questions</h2>
          <p>Visit Our WebSite <a href="https://insti.csir.org.gh/">CSIR-INSTI</a>.</p>

          <form action="#">
            <input type="text" id="name" name="name" placeholder="Name" class="form-control mb-4 shadow rounded-0">
            <input type="email" id="mail" name="mail" placeholder="Email" class="form-control mb-4 shadow rounded-0">
            <input type="text" id="subject" name="subject" placeholder="subject"
              class="form-control mb-4 shadow rounded-0">
            <textarea name="message" id="message" placeholder="Message"
              class="form-control mb-4 shadow rounded-0"></textarea>
            <button type="submit" value="send" class="btn btn-primary">Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact -->

  <!-- footer -->
  <footer class="section pb-4">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-8 text-md-left text-center">
          <p class="mb-md-0 mb-4"> <a
              href=""></a></p>
        </div>
        <div class="col-md-4 text-md-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-color d-inline-block p-2" href="http://facebook.com/insti.csir100"><i
                  class="ti-facebook"></i></a></li>
            <li class="list-inline-item"><a class="text-color d-inline-block p-2" href="https://twitter.com/csir_insti100"><i
                  class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item"><a class="text-color d-inline-block p-2" href="https://www.instagram.com/insti_csir/"><i class="ti-instagram"></i></a>
            </li>
           
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- /footer -->

  <!-- ** JS Plugins Needed for the Project ** -->
  <!-- jquiry -->
  <script src="plugins/jquery/jquery-1.12.4.js"></script>
  <!-- Bootstrap JS -->
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <!-- match-height JS -->
  <script src="plugins/match-height/jquery.matchHeight-min.js"></script>
  <!-- Main Script -->
  <script src="assets/script.js"></script>
</body>

</html>
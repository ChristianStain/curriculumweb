    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Christian | Work</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Flat Design Mini Portfolio">
    <meta name="keywords" content="responsive, bootstrap, flat design, flat ui, portfolio">
    <meta name="author" content="Dzyngiri">
    <meta name="description" content="This is a responsive flat design mini portfolio for creative folks who want to showcase their work online.">
    <link rel="shortcut icon" href="font/1411725280_132004.ico"/>
    <!-- styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="font/css/fontello.css" rel="stylesheet">
    <link href="css/mycss.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <!-- scripts -->
    <!-- Add jQuery library -->
    <script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="js/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css?v=2.1.5" media="screen" />
    <script>
            $(document).ready(function() {
        $(".fancybox-thumb").fancybox({
            helpers	: {
                title	: {
                    type: 'inside'
                },
                overlay : {
                            css : {
                                'background' : 'rgba(1,1,1,0.65)'
                            }
                        }
            }
        });
    });
        </script>
    </head>
    <body>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="index.php"><img src="img/User_Christian_64px.png"/></a>
          <ul class="nav nav-collapse pull-right">
            <li><a href="index.php"><i class="icon-user"></i> Profile</a></li>
            <li><a href="skills.php"><i class="icon-trophy"></i> Skills</a></li>
            <li><a href="work.php" class="active"><i class="icon-picture"></i> Work</a></li>
            <li><a href="resume.php"><i class="icon-doc-text"></i> Resume</a></li>
          </ul>
          <!-- Everything you want hidden at 940px or less, place within here -->
          <div class="nav-collapse collapse">
            <!-- .nav, .navbar-search, .navbar-form, etc -->
          </div>
        </div>
      </div>
    </div>
    <!-- Works container -->
    <div class="container work">
      <h2>My Work</h2>
      <ul class="work-images">
        <li>
          <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/Convocala800px.png" title="Convoca.la (in process)"><img src="img/Convocala250px.png"/></a></div>
        </li>
        <li>
          <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/Logisim800px.jpg" title="Seven-Segent Led Display Circuit"><img src="img/Logisim250px.jpg" /></a></div>
        </li>
        <li>
          <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/Selider800px.png" title="Selider.org (coming soon)"><img src="img/Selider250px.png" /></a></div>
        </li>
      </ul>
      <ul class="work-images">
        <li>
          <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/GPS2800px.jpg" title="GPS"><img src="img/GPS2250px.jpg" /></a></div>
        </li>
        <li>
          <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/Arduino800px.jpg" title="Arduino Project"><img src="img/Arduino250px.jpg" /></a></div>
        </li>
        <li>
          <div><a class="fancybox-thumb" rel="fancybox-thumb" href="img/GPS800px.jpg" title="GPS"><img src="img/GPS250px.jpg" /></a></div>
        </li>
      </ul>
      
    </div>
    <!--END: Work container-->
    <!-- Social Icons -->
    <div class="row social">
      <ul class="social-icons">
        <!--<li><a href="#" target="_blank"><img src="img/fb.png" alt="facebook"></a></li>
        <li><a href="#" target="_blank"><img src="img/tw.png" alt="twitter"></a></li>
        <li><a href="#" target="_blank"><img src="img/go.png" alt="google plus"></a></li>
        <li><a href="#" target="_blank"><img src="img/pin.png" alt="pinterest"></a></li>
        <li><a href="#" target="_blank"><img src="img/st.png" alt="stumbleupon"></a></li>
        <li><a href="#" target="_blank"><img src="img/dr.png" alt="dribbble"></a></li>-->
      </ul>
    </div>
    <!-- END: Social Icons -->
    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <p class="pull-left">christianmancha@outlook.com</p>
        <p class="pull-right"><a href="#myModal" role="button" data-toggle="modal"> <i class="icon-mail"></i> CONTACT</a></p>
      </div>
    </div>
    <!-- Contact form in Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"><i class="icon-mail"></i> Contact Me</h3>
      </div>
        <div class="modal-body">
          <!-- FORMULARIO -->
        <form id="contacto" name="contacto" action="enviar.php" method="POST">
          <input type="text" name="name" placeholder="Your Name">
          <input type="text" name="mail" placeholder="Your Email">
          <input type="text" name="website" placeholder="Website (Optional)">
          <textarea rows="3" name="message" style="width:80%"></textarea>
          <br/>
          <button type="submit" name="submit" class="btn btn-large"><i class="icon-paper-plane"></i> SUBMIT</button>
        </form>
      </div>
    </div>
    <!-- Scripts -->
    <script src="js/bootstrap.min.js"></script>
    <script>
            $('#myModal').modal('hidden')
    </script>
    </body>
    </html>

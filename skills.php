    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Christian | Skills</title>
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
            <!-- Add jQuery library -->
    <script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
    </head>
    <body>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a class="brand" href="index.php"><img src="img/User_Christian_64px.png"/></a>
          <ul class="nav nav-collapse pull-right">
            <li><a href="index.php"><i class="icon-user"></i> Profile</a></li>
            <li><a href="skills.php" class="active"><i class="icon-trophy"></i> Skills</a></li>
            <li><a href="work.php"><i class="icon-picture"></i> Work</a></li>
            <li><a href="resume.php"><i class="icon-doc-text"></i> Resume</a></li>
          </ul>
          <!-- Everything you want hidden at 940px or less, place within here -->
          <div class="nav-collapse collapse">
            <!-- .nav, .navbar-search, .navbar-form, etc -->
          </div>
        </div>
      </div>
    </div>
    <!--Skills container-->
    <div class="container skills">
      <h2>My Skills</h2>
        
      <div class="row">
        <div class="span3">
          <div class="ps">
            <h3>C++</h3>
          </div>
        </div>
        <div class="span5">
          <h3>C++ <span>70%</span></h3>
          <div class="expand-bg"> <span class="expand cpp"> &nbsp; </span> </div>
        </div>
      </div>
        
      <div class="row">
        <div class="span3">
          <div class="html">
            <h3>HTML5</h3>
          </div>
        </div>
        <div class="span5">
          <h3>HTML5 <span>60%</span></h3>
          <div class="expand-bg"> <span class="expand html2"> &nbsp; </span> </div>
        </div>
      </div>
        
      <div class="row">
        <div class="span3">
          <div class="css">
            <h3>CSS3</h3>
          </div>
        </div>
        <div class="span5">
          <h3>CSS3 <span>50%</span></h3>
          <div class="expand-bg"> <span class="expand css2"> &nbsp; </span> </div>
        </div>
      </div>
        
      <div class="row">
        <div class="span3">
          <div class="ai" id="cambiaar">
            <h3>Ar</h3>
          </div>
        </div>
        <div class="span5">
          <h3>Arduino <span>45%</span></h3>
          <div class="expand-bg"> <span class="expand ar"> &nbsp; </span> </div>
        </div>
      </div>
        
      <div class="row">
        <div class="span3">
          <div class="ai">
            <h3>PHP</h3>
          </div>
        </div>
        <div class="span5">
          <h3>PHP <span>30%</span></h3>
          <div class="expand-bg"> <span class="expand php"> &nbsp; </span> </div>
        </div>
      </div>
        
      <div class="row">
        <div class="span3">
            <div class="ai" id="cambiavhdl">
                <h3>VHDL</h3>
            </div>
        </div>
        <div class="span5">
          <h3>VHDL <span>30%</span></h3>
          <div class="expand-bg"> <span class="expand vhdl"> &nbsp; </span> </div>
        </div>
      </div>
        
    </div>
    <!--END: Skills container-->
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

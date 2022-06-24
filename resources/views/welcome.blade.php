<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Andy</title>
  <link rel="stylesheet" href="css/parallax_prueba.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/buttons.css">
  <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/parallax_body.css">
  <link href="https://fonts.googleapis.com/css?family=Bitter:400,700&display=swap&subset=latin-ext" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css"></link>
  <link rel="stylesheet" href="css/music_player.css"></link>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">
</head>
<body>

<!--********** NavBar **********-->
<nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light show-nav-bar nav-bar-hidden" id="pb-navbar">
		<div class="container">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-portfolio">Portfolio</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-resume">Resume</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-about">About</a></li>
					<li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
<!--********** End-NavBar **********-->

<!--********** Parallax Vertical Scrolling **********-->
<div class="container-parallax">
  <section class="background">
 
    <video id="background-video" autoplay loop muted poster="css/concierto_inicio1.png">
      <source src="css/video_concierto.mp4" type="video/mp4">
    </video>

      

    <div class="container-video">
			<div class="row intro-text align-items-start justify-content-start">
				<div class="col-md-10 pt-5">
        
					<h1 class="site-animate content-title-opera" id="staticText" >La música es <span><strong  id="typeline"></strong></span></h1>
          <audio id="music" src="cancion1.mp4"></audio>
          
				</div>
			</div>
      
		</div>
    <div class="button-inicio">
      <button class="custom-btn btn-3" onclick="play()"><span>Play Now</span></button>
    </div>
    
  </section>
  <section class="background">
    <div class="content-wrapper">
      <div class="profile-begin">
        <div class="page-three"></div>
        <div class="profile-name">Andrea Trueba <p>Mezzosoprano</p></div>
      </div>
    </div>
  </section>
  <section class="background">
    <div class="content-wrapper-three">
      <p class="content-title"></p>
      <div class="content subtitle subitle-parallax">
        <p>Después del silencio lo que más se acerca a expresar lo inexpresable es la música.</p>
        <p>-Aldous Huxley-</p>
      </div>
      
    </div>
  </section>
</div>
<!--********** End-Parallax Vertical Scrolling **********-->

 <!--********** Parallax Body **********-->

 <div class="pimg1 parallax-body hidden-parallax-body" id="parallax-body">
    <div class="ptext">
      <span class="border">
        Vezzose Armonie
      </span>
    </div>
  </div>

  <!-- Normal section -->

  <section class="section parallax-body section-light hidden-parallax-body" id="parallax-body">
    <h2>«Non dee questo modo di suonare stare soggetto a battuta: come veggiamo usare ne i madrigali moderni, i quali quantunque difficili si agevolano per mezzo della battuta portandola hor languida, hor veloce, è sostenendola etiando in aria, secondo i loro affetti, ò senso delle parole»</h2>
    <p>(Girolamo Frescobaldi; Avvertimenti al lettore dalla seconda edizione (1616) dal Primo Libro di Toccate)</p>
  </section>

  <!-- Parallax section 2 -->

  <div class="pimg2 parallax-body hidden-parallax-body" id="parallax-body">
      @include('music_player')
  </div>

  <!-- Normal section -->

  <section class="section parallax-body section-dark hidden-parallax-body" id="parallax-body">
    <h2>«En la música todos los sentimientos vuelven a su estado puro y el mundo no es sino música hecha realidad»</h2>
    <p>(Arthur Schopenhauer)</p>
  </section>

  <!-- Parallax section 3 -->

  <div class="pimg3 parallax-body hidden-parallax-body" id="parallax-body">
    <div class="ptext">
      <span class="border trans">
        La música es un eco del mundo invisible
      </span>
    </div>
  </div>

  <!-- Normal section -->

  <section class="section parallax-body section-light hidden-parallax-body" id="parallax-body">
    <h2>«Componer no es difícil, lo complicado es dejar caer bajo la mesa las notas superfluas»</h2>
    <p>(Johannes Brahms)</p>
  </section>
  
  <!-- Parallax section 3 -->
  
  <div class="pimg4 parallax-body hidden-parallax-body" id="parallax-body">
    <div class="ptext">
      <span class="border">
        VEZZOSE ARMONIE 
      </span>
    </div>
  </div>


  <!--********** End-Parallax Body **********-->
 

<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/parallax_prueba.js"></script>
<script src="js/nav-bar.js"></script> 
<script src="js/music_player.js"></script> 

</body>
</html>
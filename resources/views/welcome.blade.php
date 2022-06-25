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
 
    <video id="background-video" autoplay loop muted poster="css/concierto_inicio.png">
      <source src="css/video_concierto2.mp4" type="video/mp4">
    </video>
    
      

    <div class="container-video">
    
			<div class="row intro-text align-items-start justify-content-start">
				<div class="col-md-10 pt-5">
        
          <audio id="music" src="css/cancion1.mp3"></audio>
          
          <div class="ptext">
            <div class="border">
            <span class="site-animate content-title-opera" id="staticText">
            La musica è 
            </span><span><strong  id="typeline"></strong></span>
            </div>
            
          </div>

				</div>
			</div>
      
		</div>
    <div class="play-button-music" onclick="play()">
      <svg id="play"  viewBox="0 0 163 163" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"="0px">
        <g fill="none">
            <g  transform="translate(2.000000, 2.000000)" stroke-width="4">
                <path d="M10,80 C10,118.107648 40.8923523,149 79,149 L79,149 C117.107648,149 148,118.107648 148,80 C148,41.8923523 117.107648,11 79,11" id="lineOne" stroke="#FFF"></path>
                <path d="M105.9,74.4158594 L67.2,44.2158594 C63.5,41.3158594 58,43.9158594 58,48.7158594 L58,109.015859 C58,113.715859 63.4,116.415859 67.2,113.515859 L105.9,83.3158594 C108.8,81.1158594 108.8,76.6158594 105.9,74.4158594 L105.9,74.4158594 Z" id="triangle" stroke="#FFF"></path>
                <path d="M159,79.5 C159,35.5933624 123.406638,0 79.5,0 C35.5933624,0 0,35.5933624 0,79.5 C0,123.406638 35.5933624,159 79.5,159 L79.5,159" id="lineTwo" stroke="#FFF"></path>
            </g>
        </g>
      </svg>
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
        <p>Dopo il silenzio, ciò che più si avvicina all'espressione dell'inesprimibile è la musica.</p>
        <p>-Aldous Huxley-</p>
      </div>
      
    </div>
  </section>
</div>
<!--********** End-Parallax Vertical Scrolling **********-->

 <!--********** Parallax Body **********-->

 <div class="pimg1 parallax-body hidden-parallax-body" id="parallax-body">
    <div class="ptext-parallax">
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
    <h2>«Nella musica tutti i sentimenti tornano allo stato puro e il mondo non è altro che musica resa reale»</h2>
    <p>(Arthur Schopenhauer)</p>
  </section>

  <!-- Parallax section 3 -->

  <div class="pimg3 parallax-body hidden-parallax-body" id="parallax-body">
    <div class="ptext-parallax">
      <span class="border trans">
        La musica è un'eco del mondo invisibile
      </span>
    </div>
  </div>

  <!-- Normal section -->

  <section class="section parallax-body section-light hidden-parallax-body" id="parallax-body">
    <h2>«Comporre non è difficile, la parte difficile è lasciare che le note superflue cadano sotto il tavolo»</h2>
    <p>(Johannes Brahms)</p>
  </section>
  
  <!-- Parallax section 3 -->
  
  <div class="pimg4 parallax-body hidden-parallax-body" id="parallax-body">
    <div class="ptext-parallax">
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
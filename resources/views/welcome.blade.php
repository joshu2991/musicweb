<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/parallax_prueba.css"></linkre>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/buttons.css">
  <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">

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

<div class="container-parallax section-hidden" id="section_hide">
  <section class="background">
    
    <div class="container">
			<div class="row intro-text align-items-start justify-content-start">
				<div class="col-md-10 pt-5">

					<h1 class="site-heading site-animate" id="staticText" >La ópera <span><strong  id="typeline"></strong></span></h1>
          <audio id="music" src="cancion1.mp4"></audio>
          <button class="custom-btn btn-3" onclick="play()"><span>Play Now</span></button>

				</div>
			</div>
		</div>
  </section>
  <section class="background">
    <div class="content-wrapper">
      <p class="content-title">Section Two</p>
      <p class="content-subtitle">Lorem ipsum dolor sit amet</p>
    </div>
  </section>
  <section class="background">
    <div class="content-wrapper">
      <p class="content-title">Section Three</p>
      <p class="content-subtitle">Quisque ut egestas nulla</p>
    </div>
  </section>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/parallax_prueba.js"></script>
<script src="js/nav-bar.js"></script>  

</body>
</html>
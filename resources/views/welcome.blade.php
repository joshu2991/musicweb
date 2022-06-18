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
</head>
<body>

<!--********** NavBar **********-->
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
<!--********** End-NavBar **********-->

<!--********** Parallax Vertical Scrolling **********-->
<div class="container-parallax">
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
<!--********** End-Parallax Vertical Scrolling **********-->

 <!--********** Parallax Body **********-->

 <div class="pimg1 parallax-body hidden-parallax-body" id="parallax-body">
    <div class="ptext">
      <span class="border">
        Parallax Website
      </span>
    </div>
  </div>

  <!-- Normal section -->

  <section class="section parallax-body section-light hidden-parallax-body" id="parallax-body">
    <h2>Section One</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam numquam accusantium velit eligendi saepe rem dolor autem odit optio labore ullam magni perferendis consequatur magnam tempore consectetur nulla, fugit ea qui voluptate odio quos eum! Odio molestias et, cupiditate maxime ducimus quasi quos ullam laudantium. Repellendus vel culpa aliquid accusantium sit, fugiat nesciunt deserunt obcaecati doloremque dolore illo voluptates aspernatur dicta, expedita porro nam autem veritatis quia distinctio accusamus sed cum voluptatum fuga vitae? Iusto adipisci voluptatibus maxime explicabo, alias voluptatem. Inventore, harum. Asperiores rerum in soluta, minus, nam voluptates facilis, fugiat dolore mollitia animi sit dolorem optio cumque itaque.</p>
  </section>

  <!-- Parallax section 2 -->

  <div class="pimg2 parallax-body hidden-parallax-body" id="parallax-body">
      @include('music_player')
  </div>

  <!-- Normal section -->

  <section class="section parallax-body section-dark hidden-parallax-body" id="parallax-body">
    <h2>Section Two</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam numquam accusantium velit eligendi saepe rem dolor autem odit optio labore ullam magni perferendis consequatur magnam tempore consectetur nulla, fugit ea qui voluptate odio quos eum! Odio molestias et, cupiditate maxime ducimus quasi quos ullam laudantium. Repellendus vel culpa aliquid accusantium sit, fugiat nesciunt deserunt obcaecati doloremque dolore illo voluptates aspernatur dicta, expedita porro nam autem veritatis quia distinctio accusamus sed cum voluptatum fuga vitae? Iusto adipisci voluptatibus maxime explicabo, alias voluptatem. Inventore, harum. Asperiores rerum in soluta, minus, nam voluptates facilis, fugiat dolore mollitia animi sit dolorem optio cumque itaque.</p>
  </section>

  <!-- Parallax section 3 -->

  <div class="pimg3 parallax-body hidden-parallax-body" id="parallax-body">
    <div class="ptext">
      <span class="border trans">
        Image Three Text
      </span>
    </div>
  </div>

  <!-- Normal section -->

  <section class="section parallax-body section-light hidden-parallax-body" id="parallax-body">
    <h2>Section Three</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam numquam accusantium velit eligendi saepe rem dolor autem odit optio labore ullam magni perferendis consequatur magnam tempore consectetur nulla, fugit ea qui voluptate odio quos eum! Odio molestias et, cupiditate maxime ducimus quasi quos ullam laudantium. Repellendus vel culpa aliquid accusantium sit, fugiat nesciunt deserunt obcaecati doloremque dolore illo voluptates aspernatur dicta, expedita porro nam autem veritatis quia distinctio accusamus sed cum voluptatum fuga vitae? Iusto adipisci voluptatibus maxime explicabo, alias voluptatem. Inventore, harum. Asperiores rerum in soluta, minus, nam voluptates facilis, fugiat dolore mollitia animi sit dolorem optio cumque itaque.</p>
  </section>
  
  <!-- Parallax section 3 -->
  
  <div class="pimg1 parallax-body hidden-parallax-body" id="parallax-body">
    <div class="ptext">
      <span class="border">
        Susnet Web Design
      </span>
    </div>
  </div>


  <!--********** End-Parallax Body **********-->
 

<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="js/parallax_prueba.js"></script>
<script src="js/nav-bar.js"></script> 
<script src="js/music_player.js"></script> 

</body>
</html>
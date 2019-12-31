<?php
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Eleganter - New Amazing HTML5 Template</title>
   <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="css/template-style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>   
  </head>
  
  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON -->
  	<a target="_blank" class="hide-s" href="../template/eleganter-premium-responsive-business-template/" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
    <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 m-14 l-12">
          <a href="index.php" class="logo">
            <!-- Logo White Version -->
            <p style="text-align: center;color: #20B2AA;font-size: 18px;font-weight: bold;padding: 5px;">உங்கள் தேவை எங்கள் சேவை...!!</p>
          </a>
        
        <div class="top-nav s-10 m-8 l-15">
          
          <ul class="right chevron">
		  			<li><a href="index.php">HOME</a></li>
			<li><a href="about.php">ABOUT</a></li>
				<li><a>CAREERS</a>
				<ul>
				<li><a href="careers.php">Careers</a></li>
				<li><a href="seminars.php">Workshops & Seminars</a></li>
				</ul>
				</li>
				<li><a>SUPPORT AND SERVICES</a>
				<ul>
				<li><a href="ortho.php">Orthopaedic Rehabilitation</a></li>
			    <li><a href="neuro.php">Neurological Rehabilitation</a></li>
				<li><a href="pain.php">Pain Care</a></li>
				<li><a href="psy.php">Psychological Care</a></li>
				<li><a href="hypn.php">Hypnotherapy</a></li>
				</ul>
				</li>
			<li><a href="contact.php">CONTACT US</a></li>
          </ul>
        </div>
      </div>
      </nav>

    </header>
    
    <!-- MAIN -->
    <main role="main">    
      <!-- Main Header -->
      <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
          <div class="item">
            <div class="topnav s-20 l-20">
            
            <div class="responsive">
			<img src="images/hands-1662614_1280.jpg" alt="">
              <div class="carousel-content">
                <div class="content-center-vertical line">
                  <div class="margin-top-bottom-80">
<div class="margin-top-bottom-80" style="margin-top:-150px !important">
	<h1 class="ml3" style="text-white margin-bottom-30 text-size-36 text-m-size-30 text-line-height-1">YOGAM PHYSIOTHERAPY CLINIC</h1>
</div> 
 </div>
			 </div>
              </div>
            </div>
          </div>              
        </div>        
        </div>       
      </header>
          <?php
    require_once('db.php');
    $result = $conn->prepare("SELECT * FROM y_image ORDER BY tbl_image_id ASC");
    $result->execute();
    for($i=0; $row = $result->fetch(); $i++){
      $id=$row['tbl_image_id'];
      ?>


      <img src="Admin/uploads/<?php echo $row['image_location']; ?>" height="150" width="150" alt="View" title="View";"/>
    <?php } ?>

    </main>
    
    <!-- FOOTER -->
    </footer>
   <footer>
      <!-- Contact Us -->
      <div class="padding text-center" style="background-color: #ff4500;">
        <p class="h1">Contact Us: 98656 30121</p>                                                                        
      </div>
      
      <!-- Main Footer -->
      <section class="background-dark full-width">
        <!-- Map -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
  <div class="col-md-6">
<p id="p3"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.9621804613116!2d78.65827746471881!3d10.814206192295922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf5fae2a94bef%3A0x83751e5566453052!2sYogam%20physiotherapy%20clinic!5e0!3m2!1sen!2sin!4v1571800519396!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p3>
</div>
        </div>
        
        <!-- Collumn 2 -->
 <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="padding-2x">
            <div class="line">              
              <div class="float-left">
                  <i class="icon-sli-location-pin text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">Clinic Address</h3>
                  <p>P. Balaji M.P.T.,<br>
                     #164, Ganapathy Nagar,<br>
           IInd Cross Street,Uyyankondanthirumalai,<br>
           Tiruchirappalli - 620102<br>
                  </p>               
                </div>
                <div class="float-left">
                  <i class="icon-sli-envelope text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">E-mail</h3>
                  <p>balajisivason@gmail.com
                  </p>              
                </div>
                <div class="float-left">
                  <i class="icon-sli-phone text-primary icon3x"></i>
                </div>
                <div class="margin-left-70">
                  <h3 class="margin-bottom-0">Phone Numbers</h3>
                  <p>98656 30121<br>
                     94452 27979<br>
                     </p>             
                </div>
            </div>
          </div>
        </div>  
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js"></script>
	<script>

		var textWrapper = document.querySelector('.ml3');
		textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

		anime.timeline({loop: false})
		.add({
			targets: '.ml3 .letter',
			opacity: [0,1],
			easing: "easeInOutQuad",
			duration: 2250,
			delay: (e1, i) => 150 * (i+1)
		}).add({
			targets: '.ml3',
			opacity: 0.5,
			duration: 0,
			easing: "easeOutExpo",
			delay: 0,

		});
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
	</script>
</html>
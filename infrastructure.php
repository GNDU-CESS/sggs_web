<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
<head>
<meta charset="utf-8" />
 <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/jInvertScroll.min.css" />
    <link rel="stylesheet" href="css/style.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Infrastructure</title>
 <?php include 'includes/css.php'; ?>
    <style>
    .front{
    	background-image: url('img/infra/bahwan22.jpg');
    	position: fixed;

    }
    h1 h2 h3{
    	color: black;
    }
	.intro{
	padding-top:400px;
	}
	.navbar{
		position: fixed;
		margin-top:85px;
	}
        
        .navbar {
            width:100%;
            z-index: 18;
        }
    </style>
    
</head>
<body style="padding-top: 0px;">
	
<?php include 'includes/nav.php'; ?>
		
		
	<div id="back" class="container" style="position:absolute;z-index:-1;">
		<div class="front scroll">
			<div class="row">
				<div><h1 class="intro" style="font-family:ralvey;margin-left:110px;">Scroll down</h1></div>
				
			</div>
			<br><br>
			<div class="description page">
				<h2>The Main Building</h2>
				<p>
					The Centre is housed in its own building known as Sri Guru Granth Sahib Bhawan<br/>
					The design of the building has been prepared by the Architecture Department of Guru Nanak Dev University, Amritsar, keeping in mind the Sikh Architectural features. It is a two storey building which is spread over 70,000 square feet area. <br/>
					<br/>
					<hr style="border:none; border-bottom: 1px #ddd solid;" />
					<br/>
					 It is situated at a prime location in the University. Besides the office for faculty and research and administrative staff, it comprises an auditorium, museum, library, workshop hall, meeting room etc. The building was inaugurated by Honorable Chief Minister of Punjab, S. Parkash Singh Badal on 15th Feb. 2016.
				</p>
			</div>
			<br><br>
			<div class="documentation page"style="width:1000px;">
				<div class="row">
					<div class="col-lg-4 col-xs-4">
						<img src="img/infra/22.jpg">
					</div>
					<div class="col-lg-4 col-xs-4">
						<img src="img/infra/23.jpg">
					</div>
					<div class="col-lg-4 col-xs-4">
						<img src="img/infra/24.jpg">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-xs-4">
						<img src="img/infra/25.jpg">
					</div>
					<div class="col-lg-4 col-xs-4">
						<img src="img/infra/29.jpg">
					</div>
					<div class="col-lg-4 col-xs-4">
						<img src="img/infra/27.jpg">
					</div>
				</div>
			</div>
			
			<div class="options page">
					<h2>International Guest House and Residence for the Faculty</h2>
				<p>
					As the upcoming Centre will require the services of very senior and reputed scholars, providing them congenial atmosphere and making their stay in Amritsar comfortable, suitable accommodation is required.<br>
					Presently, many of the faculty members of the Centre are living outside the campus in rented houses.<br> University bye-laws do not allow out-of-the-turn accommodation.<br>
					 In this situation the Centre must have its own residential complex besides the other buildings and infrastructure.<br>
					 Residential complex for various categories of the employees of the centre has been proposed and it will be built during the II phase of building plan.<br>
					  A Faculty House and an international Guest House of the Centre has also been proposed in the plan of the Centre.<br>					

				</p>
			</div>
			
			<div class="download page"style="width:800px;height:450px;" >
				<img src="img/infra/33.jpg">			
  			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.jInvertScroll.js"></script>
	<script type="text/javascript">
	(function($) {
		$.jInvertScroll(['.scroll']);
	}(jQuery));
	
	$(document).ready(function(){
		$('html, body').animate({scrollTop: 0}, 20);
	});
	</script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-376733-5']);
		_gaq.push(['_trackPageview']);
	  
		(function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<script type="text/javascript">
	(function() {
	  var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	  po.src = 'https://apis.google.com/js/plusone.js';
	  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	})();
	</script>
	<div id="fb-root"></div>
	<script type="text/javascript">
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "../../connect.facebook.net/it_IT/all.js#xfbml=1&appId=168572623196006";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
<?php include 'includes/js.php'; ?>
</body>

</html>

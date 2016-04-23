<?php include 'includes/meta.php';  ?>
<title>
    Activities
</title>

    <?php include 'includes/css.php'; ?>

<style>
body
	{
		background-color:#ffffe5;
		overflow-x:hidden;
	}

    
</style>
</head>
<body class="container">
<?php include 'includes/nav.php';
      include 'includes/map.php';?>
    

 <div class="head info">  

   
        <div class="col-md-12">
            <div class="center">
                <h1 class="headx head1 head">Activities</h1>
            </div>
        </div>
  

   
<section>
        <div style="background-color:#000033;color:white">
            <div class="container">
                <div class="row" id="services"  style="margin:40px 40px 40px 20px;text-align:justify;">
                     <div class="media">
                            <div class="media-body">
                                <br /><br><br>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <h2 style="text-align:center;" class="subheadx media-heading">MANTHAN</h2><br />
                                        <p class="textx" style="font-size:16px;text-align:justify;"> A Research Forum of the Centre known as Manthan has been set up. It meets at least once in a month where Faculty members, Visiting Professors, Guest Scholars and Project Fellows present their papers. Its purpose is to make the upcoming scholars to know the new developments that are taking place in the field of Sikh Studies as well as to enhance the academic and professional skills of the Project Fellows working in the Centre. Since January 2013 fourteen meetings of it have taken place, wherein Faculty of the Centre, Project Fellows and Visiting Scholars have presented their papers.</p><br />
                                        <p id="services1"></p>  <a href="files/intro.PDF"><p style="text-align:center" class="btn btn-primary pull-right">Read More</p></a>
                                    </div>
                                    <div class="col-lg-5">
                                        <img src="img/DSC00075.jpg" class="img img-responsive" />
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                  
              </div>
                
            </div>
        </div>
    </section>
    
		<section  style="" class="container">
			<div class="container-fluid" style="margin:15px">
				<div class="container">
               
					<div class="row" style="color:black;">
						<h3 style="text-align:center; margin-top:30px" class="media-heading subheadx">LECTURES / SEMINARS </h3><br />
						<br />
                        
						<div class="col-md-6 col-sm-6"  >
							<div class="media">
								<div class="media-body"><br />
                                    <img class="img img-responsive" src="img/DSC00023.jpg">
								</div>
							</div>
						</div>
                        <div class="col-md-6 col-sm-6" style="text-align:justify;">
                            <p>

                                <ul class="textx" style="font-size:16px;">
                                    <li>	Gurbani Research: Sri Guru Granth Sahib  by Dr. Kulbir Singh Thind, California,  on 5th March, 2015.</li>
                                    <br />
                                    <li>	Shahidi Sarot te Shahadat da Dharohar Panjva Nanak by Dr. Balkar Singh, Patiala on 21st May, 2015.</li><br>

                                    <li>
                                        Amrika Vich Sikh Studies di Vivsatha, by Dr. Jasbir Singh Mann, California on 17th November, 2015.
                                    </li>
                                    <br />
                                    <li>
                                        Amrika Da Education System by Dr. Charanjit  Singh Gumtala, America on 26th November, 2015.

                                    </li>
                                    <br />
                                    <li>
                            <p id="services2"></p>    Gurbani Vich Kudrat da Sankalp by Dr. Devinderpal Singh, B.C.Canada on 24th December, 2015.
                            </li>
                            <br />
                            <a href="files/intro.PDF"><p style="text-align:center" class="btn btn-primary pull-right">Read More</p></a>
                            </ul>
                            </p>
                        </div>
					</div>
				</div><!--/.col-md-4-->
			</div>
		</section>
					
					
					
					
		<section style="background-color:#000033;color:white">
			<div class="container-fluid"  >
				<div class="container">
					<div class="row">
						<br />
						<h3 style="text-align:center;" class="subheadx media-heading">COUNSELLING SERVICES</h3><br />
							<div class="col-md-6 col-sm-6" style="text-align:justify;">
							<p>
									<p>
									<ul class="textx" style="font-size:16px;">
											<li>Meera Dewan, an established documentary film maker on behalf of Ministry of Information and Broadcasting, Govt. of India approached the University for expert 
													input for a film by her on Gur Parsad: The Grace of Food.  On the direction of Prof. A. S. Brar, Vice-Chancellor, GNDU, Centre provided all the academic input and 
													help to Meera Dewan to shoot this film in and around Amritsar.</li><br />
													<li>On August 13-23, 2013 three students of Chapman University, LA, namely David Thompson, Ryan Westra and Andrew Herkett who are doing documentary films on 
													Sikhism requested the University to guide them about the history of Sikhism, the Golden Temple and  other significant features of Sikhism</li><br />
													<li>Peder Gedda, a Ph.D. scholar at University of British Columbia, Canada, had a close reading of the various manuals of Sikh Rahit under the supervision of 
													Dr. Balwant Singh Dhillon for three weeks. </li><br /></li><br />
											
											</p>
							</p>
						</div>
						<div class="col-md-6 col-sm-6" style="padding-left:40px;padding-top:20px;">
							<div class="media">
								<div class="media-body">
									<img class="img img-responsive" src="img/img3.jpg" >
								</div>
							</div>
						</div>
					</div>
				</div><!--/.col-md-4-->
			</div>
		</section>
					
					
				
</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php include 'includes/footer.php'; include 'includes/js.php';?>


<script>
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 500);
            return false;
        }
    }
});



</script>
</body>
</html>
<?php include 'includes/meta.php';  ?>
<title>
    Center On Studies in Sri Guru Granth Sahib
</title>

    <?php 
        include 'includes/css.php'; 
        include 'includes/config/db_connect.php'; ?>
<style>
	body
	{
		background-color:#ffffe5;
		overflow-x:hidden;
	}

		
		
    .head h1{
      text-align: center;
      padding: 40px;
    }
    .container{
      padding: 0px;
    }

   .fixed {
            position: fixed;
            z-index: 2;
        }

        * {
            font-weight: 500;
        }
	
		
    @media screen and (max-width:1024px) {
    .container {
        padding:5px !important;
    }
    }
    
    @media screen and (min-width:1200px) {
       .carous {
           margin-top:11% !important;
           padding:0;
       }
        
    }
    @media screen and (max-width:698px) {
     #slide img {
    height: 500px;
     }
        
    }
    body {margin:0;!important}
</style>
</head>
<body class="container">
<?php  include 'includes/map.php';include 'includes/nav.php';
?>
    

    
  <div class="navbar-fixed-top container" style="height:50px;z-index:15;position:fixed;"></div>
	
       
        <section id="slide" class="headf carous">
        <div class="carousel slide col-md-7 col-sm-12 col-xs-12" id="screenshot-carousel" data-ride="carousel">
        
        
        <ol class="carousel-indicators">
        
            <li data-target="#screenshot-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#screenshot-carousel" data-slide-to="1"></li>
			<li data-target="#screenshot-carousel" data-slide-to="2"></li>
            
        </ol>
    <div class="carousel-inner">
        
        <div class="item  active">
            <img src="img/car2.jpg" alt="" class="img-responsive">
            <div class="carousel-caption"><h3 class="boxed">Centre on Studies in Sri Guru Granth Sahib</h3>
                <p class="boxed">Centre on Studies in Sri Guru Granth Sahib, Guru Nanak Dev University, Amritsar established on 1st April 2011, has completed five years of its existence. </p>
            </div>
            </div>
            <div class="item">
                 <img src="img/04.jpg" alt="" class="img-responsive">
                <div class="carousel-caption"><h3 class="boxed">ਤੁਰੀਆ ਗੁਣੁ ਮਿਲਿ ਸਾਧ ਪਛਾਨੇ ||</h3>
                <p class="boxed">And then, the fourth state of bliss was revealed to me by the Holy One.</p>
            </div>
 </div>
        <div class="item">
             <img src="img/carousel2.jpg" alt="" class="img-responsive">
            <div class="carousel-caption"><h3 class="boxed">MANTHAN</h3>
                <p class="boxed">For educating upcoming scholars about developments in field of Sikh Studies</p>
                
            </div>
 </div> 
           
           
          </div>  
          	<a href="#screenshot-carousel" class="left carousel-control style" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
               </a>
             <a href="#screenshot-carousel" class="right carousel-control style" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
            </a>  
        </div>


         <div class="alter2">
            <div class="row">
                
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="center">
                        <h3>Recent Events</h3>
                        <p>To conduct in-depth research on various aspects of Sri Guru Granth Sahib, the Centre conducts following events :</p>
                    </div>
                 	
                    <div class="gap"></div>
                    <div class="row scroll" style="margin:0;">
                        <?php
                            $sql = "SELECT title, date, day, place FROM events";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                               
                                while($row = $result->fetch_assoc()) {
                                    echo "<div class='col-md-12'><blockquote><p>".$row["title"]."<br></p>Date :<i>".$row["date"]."</i></br> Day : <i>".$row["day"]."</i><br> Place :<i>".$row["place"]."</i> <br>";
                                     echo "</blockquote></div>";
                                }
                               
                            } else {
                                echo "<center>No Latest Events<center>";
                            }
                            $conn->close();
                        ?>
                       
							
							
						</div>
             
                    </div>
               
                </div>
			
		</div>
      
    
		</section> 
    <!--events -->
    
    	
		
       
  
   
	
	<!--intro-===-->
	<section  class="alter1" id="1">
		<div class="container">
			<div class="row">
				<div class="row-same-height" > 
					<div class="col-left col-lg-6 col-lg-height col-middle">
                      
						<center><h1 style="font-family: raleway">Introduction</h1></center>
						
						<p style="text-align:justify; padding:3%; font-family: raleway">Centre on Studies in Sri Guru Granth Sahib, Guru Nanak Dev University, Amritsar established on 1st April 2011, has completed five years of its existence. It owes its origin to the public announcement of 1St September 2004 made by the then Prime Minister of India, Dr. Manmohan Singh, that Govt. of India will establish a Centre in Guru Nanak Dev University, Amritsar for Studies on Sri Guru Granth Sahib.<br><br>
                            <center><a href="files/English.pdf"><button style="text-align:center" class="btn btn-primary">Download PDF</button></a></center>
						</p>
						
					</div>
			
					 <div class="col-left col-lg-6 col-lg-height col-middle no-padding mob-align" style="padding-top:5%;">
                     	<img src="img/group.JPG" class="img img-responsive">
					</div>
				 </div>
			</div>
		</div>
		
	</section>
			

		<section class="alter2" id="2">
		<div class="container">
			<div class="row" >

                        
				<div class="row-same-height"> 
					<div class="col-left col-lg-6 col-lg-height col-middle no-padding mob-align" style="padding-top:5%">
                     	<img src="img/IMG_9776.jpg" class="img img-responsive" >
                   </div>
						
					 <div class="col-left col-lg-6 col-lg-height col-middle no-padding" >
                       
						   <center><h1 style="font-family: raleway;">Objective</h1></center>
					  
                       <p style="text-align:justify; font-family: raleway; padding:3%">In the context of Sri Guru Granth Sahib being a repository of Divine Word, interfaith dialogue, and also being relevant for an holistic approach to human life and civilization, the study of the origin of Bani, (holy verses), its preservation, various modes of transmission, different schools of exegesis and impact of Sri Guru Granth Sahib upon human beings in general and on its devotees in particular, the establishment of a  Centre on Studies in Sri Guru Granth Sahib is one of the most desirable academic endeavour. </p>
                 	</div>
				 </div>
			</div>
		</div>
		
	</section>
	
	

	
	



  
 <section  class="alter1" id="4">
        <div class="container" style="margin:10px">
            
                    <h4>About Gyan Anjan</h4>
                    <p style="text-align:justify;">Information technology has ushered in a new era of transmission  of knowledge. There are numerous websites on which information about Sikhism is available. These websites are not managed/hosted by professional or academic institutions but by freelancers, thus sometimes their contents are out of the mark. In order to reach out to the people as well as to provide authoritative and authentic information about the Sikh Scripture and other aspects of Sikh Studies, the Centre is developing its own website known as Gyan Anjan. It will be launched very shortly.</p>
            </div>
     
    </section><!--/#bottom-->
   
    
    
    
    
    
   
   
    
    
    
    
    
    
    
    
    <?php include 'includes/footer.php'; include 'includes/js.php';?>
    
     
   
</body>
</html>
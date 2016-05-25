<?php include 'includes/meta.php';  ?>
<title>
    Center On Studies in Sri Guru Granth Sahib
</title>

    <?php 
        include 'includes/css.php'; 
        include 'admin/db/connect.php'; ?>

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
    
    
    /* panel css*/
    
    .cset>.panel {
       padding:0;
       border-radius:0%;
       min-height:370px;
       border-color:rgba(10,1,6,0.4);
    }
    
    @media screen and (min-width:993px) {
        .cset .panel {
            width:50%;
        }
        
    }
    
    .cset {
        margin:auto;
    }
    
    .panel {
        border-color:rgba(10,1,6,0.4);   
    }
    
    .panel-heading {
        background-color:#003 !important;
        color:white !important;
        border-radius:0%;
        text-align:center;
        
    }
    .no_event {
        font-size:15px;
        text-align:center;
        padding:60px;
        
    }
    
    
</style>
</head>
<body class="container">
<?php  include 'includes/map.php';include 'includes/nav.php';
?>
<div class="head  animated fadeInUpBig">
    <div class="land-1">
        <div class="row">
        <div class="col-md-12 cset ">
        <div class="panel panel-info col-md-5">
            <div class="panel-heading">
                <h3 class="panel-title">At Glance</h3>
            </div>
            <div class="panel-body" style="height:300px;overflow:hidden">
                <div id="slider1_container" style="position: relative; top: 0px; left: 0px;width:auto; height: 300px;">
    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 550px; height: 300px;object-fit:fill">
        <div><img class="img img-resposive" u="image" src="img/carousel2.jpg" /></div>
         <div><img class="img img-resposive" u="image" src="img/gallery/workshops/IMG_1527.jpg" /></div>
        <div><img class="img img-resposive" u="image" src="img/gallery/seminars/DSC00825.JPG" /></div>
        <div><img class="img img-resposive" u="image" src="img/gallery/images/foundation/img14.JPG" /></div>
       
    </div>
</div>
            </div>
        </div>
        
        <div class="panel panel-default col-md-5">
            <div class="panel-heading">
                <h3 class="panel-title">Latest Activities and Events</h3>
            </div>
            <div class="panel-body eve" style="height:320px; overflow:hidden" >
                <marquee direction="up" scrolldelay="160" onmouseover="stop();"  onmouseout="start();">
                <?php
                            $sql = "SELECT * FROM events";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {
                               
                               while($row = $result->fetch_assoc()) {
                                    ?><a href="events#<?php echo $row['id'];?>"><?php 
                                    echo "<div class='col-md-12'><h4>".$row["title"]."<br></h4>Date :<i>".$row["date"]."</i><br> Venue :<i>".$row["venue"]."</i> <br>";
                                     echo "</div><hr></a>";
                                }
                               
                            } 
                            else {
                                echo "<div class='no_event'>No Latest Activities and Events</div>";
                            }
                            $result->free(); 
                        ?>
                </marquee>      
            </div>
        </div>
            <div class="panel panel-info col-md-5">
            <div class="panel-heading">
                <h3 class="panel-title">Quick Links</h3>
            </div>
            <div class="panel-body" style="height:320px;">
                <div class="list-group">
                  <a href="research_publications" class="list-group-item">
                    <h4 class="list-group-item-heading">Research Publications</h4>
                    <p class="list-group-item-text">For the proper interpretation of the message of Sri Guru Granth Sahib......</p>
                  </a>
                <a href="activities" class="list-group-item">
                    <h4 class="list-group-item-heading">Manthan</h4>
                    <p class="list-group-item-text">A Research Forum of the Centre known as Manthan has been set up.....</p>
                  </a>
                    <a href="gallery_foundation" class="list-group-item">
                    <h4 class="list-group-item-heading">Gallery-Foundation</h4>
                    <p class="list-group-item-text">2 November, 2012. Historic Date Of foundation stone of center...</p>
                  </a>
                <a href="playlist" class="list-group-item">
                    <h4 class="list-group-item-heading">Important Videos</h4>
                    <p class="list-group-item-text">Watch latest videos from Center on studies in Shri Guru Granth Sahib</p>
                  </a>
                
                </div>
            </div>
        </div>
        
            <div class="panel panel-info col-md-5">
            <div class="panel-heading">
                <h3 class="panel-title">Introduction</h3>
            </div>
            <div class="panel-body">
                Centre on Studies in Sri Guru Granth Sahib, Guru Nanak Dev University, Amritsar established on 1st April 2011. It owes its origin to the public announcement of 1St September 2004 made by the then Prime Minister of India, Dr. Manmohan Singh, that Govt. of India will establish a Centre in Guru Nanak Dev University, Amritsar for Studies on Sri Guru Granth Sahib. <br><br> The message of Sri Guru Granth Sahib is holistic in nature. It is of great
significance and relevance for the modern age.
The main objective of the establishment of this
Centre is to disseminate this wisdom
academically all over the world in its true and
authentic form.  <br><br>
                            <center><a href="files/English.pdf"><button style="text-align:center" class="btn btn-primary">Download PDF</button></a></center> 
            </div>
        </div>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    </div>   



    	
		
       
  
   
	
	<!--intro-===-->
    <div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">About GyanAnjan</h3>
  </div>
  <div class="panel-body">
    	<div class="row">
				<div class="row-same-heigt" > 
					<div class="col-left col-lg-6 col-lg-height col-middle">
                      
						
						
						<p style="text-align:justify; padding:3%;padding-top:10%; font-family: raleway">Information technology has ushered in a new era of transmission of knowledge. There are numerous websites on which information about Sikhism is available. These websites are not managed/hosted by professional or academic institutions but by freelancers, thus sometimes their contents are out of the mark. In order to reach out to the people as well as to provide authoritative and authentic information about the Sikh Scripture and other aspects of Sikh Studies, the Centre is developing its own website known as Gyan Anjan. It will be launched very shortly.
						</p>
						
					</div>
			
					 <div class="col-left col-lg-6 col-lg-height col-middle no-padding mob-align" style="padding-top:5%;">
                     	<img src="img/group.JPG" class="img img-responsive">
					</div>
				 </div>
			</div>
  </div>
</div>
	
			
	

	<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Objective</h3>
  </div>
  <div class="panel-body">
    <div class="row" >

                        
				<div class="row-same-height"> 
					<div class="col-left col-lg-6 col-lg-height col-middle no-padding mob-align" style="padding-top:5%">
                     	<img src="img/IMG_9776.jpg" class="img img-responsive" >
                   </div>
						
					 <div class="col-left col-lg-6 col-lg-height col-middle no-padding" >
                       

					  
                       <p style="text-align:justify;margin-top:10%; font-family: raleway; padding:3%">In the context of Sri Guru Granth Sahib being a repository of Divine Word, interfaith dialogue, and also being relevant for an holistic approach to human life and civilization, the study of the origin of Bani, (holy verses), its preservation, various modes of transmission, different schools of exegesis and impact of Sri Guru Granth Sahib upon human beings in general and on its devotees in particular, the establishment of a  Centre on Studies in Sri Guru Granth Sahib is one of the most desirable academic endeavour. </p>
                 	</div>
				 </div>
			</div>
  </div>
</div>
	



  
    </div>
   
    
    
    
    
    
   
   
    
    
    
    
    
    
     <?php include 'includes/footer.php'; include 'includes/js.php';
        $db->close();
        
    ?>
   <script src="js/jssor.slider.mini.js"></script>
<script>
    jQuery(document).ready(function ($) {
        var options = { $AutoPlay: true };
        var jssor_slider1 = new $JssorSlider$('slider1_container', options);
    });
</script>


   
    
     
   
</body>
</html>

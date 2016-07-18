<?php 
	require_once('admin/db/connect.php');
	include 'includes/meta.php';
	include 'includes/css.php';
?>
	</head>

<body class="container">
<?php  include 'includes/nav.php';
?>
		
		<div class="head"></div>
		<div class="container">
			<div class="panel-body col-md-9">
			<div id="sggsSlide" class="owl-carousel"> 
				<img src="img/carousel1.jpg"> 
				<img src="img/carousel2.jpg"> 
				<img src="img/carousel3.jpg"> 
				<img src="img/carousel4.jpg"> 
				<img src="img/activities/manthan.JPG"> 
				<img src="img/carousel22.JPG"> 
			</div>
		
				<div class="dis colorido-gl">
					<h2 class="welcome-text">Introduction</h2>
					 <strong>Centre on Studies in Sri Guru Granth Sahib, Guru Nanak Dev University, Amritsar established on April 2011.</strong> It owes its origin to the public announcement of September 2004 made by the then Prime Minister of India, Dr. Manmohan Singh, that Govt. of India will establish a Centre in Guru Nanak Dev University, Amritsar for Studies on Sri Guru Granth Sahib. <br><br> The message of Sri Guru Granth Sahib is holistic in nature. It is of great significance and relevance for the modern age. The main objective of the establishment of this Centre is to disseminate this wisdom academically all over the world in its true and authentic form.  </p>
				</div><br>
			<div class="">
			<div class="panel panel-info s-panel col-md-6">
            <div class="panel-heading colorido-gh">
               <h3 class="panel-title size_reset">Latest Activities</h3>
            </div>
            <div class="panel-body colorido-t cp-body">
               
                 <marquee style="height:auto; margin:auto;" direction="up" scrolldelay="140" onmouseover="stop();"  onmouseout="start();">
                <?php
                            $sql = "SELECT * FROM gyananjan_events";
                            $result = $db->query($sql);

                            if ($result->num_rows > 0) {

                               while($row = $result->fetch_assoc()) {
                                    ?>
					 <a href="events#<?php echo $row['id'];?>">
						 <div class='col-md-12 row' style="border-bottom:1px solid #333">
						 	<div  class="col-md-10">
								 <h5><b><?php echo $row["title"]; ?></b><br></h5>
								  <b>Venue :</b><?php echo $row["venue"]; ?><br>
							</div>
							<h4 class="col-md-2 date-s colorido-gl"><?php echo date("d",strtotime($row['date'])); ?><br><?php echo date("M",strtotime($row['date'])); ?></h4><br> 
							
					   	</div>
						
					 </a> 
					 <?php
                                }

                            }
                            else {
                                echo "<div class='no_event'>No Latest Activities and Events</div>";
                            }
                            $result->free();
                        ?>
                    <br><br>
                </marquee>

                
            </div>
			
        </div>	
		<div class="panel panel-info s-panel col-md-6 cp">
            <div class="panel-heading colorido-gh">
               <h3 class="panel-title size_reset">Latest blogs</h3>
            </div>
            <div class="panel-body colorido-t cp-body">
                <div class="list-group">
					<?php $query2 = "SELECT * FROM gyananjan_blog ORDER BY date DESC LIMIT 10";
							$getResult = $db->query($query2);
							if ($getResult->num_rows > 0) {
	while ($data = $getResult->fetch_assoc()) { ?>
			
	  <a  href="blog-view?id=<?php echo $data['id']; ?>" class="list-group-item">
	  <div class="row">
		<h4 class="list-group-item-heading text-center"><b><?php echo $data['title']; ?></b></h4>
		<p class="list-group-item-text pull-left"><span class="ion-edit"></span> <?php echo $data['author'];?></p><p class="list-group-item-text pull-right"><span class="ion-calendar"></span> <?php echo date("d M,Y",strtotime($data['date']))?></p>
	  </div>
	  </a>
	<?php
	}
} else {echo '"<li class="list-group-item"><a href="">No Latest Posts! </a></li>"';}
					
		?>			
                

                </div>
            </div>
			
				</div>
			<div class="panel panel-info s-panel col-md-12">
            <div class="panel-heading colorido-gh">
               <h3 class="panel-title size_reset">Infrastructure</h3>
            </div>
            <div class="panel-body colorido-t">
				<div class="in-center">
                <img src="img/infra/29.jpg" class="infra-m">
                <img src="img/infra/26.jpg" class="infra-m">
                <img src="img/infra/27.jpg" class="infra-m"><br>
				<a href="infrastructure">
				</div>
				<h5 class="text-center" style="text-decoration:underline">More about Infrastructure</h5></a>
            </div>
			</div></div>
			</div>
			<div class="col-md-3">
		  	<div class="panel panel-info s-panel">
            <div class="panel-heading colorido-gh">
               <h3 class="panel-title size_reset">Quick Links</h3>
            </div>
            <div class="panel-body colorido-t">
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
        </div><div class="col-md-3">
		  	<div class="panel panel-info s-panel">
            <div class="panel-heading colorido-gh">
               <h3 class="panel-title size_reset">Faculties</h3>
            </div>
            <div class="panel-body colorido-t">
                <div class="list-group">
                  <a href="faculty_view?id=7" class="list-group-item">
                    <div class="row">
						<img src="admin/images/reduceSize/_GSB2695.JPG" class="small-p pull-right">
						<div class="text-center"> 
						<h5><b>Dr. Balwant Singh Dhillon</b></h5>
						<p class="text-center">Founder Director</p>
						</div>
				  	</div>
                  </a>
               <a href="faculty_view?id=8" class="list-group-item">
                    <div class="row">
						<img src="admin/images/reduceSize/_GSB2703.JPG" class="small-p pull-right">
						<div class="text-center"> 
						<h5><b>Dr. Gulzar Singh Kang</b></h5>
						<p class="text-center">Oficiating Director</p>
						</div>
				  	</div>
                  </a>
                   
				<a href="faculty" class="list-group-item">
                    <div class="row text-center">
						<h6 style="text-decoration:underline"><b>More</b></h6>
				  	</div>
                  </a>
				</div>
                </div>
            </div>
        </div><div class="col-md-3">
		  	<div class="panel panel-info s-panel">
            <div class="panel-heading colorido-gh">
               <h3 class="panel-title size_reset">Gallery</h3>
            </div>
            <div class="panel-body colorido-t">
                <div class="list-group">
                  <a href="gallery_fieldwork" class="list-group-item in-center">
                   	<img src="img/gallery/images/fieldworks/img16.JPG" class="img-gall">
                   	<img src="img/gallery/images/fieldworks/img13.jpg" class="img-gall">
                  </a><h5 class="text-center">Field Works</h5> 
					<a href="gallery_inaugration" class="list-group-item in-center">
                   	<img src="img/gallery/images/inauguration/img11.JPG" class="img-gall">
                   	<img src="img/gallery/images/inauguration/img15.JPG" class="img-gall">
                  </a><h5 class="text-center">Inaugration</h5>
					<a href="gallery_seminars" class="list-group-item in-center">
                   	<img src="img/gallery/images/seminars/img13.JPG" class="img-gall">
                   	<img src="img/gallery/images/seminars/img11.JPG" class="img-gall">
                  </a><h5 class="text-center">Seminars</h5>
				</div>
                </div>

            </div>
        </div>

	
		</div>
	
		<?php
			include 'includes/footer.php';
			include 'includes/js.php'; ?>
			<script>
				$(document).ready(function () {
					$("#sggsSlide").owlCarousel();
				});
				var owl = $('#sggsSlide');
				owl.owlCarousel({
					animateOut: 'fadeOutDown'
					, animateIn: 'fadeInDown'
					, items: 1
					, dots: false
					, loop: true
					, autoplay: true
					, autoplayTimeout: 3000
					, autoplayHoverPause: true
					,  navigation : false,
				});
			</script>
	</body>

	</html>
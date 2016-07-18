<?php
	 include 'admin/db/connect.php';

if (!isset($_GET['id'])) {
	header('location:blog');
}
$id = $_GET['id'];
$query = "SELECT * FROM gyananjan_blog WHERE id = '$id'";
$result= $db->query($query);
$row = $result->fetch_array();
if($row===null) {
	header('location:blog');
}

//page counter
$pres = $row['views'];
$pres++;
$count = "UPDATE gyananjan_blog
SET views='$pres'
WHERE id='$id'";
$setview = $db->query($count);
//===================

?>
<?php include 'includes/meta.php';  ?>
	<title>
		Center On Studies in Sri Guru Granth Sahib
	</title>

	<?php include 'includes/css.php';
   ?>
		<style>
			.evd img {
				height: 200px;
				width: 100%;
				margin-top: 4%;
				margin-bottom: 2%;
			}
			
			.events_list {
				width: auto;
				height: auto;
				margin-top: 1%;
			}
			
			 .latest-posts a{
				color:#34495e !important;
			}
			
			.latest-posts .lead {
				background-color:#000033!important;
				display: flex !important;
				color:#fff;
				justify-content: center !important;
				width:100%;
			} 
			
			<?php
				if ($row['bimage']=="") {
					echo ".pres {
					display:none;
					}
					";
				}
			
			?>
		</style>
		</head>

		<body class="container">
			<?php include 'includes/nav.php';
      ?>
				<div class="container head">
					<div class="row">
						<div class="col-md-8">
							<article>
								<h2 class="text-center"><a href="singlepost.html"><?php echo $row['title'];?></a></h2>
								<div class="row text-center">
									<div class="group2 col-sm-12 col-md-12">
										<span class="glyphicon glyphicon-pencil"> </span>&nbsp;&nbsp;<?php echo $row['author']; ?> &nbsp;&nbsp;
										<span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp; <?php echo date("d M,Y",strtotime($row['bdate'])); ?>
									</div>
								</div>

								<div  style="border:1px solid #eee;padding:15px;background-color:#fff;word-wrap:break-word;">
								<img  src="admin/images/reduceSize/<?php echo $row["bimage"]; ?>" class="text-center img img-responsive pres">

								<br />
								
						<?php echo $row['blog']; ?>
							
								</div>
							</article>
						</div>
					
						<div class="latest-posts">
						<ul class="list-group col-md-4">
								<li class="list-group-item text-center lead">Latest Posts</li>
							<?php 
							$query2 = "SELECT * FROM gyananjan_blog ORDER BY bdate DESC LIMIT 10";
							$getResult = $db->query($query2);
							if ($getResult->num_rows > 0) {
	while ($data = $getResult->fetch_assoc()) {
			echo	'<li class="list-group-item"><a href="blog-view?id='.$data['id'].'">'.$data['title'].'-'.date("d M,Y",strtotime($data['bdate'])). '</a></li>';
	}
} else {echo '"<li class="list-group-item"><a href="">No Latest Posts! </a></li>"';}
					
							
								?>
						</ul>
						</div>
					</div>
				</div>

				<!-- Footer -->
				<footer>
					<div class="container">
						<p class="text-center" style="padding-top:20px;margin:0!important;">Copyright &copy; GNDU
							<?php echo date("Y");?>. All rights reserved.</p>
					</div>
				</footer>

				<?php  include 'includes/js.php';?>


		</body>

		</html>
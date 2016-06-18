<?php include 'includes/meta.php';
include 'admin/db/connect.php';
$query="SELECT * FROM blog ORDER BY date DESC";
$result=$db->query($query);
$queryo = "SELECT * FROM blog ORDER BY date DESC LIMIT 5";
$resulto = $db->query($queryo);
?>
	<title>
		Blog-Center On Studies In Shri Guru Granth Sahib
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
			
			.posts {
				margin-bottom: 20px;
			}
			
			.heading {
				text-align: center;
				font-size: 20px;
			}
			
			.attr {
				display: flex;
				justify-content: space-around
			}
			
			.attr1 {
				display: block;
				justify-content: center;
				border-bottom: 1px solid #222;
				padding-bottom: 10px;
			}
			
			.main-head {
				font-family: 'helvetica' !important;
			}
		</style>
		</head>

		<body class="container">
			<?php include 'includes/nav.php';
      include 'includes/map.php';?>
				<div class="head">

					<div class="evd col-md-12">
						<div class="col-md-8">
							<?php
						
							if($result->num_rows>0) {
								
								while ($row=$result->fetch_assoc()) {
							echo    '<a href="blog-view?id='.$row['id'].'">';
							echo		'<div class="posts thumbnail">';
							echo			'<img class="img-responsive" src="admin/images/reduceSize/'.$row['image'].'"alt="" style="box-shadow:none">';
							echo			'<div class="caption">';
							echo				'<div class="heading">'.$row['title'].'</div><hr>';
							echo				'<div class="attr">';
							echo				'<span class="date"><span class="glyphicon glyphicon-calendar"></span> '.date("d M Y",strtotime($row['date'])).'</span>';
							echo				'<span class="main-head"><span class="glyphicon glyphicon-pencil"> '.$row['author'].'</span>';
							echo				'</div>';
							echo			'</div>';
							echo		'</div>';
							echo '</a>';
									
							
								}
								
							}
						else {
							echo "<h3 class='text-center'>No Latest Blogs Yet</h3>";
						}
					
						?>
						</div>

						<div class="col-md-4">
							<div class="panel panel-default text-center">
								<h3>Popular Posts</h3>
								<?php
								if($resulto->num_rows>0) {
									while($data=$resulto->fetch_assoc()) {
							echo		'<div class="panel-body">';
							echo    '<a href="blog-view?id='.$data['id'].'">';
							echo	'<div class="attr1">';
							echo		'<img class="img-responsive" src="admin/images/reduceSize/'.$data['image'].'" alt="" style="height:100px">';
							echo		'<div class="tname text-center">.'.$data['title'].'</div>';
							echo	'</div>';
							echo '</a>';
							echo '</div';
								
							echo '</div>';
							echo '</div>';
									}
								}	
							
							?>

							</div>
						</div>
					</div>



					<?php  include 'includes/js.php';?>


		</body>

		</html>
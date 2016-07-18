<?php include 'includes/meta.php';
include 'admin/db/connect.php';
// popularity algo //

$getClick = "SELECT views FROM gyananjan_blog";
$data = $db->query($getClick);

$i=0; $avg=0;
if($data->num_rows>0) {
	while($row=$data->fetch_assoc()) {
		$view[$i] = $row["views"];
		$i++;
	}
}
for ($j=0;$j<$i;$j++) {
	$avg +=$view[$j]/$i;	
}

//===============//
$query="SELECT * FROM gyananjan_blog ORDER BY bdate DESC";
$result=$db->query($query);
$queryo = "SELECT * FROM gyananjan_blog WHERE views > '$avg'";
$resulto = $db->query($queryo);



?>
	<title>
		Blog-Center On Studies In Shri Guru Granth Sahib
	</title>

	<?php include 'includes/css.php';
    ?>

		<style>
			.setimg {
				width:100%;
				height:300px;
			}
			
			.setimgp {
				width:100%;
				height:160px !important;
			}
			
			.evd{
				width:100%;
				height:400px;
				
				
			}
			
			.thumbnail:hover {
				box-shadow:0px 0.3px 5px 0px #222;
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
				justify-content: space-around;
				flex-direction:column;
				text-align:center
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
      ?>
				<div class="head">

					<div class="col-md-12">
						<div class="col-md-8">
							<?php
						
							if($result->num_rows>0) {
								
								while ($row=$result->fetch_assoc()) {
							echo    '<a href="blog-view?id='.$row['id'].'">';
							echo		'<div class="posts thumbnail row">';
							echo          '<div class="col-md-8">';
							echo			'<img class="img-responsive setimg" src="admin/images/reduceSize/'.$row['bimage'].'" alt="'.$row['title'].'" style="box-shadow:none">';
							echo          '</div>';
							echo			'<div class="caption col-md-4">';
							echo				'<div class="heading">'.$row['title'].'</div><hr>';
							echo				'<div class="attr">';
							echo				'<div class="date"><span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;'.date("d M Y",strtotime($row['bdate'])).'</div><br>';
							echo				'<div class="main-head"><span class="glyphicon glyphicon-pencil"></span>&nbsp;'.$row['author'].'</div>';
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
							echo		'<img class="img-responsive setimgp" src="admin/images/reduceSize/'.$data['bimage'].'" alt="" style="height:100px">';
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
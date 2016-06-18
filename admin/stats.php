<?php
	include 'db/connect.php';
	session_start();
	error_reporting(0);

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {
$msg="You Need To Login First";
header ("Location: login?ee=$msg");
}


$query = "SELECT title, views FROM blog ORDER BY views DESC";
$result = $db->query($query);

//graph algo //

$getClick = "SELECT views FROM blog";
$data = $db->query($getClick);

$i=0; $avg=0;
if($data->num_rows>0) {
	while($row=$data->fetch_assoc()) {
		$view[$i] = $row["views"];
		$i++;
	}
}
for ($j=0;$j<$i;$j++) {
	$total +=$view[$j];	
}

//===============//
include 'includes/meta.php';
?>
<title>Post-Create</title>
	
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script src="../js/jquery.js"></script>
	<style>
		body {
			padding: 10px;
		}
		
		.nav span {
			margin-botton: 20px;
			background-color: #003;
			border: #003 4px solid;
			color: white;
			min-width: 147px;
			font-weight: 600;
			transition: background-color 0.5s ease-in, border 0.5s;
		}
		
		.nav span:hover {
			background-color: teal;
			border: 4px rgba(14, 21, 41, 0.3) solid;
		}
		
		input,textarea {
		border-radius: 0!important;
		border:1px solid #003 !important;
		
	}
		
		.bar {
			height:30px;
			background-color:#3c3c67;
		}
		
		.count {
			float: right
		}

	</style>
	</head>

	<body>
		<div class="nav">
			<a href="../admin"><span class="pull-left text-center">Go to Admin Page</span></a>

			<a href="../"><span class="pull-right text-center">View Site</span></a>
		</div>
		<div class="container col-md-12" style="border:1px solid #eee;padding:15px;background-color:#fff;margin-top:10px">
			<h3 class="text-center title">Statistics of Blog Post</h3><hr>
			<h4 class="text-center">Total Blog Page Views: <?php echo $total; ?></h4>
		<?php	
			$c=1;
			if ($result->num_rows >0) {
	while($row = $result->fetch_assoc()) {
		$width = ($row['views']/$total)*100;
		echo "<b>".$c." ". strtoupper($row['title']) .":</b><div class='bar' style='width:".$width."%'></div><div class='count'>".$row['views']." Views</div><hr><br>";
		$c++;
	}
}

		?>	
		</div>
		
		<script src="../js/bootstrap.min.js" type="text/javascript"></script>
	</body>

	</html>




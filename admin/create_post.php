<?php

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {
$msg="You Need To Login First";
header ("Location: login?ee=$msg");



}
include "db/connect.php";

/*delete event*/
$dmsg="";
$dsign="";
$dalert="";
if(isset($_GET['del'])) {
 $delid=$_GET['del'];
   $dquery="DELETE FROM blog WHERE id='$delid'";

   $dresult=$db->query($dquery);

    if ($dresult===true) {
     $dmsg="Deleted";
        $dsign="glyphicon glyphicon-ok";
        $dalert="info";
        header('Location:create_post');
    }

    else {
        $dmsg="Cannot Delete";
        $dsign="exclamation-sign";
        $dalert="danger";
    }
}

else {

}

include 'includes/meta.php';
include 'includes/css.php';
?>
	<title>Post-Create</title>
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<script>
		tinymce.init({ 
			selector:'textarea', 
			height: 400,
			plugins: [
			  'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
			  'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
			  'save table contextmenu directionality emoticons template paste textcolor image'
			],
			toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons'
		});
	</script>
	<script src="../js/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function (e) {
		                    $("#uploadForm").on('submit', (function (e) {
								$("#picupld").val("Uploading Pic....");
		                        e.preventDefault();
		                        $.ajax({
		                            url: "upload.php"
		                            , type: "POST"
		                            , data: new FormData(this)
		                            , contentType: false
		                            , cache: false
		                            , processData: false
		                            , success: function (data) {
		                                $("#targetLayer").html(data);
										$("#picupld").val("Done");
		                            }
		                            , error: function () {}
		                        });
		                    }));
		                });
		
		                function setname() {
		                    var nameofpic = document.getElementById('picupname').value;
		                    var filtername = nameofpic.replace("C:\\fakepath\\", "");
		                    document.getElementById('picname').value = filtername;
		                }
		
		                window.setInterval(setname, 20);
	</script>
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
		
		.block {
			display: block;
			background-color: #003;
			color:white;
			padding:10px;
			text-align: center;
			font-weight: 600;
			margin:auto auto 5px auto;
		}
	</style>
	</head>

	<body>
		<div class="modal fade" id="picup" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Upload Image</h4>
						<hr>
					</div>
					<div class="modal-body">
						<form id="uploadForm" action="upload.php" method="post">
							<div id="targetLayer">No Image</div>
							<div id="uploadFormLayer">
								<br>
								<label>Upload Image File:</label>
								<br/>
								<input name="userImage" type="file" id="picupname" class="inputFile form-control" />
								<br>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									<input type="submit" id="picupld" value="Submit" onclick="setname()" class="btnSubmit btn btn-info" />
						</form>
						</div>
						</div>


					</div>
				</div>
			</div>
		</div>
		<div class="nav">
			<a href="../admin"><span class="pull-left text-center">Go to Admin Page</span></a>

			<a href="../"><span class="pull-right text-center">View Site</span></a>
		</div>
		<div class="container col-md-9" style="border:1px solid #eee;padding:15px;background-color:#fff">
			
			<form id="blogForm" method="post">
				<h3 class="pull-left">Write down your post here:</h3>
				<input type="submit" id="post_blog" class="pull-right btn btn-info" value="Publish Post">
				<br>
				<input type="text" name="title" class="form-control" placeholder="Title">
				<br>
				<input type="text" name="author" class="form-control" placeholder="Author Name">
				<br>
				<input type="date" name="date" class="form-control" placeholder="Date of Posting">
				<br>
				<div class="btn btn-info" data-toggle="modal" data-target="#picup">Add Featured Image
					<input style="display:none" id="picname" name="pname">
				</div>
				<hr>
				<textarea name="blog"></textarea>
				<br>
			</form>
			
		</div>
		<div class="col-md-3"  style="border:1px solid #eee;padding:15px;background-color:#fff;">
			<div class="panel panel-info"  style="max-height:800px;overflow-y:scroll">

				<div class="panel-heading text-center">Published Posts
				</div>
				<div id="update">
				<div class="panel-body" id="live">
									<div id="alert" class="alert alert-<?php echo $dalert;?>" aria-hidden="true" role="alert">
						<span class="glyphicon glyphicon-<?php echo $dsign;?>" aria-hidden="true"></span>
						<span class="sr-only" style="position:relative">  <?php echo $dmsg; ?></span></div>
						<a href="stats.php"><div class="block">View Stats</div></a>
					<ul class="list-group">
						<?php
                    $sql = "SELECT title,id, date FROM blog ORDER BY id ASC";
                    $run = $db->query($sql);

                    if ($run->num_rows > 0) {

                        while($row = $run->fetch_assoc()) {
                            echo"<li class='list-group-item'>".$row['title']."<br><small><br>".$row['date']."</small><br><br><a href='?del=".$row['id']."'>Delete</a><a class='pull-right' href='edit_post?edit=".$row['id']."'>Edit</a></li>";
                        }

                    }
                    else {
                        echo "<h5 class='no_event text-center'>No Pushlished Posts.</h5>";
                    }


                    $run->free();
						
					
                ?>


					</ul>
					
				</div>

				</div>
			</div>
		</div>
		<script src="../js/bootstrap.min.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				$("#post_blog").click(function(e){
					$(this).val("Publishing...Please Wait!");
					 tinyMCE.triggerSave();
					var data=$('#blogForm').serialize();
					$.post('post.php',data,response);
					e.preventDefault();
				})
				
				function response(res) {
					alert(res);
					$("#post_blog").val("Publish");
					$("#blogForm")[0].reset();
					$("#update").load('create_post #live');
				}
				
				
			})
		</script>
	</body>

	</html>
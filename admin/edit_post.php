<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {
$msg="You Need To Login First";
header ("Location: login?ee=$msg");
}
require_once('db/connect.php');
if(!isset($_GET['edit'])) {
	header('location:index');
}

else {
	$id = $_GET['edit'];
	$query="SELECT * FROM blog WHERE id = '$id'";
	$result = $db->query($query);
	$row=$result->fetch_array();
$id=$row['id'];	
$title= $row['title'];
$date= $row['date'];
$author= $row['author'];
$imgname= $row['image'];
$text= $row['blog'];
}


include 'includes/meta.php';
error_reporting(1);
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
									<input type="submit" value="Submit" onclick="setname()" class="btnSubmit btn btn-info" />
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
		<div class="container col-md-12" style="border:1px solid #eee;padding:15px;background-color:#fff">
			<form id="blogForm">
			<h3 class="pull-left">Write down your post here:</h3> <input type="submit" id="post_blog" class="pull-right btn btn-info" value="Publish Post">
			
				
				<br>
				<input type="hidden" name="id" value="<?php echo $id;?>">
				<input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo $title;?>">
				<br>
				<input type="text" name="author" class="form-control" placeholder="Author Name" value="<?php echo $author;?>">
				<br>
				<input type="date" name="date" class="form-control" placeholder="Date of Posting" value="<?php echo $date;?>">
				<br>
				<img width="100px" height="60px" src="images/reduceSize/<?php echo $imgname; ?>">
                        <br>
                        <br>
                        <div class="btn btn-info" data-toggle="modal" data-target="#picup">Change Feature Image
                            <input hidden="true" id="picname" value="<?php echo $imgname; ?>" name="pname">
                        </div>
				<hr>
				<textarea name="blog"><?php echo $text;?></textarea>
				<br>

				<hr>
				
			</form>
			<hr>
			<br>
		</div>
		
		<script src="../js/bootstrap.min.js" type="text/javascript"></script>
		<script>
			$(document).ready(function() {
				$("#post_blog").click(function(e){
					 tinyMCE.triggerSave();
					var data=$('#blogForm').serialize();
					$.post('post_edit.php',data,response);
					e.preventDefault();
				})
				
				function response(res) {
					if(res==1) {
						alert('Your edit was successfull');
						window.location='create_post';	
					} 
					else {
						alert(res);
				 	}
				
				}
			})
		</script>
	</body>

	</html>
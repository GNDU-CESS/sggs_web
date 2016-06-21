<?php
if (!isset($_GET['id'])) {
	header('location:faculty');
}
else {
include 'admin/db/connect.php';
$id= $_GET['id'];

$dataQuery = "SELECT * FROM gyananjan_faculty WHERE id ='$id'";

$getData = @$db->query($dataQuery);

$data = $getData->fetch_array();


$name= $data['name'];
$desig= $data['designation'];
$email= $data['email'];
$contact= $data['contact'];
$imgname= $data['image'];
$desc= $data['description'];
     
if($data===null) {
	header('location:faculty');
}
}


 include 'includes/meta.php';  ?>
<title>
    Center On Studies in Sri Guru Granth Sahib
</title>

    <?php include 'includes/css.php';?>
<style>
  .size1
    {
        width:220px;
        height: 250px;
        margin:auto;
    }
    
    .name_style
    {
        text-align: center;
        color:#000033;
        font-size: 20px;


    }
    
    
    .name_style1
    {
        text-align: center;
        color:#000033;
        font-size: 20px;


    }
    
	
  
    
</style>
<?php
   

?>

</head>
<body class="container">
<?php include 'includes/nav.php';
      ?>

<div class="head">
    <div class="col-md-12">
            <div class="center alter2" >
                <h1 class="headx head1 head" style="line-height:60px">Faculty and Supporting Staff</h1>
            </div>
    </div>
<div class="row container">
   
        <div class="col-md-4"><img class="size1 img-responsive" id="change1" src="admin/images/reduceSize/<?php echo $imgname; ?>"><h2 class="name_style1" id="change2"><?php echo $name; ?> </h2><h4 class="name_style" id="change3"><?php echo $desig; ?></h4><h4 class="name_style" id="change4">CONTACT: <?php echo $contact; ?></h4><h4 class="name_style" id="change5"><?php echo $email; ?></h4>
        </div>
        <div class="col-md-8">
        <p style="font-size: 20px;text-align: justify; margin: 10px;" id="change6">
            <?php echo $desc; ?>    
        </p>
        </div>
       
    </div>
   
   
    
    


</div>
<?php  include 'includes/js.php';
    include 'includes/footer.php'
?>


</body>
</html>

<?php include 'includes/meta.php';  ?>
<title>
    Center On Studies in Sri Guru Granth Sahib
</title>

    <?php include 'includes/css.php'; 
    include 'admin/db/connect.php'?>
<style>
    .evd img{
        height:250px;
        width:100%;
        
    }
</style>
</head>
<body class="container">
<?php include 'includes/nav.php';
      include 'includes/map.php';?>
    
<div class="head">
    <div class="col-md-12">
            <div class="center">
                <h1 class="headx head1 head">Events and Activities</h1>
            </div>
    </div>
    <div class="evd">
    <?php  
$sql = "SELECT * FROM events";
$result = $db->query($sql);

                            if ($result->num_rows > 0) {
                               
                               while($row = $result->fetch_assoc()) {
                                    ?><div id="#<?php echo $row['id'];?>"><?php 
                                    echo "<hr><div class='col-md-6'><h3 class='text-center'>".$row["title"]."</h3><h5>Date :".$row["date"]."</h5></h5> Venue :".$row["venue"]."</h5><br><br><p>".$row['description']."</p></div><div class='col-md-6'><img class='img-responsive' src='admin/images/".$row['imgname']."'></div>'";
                                    
                                }
                               
                            } 
                            else {
                                echo "<h4 class='text-center'>No Latest Activities and Events</h4>";
                            }
                            $result->free(); 
                        ?>
        </div>
   
</div>     
<?php include 'includes/footer.php'; include 'includes/js.php';?>
</body>
</html>
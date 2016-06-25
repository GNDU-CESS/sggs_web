<?php include 'includes/meta.php';  ?>
<title>
    Center On Studies in Sri Guru Granth Sahib
</title>

    <?php include 'includes/css.php';
    include 'admin/db/connect.php'?>
<style>
    .evd img{
        height:200px;
        width:100%;
        margin-top:4%;
        margin-bottom:2%;
    }

    .events_list {
      width:auto;
      height:auto;
      margin-top:1%;

    }
</style>
</head>
<body class="container">
<?php include 'includes/nav.php';
      ?>

<div class="head">
    <div class="col-md-12">
            <div class="center">
                <h1 class="headx head1" style="margin-top:7%;">Events and Activities</h1>
            </div>
    </div>
    <div class="evd">
    <?php
$sql = "SELECT * FROM gyananjan_events";
$result = $db->query($sql);

                            if ($result->num_rows > 0) {

                               while($row = $result->fetch_assoc()) {
                                    ?><div class="events_list" id="#<?php echo $row['id'];?> "  > <?php
                                    echo "<hr><div class='col-md-6'><h3 class='text-center'>".$row["title"]."</h3><h5>Date :".$row["date"]."</h5></h5> Venue :".$row["venue"]."</h5><br><br><p>".$row['description']."</p></div><div class='col-md-6'><img class='img-responsive pull-right' src='admin/images/reduceSize/".$row['imgname']."'></div>";

                                }

                            }
                            else {
                                echo "<h4 class='text-center'>No Latest Activities and Events</h4>";
                            }
                            $result->free();
                        ?>
        </div>
      </div>
    </div>


<?php  include 'includes/js.php';
    include 'includes/footer.php'?>


</body>
</html>

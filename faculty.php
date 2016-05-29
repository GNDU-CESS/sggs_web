<?php include 'includes/meta.php';  ?>
<title>
    Center On Studies in Sri Guru Granth Sahib
</title>

    <?php include 'includes/css.php';
    include 'admin/db/connect.php'?>
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
    
  .card{
        margin-bottom:2%;   
    }
</style>
</head>
<body class="container">
<?php include 'includes/nav.php';
      include 'includes/map.php';?>

<div class="head">
    <div class="col-md-12">
            <div class="center alter2" >
                <h1 class="headx head1 head" style="line-height:60px">Faculty and Supporting Staff</h1>
            </div>
    </div>
<?php
    $data_fac= "SELECT id, name, designation, image FROM faculty";
    $result = $db->query($data_fac); 


?>
    <div class="row">
   <?php  
        if ($result->num_rows > 0) {

                               while($row = $result->fetch_assoc()) {
       
          echo '<div class="col-md-3 col-sm-12 card">'; 
            echo '<a  href="faculty_view?id='.$row['id'].'">';
             echo '<img class="size1 img-responsive" src="admin/images/'.$row['image'].'">';
              echo '<h3 class="name_style">'.$row['name'].'</h3>';
              echo '<h4 class="name_style">'.$row['designation'].'</h4>';
            echo '</a>';
          echo '</div>'; 
            
       }
        }
    else {
        echo "<h4 class='text-center'>Faculty Data List Is Empty</h4>";
    }
    $result->free();
?>
           
         
            
    </div>
    
    


</div>
<?php  include 'includes/js.php';
    include 'includes/footer.php'
?>


</body>
</html>

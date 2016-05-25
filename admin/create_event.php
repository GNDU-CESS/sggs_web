
<?php

require_once('db/connect.php');
    
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {

header ("Location: login");
    
$msg="You Need To Login First";

}



$rsp="";
$sign="";
$alertype="";




if(!empty($_POST['submit'])) {
    
 
    
    if(empty($_POST['title']) || empty($_POST['date']) || empty($_POST['venue'])) { 
    $rsp="Please fill all the fields";
    $sign="exclamation-sign";
    $alertype="warning";
    
}
    
else {
    $title = addslashes($_POST['title']);
    $date= $_POST['date'];
    $venue=addslashes($_POST['venue']);
    $desc=addslashes($_POST['desc']);
    $imagename=addslashes($_POST['image']);
    $event_in= "INSERT INTO `events` (`title`,`date`, `venue`,`description`) VALUES ('$title','$date','$venue','$desc')";
    
    $result=$db->query($event_in);
    
    if ($result===true) {
       $rsp="Event Created Succesfully";
        $sign="ok";
        $alertype="info";
    }
    
    else {
     $rsp="Cannot Create Event";
      $sign="exclamation-sign";
         $alertype="danger";
    }
}

}


/*delete event*/
$dmsg="";
$dsign="";
$dalert="";
if(isset($_GET['del'])) {
 $delid=$_GET['del'];
   $dquery="DELETE FROM events WHERE id='$delid'";
    
   $dresult=$db->query($dquery);
    
    if ($dresult===true) {
     $dmsg="Deleted";
        $dsign="glyphicon glyphicon-ok";
        $dalert="info";
        header('Location:create_event');
    }
    
    else {
        $dmsg="Cannot Delete";
        $dsign="exclamation-sign";
        $dalert="danger";
    }
}

else {
    
}
    



        
       
    
    


       
      
?>
<?php include 'includes/meta.php';  ?>
<title>
   Events | Edit-Create
</title>

    <?php 
        include 'includes/css.php'; 
 
    ?>
<style>
      .panel {
        border-color:rgba(10,1,6,0.4);
        height:550px !important;
      overflow-y:scroll;
    }
    
    .panel-heading {
        background-color:#003 !important;
        color:#fff !important;
        border-radius:0%;
        text-align:center;
        
    }
    
    .panel a {
        color:#34495E !important;
        text-transform:underline !important;
    }
    
    .nav {
        margin-top:0 !important;
        margin-bottom:2%;
        width:100%;
        min-height:50px;
        
    }
    
  .nav span {
        padding:18px;
        background-color:#003;
        border:#003 4px solid;
        color:white;
        min-width:147px;
        font-weight:600;
        transition:background-color 0.5s ease-in, border 0.5s;
       
    }
    
    .nav span:hover {
     background-color:teal; 
     border:4px rgba(14,21,41,0.3) solid;
    }
    
    body {
        padding-top:30px;
        background-image:url('../img/bhavan.jpg'); 
        background-repeat:no-repeat;
        background-size:cover;
    }

</style>
<body>
    
<div class="container">
<div class="nav">
        <a href="../admin"><span class="pull-left text-center">Go to Admin Page</span></a>
       
        <a href="../"><span class="pull-right text-center">View Site</span></a>
    </div>
<div class="col-md-6">
    <div class="panel panel-info">
    <div class="panel-heading text-center">Create Event</div>

  
<div class="panel-body">
<div id="alert" class="alert alert-<?php echo $alertype;?>" aria-hidden="true" role="alert">
  <span class="glyphicon glyphicon-<?php echo $sign;?>" aria-hidden="true"></span>
    <span class="sr-only" style="position:relative">  <?php echo $rsp; ?></span></div>
<form action="" method="POST">

    <input type="text" name="title" class="form-control" placeholder="Title" autofocus><br>
    <input type="date" name="date" class="form-control" placeholder="Date"><br>
    <input type="text" name="venue" class="form-control" placeholder="Venue"><br>
    <textarea name="desc" rows="5" class="form-control" maxlength="140" placeholder="Description....."></textarea><br>
    
    <center><button type="submit" name="submit" value="create" class="btn btn-primary">Create</button></center>

    
    
</form>
</div>
</div>
</div>
<div class="col-md-6">
<div class="panel panel-info">
  
  <div class="panel-heading text-center">Live Events</div>
  <div class="panel-body">
  <div id="alert" class="alert alert-<?php echo $dalert;?>" aria-hidden="true" role="alert">
  <span class="glyphicon glyphicon-<?php echo $dsign;?>" aria-hidden="true"></span>
    <span class="sr-only" style="position:relative">  <?php echo $dmsg; ?></span></div>
    <ul class="list-group">
                <?php
                    $sql = "SELECT title, date,id FROM events ORDER BY id DESC";
                    $run = $db->query($sql);

                    if ($run->num_rows > 0) {

                        while($row = $run->fetch_assoc()) {
                            echo"<li class='list-group-item'>".$row['title']."<br><small><br>".$row['date']."</small><br><br><a href='?del=".$row['id']."'>Delete</a></li>";
                        }

                    } 
                    else {
                        echo "<h5 class='no_event text-center'>List is Empty</h5>";
                    }


                    $run->free(); 
                ?>
                
  
      </ul>
  </div>


</div>
</div>
<script>
    
    function alertTime() {
    document.getElementById("alert").style('display','none');
}

setTimeout(alertTime, 8000);
    
</script>
</body>
</html>
<?php
 $db->close();
?>
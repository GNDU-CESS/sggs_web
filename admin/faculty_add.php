<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {
$msg="You Need To Login First";
header ("Location: login?ee=$msg");



}

require_once('db/connect.php');




$rsp="";
$sign="";
$alertype="";




if(!empty($_POST['submit'])) {



    if(empty($_POST['name'])) {
    $rsp="Please fill all the fields";
    $sign="exclamation-sign";
    $alertype="warning";

}

else {
    $name = addslashes($_POST['name']);
    $desig= $_POST['desig'];
    $email= $_POST['email'];
    $contact=addslashes($_POST['contact']);
    $desc=nl2br(addslashes($_POST['desc']));
   $imagename=addslashes($_POST['pname']);
    $event_in= "INSERT INTO `gyananjan_faculty` (`name`,`designation`, `email`,`contact`,`fdescription`,`fimage`) VALUES ('$name','$desig','$email','$contact','$desc','$imagename')";

    $result=$db->query($event_in);

    if ($result===true) {
       $rsp="Faculty Added Succesfully";
        $sign="ok";
        $alertype="info";
    }

    else {
     $rsp="Cannot add! Please Try Again";
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
   $dquery="DELETE FROM gyananjan_faculty WHERE id='$delid'";

   $dresult=$db->query($dquery);

    if ($dresult===true) {
     $dmsg="Deleted";
        $dsign="glyphicon glyphicon-ok";
        $dalert="info";
        header('Location:faculty_add');
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
                    border-color: rgba(10, 1, 6, 0.4);
                    height: 650px !important;
                    overflow-y: scroll;
                }
                
                .panel-heading {
                    background-color: #003 !important;
                    color: #fff !important;
                    border-radius: 0%;
                    text-align: center;
                }
                
                .panel a {
                    color: #34495E !important;
                    text-transform: underline !important;
                }
                
                .nav {
                    margin-top: 0 !important;
                    margin-bottom: 2%;
                    width: 100%;
                    min-height: 50px;
                }
                
                .nav span {
                    padding: 18px;
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
                
                body {
                    padding-top: 30px;
                    background-image: url('../img/bhavan.jpg');
                    background-repeat: no-repeat;
                    background-size: cover;
                }
            </style>
            <script type="text/javascript">
                function timeout() {
                    alert('You are about to Logout. Please Login again');
                    window.setTimeout("location=('logout.php');", 7);

                }

                window.setTimeout(timeout, 7000000);
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

                window.setInterval(setname, 20);
            </script>

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
                                            <input type="submit" value="Submit" class="btnSubmit btn btn-info" />
                                </form>
                                </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="nav">
                        <a href="../admin"><span class="pull-left text-center">Go to Admin Page</span></a>

                        <a href="../"><span class="pull-right text-center">View Site</span></a>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-info">
                            <div class="panel-heading text-center">Add Faculty</div>


                            <div class="panel-body">
                                <div id="alert" class="alert alert-<?php echo $alertype;?>" aria-hidden="true" role="alert">
                                    <span class="glyphicon glyphicon-<?php echo $sign;?>" aria-hidden="true"></span>
                                    <span class="sr-only" style="position:relative">  <?php echo $rsp; ?></span></div>
                                <form action="" method="POST">

                                    <input type="text" name="name" class="form-control" placeholder="Name" autofocus>
                                    <br>
                                    <input type="text" name="desig" class="form-control" placeholder="Designation">
                                    <br>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                    <br>
                                    <input type="contact" name="contact" class="form-control" placeholder="Contact Number">
                                    <br>
                                    <textarea name="desc" rows="5" class="form-control" placeholder="Description....."></textarea>
                                    <br>
                                    <div class="btn btn-info" data-toggle="modal" data-target="#picup">Upload Pic
                                        <input style="display:none" id="picname" name="pname">
                                    </div>

                                    <hr>
                                    <center>
                                        <button type="submit" name="submit" value="create" class="btn btn-primary">Add</button>
                                    </center>



                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-info">

                            <div class="panel-heading text-center">Faculty List</div>
                            <div class="panel-body">
                                <div id="alert" class="alert alert-<?php echo $dalert;?>" aria-hidden="true" role="alert">
                                    <span class="glyphicon glyphicon-<?php echo $dsign;?>" aria-hidden="true"></span>
                                    <span class="sr-only" style="position:relative">  <?php echo $dmsg; ?></span></div>
                                <ul class="list-group">
                                    <?php
                    $sql = "SELECT name, designation,id FROM gyananjan_faculty ORDER BY id ASC";
                    $run = $db->query($sql);

                    if ($run->num_rows > 0) {

                        while($row = $run->fetch_assoc()) {
                            echo"<li class='list-group-item'>".$row['name']."<br><small><br>".$row['designation']."</small><br><br><a href='?del=".$row['id']."'>Delete</a><a class='pull-right' href='faculty_edit?edit=".$row['id']."'>Edit</a></li>";
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
                    <script src="../js/jquery.js"></script>
                    <script src="../js/bootstrap.min.js"></script>
            </body>

            </html>
            <?php
 $db->close();
?>
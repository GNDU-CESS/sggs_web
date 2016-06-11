<?php
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != 'off')) {
$msg="You Need To Login First";
header ("Location: login?ee=$msg");

}
require_once('db/connect.php');



include 'includes/meta.php';
include 'includes/css.php';

$editid=$_GET['edit'];

$dataQuery = "SELECT * FROM events WHERE id ='$editid'";

$getData = @$db->query($dataQuery);

$data = $getData->fetch_array();



$title= $data['title'];
$date= $data['date'];
$venue= $data['venue'];
$imgname= $data['imgname'];
$desc= $data['description'];


/*Edit the changes */
$rsp="";
$sign="";
$alertype="";
?>
    <style>
        .panel {
            border-color: rgba(10, 1, 6, 0.4);
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
                                    <input type="submit" value="Submit" onclick="setname()" class="btnSubmit btn btn-info" />
                        </form>
                        </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading text-center">Edit Event</div>


                <div class="panel-body">
                    <div id="alert" class="alert alert-<?php echo $alertype;?>" aria-hidden="true" role="alert">
                        <span class="glyphicon glyphicon-<?php echo $sign;?>" aria-hidden="true"></span>
                        <span class="sr-only" style="position:relative">  <?php echo $rsp; ?></span></div>
                    <form action="edit" method="POST">
                        <input type="text" value="<?php echo $editid ?>" name="editid" hidden="true">
                        <input type="text" name="title" class="form-control" value="<?php echo $title; ?>" placeholder="Title" autofocus>
                        <br>
                        <input type="date" name="date" class="form-control" value="<?php echo $date; ?>" placeholder="Date">
                        <br>
                        <input type="text" name="venue" class="form-control" value="<?php echo $venue; ?>" placeholder="Venue">
                        <br>
                        <textarea name="desc" rows="5" class="form-control" maxlength="140" placeholder="Description.....">
                            <?php echo $desc; ?>
                        </textarea>
                        <br>
                        <img width="100px" height="60px" src="images/<?php echo $imgname; ?>">
                        <br>
                        <br>
                        <div class="btn btn-info" data-toggle="modal" data-target="#picup">Change Pic
                            <input hidden="true" id="picname" value="<?php echo $imgname; ?>" name="pname">
                        </div>

                        <hr>
                        <center>
                            <button type="submit" name="edit" value="create" class="btn btn-primary">Make Changes</button>
                        </center>



                    </form>

                </div>
            </div>
        </div>
        <?php

    include 'includes/js.php';
        ?>
    </body>

    </html>
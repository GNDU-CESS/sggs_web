<?php

require_once('db/connect.php');
session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: login");

}

include 'includes/meta.php';
include 'includes/css.php';


?>
<style>
    .grid .btn {
        width:30rem;
        height:25rem;
        margin:1%;
        background-color:rgba(45,43,131,0.5);
        line-height:200px;
        font-size:15px;
        padding:2%;
        text-align:center;
        font-weight:600 !important;
    }
    
    .grid {
    width:70rem;
     margin:auto;   
    }
    
    
    body {
        background-image:url('../img/bhavan.jpg'); 
        background-repeat:no-repeat;
        background-size:cover;
    }
    
    @media screen and (max-width:590px) {
     .grid {
        width:62.5rem;   
     }
        
    body {
     background-repeat:repeat-y;   
    }
    }


</style>
<body>
<div class="modal fade" id="logout" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Do you want to Log Out?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <a href="logout"><button type="button" class="btn btn-primary">Yes</button></a>
      </div>
    </div>
  </div>
</div>

<!--create user-->
<div class="modal fade" id="changepass" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Change Password</h4><hr>
      </div>
      <div class="modal-body">
           
        <div class="col-md-12">
            <div id="changeresp" class="alert alert-success col-md-12" role="alert"></div>
            <input type="password" id='old' name="oldPass" class="form-control" placeholder="Old Password"><br>
            <input type="password" id='new' name="newpass" class="form-control" placeholder="New password"><br>
            
        </div>
                     
          
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-info" onclick="changepass()" >Change Password</button>
      </div>
    </div>
  </div>
</div>
<div class="container">
<div class="grid rows">
  <a href="create_event">
      <div class="col-sm-12 col-md-3 btn btn-info">
  
        Create Event
    
      </div>
    </a>
<a href="#">
    <div class="col-sm-12 col-md-3 btn btn-info">
         Create/Manage Blogs (Coming Soon)
       
    
    </div>
</a>
<a data-toggle="modal" data-target="#changepass">
    <div class="col-sm-12 col-md-3 btn btn-info">
     Change Password
     
   
</div>
</a>
 <a data-toggle="modal" data-target="#logout">
    <div class="col-sm-12 col-md-3 btn btn-info">

          Logout

    </div>
</a>
</div>


</div>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script>
   
    function changepass() {
      var old=document.getElementById('old').value;
    var newp=document.getElementById('new').value;
     var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
               var resp=xmlhttp.responseText;
                document.getElementById('changeresp').innerHTML=resp;
                
                document.getElementById('old').value="";
                 document.getElementById('new').value="";
            }

        };
        xmlhttp.open("GET", "changepass.php?old=" + old+"&new="+newp, true);
        xmlhttp.send(null);
    }
    
    
   
        
    
</script>
</body>
</html>
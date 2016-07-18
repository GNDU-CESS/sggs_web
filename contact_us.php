<?php include 'includes/meta.php';  ?>
<title>
    Contact Us
</title>

<?php include 'includes/css.php'; ?>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var mapProp = {
    center:new google.maps.LatLng(31.6344374,74.8286285),
    zoom:5,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>
<body class="container">
<?php include 'includes/nav.php';
      ?>
    


   
	<div class="head contact">
		<div class="row" >
       

			<div class="col-lg-6">
			
				<div class="panel panel-default alter1"  style="padding:15px;">
    			<div class="panel-heading text-center colorido-gh">Contact us at</div>
    			<div class="panel-body">
                    <h5>Phone :0183-2258802,2258809, 2450601-14 <small>ext 3442</small> </h5>
					
					<h5>Email : centresggs@yahoo.com</h5>
	    		</div>
    		<!--<div id="googleMap" style="width:500px;height:380px;box-shadow:0 0 0 white !important" class="img-responsive"></div>-->
   <iframe class="img-responsive" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="600" height="400" src="https://maps.google.com/maps?hl=en&q=gndu&ie=UTF8&t=roadmap&z=10&iwloc=B&output=embed"></iframe>
                </div>
			</div>
			<div class="col-lg-6"> 
				<div class="col-lg-2"></div>
				<div class="col-lg-10 panel panel-default alter1" style="padding-top:15px;">
                  	<div class="panel-heading text-center colorido-gh">Please Leave Your Message</div>
				<form role="form" action="mail" method="POST">
									<div class="form-group"><br />
										<label for="name">Name</label>
										<input type="text" class="form-control" placeholder ="Your Name" name="name" id="name1">
									</div>



									<div class="form-group">
									  <label for="email">Email Address</label>
									  <input type="email" class="form-control" name="email" placeholder="email@email.com" id="email2">
									</div>


									<div class="form-group">
									
									  <label for="comment">Message:</label>
    								  <textarea class="form-control" rows="7" id="comment" name="message" placeholder="Type Your Message..."></textarea>
									</div>
									<div class="form-group  text-center">
									  <button class="btn btn-large btn-primary" type="submit" name="submit">Submit</button>
									</div>
								</form>
                    
                    
				</div>
			</div>
		</div>
	</div>
  
    <?php include 'includes/footer.php'; include 'includes/js.php';?>
</body>
</html>
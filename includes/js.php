
<script src="js/bootstrap.min.js"></script>
<script src="js/jq.js"></script>
<script src="js/jqueryUI.js"></script>
<script src="js/owl.carousel.min.js"></script>


<script>
	
	
	
	$(document).ready(function() { 
	  
		$('.in-nav').click(function() {
		$('nody').toggleClass();
		
	});
	
	})
	

		$('.in-nav').click(function() {
			$('.nav-lay').addClass('animated fadeInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {$('.nav-lay').removeClass('animated fadeInUp')});
			$('.nav-lay').removeClass("nav-hid");
			

		});
			
		$('.nav-close').click(function() {
			$('.nav-lay').addClass('animated fadeOutDown').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
				$('.nav-lay').removeClass('animated fadeOutDown');
				$('.nav-lay').addClass('nav-hid');
			});
			
			
			
			

		});
</script>
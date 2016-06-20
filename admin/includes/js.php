<script src="../js/jquery.min.js"></script>
<script src="../js/smoothscroll.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jq.js"></script>
<script src="../js/jqueryUI.js"></script>

<script>
	$(document).ready(function() {
		$('.in-nav').click(function() {
		$('nody').toggleClass();
		
	});
	});
		$('.in-nav').click(function() {
			$('.nav-lay').addClass('animated slideInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {$('.nav-lay').removeClass('animated slideInUp')});;
			$('.nav-lay').removeClass("nav-hid");
			

		});
			
		$('.nav-close').click(function() {
			
			$('.in-nav').addClass('animated slideOutDown');
			$('.in-nav').css('display','none');

		});
</script>
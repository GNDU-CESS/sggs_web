<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />

<title>Videos Playlist</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=-0.9">
    <?php include 'includes/css.php'; ?>
<link href="res/player.min.css" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="res/jquery.min.js"></script>
<script type="text/javascript" src="res/jquery.player.js"></script>
<script type="text/javascript" src="res/player.playlist.js"></script>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){

	new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
		{
		    title: "Bhai Balbir Singh ji talking about Bhai Chand, Bhai Lal and Bhai Nasira's life after 1947 partition.",
			artist:" ",
			//free:true,
			webmv: "vid/00194(0)%20Bhai%20Balbir%20Singh.webm",
			poster:""
		},
		{
		    title: "Amar Nath kaushtab talking about a Pakistani officer who played important role in  1947 partition.",
			artist:"  ",
			//free:true,
			webmv: "vid/Amar%20Nath%20kaushtab.webm",
			poster: ""
		},
		{
		    title: "Bhai A S Bagrhia (famous scholar) talking about the Hafeez Jalandhari's son. How they saved his life from his cousine.",
			artist:"  ",
			webmv: "vid/Bhai%20A%20S%20Bagrhia.webm",
			poster: ""
		},
		{
		    title: "Hazara Singh eye witness of his muslim friend whome murdred by his villagers.",
			artist:"  ",
			webmv: "vid/Hazara%20Singh.webm",
			poster: ""
		},
		
		{
		    title: "Puran singh talking about the eating habits of the people before  1947 Punjab.",
			artist:"  ",
			webmv: "vid/P1010049%20puran%20singh.webm",
			poster: ""
		},
		{
		    title: "S. Darshan singh is talking about a families who had killed by cutting their heads by the locals.",
			artist:"  ",
			webmv: "vid/P1010088%20S.%20Darshan%20singh.webm",
			poster: ""
		},
		{
		    title: "S. Dharam singh is talking about the policy of Pakistani  politicians about the bounderies of the present India and Pakistan",
			artist:"  ",
			webmv: "vid/P1010129%20S.%20Dharam%20singh.webm",
			poster: ""
		},
		{
		    title: "S. jaswant singh is talking about the way of living before 1947.",
			artist:"  ",
			webmv: "vid/P1010141%20s.%20jaswant%20singh.webm",
			poster: ""
		},
		{
		    title: "S. Dharam singh is talking about the policy of Pakistani  politicians about the bounderies of the present India and Pakistan",
			artist:"  ",
			webmv: "vid/P1010173%20Giani%20Saroop%20singh.webm",
			poster: ""
		},
		{
		    title: "S. Hazara Singh is talking about his friendship with  a muslim and his visit after 1947 partition.",
			artist:"  ",
			webmv: "vid/P1010180%20S.%20Swaran%20Singh%20Bhandal.webm",
			poster: ""
		},
		{
		    title: "S. Swaran Singh talking about the famous fares and wrestlers in undivide punjab.",
			artist:"  ",
			webmv: "vid/P1010184%20S.%20Hazara%20Singh.webm",
			poster: ""
		},
		{
		    title: "S. jaswant singh is talking about the way of living before 1947.",
			artist:"  ",
			webmv: "vid/P1010286%20s.%20joginder%20singh%20bhullar.webm",
			poster: ""
		},
		{
		    title: "S. joginder singh bhullar talking about villages to move Pakistan to India and role of Pakistnai military in 1947 partition.",
			artist:"  ",
			webmv: "vid/s%20Ajaib%20singh.webm",
			poster: ""
		},
		{
		    title: "S. Inder Singh talking about their struggle in 1947 times.",
			artist:"  ",
			webmv: "vid/s.%20inder%20Singh.webm",
			poster: ""
		},
		{
		    title: "Sardar Banta Singh is talking about the trains in which peoples are  murdered in larger scale by the locals.",
			artist:"  ",
			webmv: "vid/Sardar%20Banta%20Singh_1(0)(0).webm",
			poster: ""
		},
		{
		    title: "Sardar Gurcharan Singh is eye witness of  struggle of two sikh families and murder of muslim families of his  village.",
			artist:"  ",
			webmv: "vid/Sardar%20Gurcharan%20Singh_1.webm",
			poster: ""
		},
		{
		    title: "Sardar Joginder Singh is talking abut the ratio of Hindu Sikh  Muslims in their city in Pakistan.",
			artist:"  ",
			webmv: "vid/Sardar%20Joginder%20Singh.webm",
			poster: ""
		},
		{
		    title: "Sardar Kunan Singh talking about murder of more than hundred peoples in 1947 partition.",
			artist:"  ",
			webmv: "vid/Sardar%20Kunan%20Singh_3.webm",
			poster: ""
		},
		{
		    title: "Sardar Raghbir Singh talking about the interesting story of pagg pin.",
			artist:"  ",
			webmv: "vid/Sardar%20Raghbir%20Singh_2.webm",
			poster: ""
		},
		{
		    title: "Sardar Ram Kishen Singh",
			artist:"  ",
			webmv: "vid/Sardar%20Ram%20Kishen%20Singh_2.webm",
			poster: ""
		},
		{
		    title: "Sardar Sawindar Singh Behl talking about the sikh families and train of Wah.",
			artist:"  ",
			webmv: "vid/Sardar%20Sawindar%20Singh%20Behl_5.webm",
			poster: ""
		},
		{
		    title: "Sardar Succha Singh is talking ablut the train murdred by the locals.",
			artist:"  ",
			webmv: "vid/Sardar%20Succha%20Singh_4.webm",
			poster: ""
		},
		{
		    title: "Sardar Swaran Singh is talking about the behaviour of the Sikh youth.",
			artist:"  ",
			webmv: "vid/Sardar%20Swaran%20Singh_3.webm",
			poster: ""
		},
		{
		    title: "Sardar Tara Singh talking about a muslim who attempted to fire a Gurdwar in 1947  partition.",
			artist:"  ",
			webmv: "vid/Sardar%20Tara%20Singh_3.webm",
			poster: ""
		},
		{
		    title: "Sardar Tehel Singh is talking about his meeting with his friend after 1947 partition.",
			artist:"  ",
			webmv: "vid/Sardar%20Tehel%20Singh_3.webm",
			poster: ""
		},
		{
		    title: "Sardarni Gurmej Kaur is talking about the his son and othe peoples to get ready for leaving Pakistan.",
			artist:"  ",
			webmv: "vid/Sardarni%20Gurmej%20Kaur_2.webm",
			poster: ""
		},
		{
		    title: "Sardarni Harbir Kaur talking about his aunty who committed suicide in 1947 partition.",
			artist:"  ",
			webmv: "vid/Sardarni%20Harbir%20Kaur_3.webm",
			poster: ""
		},
		{
			title:"Video29",
			artist:"  ",
			webmv: "vid/Sardarni%20Mahinder%20Kaur%20(Dec.%207,%202012)_1.webm",
			poster: ""
		},
		{
		    title: "Sardarni Mahinder Kaur is talking about the struggle of leaving their homes from Pakistan.",
			artist:"  ",
			webmv: "vid/Sardarni%20Mahinder%20Kaur_4.webm",
			poster: ""
		},
		{
		    title: "Sardarni Mahinder Kaur talking abut his fathers murdered and her burnt house in 1947 partition.",
			artist:"  ",
			webmv: "vid/Sardarni%20Mohindar%20Kaur_3.webm",
			poster: ""
		},
		{
		    title: "Sardarni Pritpal Kaur is talking about the struggle of peoples who made (chapatis) bread by the urine of their children in 1947 partition.",
			artist:"  ",
			webmv: "vid/Sardarni%20Pritpal%20Kaur_5.webm",
			poster: ""
		},
		
	], {
		swfPath: "",
		supplied: "webmv, ogv, m4v",
		size: {
			width: "640px",
			height: "360px",
			cssClass: "jp-video-360p"
		},
		useStateClassSkin: true,
		autoBlur: true,
		smoothPlayBar: true,
		keyEnabled: true
	});


});
//]]>
</script>
	
<style>

	.jp-video {
		margin:auto;	
		box-shadow: 3px 2px 40px white;
	}
	body {

/*background: radial-gradient(RGBA(190, 198, 204, 0.03), hsl(200, 7%, 51%) );	*/
        background-color:#ffffe5;
}
    
	.jp-playlist {
		
		
		width:100%;
		height:8em;
		float: left;
		
	}
	
	.short {
		
	}
	.adjust {
		margin-top:1%;
	}
	
	.less {
		display: none;
	}
	
    .vhead {
        margin-top:16%;
    }
    
    
    @media screen and (max-width:672px) {
    .jp-video-360p {
  width: 440px; }
        
        .jp-jplayer {
            width:438px !important;
        }
}
    
   
</style>
</head>
<body class="container">RGBA(190, 198, 204, 0.03)
<?php include 'includes/nav.php'; ?>
<div id="jp_container_1" class="jp-video jp-video-360p adjust vhead" role="application" aria-label="media player">
	<div class="jp-type-playlist">
		<div id="jquery_jplayer_1" class="jp-jplayer"></div>
		<div class="jp-gui">
			<div class="jp-video-play">
				<button class="jp-video-play-icon" role="button" tabindex="0">play</button>
			</div>
			<div class="jp-interface">
				<div class="jp-progress">
					<div class="jp-seek-bar">
						<div class="jp-play-bar"></div>
					</div>
				</div>
				<div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
				<div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
				<div class="jp-controls-holder">
					<div class="jp-controls">
						<button class="jp-previous" role="button" tabindex="0">previous</button>
						<button class="jp-play" role="button" tabindex="0">play</button>
						<button class="jp-next" role="button" tabindex="0">next</button>
						<button class="jp-stop" role="button" tabindex="0">stop</button>
					</div>
					<div class="jp-volume-controls">
						<button class="jp-mute" role="button" tabindex="0">mute</button>
						<button class="jp-volume-max" role="button" tabindex="0">max volume</button>
						<div class="jp-volume-bar">
							<div class="jp-volume-bar-value"></div>
						</div>
					</div>
					<div class="jp-toggles">
						<button class="jp-repeat" role="button" tabindex="0">repeat</button>
						<button class="jp-shuffle" role="button" tabindex="0">shuffle</button>
						<button class="jp-full-screen" role="button" tabindex="0">full screen</button>
					</div>
				</div>
				<div class="jp-details">
					<div class="jp-title" aria-label="title">&nbsp;</div>
				</div>
			</div>
		</div>
		
		<center><div class="less btn btn-default">Show Less [-]</div></center>
		<center><div class="expand btn btn-lg-default">Expand List[+]</div></center>
		<div id="play_list" class="jp-playlist short">
		<div data-role="scrollbox" data-scroll="vertical | horizontal | both">
			<ul>
				
				<li>&nbsp;</li>
			</ul>
			
		</div>
		
		</div>
		
		<div class="jp-no-solution">
			<span>Update Required</span>
			To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
		</div>
	</div>
</div>

<script src="res/jquery.min.js"></script>
<script>
$(document).ready(function() {
	$('.expand').click(function() {
		//$('#play_list').toggleClass('.short');
		$('#play_list').css('overflow-y','hidden');
		$('#play_list').css('height','auto');
		$('.expand').hide();
		$('.less').show(300);
	});
});
	
$(document).ready(function() {
	$('.less').click(function() {
		
		$('#play_list').css('height','100px');
		$('#play_list').css('overflow-y','scroll');
		$('.expand').show(300);
		$('.less').hide();
	});
});
	
</script>
<?php include 'includes/js.php'; ?>	
</body>

</html>

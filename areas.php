<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8"></meta>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<title>Centre on Studies in Guru Granth Sahib</title>
	
	

        <?php include 'includes/css.php'; ?>
		
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.transit.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
        
		<script>

			$(document).ready(function(){
				$(".back").hide();
				$(".tile_2").mouseenter(function(){
					$(this).children(".front").transit({
						"rotateX":"90deg"
					},300,"easeInCirc",function(){
						var back;
						$(this).hide();
						back=$(this).siblings(".back");
						back.css({
							"rotateX":"-90deg"
						});
						back.show();
						back.transit({
							"rotateX":"0deg"
						},300,"easeOutCirc");
					});
				});

				$(".tile_2").mouseleave(function(){
					$(this).children(".back").transit({
						"rotateX":"90deg"
					},300,"easeInCirc",function(){
						var front;
						$(this).hide();
						front=$(this).siblings(".front");
						front.css({
							"rotateX":"-90deg"

						})
						front.show();
						front.transit({
							"rotateX":"0deg"
						},300,"easeInCirc");
					});
				});
				
		//next
		$(".back_circle").hide();
				$(".cc").mouseenter(function(){
					$(this).children(".front_circle").transit({
						"rotateX":"90deg"
					},300,"easeInCirc",function(){
						var back;
						$(this).hide();
						back=$(this).siblings(".back_circle");
						back.css({
							"rotateX":"-90deg"
						});
						back.show();
						back.transit({
							"rotateX":"0deg"
						},300,"easeOutCirc");
					});
				});

				$(".cc").mouseleave(function(){
					$(this).children(".back_circle").transit({
						"rotateX":"90deg"
					},300,"easeInCirc",function(){
						var front;
						$(this).hide();
						front=$(this).siblings(".front_circle");
						front.css({
							"rotateX":"-90deg"

						})
						front.show();
						front.transit({
							"rotateX":"0deg"
						},300,"easeInCirc");
					});
				});

		//next
		$(".back_circle").hide();
				$(".top_circle").mouseenter(function(){
					$(this).children(".front_circle").transit({
						"rotateX":"90deg"
					},300,"easeInCirc",function(){
						var back;
						$(this).hide();
						back=$(this).siblings(".back_circle");
						back.css({
							"rotateX":"-90deg"
						});
						back.show();
						back.transit({
							"rotateX":"0deg"
						},300,"easeOutCirc");
					});
				});

				$(".top_circle").mouseleave(function(){
					$(this).children(".back_circle").transit({
						"rotateX":"90deg"
					},300,"easeInCirc",function(){
						var front;
						$(this).hide();
						front=$(this).siblings(".front_circle");
						front.css({
							"rotateX":"-90deg"

						})
						front.show();
						front.transit({
							"rotateX":"0deg"
						},300,"easeInCirc");
					});
				});
				
		
				
			});
		</script>

			<style>
                body
                {
                    background-color:#ffffe5;
                    overflow-x:hidden;
                }
                @media(max-width:992px){
                    .disappear{
                        visibility: hidden;
                        height: 30px;
                    }
                }
				@media (max-width: 855px) {
					
					.s{
						font-size:25px;
					
					}

				}
				@media (max-width: 1200px) {
					
					.news_sec{
						font-size:25px !important;
					
					}


				}
				@media(max-width:799px){
					.lets{
						padding:20px 28px !important;
					}
				}
				@media(max-width:767px){
					.lets{
						padding:20px 48px !important;
					}
				}
				@media (max-width: 767px) {
					
					.tile_3{
						margin-top:5px;
						text-align: left!important;
					
					}
				}
				@media (max-width: 829px) {
					
					.tile_3{
						padding-left:0px !important;
					
					}
				}
				@media (max-width: 767px) {
					
					.s{
						font-size:17px;
					
					}
					.tile_1{
					margin-top:5px;
					}
				}
				@media (max-width: 644px) {
					
					.last{
						margin-left:90px;
					
					}
					.row1-text{
						font-size:15px;
					}

				}
				@media(max-width:445px){
					.last{
						margin-left:0px;
					}
					#word{
						font-size:32px;
					}
					#overlay{
						padding:164px 0px 120px;
					}
					.icon-size_2{
						font-size: 67px;
					}
					.front{
						font-size:24px !important;
					}
					.media_text{
						font-size: 22px !important;
					}
					.media_text_2{
						font-size: 14px !important;
					}
					.tile_3{
						margin-top: 2px;
					}
					.spon_text{
						font-size: 11px !important;
					}
							
				}
				@media(max-width:335px){
					.large_size{
						font-size: 38px;
					}
					.spacing_footer{
						font-size:12px !important;
					}
					
				}
				@media(max-width:384px){
					.small{
						font-size: 25px !important;
					}
					
				}
				@media(max-width:259px){
					.small{
						font-size: 21px !important;
					}
					.spacing_footer{
						font-size:9px !important;
					}
					
				}
				@media(max-width:300px){
					.spon_text{
						width:60px;
					}
					
				}
				@media(max-width:1199px){

						.copyright_color_1{
										border-right:0px !important;
										}
						.rem{
							padding-left:0px !important;
							padding-right: 0px !important;
							}
				}
				@media(max-width:988px){
						#word{
						font-size:22px !important;
					}
					#overlay{
						padding:180px 0px 120px;
					}
				}
				@media (min-width:768px) and (max-width:991px){
					.box_c{
						width:200px !important;
					}
					.cc{
						margin-left:128px;
					}
					.right_lower{
						width:200px !important;
					}
					.news_rem{
						font-size:12px !important;
					}
					.text_padding{
						width:150px !important;
					}
				}
				@media(max-width:309px){
					.text_padding{
						width:148px !important;
					}
					
				}
				@media(max-width:340px){
					.box_c{
						width:200px !important;
					}
					.cc{
						margin-left:128px;
					}
					.right_lower{
						width:190px !important;
					}
					.news_rem{
						font-size:12px !important;
					}
				}
				@media (max-width:767px){
					.s{
						float:left !important;
						padding:20px 18px;
					}
					

				}

				@media (min-width:460px) and (max-width:767px){
					.move{
						margin-left:100px !important;
					}

				}
				 .fixed {
            position: fixed;
            z-index: 2;
        }

        * {
            font-weight: 500;
        }
			</style>
		 <script>
        $(window).scroll(function () {
            if ($(this).scrollTop() > 10) {
                $('.fix1').addClass('fixed');

            }
            else {
                $('.fix1').removeClass('fixed');
            }
        });
    </script>
      <?php include 'includes/css.php'; ?>
    <style>
    
        input {
            opacity:1 !important;
            line-height: 99px !important;
        }
        
       

 

    .img_right_cult {
    background: url('../images/10-crop.JPG')!important;
  
}
/*===============--- very important css---========*/
        
        #tipue_search_input {
            z-index:1 !important;
        }
        
        body > div.navbar-fixed-top.container > div > div.smalls > div.sliden.alter2 > ul {
            margin-left:40px;
        }
        
        body > div.navbar-fixed-top.container > div > div.smalls > div.sliden.alter2 > ul > li > ul > li > a {
            padding-left:35px;
        }
        
        
    .nav>li>a:hover {
        color: white !important;
        background-color: #428bca !important;
}
        
        .dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus {
    color: #fff !important;
    background-color: #428bca !important;
}
/*==========---======================*/
</style>
    

		
	</head>		
		 
<?php 
        include 'includes/nav.php'; ?>
	<body class="container" style="margin-top:0px" >

        
      <link rel="stylesheet" type="text/css" href="css/css2.css" />
	
				<!--second cultural events tile-->
				<section id="title" class="head">
				<div class="row row1" style="margin-top:-60px" >
					<div class="col-sm-12 col-md-12">
						<div class="col-md-6 col-sm-6 ">
							<div class="col-sm-12 col-xs-12 col-md-12 tile">
									<div class="col-sm-12 col-xs-12 col-md- tile_2 only">
										<div class="front">
										<br />
											<h1 style="font-family:ralvey;margin-top:50px !important">Areas Of Study</h1>
										</div>
										<div class="back" >
											<div class="row">
													<p class=" p_text l media_text_2" style="font-size:18px;"><a href="areas">Interfaith Understanding</a></p>
											</div>
											<div class="row">
													<p class=" p_text  media_text_2" style="font-size:18px;"><a href="areas#title5">Scriptual Translations</a></p>
											</div>
											<div class="row">
												<p  class=" p_text r media_text_2" style="font-size:18px;"><a href="areas#title1">Scriptures</a></p>
											</div>
											<div class="row">
													<p class=" p_text l media_text_2" style="font-size:18px;"><a href="areas#title2">Musicology</a></p>
											</div>
											<div class="row">
													<p class=" p_text  media_text_2" style="font-size:18px;"><a href="areas#title3">Hermeneutic And Linguistic</a></p>
											</div>
											<div class="row">
												<p  class=" p_text r media_text_2" style="font-size:18px;"><a href="areas#title4">Social And Culture</a></p>
											</div>
										</div>
									</div>	
								</div>
						</div>
						<div class="disappear col-sm-6 col-md-6">
							<div class="col-sm-12 col-md-12 tile_1 img_right_cult" style="background-size: cover !important;
    background-repeat: no-repeat !important; height:250px">
								<div class="tile_1_inner">
							
									<h2 class="row1-text c_cadetblue only " style="margin-top:160px"><p class=" c_cadetblue row1-text shadow_news_1 media_text_2" >
										Continuous efforts by the center to contribute in communnal harmony.
									</p></h2>
								</div>
							</div>
								
						</div>
						
						<div class="col-sm-12 col-xs-12 col-md-12">
							<div id="1" class="col-sm-10 col-xs-12 col-md-12 long_tile" style="padding-top:-10px;">
								<h2  id="title" style="padding-top:30px;font-family:ralvey;">
									INTERFAITH UNDERSTANDING
								</h2>
								<br />
							<p  style="font-size:17px;font-family:ralvey;text-align:justify;">As the world is beset with sectarian animosities, Sri Guru Granth Sahib’s focus on inter-religious dialogue is very significant. Also significant is the focus on co-existence, amity and human integration. Humaneness forms the bedrock of the teachings of the Sikh Gurus and other holy men whose verses are incorporated in Sri Guru Granth Sahib.  It presents an excellent example of co-existence, cosmopolitanism, interfaith understanding and unity in diversity, which is unparalleled in the history of world scriptures. It rightly confers upon it the status of interfaith Scripture. The model of interfaith understanding as propounded in the Sikh Scripture can convince the people belonging to diverse cultures that human beings can accommodate each others’ views and live together in spite of their different religious affiliations. There is a need to further this message which requires dedicated and focused research. It is the need of the hour to understand that Sri Guru Granth Sahib addresses not its votaries alone, but the whole humankind. </p>
							</div>
							
						</div>
						
						<div class="col-sm-12 col-xs-12 col-md-12">
							<div id="3" class="col-sm-10 col-xs-12 col-md-12 long_tile">
								<h2 id="title1" style="padding-top:30px;font-family:ralvey;">
									SCRIPTURAL STUDIES
								</h2>
								<br />
								<p style="font-size:17px;font-family:ralvey;text-align:justify;">The fountain-head of Sikh theology and spirituality is Sri Guru Granth Sahib. Besides the cosmological, metaphysical and ethical percepts, its word view and goal of human life is very unique and significant. The roots of the Sikh institutions are enshrined in it. The contribution of the Sikh Scripture to the Indian thought is an interesting area which requires in depth studies. There are so many mythological and historical references of Hindu gods, goddesses and religious personages. Similarly, Islam particularly Sufism has been given a considerable space in the holy verses of Sri Guru Granth Sahib. Numerous references to Buddhism and Jainism, the two ancient religions of India are found in Sri Guru Granth Sahib. In a way it presents the spiritual tradition of Indian sub-continent that had developed upto the end of seventeenth century. It requires meticulous research at the academic level. It holds great merit to understand the Indian tradition from the viewpoint of comparative study of religion. 
The writings of medieval Indian Bhaktas and Sufis form a glorious part of the Sikh Scripture. Studies on the Bhakti Movement, life and teachings of the Bhaktas and Sufis who have contributed to the text of Sri Guru Granth Sahib and their impact upon the people of Indian subcontinent form an important feature of the studies carried out in the Centre.
</p>
							</div>
						</div>
						<div class="col-sm-12 col-xs-12 col-md-12">
							<div id="4 " class="col-sm-10 col-xs-12 col-md-12 long_tile">
								<h2 id="title2" style="padding-top:30px;font-family:ralvey;" >
									MUSICOLOGY
								</h2>
								<br />
							<p style="font-size:17px;font-family:ralvey;text-align:justify;">Sri Guru Granth Sahib is a raga oriented scripture. The whole text has been arranged into 31 musical modes and their composite varieties. It is most suitable for congregational singing. The study of musicology of Sri Guru Granth Sahib is very significant as it represents a unique musical tradition which comprises the classical and folk varieties of music. It is an unprecedented blend of music and poetry. The Sikh Gurus, the Bhaktas and the Sufi Saints not only adopted the Indian musical traditions but adapted it to a popular understanding so that the musical and content part may be synthesized. The ragas of the classical tradition have been oriented to local and folk traditions. This magnificent localization process has proved very beneficial to the ordinary people. The Gurus themselves invented some of the ragas in the Sri Guru Granth Sahib. So the musical tradition of Sri Guru Granth Sahib as propounded by the Gurus and its relationship with the Indian musical tradition are in the studies carried out in the Centre.</p>
				</div>
						</div>
						<div class="col-sm-12 col-xs-12 col-md-12">
							<div  id="5 " class="col-sm-10 col-xs-12 col-md-12 long_tile">
								<h2 id="title3" style="padding-top:30px;font-family:ralvey;">
									HERMENEUTIC AND LINGUISTIC STUDIES
								</h2>
								<br />
							<p style="font-size:17px;font-family:ralvey;text-align:justify;">The Sikh Gurus and the other contributors to the text of Sri Guru Granth Sahib have expressed their spiritual experience through the medium of poetry composed in various ragas and meters. Although it has been written in Gurmukhi script yet its language transcends the boundaries of religion and regions. It abounds in varieties of Punjabi, Hindi, Braj, Sindhi, Persian, Sanskrit, etc.. The metaphors and similes employed in it speak volumes of the poetic genius and aesthetic sense of its authors. The study of the semantics of Sri Guru Granth Sahib is equally important along with the content of the text. There is a dire need to understand the language, script, grammar and poetics of Sri Guru Granth Sahib. The Division for Hermeneutic and Linguistic studies takes care of the above components. The central focus is upon the text and its exegesis. Production of expositional literature is one of the chief objectives of the scholars working in the Centre.</p>
				</div>
						</div>
						<div class="col-sm-12 col-xs-12 col-md-12">
							<div  id="6 " class="col-sm-10 col-xs-12 col-md-12 long_tile">
								<h2 id="title4" style="padding-top:30px;font-family:ralvey;">
									SOCIAL AND CULTURAL STUDIES
								</h2>
								<br />
							<p style="font-size:17px;font-family:ralvey;text-align:justify;">Sri Guru Granth Sahib is an authentic source of social and cultural history of medieval Punjab and India as well. Many of the verses in the Sri Guru Granth Sahib allude to the facts of social and cultural life. Its verses provide significant insights into the social and cultural history of the Sikh Panth. If a comprehensive picture is attempted to be brought forth with reference to Bani, it will considerably enhance our knowledge of the social and cultural history of medieval India. Above division is concerned about the studies regarding the role of Sikh Scripture in the making of Sikh Panth as well as its impact on the social and cultural life of India. </p>
						</div>
						</div>
						<div  class="col-sm-12 col-xs-12 col-md-12">
							<div id="2" class="col-sm-10 col-xs-12 col-md-12 long_tile">
								<h2  id="title5" style="padding-top:30px;font-family:ralvey;">
									SCRIPTURAL TRANSLATIONS
								</h2>
								<br />
							<p style="font-size:17px;font-family:ralvey;text-align:justify;">To conduct the study on Sri Guru Granth Sahib, there is a dire need to work on its translation into different languages of the world including the Indian languages. An authentic translation in English is also of seminal importance. There are a good number of English translations but as these vary considerably, so do the meanings of the import of the Bani. If there is one widely accepted translation, it will help to convey the rightful meaning. Similarly, there are translations of the Sri Guru Granth Sahib in German and French languages. These also need standardization. This Centre has on its agenda the translation of Sri Guru Granth Sahib into various languages of the world so that its message may be spread at widest level.</p>
				</div>
						</div>
						</div>
					

						</div>
				</div>
				</div>
				</section>
				
	<?php include 'includes/footer.php'; ?>
				


<script src="js/jqueryUI.js"></script>

<script>

$(document).ready(function() {
		$('.in-nav').click(function() {
		$('nody').toggleClass();
		
	});
	});
		$('.in-nav').click(function() {
			$('.nav-lay').addClass('animated slideInUp').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {$('.nav-lay').removeClass('animated slideInUp')});
			$('.nav-lay').removeClass("nav-hid");
			

		});
			
		$('.nav-close').click(function() {
			$('.nav-lay').addClass('nav-hid');

		});
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top -200
            }, 500);
            return false;
        }
    }
});



</script>


			
	</body>
</html>		
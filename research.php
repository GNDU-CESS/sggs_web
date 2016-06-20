<?php include 'includes/meta.php';  ?>
<title>
    Research
</title>

    <?php include 'includes/css.php'; ?>
  <style>
	body
	{
		background-color:#ffffe5;
		overflow-x:hidden;
	}

    @media screen and (max-width: 1200px){
    .mob-set{
      display: none;
        
    }
       
}
		
    .head h1{
      text-align: center;
      padding: 40px;
    }
    .container{
      padding: 0px;
    }

   .fixed {
            position: fixed;
            z-index: 2;
        }

        * {
            font-weight: 500;
        }
		/*======*/
		
		
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
</head>
<body class="container">
<?php include 'includes/nav.php';
      ?>
    

   <div class="navbar-fixed-top container" style="height:50px;z-index:15;position:fixed;"></div>
	
<div class="head">         
  <section class="mob-set" style="background-image:url('img/research.jpg');background-repeat:no-repeat;margin-top:-40px;height:150px;">
  <br><br><h2 style="text-align:center"></h2>
  </section><!--/#title-->     

<br>
<br>
<br>

  <section id="career" class="container mob-set-top">
  <div class="col col-sm-6">
		<div class="center"style:font-family: "Raleway">
		
		  <h2 class="head1">Projects and Publications</h2>
		</div>
		<br>
		<br>
	   <p style="text-align:justify; font-family: 'Raleway-ExtraLight'">
			Keeping in mind the thrust areas of the Centre and specialization of the faculty various research projects have been chalked out. Our focus is on the development of research tools which may be useful for doing studies on Sri Guru Granth Sahib. Besides supplementing the sources of Sikh religion, history and literature we are working on those areas which are very crucial for the Sikh Studies but have remained ignored so far.
			<br>
			<br>
					For the proper interpretation of the message of Sri Guru Granth Sahib and for the dissemination of research work done on it, publication of books in various languages of India and world is the need of the hour. Presently this work is not being done academically and in a systematic manner. Even to facilitate the scholars interested in taking up studies on Sri Guru Granth Sahib, research tools in the form of bibliographies, dictionaries, encyclopedias, subject indices, glossaries etc. are not available. The Centre, besides publishing this type of material, will also publish the research work done by the faculty and make it available at international level. 
					Sri Guru Granth Sahib epitomizes the spiritual tradition of Indian sub-continent. Besides that of the Sikh Gurus, it comprises the sacred writings of the medieval Indian Bhagats and Sufis. Its message is holistic in nature which is of immense value in solving the ills that we are facing today. It needs to be propagated and made known to the world community. In the recent years, scholars from diverse fields have shown keen interest in Sri Guru Granth Sahib to access the unfathomed ocean of wisdom. The research work done by such scholars need to be published. 
			<br>
					
		</p> 
	</div>
	<div class="col col-sm-1 mob-set">
		<br /><br />
	</div>
	<div class="col col-sm-4 " style="padding-top:100px;">
	The projects under progress, the completed projects and the research publication are as follows:<br /><br />
		<ul style="list-style:none;">
		<br /><br >
					<a href="research_publications.php"><li style="width:350px;height:40px;background-color:wheat;align:center;padding:2px"><h4>Research Publications</h4></li></a><br />
					<a href="underprogress.php"><li style="width:350px;height:40px;background-color:wheat;align:center;padding:2px"><h4>Projects under Progress</h4></li></a><br />
					<a href="completed_projects.php"><li style="width:350px;height:40px;background-color:wheat;align:center;padding:2px"><h4>Completed Projects</h4></li></a><br />
		</ul>
	</div>
</section>   
    </div>
<br><br> 	   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php include 'includes/footer.php'; include 'includes/js.php';?>
</body>
</html>
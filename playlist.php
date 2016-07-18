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
<style>
    
    .embed-container { 
        position: relative;
        height: 0; 
        overflow: hidden;
        max-width: 80%; 
        margin-left:auto;
        margin-right:auto;
    } 
    .embed-container iframe, .embed-container object, .embed-container embed {
        position: absolute;
        top: 0; 
        left: 0px;
        width: 100%;
        height: 60%; 
    }
    
	@media screen and (min-width:700px) {
		.det {
			margin-top:-195px;
		}
	}
</style>
</head>
<body class="container">
<?php include 'includes/nav.php'; ?>

   
   <div class='embed-container head'>
       <iframe src='https://www.youtube.com/embed/videoseries?list=PLZTLQvhbYJQ9wwgJC0gWEq-xW5Aslby3Z' frameborder='0' allowfullscreen></iframe>
    </div>
<div style="padding:10px" class="colorido-gl det">
    <h3 class="center">Recording of Oral Sikh Tradition and Partition of Punjab Related Stories </h3>
    <p>In order to spread the Mission of Sikhism Guru Nanak and his successors had travelled a lot in and outside the Punjab. The oral Sikh tradition that is in circulation at these places has not found its way into the written sources. To supplement as well as to corroborate the evidence, oral Sikh tradition is of great value, thus it needs recording at the earliest. Similarly, in 1947 in the wake of partition of Punjab millions of Sikhs/Punjabis had to leave their homes and hearths. During the migration they had to experience countless miseries which are unheard of in the history of mankind. Their stories of survival and grit, personal loss and grief and triumph of human spirit over the sectarian violence are still fresh in their minds. Unfortunately, no one has heard their side of story. Persons who have witnessed the partition and those who actually experienced it are vanishing day by day. Thus, the heart rendering stories that are enshrined in their bosoms will be lost forever. The Centre has taken upon itself to save it from oblivion. This project was initiated in collaboration with American India Foundation and 1947 Partition Archives, University of California, Berkeley. Besides appointing a Fellow the AIF provided equipment for the purpose of recording. An exhaustive questionnaire has been prepared to conduct the interview on Camera. So far interviews of more than 135 persons who have gone through the trauma of partition have been recorded. The Project when completed will have at its disposal enormous archival data for the purpose of writing of history. In the current session Centre plans to publish some of the most significant interviews in a book form.</p>
    </div> 
<?php 
include 'includes/footer.php';
include 'includes/js.php'; ?>	
</body>

</html>

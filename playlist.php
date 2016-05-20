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
        padding-bottom: 56.25%;
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
    
</style>
</head>
<body class="container">
<?php include 'includes/nav.php'; ?>

    
   <div class='embed-container head'>
       <iframe src='https://www.youtube.com/embed/videoseries?list=PLZTLQvhbYJQ9wwgJC0gWEq-xW5Aslby3Z' frameborder='0' allowfullscreen></iframe>
    </div>

<?php 
include 'includes/footer.php';
include 'includes/js.php'; ?>	
</body>

</html>

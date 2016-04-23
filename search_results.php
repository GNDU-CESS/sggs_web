<?php include 'includes/meta.php';  ?>


    <?php include 'includes/css.php';
include 'includes/js.php'; ?>



<link href="tipuesearch/tipuesearch.css" rel="stylesheet">
<script src="tipuesearch/tipuesearch_set.js"></script>
<script src="tipuesearch/tipuesearch.min.js"></script>
<title>Results Found</title>
<style>
   .found {
        padding:2%;
    }
    
    #tipue_search_content li a {
      color: black !important;
     cursor: pointer;
    }
    
    #tipue_search_content li {
        cursor: pointer;
    }

</style>
</head>
<body class="container">
<?php include 'includes/nav.php';
      include 'includes/map.php';?>
<div class="head">
    <div class="found" id="tipue_search_content"></div>   
</div>   
    
 <script>
    $(document).ready(function() {
         $('#tipue_search_input').tipuesearch({
              'mode': 'live'
         });
    });
</script>    
<script>
$(document).ready(function() {
     $('#tipue_search_input').tipuesearch({
          'mode': 'live',
          'liveDescription': 'section',
          'liveContent': '.container'
     });
});
</script>
<?php include 'includes/footer.php';?>
</body>
</html>
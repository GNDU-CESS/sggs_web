<?php
    
  include 'includes/meta.php';  
?>
<title>Search Result</title>

<script language="JavaScript1.3" type="text/javascript" src='searchjs/jse_form.js'></script>
<script language="JavaScript1.3" type="text/javascript" src="searchjs/jse_search.js"></script>

<?php 
  include 'includes/css.php';
  include 'includes/js.php'; 
?>
<style>

    .result {
        margin-top:120px;
        padding:50px;
    }

    .result a {
        font-weight:600;
        text-transform: capitalize;
        text-decoration: underline;
        color: blue;
    }
    
    .result {
        margin-left:3%;
        margin-right:3%;
    }
    
</style>
</head>
<body class="container">
<?php
  
  include 'includes/nav.php';
  
?>
    

<section>
<div class="result container">

        <script language="JavaScript1.3" type="text/javascript">return_query()</script>

        <script language="JavaScript1.3" type="text/javascript">num_jse()</script> page(s) found
        <hr>
        <p>
        <script language="JavaScript1.3" type="text/javascript">
        out_jse()
        </script>
        <p>&nbsp;

</div>
</section>
 <?php include 'includes/footer.php'; include 'includes/js.php';?>
</body>
</html>
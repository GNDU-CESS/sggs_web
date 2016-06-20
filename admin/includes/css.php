<link href="../css/animate.min.css" rel="stylesheet">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../css/font-awesome.min.css" rel="stylesheet">
<link href="../css/adjust.min.css" rel="stylesheet">
<link href="../css/animate.css" rel="stylesheet">

<style>
    textarea {
        resize: vertical;
    }
    
    @media screen and (max-width:1200px) {
        .navbar {
            display: none;
        }
        .toph {
            text-align: left;
        }
        .navbar-fixed-top {
            position: static !important;
        }
        .head {
            margin-top: 0 !important;
        }
        .headd {
            margin-top: 0 !important;
        }
        .result {
            margin-top: 0 !important;
        }
        .gset {
            margin-top: 0 !important;
        }
        .carous {
            padding: 0;
        }
    }
    
    .mob-nav {
        width: 100%;
        height: auto;
    }
    
    .mob-title {
        display: block;
        line-height: 55px;
        font-size: 24px;
    }
    
    @media screen and (min-width:1200px) {
        .mob-nav {
            display: none;
        }
        .smalls {
            display: none;
        }
    }
    
    @media screen and (max-width:400px) {
        .mob-title {
            padding: 4px;
            text-align-last: center;
            line-height: 35px;
            font-size: 18px;
        }
    }
    
    .sliden {
        position: fixed;
        overflow-y: scroll;
        top: 0;
        z-index: 20;
        height: 100%;
        width: 70%;
        display: none;
        background-color: rgb(5, 25, 56);
        color: #fff;
        left: 0;
        border: 2px solid white;
        box-shadow: 2px 0px 5px grey;
    }
    
    .o2 {
        background-color: #313156;
    }
    
    .o2 li {
        border: 0px solid white !important;
    }
    
    .sliden ul> li {
        list-style-type: none;
        padding: 2%;
        margin: 1%;
        border-left: 3px solid white;
    }
    
    body > div.navbar-fixed-top.container > div > div.smalls > div.col-md-12.col-sm-12 > div > a > span {
        margin-top: 10px;
    }
    
    .sliden .dropdown-menu {
        background-color: rgb(5, 25, 56);
        box-shadow: 2px 0px 5px grey;
        border-bottom: 2px solid white;
    }
    
    .sliden li.dropdown {
        margin-left: -39px;
    }
    
    .sliden li {
        margin-left: -39px !important;
    }
    
    input {
        position: static;
    }
    
    .btn-default {
        box-shadow: 0 0 0.2px black;
    }
    
    .gset {
        margin-top: 75px;
    }
    
    @media screen and (min-width:1200px) {
        .hset {
            float: left;
            margin-left: 10px;
        }
    }
    
    a {
        text-decoration: underline !important;
    }
    
    
</style>
<!--loader-->
<script src="../js/startload.min.js"></script>
<link href="../css/startload.css" rel="stylesheet" />
<link href="../css/mediaset.min.css" rel="stylesheet" type="text/css">
<style>
	          .panel {
                    border-color: rgba(10, 1, 6, 0.4);
                    height: 550px !important;
                    overflow-y: scroll;
                }
                
                .panel-heading {
                    background-color: #003 !important;
                    color: #fff !important;
                    border-radius: 0%;
                    text-align: center;
                }
                
                .panel a {
                    color: #34495E !important;
                    text-transform: underline !important;
                }
                
                .nav {
                    margin-top: 0 !important;
                    margin-bottom: 2%;
                    width: 100%;
                    min-height: 50px;
                }
                
                .nav span {
                    padding: 5px;
                    background-color: #003;
                    border: #003 4px solid;
                    color: white;
                    min-width: 147px;
                    font-weight: 600;
                    transition: background-color 0.5s ease-in, border 0.5s;
                }
				
	.overlay {
		position:fixed;
		width:100%;
		height:100%;
	}
					
	input,textarea {
		border-radius: 0!important;
		border:1px solid #003 !important;
		
	}
                
                .nav span:hover {
                    background-color: teal;
                    border: 4px rgba(14, 21, 41, 0.3) solid;
                }
                
                body {
                    padding-top: 30px;
                    background-color: rgba(113, 105, 116, 0.57);
                }

</style>
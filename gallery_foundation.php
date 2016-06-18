<?php include 'includes/meta.php';  ?>
<title>
   Gallery Foundation
</title>

    <?php include 'includes/css.php'; ?>
<style>
 body
	{
		background-color:#ffffe5;
		overflow-x:hidden;
	}
</style>
</head>
<body class="container gset">
<?php include 'includes/nav.php';
      ?>
    
 

    
			
    <script type="text/javascript" src="js/jssor.slider.min.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
              {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Zoom:1,$Rotate:1,$During:{$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:0.5,$Cols:2,$Zoom:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:4,$Cols:2,$Zoom:11,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Left:$Jease$.$Swing,$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,x:-4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:-0.6,$Zoom:1,$Rotate:1,$During:{$Left:[0.2,0.8],$Zoom:[0.2,0.8],$Rotate:[0.2,0.8]},$Easing:{$Left:$Jease$.$Swing,$Zoom:$Jease$.$Swing,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$Swing},$Opacity:2,$Round:{$Rotate:0.5}},
              {$Duration:1000,x:4,$Zoom:11,$Rotate:1,$SlideOut:true,$Easing:{$Left:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.8}},
              {$Duration:1200,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1000,x:0.5,y:0.3,$Cols:2,$Zoom:1,$Rotate:1,$SlideOut:true,$Assembly:2049,$ChessMode:{$Column:15},$Easing:{$Left:$Jease$.$InExpo,$Top:$Jease$.$InExpo,$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear,$Rotate:$Jease$.$InExpo},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,x:-4,y:2,$Rows:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Row:28},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.7}},
              {$Duration:1200,x:1,y:2,$Cols:2,$Zoom:11,$Rotate:1,$Assembly:2049,$ChessMode:{$Column:19},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad,$Rotate:$Jease$.$InCubic},$Opacity:2,$Round:{$Rotate:0.8}}
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Rows: 2,
                $Cols: 6,
                $SpacingX: 14,
                $SpacingY: 12,
                $Orientation: 2,
                $Align: 156
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 960);
                    refSize = Math.max(refSize, 300);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    <style>
        
        /* jssor slider arrow navigator skin 05 css */
        /*
        .jssora05l                  (normal)
        .jssora05r                  (normal)
        .jssora05l:hover            (normal mouseover)
        .jssora05r:hover            (normal mouseover)
        .jssora05l.jssora05ldn      (mousedown)
        .jssora05r.jssora05rdn      (mousedown)
        */
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('img/a17.png') no-repeat;
            overflow: hidden;
        }
        .jssora05l { background-position: -10px -40px; }
        .jssora05r { background-position: -70px -40px; }
        .jssora05l:hover { background-position: -130px -40px; }
        .jssora05r:hover { background-position: -190px -40px; }
        .jssora05l.jssora05ldn { background-position: -250px -40px; }
        .jssora05r.jssora05rdn { background-position: -310px -40px; }

        /* jssor slider thumbnail navigator skin 01 css */
        /*
        .jssort01-99-66 .p            (normal)
        .jssort01-99-66 .p:hover      (normal mouseover)
        .jssort01-99-66 .p.pav        (active)
        .jssort01-99-66 .p.pdn        (mousedown)
        */
        .jssort01-99-66 .p {
            position: absolute;
            top: 0;
            left: 0;
            width: 99px;
            height: 66px;
        }
        
        .jssort01-99-66 .t {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .jssort01-99-66 .w {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
        }
        
        .jssort01-99-66 .c {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 95px;
            height: 62px;
            border: #000 2px solid;
            box-sizing: content-box;
            background: url('img/t01.png') -800px -800px no-repeat;
            _background: none;
        }
        
        .jssort01-99-66 .pav .c {
            top: 2px;
            _top: 0px;
            left: 2px;
            _left: 0px;
            width: 95px;
            height: 62px;
            border: #000 0px solid;
            _border: #fff 2px solid;
            background-position: 50% 50%;
        }
        
        .jssort01-99-66 .p:hover .c {
            top: 0px;
            left: 0px;
            width: 97px;
            height: 64px;
            border: #fff 1px solid;
            background-position: 50% 50%;
        }
        
        .jssort01-99-66 .p.pdn .c {
            background-position: 50% 50%;
            width: 95px;
            height: 62px;
            border: #000 2px solid;
        }
        
        * html .jssort01-99-66 .c, * html .jssort01-99-66 .pdn .c, * html .jssort01-99-66 .pav .c {
            /* ie quirks mode adjust */
            width /**/: 99px;
            height /**/: 66px;
        }
      
  
    </style>
	

<div class="headd">
	<div style="height:120px">

            <div class="row">
                <div class="col-md-12">
                    <div class="center gap" >
                        <h1 style="margin-top:20px; margin-bottom:30px;" class="head1 head">Foundation</h1>   
                    </div>                
                </div>
            </div>
    </div><!--/#title--> 

        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 960px; height: 480px; overflow: hidden; visibility: hidden; background-color: #24262e;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 240px; width: 720px; height: 480px; overflow: hidden;">
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="img/gallery/images/foundation/img1.JPG" />
                <div class="carousel-caption"><p class="boxed">02-11-2012 The historic date of foundation stone of Centre on studies in Sri Guru Granth Sahib</p></div>
                <img data-u="thumb" src="img/gallery/thumbs_foundation/thumb1.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="img/gallery/images/foundation/img2.JPG" />
                <div class="carousel-caption"><p class="boxed">02-11-2012 The historic date of foundation stone of Centre on studies in Sri Guru Granth Sahib</p></div>
                <img data-u="thumb" src="img/gallery/thumbs_foundation/thumb2.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="img/gallery/images/foundation/img3.JPG" />
                <div class="carousel-caption"><p class="boxed">2-11-12 Foundation stone of Centre on studies in Sri Guru Granth Sahib</p></div>
                <img data-u="thumb" src="img/gallery/thumbs_foundation/thumb3.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="img/gallery/images/foundation/img4.JPG" />
                <div class="carousel-caption"><p class="boxed">2-11-12 Foundation stone of Centre on studies in Sri Guru Granth Sahib</p></div>
                <img data-u="thumb" src="img/gallery/thumbs_foundation/thumb4.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="img/gallery/images/foundation/img5.JPG" />
                <div class="carousel-caption"><p class="boxed">Prof.Ajaib Singh Brar(VC)during ardas before Inauguration ceremony</p></div>
                <img data-u="thumb" src="img/gallery/thumbs_foundation/thumb5.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="img/gallery/images/foundation/img6.JPG" />
                <div class="carousel-caption"><p class="boxed">Sri Guru Granth Sahib being carried by devotees after ardas.</p></div>
                <img data-u="thumb" src="img/gallery/thumbs_foundation/thumb6.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="img/gallery/images/foundation/img7.JPG" />
                <div class="carousel-caption"><p class="boxed">Ragis reciting hymns during Inauguration ceremony</p></div>
                <img data-u="thumb" src="img/gallery/thumbs_foundation/thumb7.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="img/gallery/images/foundation/img8.JPG" />
                <div class="carousel-caption"><p class="boxed">The Inauguration ceremony of Sri Guru Granth Sahib Bhawan</p></div>
                <img data-u="thumb" src="img/gallery/thumbs_foundation/thumb8.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="img/gallery/images/foundation/img9.JPG" />
                <div class="carousel-caption"><p class="boxed">Prof.Ajaib Singh Brar(VC),Avtar Singh Makkar presiding over Inauguration ceremony</p></div>
                <img data-u="thumb" src="img/gallery/thumbs_foundation/thumb9.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="img/gallery/images/foundation/img10.JPG" />
                <div class="carousel-caption"><p class="boxed">Prof.Ajaib Singh Brar(VC),Avtar Singh Makkar presiding over Inauguration ceremony</p></div>
                <img data-u="thumb" src="img/gallery/thumbs_foundation/thumb10.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="img/gallery/images/foundation/img11.JPG" />
                <div class="carousel-caption"><p class="boxed">Inauguration of Sri Guru Granth Sahib Bhawan</p></div>
                <img data-u="thumb" src="img/gallery/thumbs_foundation/thumb11.jpg" />
            </div>
            <div data-p="150.00" style="display: none;">
                <img data-u="image" src="img/gallery/images/foundation/img12.JPG" />
                <div class="carousel-caption"><p class="boxed">Prof.Ajaib Singh Brar(VC),Avtar Singh Makkar presiding over Inauguration ceremony</p></div>
                <img data-u="thumb" src="img/gallery/thumbs_foundation/thumb12.jpg" />
            </div>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort01-99-66" style="position:absolute;left:0px;top:0px;width:240px;height:480px;" data-autocenter="2">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div class="w">
                        <div data-u="thumbnailtemplate" class="t"></div>
                    </div>
                    <div class="c"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora05l" style="top:158px;left:248px;width:40px;height:40px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora05r" style="top:158px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
       
    </div>
    
    
    </div>
    <br><br>
    <script>
        jssor_1_slider_init();
    </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php include 'includes/footer.php'; include 'includes/js.php';?>
</body>
</html>
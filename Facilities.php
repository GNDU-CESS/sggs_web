<?php include 'includes/meta.php';  ?>
    <title>
        Facilities
    </title>

    <?php include 'includes/css.php'; ?>
        <style>
            body {
                background-color: #ffffe5;
                overflow-x: hidden;
            }
            
            .fixed {
                position: fixed;
                z-index: 2;
            }
            
            * {
                font-weight: 500;
            }
            
            section {
                padding: 2%;
            }
        </style>

        <script>
            $(window).scroll(function () {
                if ($(this).scrollTop() > 10) {
                    $('.fix1').addClass('fixed');

                } else {
                    $('.fix1').removeClass('fixed');
                }
            });
        </script>
        </head>

        <body class="container">
            <?php include 'includes/nav.php';
      include 'includes/map.php';?>
                <div class="headd">


                    <section>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap">
                                    <h1 class="head1 head">Facilities</h1>
                                </div>
                            </div>
                        </div>



                    </section>

                    <section id="title" class="belize-hole" style="background-color:#000033;">
                        <div class="row">

                            <div style="text-align:justify;color:#fffff;font-size:16px" class="col-lg-6">
                                <h4 style="text-align:center; font-family: Raleway">INTERFAITH UNDERSTANDING</h4>
                                <p style="font-family: Raleway-ExtraLight">Sri Guru Granth Sahib presents an excellent example of co-existence, cosmopolitanism, interfaith understanding and unity in diversity, which is unparalleled in the history of world scriptures.It is the need of the hour to understand that Sri Guru Granth Sahib addresses not its votaries alone, but the whole humankind.</p>
                            </div>

                            <div class="col-lg-6">
                                <img class="align_center img img-responsive" style="width:250px;height:200px" src="img/facilities/library.jpg">
                            </div>
                        </div>
                    </section>
                    <section id="title" class="belize-hole" style="background-color:#ffffe5;">
                        <div class="row">

                            <div class="col-lg-6 col-sm-12 ">

                                <img class="align_center img img-responsive" style="width:320px;height:200px" src="img/facilities/i4.jpg">
                            </div>
                            <div style="text-align:center;color:#000000;font-size:16px" class="col-lg-6  col-sm-12">
                                </br>
                                <h4 style="color:#000000;font-family: Raleway">DIGITIZATION OF ARCHIVES</h4>
                                <p style="text-align:justify; font-family: Raleway-ExtraLight">The central library has been equipped with digital archives of manuscripts.The invaluable manuscripts and thesises related to sikh religion have been fully digitized. Students, researchers as well as the faculty members have access to this section of library. Bhai Gurdas Library has prepared the catalogues of bibliographic descriptions which has been compiled in five volumes available in the library which is now available in print as well as in CD/DVD form.
                                </p>
                            </div>
                        </div>
                    </section>
                    <section id="title" class="belize-hole" style="background-color:#000033;">
                        <div class="row">

                            <div style="text-align:center;color:#fffff;font-size:16px" class=" col-lg-6">
                                <h4 style="font-family: Raleway">CONSERVATION LAB WITH MICROFILMING FACILITIES</h4>
                                <p style="text-align:justify; font-family:Raleway-ExtraLight">The conservation lab is primarily concerned with the preservation of rare books and manuscripts for research purposes.For optimum and purposeful use of manuscripts,their microfilming is important. So far,microfilming of 600 manuscripts has been accomplished.In order to save the brittle manuscripts from damage,they are being laminated. Fumigation chamber is also available for chemical treatment of infected manuscripts which further helps in effective preservation.</p>
                            </div>
                            </br>
                            </br>
                            <div class="col-lg-6">
                                <img style="width:300px;height:150px" src="img/facilities/manuscript.jpg" class="img img-responsive">
                            </div>
                        </div>

                    </section>
                    <section id="title" class="belize-hole" style="background-color:#ffffe5;">
                        <div class="row">

                            <div class="col-lg-6">
                                <img style="width:300px;height:150px" src="img/facilities/i3.jpg" class="img img-responsive">
                            </div>
                            <div style="text-align:center;color:#000000;font-size:16px;" class="col-lg-6">

                                <h4 style="color:#000000; font-family: Raleway">MUSEUM OF SIKH HISTORY AND CULTURE</h4>
                                <p style="text-align:justify; font-family: Raleway-ExtraLight">The university has a museum devoted to depict the rich sikh history and culture.It is furnished with artifacts related to sikh religion and puts on display the the relics which are an integral part of sikh history.Its contribution is immense towards the propagation of genesis and impact of Sri Guru Granth Sahib Ji and the entire sikh religion.</p>
                            </div>

                        </div>
                    </section>

                    <section id="title" class="belize-hole" style="background-color:#000033;">
                        <div class="row">

                            <div style="text-align:center;color:#fffff;font-size:16px" class="col-lg-6">
                                <h4 style="font-family: Raleway">RECORDING ROOM</h4>
                                <p style="text-align:justify; font-family:Raleway-ExtraLight">The Centre is having a Recording Room with all the latest equipments. It has the facilities like: all the four inside walls are fitted with sound proof wooden shelter with sponge inside to make it sound proof, latest video and still cameras, proper light system, cordless and collar mikes etc. Centre has recorded some important recordings related with Sikh history and of keertan Tradition.</p>
                            </div>


                            <div class="col-lg-6">
                                <img style="width:300px;height:150px" src="img/DSC00086.jpg" class="img img-responsive">
                            </div>
                        </div>

                    </section>



                </div>










                <?php include 'includes/footer.php'; include 'includes/js.php';?>
        </body>

        </html>
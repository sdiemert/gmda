<?php
/**
 * Created by PhpStorm.
 * User: simondiemert
 * Date: 2014-03-14
 * Time: 12:38 PM
 */?>

<html>
    <head>
        <?php include("head.php"); ?>
    </head>
    <body>
        <div class="container">
            <?php include("header.php");  ?>
            <!-- BODY STARTS HERE -->

            <div class="row">
                <div class="col-sm-2" id="sidebar">
                    <ul class="nav nav-stacked">
                        <li><a href="index.php">Home</a></li>
                        <hr>
                        <li><a href="about.php">About</a></li>
                        <hr>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <hr>
                        <li><a href="contact.php">Contact</a></li>
                        <hr>
                    </ul>
                </div>
                <div class="col-sm-10" id="title-image-container">
                    <img class="title-image" id="title-image-1" src="img/title-image-1.png"/>
                </div>
            </div>

            <!--BODY ENDS HERE -->
            <?php include("footer.php");?>
        </div>
    </body>
    <script type="application/javascript">
        var x = document.getElementById("sidebar").offsetHeight;
        var y = document.getElementById("title-image-container").offsetHeight;

        console.debug(x);
        console.debug(y);


        if(x < y){
            document.getElementById("sidebar").style.height = y;
        }


    </script>
</html>
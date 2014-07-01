<!DOCTYPE html>
<html>
<head>
    <title>Simples Site PHP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<body>
<?php
require_once('menu.php');
require_once('rodape.php');
?>




</div>
<div class="container">

    <div class="row-fluid">
        <div class="span6 offset3">
            <div id="myCarousel" class="carousel slide vertical">
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="active item">
                        <img src="img\corrida.jpg">
                    </div>
                    <div class="item">
                        <img src="img\1.jpg">
                    </div>
                    <div class="item">
                        <img src="img\2.jpg">
                    </div>
                </div>
                <!-- Carousel nav -->
                <a href="#myCarousel" data-slide="prev"><i class="icon-hand-left"></i> </a>
                <a href="#myCarousel" data-slide="next"><i class="icon-hand-right"></i> </a>
            </div>
        </div>
    </div>
</div>



<script src="http://code.jquery.com/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

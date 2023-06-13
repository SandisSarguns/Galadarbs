<?php
include "db.php";
include "navbar.php";
?>
<html>
<link rel="stylesheet" href="aboutstyle.css">
<head>
    <title>Par mums</title>
</head>
<body>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

<div class="upperbox">
    <div class="bigtext">PAR MUMS:</div>
    <div class="text up">Main apraksts</div>
    <div class="text up2">Auto serviss vietējais. Nesen parādījies autoserviss Cēsīs, lai sniegtu mūsu klientiem gatantēti
        labi izdarītu darbu, lai jūsu auto labi darbotos un skaisti izskatītos.  </div>

</div>
<div class ="midbox">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d595.901009911553!2d25.283542113350187!3d57.31797767436389!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ebe18515752d01%3A0x596d579943d6cac4!2sC%C4%93sis%20Secondary%20School%20of%20Technology%20and%20Design!5e1!3m2!1sen!2slv!4v1684322696225!5m2!1sen!2slv"
                 width="900" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class= "timebox">
        <div class="text">AUTOSERVISA DARBA LAIKI: </div>
        <div class="text2"><li>Pirmdiena 10:00-19:00</li> <li>Otrdiena 10:00-20:00</li> <li>Trešdiena 10:00-19:00</li>
            <li>Ceturtdiena 10:00-20:00</li> <li>Piektdiena 10:00-18:00</li> <li>Sestdiena 10:00-17:00</li><li>Svētdiena brīva!</li></div>
    </div>
</div>
<div class ="downbox">
    <div class="text white">Mūsu sponsori:</div>
    <div class="container">
        <h2>.</h2>
        <section class="customer-logos slider">
            <a href="https://www.castrol.com/"
               target="_blank">
            <div class="slide"><img src="castrol.png"></div>
            </a>
            <a href="https://www.continental.com/en/"
               target="_blank">
            <div class="slide"><img src="continental-logo.png"></div>
            </a>
            <a href="https://www.goodyear.com/"
               target="_blank">
            <div class="slide"><img src="goodyear-logo.png"></div>
            </a>
            <a href="https://www.michelin.com/en//"
               target="_blank">
            <div class="slide"><img src="michelin-logo.png"></div>
            </a>
            <a href="https://www.shell.com/"
               target="_blank">
            <div class="slide"><img src="shell.png"></div>
            </a>
            <a href="https://www.toyotires.lv/"
               target="_blank">
            <div class="slide"><img src="toyo-logo.png"></div>
            </a>
            <a href="https://www.valvoline.com/"
               target="_blank">
            <div class="slide"><img src="valvoline.png"></div>
            </a>

        </section>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.customer-logos').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 4
                }
            }, {
                breakpoint: 520,
                settings: {
                    slidesToShow: 3
                }
            }]
        });
    });
</script>
<footer>
    <div class="footer">
        <div class="footext"> Autoerviss Vietējais. Serviss nepastāv un vietne tika veidota programmēšanas mācību mērķos.
        </div>
    </div>
</footer>
</body>
</html>

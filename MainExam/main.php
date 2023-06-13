<?php
include "db.php";
?>
<link rel="icon" href="favicon1.ico" type="image/x-icon" />
<link rel="stylesheet" href="mainstyle.css">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Main page</title>
</head>
<body>
  <header>
    <div class="topnav">
      <div class="logo">
        <a href="http://into.id.lv/ip19/sandis/MainExam/main.php"><img src="logo2.png"
            style="width:100px; height:70px;"></a>
      </div>
    </div>
  </header>

  <div class="nav">
    <a href="http://into.id.lv/ip19/sandis/MainExam/main.php">Galvenā lapa</a></li>
    <a href="http://into.id.lv/ip19/sandis/MainExam/services.php">Pakalpojumi</a></li>
    <a href="http://into.id.lv/ip19/sandis/MainExam/servicereg.php">Pieteikties pakalpojumam</a></li>
    <a href="http://into.id.lv/ip19/sandis/MainExam/aboutus.php">Par mums</a></li>
  </div>
  <div class="slideshow-container">

    <div class="MySlides fade">
      <div class="imgg">
        <img src="bilde.jpg" class = "photo">
      </div>
      <div class="slidetext1">AUTOSERVISS VIETĒJAIS
      <div class="slidetext2">Nesen atvērtais autoserviss Cēsīs. Lūdzam iepazīties ar mūsu interneta vietni!</div>
      </div>
    </div>
    <div class="MySlides fade">
      <div class="imgg">
        <img src="bilde2.jpg" class = "photo">
      </div>
      <div class="slidetext1">PLAŠS PAKALPOJUMU SARAKSTS!
        <div class="slidetext2">Dažādi pakalpojumi un garantēti augsta kvalitāte!</div></div>

    </div>
    <div class="MySlides fade">
      <div class="imgg">
        <img src="bilde3.jpg" class = "photo">
      </div>

      <div class="slidetext">ĪPAŠS PIEDĀVĀJUMS!
        <div class="slidetext2">Nomaini vecās riepas un tās tiks nomazgātas!</div>
      </div>


    <div style="text-align:center">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
    </div>
  </div>
  <script>
    let slideIndex = 0;
    showSlides();
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) { slideIndex = 1 }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 6000);
    }
  </script>
  <div class="bottomnav">
    <div class="servicetext">ĪPAŠIE PIEDĀVĀJUMI:</div>
    <div class="big-container">
    <img src="paint.jpg" style="width:100%; height:70%">
    <div class="container_text"> Patīkamas cenas uz dažādiem pakalpojumiem!
      <a href="http://into.id.lv/ip19/sandis/MainExam/services.php">
        <ul class="no-bullets">
          <li> <input type="submit" name="submit" value="Pāriet uz pakalpojumu sarakstu"> </li>
      </a>
      </ul>
  </div>
  </div>
  <div class="big-container2">
  <img src="chem.jpg" style="width:100%; height:70%">
  <div class="container_text"> Papildinformācija par mūsu servisu:
    <a href="http://into.id.lv/ip19/sandis/MainExam/aboutus.php">
      <ul class="no-bullets">
      <li> <input type="submit" name="submit" value="Pāriet uz informācijas lapu"> </li>
    </a>
    </ul>
  </div>
  </div>
  </div>
  <footer>
    <div class="footer">
      <div class="footext"> Autoerviss Vietējais. Serviss nepastāv un vietne tika veidota programmēšanas mācību mērķos.
      </div>
    </div>
  </footer>
</body>
</html>
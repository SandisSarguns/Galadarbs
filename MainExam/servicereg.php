<?php
include "db.php";
include "navbar.php";
?>

<html>
<link rel="stylesheet" href="regstyle.css">
<head>
</head>
<body>
<title>Pieteikties pakalpojumam</title>


<h1 style="text-align:center">Pieteikties pakalpojumam</h1>

<div>
<div>
<form style="margin: auto; width: 500px;" action="restricted.php" method="POST">
<fieldset>

<ul class="no-bullets">
    <li> <label for="pakalpojumi">Pakalpojuma izvēle</label> </li>
    <select name = "pakalpojumi" required>
        <option disabled selected>-- Izvēlies pakalpojumu --</option>
        <?php

        $pakalpojums = mysqli_query($conn, "SELECT pakalpojumi FROM pakalpojumi");

        while($service_choice = mysqli_fetch_array($pakalpojums))
        {
            echo "<option value='". $service_choice['pakalpojumi'] ."'>" .$service_choice['pakalpojumi'] ."</option>";
        }
        ?>
    </select>
  <li> <label for="problema">Kāda ir jūsu auto problēma/kāds ir jūsu pieprasījums:</label> </li>
   <textarea id="problema" name="problema" rows="4" cols="50" required></textarea>

    <li> <label for="kontakti">Jūsu kontaktinformācija tāda kā e-pasta adrese vai telefona numurs, lai ar jums būtu iespējams sazināties:</label> </li>

    <textarea id="kontakti" name="kontakti" rows="2" cols="50" required></textarea>

  <li> <label for="datums">Datums, kurā esiet gatavi nosūtīt auto uz servisu</label> </li>
 <input type="date" id="datums" name="datums">

 <li> <input type="submit" name="submit" value="Nosūtīt"> </li>
 </ul>
</fieldset>
</form>
  </a>
</div>
</div>

</body>
</html>
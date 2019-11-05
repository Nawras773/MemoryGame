<?php
$huis  = new Huis("  2", "  1","  ja","  water","  250","  50","  Assen","  222CM","  600 ");
echo "Aantal kamers  :".$huis->set_kamers();
echo "<br>";
echo "Aantal toiletten :".$huis->get_toiletten();
echo "<br>";
echo "Verwarming  :".$huis->set_Verwarming();
echo "<br>";
echo "Soortverwarmin :".$huis->get_Soortverwarmin();
echo "<br>";
echo "Straatnaam :".$huis->set_Straatnaam();
echo "<br>";
echo "Huisnummer :".$huis->get_Huisnummer();
echo "<br>";
echo "Plaats :".$huis->set_Plaats();
echo "<br>";
echo "Vierkant meter grond  :".$huis->get_Vierkantmetergrond();
echo "<br>";
echo "Woz waarde  :".$huis->set_Wozwaarde();
echo "<br><br>";

$belasting = new belasting("- Woz waarde:  alle huizen onder de 100.000 euro 600 euro belasting,<br>  alle huizen tussen de 100.000 euro en 200.0000 euro 2000 euro belasting en alles huizen boven de 200.000 euro 6000 euro belasting.
<br>  - Aantal kamers:  bij 1 kamer 100 euro belasting,  bij 2 kamers 300 euro belasting, en bij meer dan 3 kamers 800 euro belasting
  <br>- Alle huizen in Amsterdam, Rotterdam en Groningen worden belast met een extra 1000 euro belasting");


 ?>

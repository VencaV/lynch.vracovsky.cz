<?php $title="Filmografie";
$popis="Přehled filmové a televizní tvorby Davida Lynche.";
$navi1="findex";$navi2="0";
$menu="f";?>
<?php include "./scripts/hlavicka.php"?>
  <img class="right" src="img/lynch.jpg" alt="David Keith Lynch" height="260" width="180">
  <ul>
  <li><a href="filmy1.php" title="Celovečerní filmy">Celovečerní filmy</a></li>
  <li><a href="filmy2.php" title="Krátké filmy">Krátké filmy</a></li>
  <li><a href="filmy3.php" title="Televizní tvorba">Televizní tvorba</a></li>
  <li><a href="filmy4.php" title="Dokumentární filmy">Dokumentární filmy</a></li>
  </ul>
  <hr class="hr">
<?php include "scripts/filmy.php"?>
<?php include "./scripts/paticka.php"?>

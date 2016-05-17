<span id="navi">Nacházíte se: <?php if ($navi1 !== "u"){echo "<a href=\"index.php\">Úvod</a>";}
else {echo "Úvod";}?><?php
switch ($navi1) {
case "findex":
break;
case "f":
print "&raquo;<a href=\"filmyindex.php\">Filmy</a>";
break;
case "s":
print "&raquo;<a href=\"saladindex.php\">Salad Fingers</a>";
break;
case "a":
break;
case "o":
break;
}
switch ($navi2) {
case "k":
print "&raquo;$title";
break;
case "0":
print "&raquo;$title";
break;
case "f1":
print "&raquo;<a href=\"filmy1.php\">Celovečerní</a>&raquo;$title";
break;
case "f2":
print "&raquo;<a href=\"filmy2.php\">Krátké</a>&raquo;$title";
break;
case "f3":
print "&raquo;<a href=\"filmy3.php\">TV</a>&raquo;$title";
break;
case "f4":
print "&raquo;<a href=\"filmy4.php\">Dokumentární</a>&raquo;$title";
break;
}
?></span>

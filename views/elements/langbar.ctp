<?php

$ll = $langbar->getLangs();
foreach ($ll[0] as $l) {
    echo $html->link(
            $html->image('/langbar/img/flags/' . substr($l["Language"]["native"], 0, 2) . ".png") . " " . $l["Language"]["title"],
            "/" . $l["Language"]["native"] . "/" . $ll[2] . "/" . $ll[1],
            array("escape" => false));
    echo "<br />";
}
?>
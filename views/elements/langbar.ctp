<ul>
<?php

$ll = $langbar->getLangs();
foreach ($ll[0] as $l) {
echo "<li>";    
echo $html->link(
            $html->image('/langbar/img/flags/' . $l["Language"]["alias"] . ".png") . " " . $l["Language"]["title"],
            "/" . $l["Language"]["native"] . "/" . $ll[2] . "/" . $ll[1],
            array("escape" => false));
    echo "</li>";
}
?>
</ul>

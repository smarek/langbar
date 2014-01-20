<ul>
<?php
    $ll = $this->Langbar->getLangs();
    foreach ($ll[0] as $l) {
    echo "<li>";    
    echo $this->Html->link(
                $this->Html->image('/langbar/img/flags/' . $l["Language"]["alias"] . ".png") . " " . $l["Language"]["title"],
                "/" . $l["Language"]["alias"] . "/" . $ll[2] . "/" . $ll[1] . implode("/",$ll[3]),
                array("escape" => false));
        echo "</li>";
    }
?>
</ul>

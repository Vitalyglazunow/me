<?php

$animalandcontinent = array(
    "Africa" => array('crocodile', 'pygmy hippopotamus'),
    "Eurasia" => array('lynx', 'Red fox'),
    "North America" => array('buffalo', 'Grizzly bear'),
    "South America" => array('puma', 'melanistic jaguar'),
    "Antarctica" => array('penguin', 'Leopard seal'),
    "Australia" => array('kangaroo', 'Sarcophilus harrisii'),
);


foreach ($animalandcontinent as $key => $animal)
{
    $kontinent[] = $key;
    echo "<h2>$key</h2>";
    echo $animal[0] . ', ' . $animal[1];
    foreach ($animal as $dva) {
        $dvaslova = explode(" ", $dva);
        if (count($dvaslova) == 2) {
            $dvoinoeimya[] = $dva;
            $pervoeslovo[] = $dvaslova[0];
            $vtoroeslovo[] = $dvaslova[1];
        }
    }
}

echo "<h2>Названия животных из двух слов</h2>";
foreach ($dvoinoeimya as $name) {
echo $name;
echo '<br>';
}

shuffle($vtoroeslovo);
echo '<h2>Фантазийные животные</h2>';
foreach ($vtoroeslovo as $vtoroe) {
    $kontinent2 = array_shift($kontinent);
    $pervoe = array_shift($pervoeslovo);
    echo "<h2>$kontinent2</h2>";
    echo $pervoe . ' ' . $vtoroe . '<br>';
}
?>
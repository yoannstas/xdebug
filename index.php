<?php
declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

echo "Exercise 1 starts here:";
function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}

new_exercise(2);
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];
echo $monday;


new_exercise(3);
$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);


new_exercise(4);
foreach ($week as &$day) {
    $day = substr($day, 0, strlen($day) - 3);
}
print_r($week);

$arr = [];
for ($letter = 'a'; $letter <= 'z'; $letter++) {
    array_push($arr, $letter);
    if ($letter == "z"){
        break;
    }
}


new_exercise("6");
$arr = [];

function combineNames($str1 = "", $str2 = ""): string
{
    $params = [$str1, $str2];
    foreach ($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    return implode(" - ", $params);
}

function randomGenerate(array $arr, int $amount): array
{
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $arr;
}

function randomHeroName(): string
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0, count($heroes) - 1)][rand(0, 10)];

    return $randname;
}

echo "Here is the name: " . combineNames(randomHeroName(), randomHeroName());




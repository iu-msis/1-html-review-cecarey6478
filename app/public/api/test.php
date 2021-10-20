<?php

$foo = "To be";
$bar = "or not to be.";
$num = 2;

echo $foo . " " . $bar;

echo "\n";

echo $num * $num * $num;

$arr = [1,1,2,3,5,8];

$arr2 = [
    "First" => "Tom",
    "Second" => "Bipin",
    "Third" => "DS"
];

if (true) {
    echo "TRUE \n";
} else{
    echo "FALSE \n";
}

while (true) {
    break;
}

echo "<ul>";
foreach ($arr2 as $key => $val) {
    echo "<li>".$key." is ".$val."</li>\n";
}
echo "</ul>";

// $arr as json
echo json_encode($arr);

//echo json
echo json_encode(
    $arr2,
    JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR
);

/***
 * variable naming
 * 
 * PHP and JS: camelCase
 * Constants: UPPER_SNAKE_CASE
 * 
 * snake_case
 * PascalCase (we'll use for class names)
 * kebab-case
 * 
 */
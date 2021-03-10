<?php
$str_satu = "Pemrograman";
$str_dua = "Website";

echo $str_satu. " ". $str_dua;

$array = ["pemrograman", "website", "KelasB", "Semester4"];

var_dump($array);

foreach ($array as $value) {
    echo $value . " ";
}
for ($i=0; $i<count($array); $i++) {
    echo $array[$i]. "";
}
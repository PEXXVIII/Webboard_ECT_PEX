<?php
$rate = 0.25;

$y = $_POST['yen'];

$baht = $y * $rate;

echo "$y yen = $baht Baht";
?>
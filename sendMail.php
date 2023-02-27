<?php
$subject = 'GUSTAVO FRING';
echo '============' . "\n";
echo $subject . "\n";
echo '============' . "\n";
$firstName = 'Dmytro Boguslavsjkyy 529st';
echo ($firstName . "\n");

$text1 = "firstName: {$firstName}" . "\n";
$text3 = 'Hello! ';
$text4 = 'And welcome to Los Pollos Hermanos family.' . "\n";
$text5 = 'My name is Gustavo, ';
$text6 = 'but you can call me Gus.';

$message = $text3 . $text4 . $text5;
$message .= $text6;

echo $message;

$headers = 'From: d.a.boguslavsjkyy@student.khai.edu';
mail('semkivvaleria@gmail.com', $subject, $message, $headers);

?>
<?php

echo "報名成功"."<br>";
$uName=$_GET["uName"];
$uEmail=$_GET["uEmail"];
$uGender=$_GET["uGender"];
$uHabit=$_GET["uHabit"];

echo "Your name is:".$uName."<br>";
echo "Your Email is:".$uEmail."<br>";
echo "Your Gender is:".$uGender."<br>";

$j="";
foreach ($uHabit as $i){
   $j=$j.$i.",";
}
echo "Your eating habit are:".$j."<br>";
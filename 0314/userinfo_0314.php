<?php
session_start();
if(isset($_SESSION["user"])){
    $uName=$_GET["uName"];
    $uPwd=$_GET["uPwd"];
    $uEmail=$_GET["uEmail"];
    $uColor=$_GET["uColor"];
    $uAge=$_GET["uAge"];
    $uBirth=$_GET["uBirth"];
    $uLike=$_GET["uLike"];
    $uSecret=$_GET["uSecret"];
    $uCity=$_GET["uCity"];
    $uComment=$_GET["uComment"];
    
    echo "Your name is:".$uName."<br>";
    echo "Your password is:".$uPwd."<br>";
    echo "Your Email is:".$uEmail."<br>";
    echo "Your Color is:".$uColor."<br>";
    echo "Your Birthday is:".$uBirth."<br>";
    echo "Your Age is:".$uAge."<br>";
    echo "Your like is:".$uLike."<br>";
    echo "Your Secret is:".$uSecret."<br>";
    echo "Your City is:".$uCity."<br>";
    

    echo "Your comments:".nl2br(htmlentities($uComment));

    echo "<a href='logout_0314.php'>Logout</a>";

}else{
    echo "illegal user!";
    header("Refresh:2;url='login.php'");
}




?>
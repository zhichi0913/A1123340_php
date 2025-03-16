<?php
session_start();
?>

<html>
<head></head>
<body>
<?php
if(isset($_SESSION["ad"])){
    echo "Welcome! admin<br>";
    echo "<a href='logout_0314.php'>Logout</a>";

    
}
?>
</body>
</html>
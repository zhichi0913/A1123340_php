<?php
session_start();
?>
<h1>Login Result</h1>

<?php

$defaultName="student";
$defalutPwd="12345";

$defaultAdminName="nuk";
$defalutAdminPwd="123456";

$name=$_POST["name"];
$pwd=$_POST["pwd"];

if($defaultName==$name && $defalutPwd==$pwd){
    echo "Student login success";
    $_SESSION["user"]=1;
    $cookiedate=strtotime("+10 seconds",time());
    setcookie("name",$name,$cookiedate);
    header("Location:userform_0314.php");
}else{
    echo "Login failed, will send you back to login again";
    header("Refresh:3;url='login.php'");
}

if($defaultAdminName==$name && $defalutAdminPwd==$pwd){
    echo "Admin login success";
    $_SESSION["ad"]=1;
    $cookiedate=strtotime("+10 seconds",time());
    setcookie("name",$name,$cookiedate);
    header("Location:adminform_0314.php");
}else{
    echo "Login failed, will send you back to login again";
    header("Refresh:3;url='login_0314.php'");
}
?>
<?php

session_start();

if ($_SESSION['login']==true){
    header('Location: /session/member.php');
    exit();
}
$error="";
if ($_SERVER['REQUEST_METHOD']=="POST"){
    if ($_POST['username']=="wira" && $_POST['password']='123'){
//        sukses
        $_SESSION['login']=true;
        $_SESSION['username']='wira';
        header('Location: /session/member.php');
        exit();
    }else{
//        gagal
        $error="Login Gagal";
    }
}
?>

<html>
<body>
<?php
    if ($error !=""){
        echo "<p> $error  </p>";
    }
?>
<h1>Login</h1>
<form action="/session/login.php" method="post">
    <label>Username :
        <input type="text" name="username">
    </label>
    <br>
    <label>Password :
        <input type="password" name="password">
    </label>
    <br>
    <input type="submit" value="Login">
</form>
</body>
</html>

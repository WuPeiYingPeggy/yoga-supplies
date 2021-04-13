<?php  
if(isset($_GET["logout"])){
    setcookie("userName", "Guest", time() -3600);
    header("location: index.php");
    exit();
}
if(isset($_POST["btnOK"])){
    $sUserName = $_POST["txtUserName"];
    if(trim($sUserName) != ""){
        setcookie("userName",$sUserName );
        if(isset($_COOKIE["lastPage"])){
            header(sprintf("Location: %s", $_COOKIE["lastPage"]));
        }else{
            header("Location: index.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Lo, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
    <link rel="stylesheet" href="login.css">
    <title>login</title>
</head>
<body>
    <form id="form1" name="form1" method="post" action="login.php" class="login">
        <h1>登入</h1>
        <i class="fa fa-user-circle-o"></i>
        <h2>帳號</h2>
        <input type="text" name="txtUserName" id="txtUserName" placeholder="請輸入帳號">
        <h2>密碼</h2> 
        <input type="password" name="txtPassword" id="txtPassword" placeholder="請輸入密碼">
        <input type="submit" name="btnOK" id="btnOK" value="確定">
    </form>
    
</body>
</html>
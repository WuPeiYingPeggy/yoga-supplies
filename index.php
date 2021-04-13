<?php

if(isset($_COOKIE["userName"]))
    $sUserName = $_COOKIE["userName"];
else
    $sUserName = "Guest";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="all.css">
    <style>
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <div class="allPage">
        <div class="left"></div>
        <div class="main">
            <header>
                <div class="navOut">
                <a href="index.php"> <img src=" img/logo.png" alt=""></a>
                    <div class="navText">
                        <ul>
                            <li><a href="sale.php">限時特價(會員)</a></li>
                            <li><a href="car.html">所有商品</a></li>
                            <!-- <li> 關于我們</li> -->
                            <li><a href="QA.html">常見問題</a></li>
                        </ul>
                    </div>
                    <div class="loginAndCar">
                        <p><?= "Welcome! " . $sUserName ?></p>
                        <?php if($sUserName == "Guest"): ?>
                            <button><a href="login.php">登入</a></button>
                        <?php else: ?>
                        <button><a href="login.php?logout=1">登出</a></button>
                        <?php endif; ?>
                        <p>購物車/$0.00</p>
                        <a href="product.html"><img src=" img/car.jpg" alt=""></a>
                    </div>
                </div>
            </header><hr>
            <div class="bigImg" >
                <img src="img/index1.jpg" alt="">
                <img src="img/index-sale.jpg" alt="">
            </div>
            
            <div class="card1">
                <img src="img/index-card1-1.jpg" alt="">
                <img src=" img/index-card1-2.jpg" alt="">
                <img src=" img/index-card1-3.jpg" alt="">
            </div>
            <div class="card2">
                <div>
                    <img src="img/index-card2-1.jpg" alt="">
                    <br>阻力带<br>
                    VITOS®Vpower拉力帶<br>
                    $890.00 – $1,590.00
                </div>
                <div>
                    <img src="img/index-card2-2.jpg" alt="">
                    <br>阻力带<br>
                    VITOS®Vpower拉力帶<br>
                    $890.00 – $1,590.00
                </div>
                <div>
                    <img src="img/index-card2-3.jpg" alt="">
                    <br>阻力带<br>
                    VITOS®Vpower拉力帶<br>
                    $890.00 – $1,590.00
                </div>
                <div>
                    <img src="img/index-card2-4.jpg" alt="">
                    <br>阻力带<br>
                    VITOS®Vpower拉力帶<br>
                    $890.00 – $1,590.00
                </div>
            </div>
        </div>
        <div class="right"></div>
    </div>
</body>

</html>
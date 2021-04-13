<?php

if(!isset($_COOKIE["userName"])){ 
    header("Location:login.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="car.css">
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
                        <ul>
                            <li><a href="sale.php">限時特價(會員)</a></li>
                            <li><a href="car.html">所有商品</a></li>
                            <!-- <li> 關于我們</li> -->
                            <li><a href="QA.html">常見問題</a></li>
                        </ul>
                        </ul>
                    </div>
                    <div class="loginAndCar">
                        <button>登入</button>
                        <p>購物車/$0.00</p>
                        <img src=" img/car.jpg" alt="">
                    </div>
                </div>
            </header>

            <div class="carPage">
                <!-- 左边nav -->
                <div class="carNav">
                    <ul>
                        <li>平衡力</li>
                        <li>按摩/舒压</li>
                        <li>核心/重力</li>
                        <li>瑜伽</li>
                        <li>阻力带</li>
                        <li>限时特价</li>
                    </ul>
                </div>

                <!-- 产品图示 -->
                <div class="carProduct">

                    <!-- 产品小卡 -->
                    <div class="card">
                        <img src="img/sale.jpg" alt="">
                        <br>阻力带<br>
                        VITOS®Vpower拉力帶<br>
                        $890.00 – $1,590.00
                    </div>
                </div>
            </div>
        </div>
        <div class="right"></div>
    </div>

</body>

</html>
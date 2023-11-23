<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) . '/dulich/config.php');
session_start();
$type= $_GET['type'];
$string =  '<!DOCTYPE html>'.
'<html lang="en">'.
'<head>'.
'    <meta charset="UTF-8">'.
'    <meta name="viewport" content="width=device-width, initial-scale=1.0">'.
'    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>'.
'    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">'.
'    <link rel="stylesheet" href="./style.css">'.
'    <link rel="stylesheet" href="./tintuc.css">'.
'    <title>Tin tức</title>'.
'</head>'.
'<body>'.
'    <header>'.
'        '.
'        <div id="menu-bar" class="fas fa-bars"></div>'.
'        '.
'        <a href="#" class="logo"><span>T</span>ravel</a>'.
'    '.
'        <nav class="navbar">.'.
'       <a href="./index.php">Trang chủ</a>'.
'       <a href="./gioithieu.php?type=gioithieu">Giới thiệu</a>'.
'        <a href="./tour.php?type=tour">Tour</a>'.
'        <a href="./dichvu.php?type=dichvu">Dịch vụ</a>'.
'        <a href="./tintuc.php?type=tintuc">Tin tức</a>'.
'        <a href="./lienhe.php">Liên hệ</a>'.
'        <a href="./admin/index.php" target="_blank">Admin</a>'.
'        </nav>'.
'        '.
'        <div class="icons">'.
'            <i class="fas fa-search" id="search-btn"></i>'.
'            <i class="fas fa-user" id="login-btn"></i>'.
'        </div>'.
'        '.
'        <form action="" class="search-bar-container">.'.
'            <input type="search" id="search-bar" placeholder="search here...">'.
'            <label for="search-bar" class="fas fa-search"></label>'.
'        </form>'.
'        '.
'    </header>'.
'    <div class="container">'.
'        <h1 class="heading">'.
'            <span>t</span>'.
'            <span>i</span>'.
'            <span>n</span>'.
'            <span>m</span>'.
'            <span>ớ</span>'.
'            <span>i</span>'.
'            <span>n</span>'.
'            <span>h</span>'.
'            <span>ấ</span>'.
'            <span>t</span>'.
'            <span>v</span>'.
'            <span>ề</span>'.
'            <span>đ</span>'.
'            <span>ồ</span>'.
'            <span>i</span>'.
'            <span>c</span>'.
'            <span>h</span>'.
'            <span>è</span>'.
'            <span>l</span>'.
'            <span>o</span>'.
'            <span>n</span>'.
'            <span>g</span>'.
'            <span>c</span>'.
'            <span>ố</span>'.
'            <span>c</span>'.
'        </h1>';
$sql = "SELECT * FROM table_post WHERE danhmuc = :type";
$result = pdo_query($sql, array(':type' => $type));

foreach ($result as $row) {
$string .='        <h1>';
$string .= $row['title'] . '<br>';
$string .='</h1>'.
'        <div class="news">'.
'            <div class="news-item">';
$string .= $row['content'] . '<br>';
$string .= '            </div>'.
'        </div>';
}
$string .= '    </div>    '.
'    <section class="footer">'.
'        '.
'            <div class="box-container">'.
'        '.
'                <div class="box">'.
'                    <h3>about us</h3>'.
'                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda quas magni pariatur est accusantium voluptas enim nemo facilis sit debitis.</p>'.
'                </div>'.
'                <div class="box">'.
'                    <h3>branch locations</h3>'.
'                    <a href="#">india</a>'.
'                    <a href="#">USA</a>'.
'                    <a href="#">japan</a>'.
'                    <a href="#">france</a>'.
'                </div>'.
'                <div class="box">'.
'                    <h3>quick links</h3>'.
'                    <a href="#">home</a>'.
'                    <a href="#">book</a>'.
'                    <a href="#">packages</a>'.
'                    <a href="#">services</a>'.
'                    <a href="#">gallery</a>'.
'                    <a href="#">review</a>'.
'                    <a href="#">contact</a>'.
'                </div>'.
'                <div class="box">'.
'                    <h3>follow us</h3>'.
'                    <a href="#">facebook</a>'.
'                    <a href="#">instagram</a>'.
'                    <a href="#">twitter</a>'.
'                    <a href="#">linkedin</a>'.
'                </div>'.
'        '.
'            </div>'.
'        '.
'            <h1 class="credit"> created by <span> mr. web designer </span> | all rights reserved! </h1>'.
'        '.
'        </section>    '.
'</body>'.
'</html>';

 echo $string; 
?>
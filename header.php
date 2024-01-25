<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css/index.css">
    <!--<link rel="stylesheet" href="style_test1.css">-->
    <link rel="stylesheet" href="css/product_list_layout_style.css">
    <link rel="stylesheet" href="css/layout_style.css">
    <style>
        
        
    </style>



</head>
<body>
    <div id="header">
        <div id="brand">
        
            <h1 id="header_p">Thegioidienthoai</h1>

        </div>

        <div id="menu_top">
            <div class="menu_top_element" id="homepage">
                <a href="index.php">Trang chủ</a>
            </div>
            <div class="menu_top_element" id="cart">
                <a href="cart.php">Giỏ hàng</a>
            </div>
            <div class="menu_top_element" id="login">
                <a href="login.php">Đăng nhập</a>
            </div>
            <div class="menu_top_element" id="singout">
                <a href="singout.php">Đăng xuất</a>
            </div>
            <div class="menu_top_element" id="singup">
                <a href="singup.php">Đăng ký</a>
            </div>    
            <div class="menu_top_element" id="history">
                <a href="history.php">Lịch sử mua hàng</a>
            </div>
        </div>

        <div id="search">
            
            <div class="menu_top_element" id="simple_search">
                <form action="" method="get">
                    <input type="text" placeholder="Tìm theo tên" id="ss" name="ss">
                    <input type="submit" value="Submit">
                </form>
            </div>

            <div class="menu_top_element" id="advanced_search">
                <a href="advanced_search.html">
                    <img src="assets/advanced_search.png" width="20" height="20">
                    <p>Tiềm kiếm nâng cao</p>
                </a>
            </div>
        </div>
        
    </div>

    
    
   
    </div>

    <div id="main_body">
        <div id="left_panel">
            <div id="product_brand">
                <p>Các loại điện thoại</p>
            </div>
            <div class="left_panel_element" id="oppo" onclick="window.location.href = 'oppo.html';">
                <a href="oppo.html">Oppo</a>
            </div>
            <div class="left_panel_element" id="samsung" onclick="window.location.href = 'samsung.html';">
                <a href="samsung.html">Samsung</a>
            </div>
            <div class="left_panel_element" id="iphone" onclick="window.location.href = 'iphone.html';">
                <a href="iphone.html">iPhone</a>
            </div>
        </div>
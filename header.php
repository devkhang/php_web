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
    .box-signup{
        width: 50%;
        height: 250px;
        text-align: center;

        background-color: rgba(255,255,255,255);
        border-style: solid;
        border-width: 1px;

        box-sizing: border-box;

        
    }
    .box-signup #singup-title{
        font-size: 20px;
        font-weight:bolder;
        margin-bottom: 30px;

        
    }
    .box-signup div{
        margin-bottom: 20px;
        width: 100%;
    }
    .box-signup .box-itme form input{
        width: 95%;
        height: 30px;
        margin: 3px;
    }

    /* .box-signup #submit form input{

        width: 100%;
        height: 30px;
        background-color: rgba(243,130,108,255);
        cursor: pointer;
    } */
    #div_form_signup{
        margin:0px;
        height:auto;
    }
    .box-signup .box-itme form #submit{
        margin-bottom:auto;
        height:auto;
    }
    #form_signup{
        height:auto;
    }
    .box-signup .box-itme form #submit-input{
        width: 100%;
        box-sizing:border-box;
        height: 30px;
        background-color: rgba(243,130,108,255);
        cursor: pointer;
        margin:0px;
        margin-bottom:auto;
        border-style:none;
    }
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
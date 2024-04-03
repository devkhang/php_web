
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout_style.css"> 

    <style>
        #search{
            border-style: solid;
            border-width: 1px;
            background-color: rgba(125,194,173,255);
        
        }
        #search form{
            margin-bottom: 20px;
        }
        #product-name{
            width: 90%;
        }
        #search-product{
            display: none;
        }
        #search-product-type{
            display: none;
        }
        #search-result{
            background-color: aliceblue;
            display: none;
        }
        #search-result .order{
            background-color: rgba(238,238,238,255);
            border-style: solid;
            border-width: 1px;
            margin-bottom: 10px;
        }
        #search-result .order:hover{
            background-color:rgba(29,162,216);
            border-style: solid;
            border-width: 1px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php include_once("headerRegion.php"); ?>

    <div id="main_body">

        <?php include_once("leftPannelRegion.php"); ?>
        <div id="main_content">
            <div id="search">
                <form action="" id="search-interval">
                    <lable for="start-date">Ngày bắt đầu</lable>
                    <input id="start-date" name="start-date" type="date">
                    
                    <lable for="end-date">Ngày kết thúc</lable>
                    <input id="end-date" name="end-date" type="date">
                </form>
                <form action="search-option">
                    <label for="name-option">Tìm theo tên</label>
                    <input type="radio" id="name-option" value="name" name="option" checked="checked" onclick="nameOptionChecked()">
                    <label for="type-option">Tìm theo loại</label>
                    <input type="radio" id="type-option" value="type" name="option" onclick="typeOptionChecked()">
                </form>
                <form action="" id="search-product">
                    <label for="product-name">Nhập tên sản phẩm</label>
                    <input id="product-name" name="product-name" type="text">
                </form>
                <form action="" id="search-product-type">
                    <label for="product-type">Chọn loại sản phẩm</label>
                    <select name="product-type" id="product-type">
                        <option value="oppo">Oppo</option>
                        <option value="samsung">Samsung</option>
                        <option value="Iphone">Iphone</option>
                    </select>
                </form>
                <button type="button" id="submit-search" onclick="SubmitSearch(),display(value)">Tìm</button>
            </div>
            <div id="search-result">
                <h1 id="loai_san_pham">Loại sản phẩm: Iphone</h1>
                <p>Số lượng bán ra: 0</p>
                <p>Doanh thu: 0đ</p>
                <h3>Đơn hàng đang giao:</h3>
                <div id="dang-dao">
                    <div class="order" id="order1">
                        <p>Ngày đặt hàng: 22/12/2022</p>
                        <p>Tình trạng đặt hàng: Đang giao</p>
                        <p>Giá đặt hàng:46.990.000₫</p>
                        <p>Người đặt hàng:Roboute Guilliman</p>
                        <p>Số lượng sản phẩm/loại sản phẩm trong đơn hàng:1</p>
                        
                        <button class="detail-watch" type="button" onclick="window.location.href = 'order1.html';">Xem chi tiết</button>
                    </div>
                    
                </div>
                <h3>Đơn hàng đã giao:</h3>
                <div id="da-dao">

                </div>
                <h3>Đơn hàng bị hủy:</h3>
                <div id="bi-huy">
                    <div class="order" id="order2" >
                        <p>Ngày đặt hàng: 12/5/2022</p>
                        <p>Tình trạng đặt hàng: Hủy</p>
                        <p>Giá đặt hàng:25.990.000₫</p>
                        <p>Người đặt hàng:Roboute Guilliman</p>
                        <p>Số lượng sản phẩm/loại sản phẩm trong đơn hàng:1</p>
                        
                        <button class="detail-watch" type="button" onclick="window.location.href = 'order2.html';">Xem chi tiết</button>
                    </div>
                    <div class="order" id="order3" onclick="window.location.href = 'order3.html';">
                        <p>Ngày đặt hàng: 22/2/2022</p>
                        <p>Tình trạng đặt hàng: Hủy</p>
                        <p>Giá đặt hàng:33.990.000₫</p>
                        <p>Người đặt hàng:Roboute Guilliman</p>
                        <p>Số lượng sản phẩm/loại sản phẩm trong đơn hàng:1</p>
                        
                        <button class="detail-watch" type="button" onclick="window.location.href = 'order3.html';">Xem chi tiết</button>
                    </div>
                    
                </div>
            </div>

            
        </div>
         
    <script src="layout_skeketon_js.js"></script>
    <script src="financeStatisticJS.js"></script>
    <div id="right_panel">
    </div>
</div>

    <?php include_once("rightPannelRegion.php"); ?>

</div>


<?php include_once("footerRegion.php"); ?>

<script src="layout_skeketon_js.js"></script>
<script src="modifyProductjs.js"></script>
</body>
</html> 
<?php
session_start();
if($_SERVER["REQUEST_METHOD"]!="GET" && isset($_GET["MaSP"])){
    echo "you are not allowed to access";
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css\layout_style.css">
    <!--<link rel="stylesheet" href="style_test1.css">-->
    
    <link rel="stylesheet" href="css\product_list_layout_style.css">
    <link rel="stylesheet" href="css\product_detail_style.css">



</head>
<body>
    <?php
        include_once("headerRegion.php");
    ?>
    
    <div id="main_body">
        <?php 
            include_once("leftPannelRegion.php");
        ?>
        <div id="main_content">
            <?php 
                include_once('include\db.inc.php');

                $start=0;
                

                $result=$conn->query("SELECT * FROM `sanpham` WHERE masp=".$_GET["MaSP"]. ";");
                $sanpham=$result->fetch_array(MYSQLI_ASSOC);

            ?>
            
            <div class="product_name">
                <div class="box-product-name"><h1> <?php echo $sanpham["Ten"];?></h1></div>
                
            </div>

            <div class="box-product-info">
                <div class="box-product-info-left">
                    <div class="box-gallery">
                        <img src="<?php echo $sanpham["HinhAnhChiTiet"] ?>" alt="them hinh anh san pham o day">
                    </div>
                    <div class="box-detail-info">
                        <div class="box-title">
                            <p>Thông tin sản phẩm</p>
                        </div>
                        
                        <div class="info-element">
                            <div class="description">
                               <?php 
                                echo nl2br($sanpham["MieuTa"]);
                               ?>

                                
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="box-product-info-middle">

                </div>
                <div class="box-product-info-right">
                    <div class="price">
                        <p><?php echo number_format($sanpham["Gia"], 0, ".", ".")?>₫</p>
                    </div>
                    <div class="box-promotion">
                        <div class="title">
                            <p>Khuyến mãi</p>
                        </div>
                        <div class="promotion-promotion-info">
                            <h1 style="text-align: center;"><?php echo $sanpham["KhuyeMai"]; ?>%</h1>
                        </div>
                    </div>
                    <div class="add-to-cart">
                        <form action="add-cart.php" method = "POST">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="id" value=<?php echo $sanpham["MaSP"]?>>
                                    <button type="submit" class="btn btn-primary">add to cart</button>
                        </form>
                    </div>
                </div>
            </div>
            
            

        </div>

        <?php include_once("rightPannelRegion.php"); ?>
    </div>

    
    <?php include_once("footerRegion.php"); ?>

</body>
</html>
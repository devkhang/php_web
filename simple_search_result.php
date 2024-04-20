<?php 
//this code is used to include important other files
session_start();
include_once("include/connectDB.php");

?>


<?php
if(isset($_GET["submit"]) && isset($_GET["ten"])){
    $ten=$_GET["ten"];
    $query="SELECT * FROM `sanpham` WHERE LOWER(Ten) LIKE '%$ten%'";
    $conn=connectDB();
    $resultLietKeSP=$conn->query($query);

}
else{
    header("Location: index.php");
}

?>


<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang chủ</title>
        <link rel="stylesheet" href="css\layout_style.css">
        <!--<link rel="stylesheet" href="style_test1.css">-->
        <link rel="stylesheet" href="css\product_list_layout_style.css">
        <?php include_once(".\include\commonStyles.php")?>

        <style>
            
            
        </style>



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
                <ul id="phone_list" class="main_content_element">
                <?php
            while($sanpham=$resultLietKeSP->fetch_array(MYSQLI_ASSOC)){ 
                

                ?>
                    <li class="phone_list_element">
                    
                        <div>
                            <a href=<?php echo "chiTietSanPham.php?MaSP=".$sanpham["MaSP"] ?>>
                                <div class="phone_list_element_img">
                                    <img alt="thêm ảnh" src=<?php echo $sanpham["HinhAnhMH"] ?>>
                                </div>
                                <h3>
                                    <?php echo $sanpham["Ten"] ?>
                                </h3>
                                <strong class="phone_list_element_price"><?php echo number_format($sanpham["Gia"],0,".",".") ?>₫</strong>
                                
                            </a>
                            <?php include_once("include/addDeleteCart.php");
                                    processAddDeleteCart(isShowAddToCart($sanpham),false, true, $sanpham);
                            ?>
                        </div>
                    </li>

            <?php };?> 

                    
                </ul>

                <!-- <div id="page_numbering">
                    <a href="index.html">1</a>
                    <a href="index2.html">2</a>
                </div> -->
            </div>
                
            <?php include_once("leftPannelRegion.php"); ?>



        </div>
        <?php include_once("footerRegion.php"); ?>


    </body>
</html>
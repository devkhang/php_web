<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css\layout_style.css">
    <link rel="stylesheet" href="css\product_list_layout_style.css">



</head>
<body>
    
    <!-- connect to database, query sanpham with HangDTH="oppo", then display the result using html and css-->
    <?php include_once("headerRegion.php"); ?>
    <div id="main_body">
        <?php include_once("leftPannelRegion.php"); ?>

        <div id="main_content">

            <?php 
            include_once('include\db.inc.php');

            $result=$conn->query("SELECT * FROM sanpham where HangDTH='oppo'");
            ?>

            <ul id="phone_list" class="main_content_element">

            <?php
            while($sanpham=$result->fetch_array(MYSQLI_ASSOC)){ ?>
                    <li class="phone_list_element">
                        <a href="#">
                            <div class="phone_list_element_img">
                                <img alt="thêm ảnh" src=<?php echo $sanpham["HinhAnhMH"] ?>>
                            </div>
            
                            <h3>
                                <?php echo $sanpham["Ten"] ?>
                            </h3>
                            

                            <strong class="phone_list_element_price"><?php echo $sanpham["Gia"] ?>₫</strong>
                
                        </a>
                    </li>

            <?php };?>

            </ul>

            <div id="page_numbering">
                <!-- create page numbering base on the number of row resulted from query -->
            
            </div>
        </div>


        <?php include_once("rightPannelRegion.php"); ?>


    </div>

    <?php include_once("footerRegion.php"); ?>


</body>
</html>
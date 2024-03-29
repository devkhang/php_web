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
    <script src="js\simple.js"></script>
    
    <!-- connect to database, query sanpham with HangDTH="oppo", then display the result using html and css--> 
    <?php include_once("headerRegion.php"); ?>
    <div id="main_body">
        <?php include_once("leftPannelRegion.php"); ?>

        <div id="main_content">

            <?php 
            include_once('include\db.inc.php');

            $start=0;
            $sanphamPerPage=6;

            
            $record=$conn->query("SELECT * FROM sanpham where HangDTH='".$_GET["type"]."';");
            $numberOfPage=ceil($record->num_rows/$sanphamPerPage);
            
            
           

            // echo "true1: ".isset($_GET["page-nr"]);
            // echo "<br>";
            // echo "true2: ".isset($_GET["type"]);
            // echo "<br>";
            if(isset($_GET["page-nr"])){
                $start=($_GET["page-nr"]-1)*$sanphamPerPage;
                
            }

            $resultLietKeSP=$conn->query("SELECT * FROM sanpham where HangDTH='".$_GET["type"]."' limit $start, $sanphamPerPage;");

            ?>

            <ul id="phone_list" class="main_content_element">

            <?php
            while($sanpham=$resultLietKeSP->fetch_array(MYSQLI_ASSOC)){ ?>
                    <li class="phone_list_element">
                        
                        <a href="#" onclick="watchProductDetail(this)">
                            
                            <p class="masp" style="display: none;"><?php echo $sanpham["MaSP"]?></p><!-- use to identity sanpham to query chitietsanpham-->

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
                <?php

                ?>
                
            </div>

            <div style="display: none;">
                <form action="chiTietSanPham.php"  name="chitietsp" method="post">
                    <input type="text" name="masp">
                    <input type="submit" name="xemchitiet" value="nhan">
                </form>
            </div>

            <div id="page_numbering">
                <?php 
                    
                ?>
                <?php
                    for($i=1; $i<=$numberOfPage; ++$i){ 
                        ?>
                        <a href=<?php echo "?type=".$_GET["type"]."&page-nr=".$i?>><?php echo $i ?></a>
                        <?php 
                    } 
                ?>
            </div>
      

        </div>


        <?php include_once("rightPannelRegion.php"); ?>
        
        

    </div>

    <?php include_once("footerRegion.php"); ?>


</body>
</html>
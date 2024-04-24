<?php
    session_start();
    include_once("include/functions.php");
    include_once("pageNumbering.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css\layout_style.css">
    <link rel="stylesheet" href="css\product_list_layout_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>

    
    <!-- connect to database, query sanpham with HangDTH= url parameter type, then display the result using html and css--> 
    <?php include_once("headerRegion.php"); ?>
    <div id="main_body">
        <?php include_once("leftPannelRegion.php"); ?>

        
        <div id="main_content">

            <?php 
            include_once('include\db.inc.php');

            
            $query="SELECT * FROM sanpham where HangDTH='".$_GET["type"]."';";


            
            
           

            // echo "true1: ".isset($_GET["page-nr"]);
            // echo "<br>";
            // echo "true2: ".isset($_GET["type"]);
            // echo "<br>";

            // $resultLietKeSP=$conn->query("SELECT * FROM sanpham where HangDTH='".$_GET["type"]."' limit $start, $sanphamPerPage;");

            $resultLietKeSP=processPagerNumbering($query, 6, $conn);


            ?>

            <ul id="phone_list" class="main_content_element">

            <?php
            while($sanpham=$resultLietKeSP->fetch_array(MYSQLI_ASSOC)){ ?>
                    <li class="phone_list_element">
                    
                    <a href=<?php echo "chiTietSanPham.php?MaSP=".$sanpham["MaSP"] ?>>
                            <!-- use to identity sanpham to query chitietsanpham -->
                            <p class="masp" style="display: none;"><?php echo $sanpham["MaSP"]?></p>

                            <div class="phone_list_element_img">
                                <img alt="thêm ảnh" src=<?php echo $sanpham["HinhAnhMH"] ?>>
                            </div>
            
                            <h3>
                                <?php echo $sanpham["Ten"] ?>
                            </h3>
                            <strong class="phone_list_element_price"><?php echo number_format($sanpham["Gia"],0,".",".") ?>₫</strong>
                            <?php include_once("include/addDeleteCart.php");
                                processAddDeleteCart(isShowAddToCart($sanpham), false, true, $sanpham);
                            ?>
                        </a> 
                    </li>

            <?php };?>

            </ul>

    

            <!-- <div style="display: none;">
                <form action="chiTietSanPham.php"  name="chitietsp" method="post">
                    <input type="text" name="masp">
                    <input type="submit" name="xemchitiet" value="nhan">
                </form>
            </div> -->

            <?php 
                $stringOfParameters="type=". $_GET["type"];
                printPageNumbering($stringOfParameters);
            ?>
      

        </div>


        <?php include_once("rightPannelRegion.php"); ?>
        
        

    </div>

    <?php include_once("footerRegion.php"); ?>


</body>
</html>
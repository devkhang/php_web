<?php
    session_start();
    include_once("include/functions.php");
    include_once("pageNumbering.php");
    
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang chủ</title>
        <link rel="stylesheet" href="css\layout_style.css">
        <!--<link rel="stylesheet" href="style_test1.css">-->
        <link rel="stylesheet" href="css\product_list_layout_style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <style>
            
            
        </style>



    </head>
    <body>
        <!-- include function to submit masp to chitietsanpham.php -->
        <script src="js\simple.js"></script> 
        
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
            $cart = isset($_COOKIE["cart"])?$_COOKIE["cart"]:"[]";
            $cart = json_decode($cart);
            


            $query="SELECT * FROM sanpham ;";




            // echo "true1: ".isset($_GET["page-nr"]);
            // echo "<br>";
            // echo "true2: ".isset($_GET["type"]);
            // echo "<br>";
            

            // $resultLietKeSP=mysqli_query($conn, "SELECT * FROM sanpham limit $start, $sanphamPerPage;");
            $resultLietKeSP=processPagerNumbering($query, 6, $conn);

            ?>

            <ul id="phone_list" class="main_content_element">

            <?php
            while($sanpham=mysqli_fetch_object($resultLietKeSP)){ 
                            // check if product already exists in cart
                    $flag = false;
                    foreach ($cart as $c)
                    {
                        if ($c->MaSP == $sanpham->MaSP)
                        {
                            $flag = true;
                            break;
                        }
                    }
                ?>
                    <li class="phone_list_element">
                        
                        <a href=<?php echo "chiTietSanPham.php?MaSP=".$sanpham->MaSP.";"?>>
                            
                            <p class="masp" style="display: none;"><?php echo $sanpham->MaSP?></p><!-- use to identity sanpham to query chitietsanpham-->

                            <div class="phone_list_element_img">
                                <img alt="thêm ảnh" src=<?php echo $sanpham->HinhAnhMH ?>>
                            </div>

                            <h3>
                                <?php echo $sanpham->Ten ?>
                            </h3>
                            

                            <strong class="phone_list_element_price"><?php echo $sanpham->Gia ?>₫</strong>
                            


                        </a>
                        <?php
                                include_once("include/addDeleteCart.php");
                                processAddDeleteCart(isShowAddToCart((array)$sanpham), false, false, (array)$sanpham);

                            ?>
                    </li>

            <?php };?>

            </ul>

            <div style="display: none;">
                <form action="chiTietSanPham.php"  name="chitietsp" method="post">
                    <input type="text" name="masp">
                    <input type="submit" name="xemchitiet" value="nhan">
                </form>
            </div>

           <?php printPageNumbering("") ?>


        </div>
                
            <?php include_once("rightPannelRegion.php"); ?>


        
        </div>
        <?php include_once("footerRegion.php"); ?>


    </body>


</html>
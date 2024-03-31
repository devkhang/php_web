<?php
    session_start();
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
            $start=0;
            $sanphamPerPage=6;


            $record=$conn->query("SELECT * FROM sanpham LIMIT 0,10 ;");
            $numberOfPage=ceil($record->num_rows/$sanphamPerPage);




            // echo "true1: ".isset($_GET["page-nr"]);
            // echo "<br>";
            // echo "true2: ".isset($_GET["type"]);
            // echo "<br>";
            if(isset($_GET["page-nr"])){
                $start=($_GET["page-nr"]-1)*$sanphamPerPage;
                
            }

            $resultLietKeSP=mysqli_query($conn, "SELECT * FROM sanpham limit $start, $sanphamPerPage;");
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
                        
                        <a href="#" onclick="watchProductDetail(this)">
                            
                            <p class="masp" style="display: none;"><?php echo $sanpham->MaSP?></p><!-- use to identity sanpham to query chitietsanpham-->

                            <div class="phone_list_element_img">
                                <img alt="thêm ảnh" src=<?php echo $sanpham->HinhAnhMH ?>>
                            </div>

                            <h3>
                                <?php echo $sanpham->Ten ?>
                            </h3>
                            

                            <strong class="phone_list_element_price"><?php echo $sanpham->Gia ?>₫</strong>
                            <?php
                            if($flag){ ?>
                                <form action="delele-cart.php" method="POST">
                                    <input type="hidden" name="id" value=<?php echo $sanpham->MaSP?>>
                                    <input type="submit" class="btn btn-danger" value="delete from cart">
                                </form>
                            <?php }else{ ?>
                                <form action="add-cart.php" method = "POST">
                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="id" value=<?php echo $sanpham->MaSP?>>
                                    <input type="submit" class="btn btn-primary" value="adđ to cart">
                                </form>
                            <?php } ?>
                        </a>
                    </li>

            <?php };?>

            </ul>

            <div style="display: none;">
                <form action="chiTietSanPham.php"  name="chitietsp" method="post">
                    <input type="text" name="masp">
                    <input type="submit" name="xemchitiet" value="nhan">
                </form>
            </div>

            <div id="page_numbering">
                
                <?php
                    for($i=1; $i<=$numberOfPage; ++$i){ 
                        ?>
                        <a href=<?php echo "?page-nr=".$i?>><?php echo $i ?></a>
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
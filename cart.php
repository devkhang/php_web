<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\layout_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
        .box-product{
            width: 100%;
            height: 150px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(255,243,237,255);
            border-style: solid;
            border-width: 5px;
            border-color: red;
            padding:5px;
            margin-bottom: 10px;
        }
        .box-product .box-product-image{
            width: 30%;
            height: 100%;
        }
        .box-product .box-product-image img{
            height: 100%;
            width: 100%;
            object-fit: contain;
        }
        .box-product .box-product-description{
          
            font-size: 20px;
        }
        .box-product .box-product-price{
            width: 10%;
        }

        .box-product .box-product-interaction .interaction{
            display: flex;

        }
        .box-product .box-product-interaction .interaction .plus{
            width: 32px;
            height: 32px;
        }
        .box-product .box-product-interaction .interaction .plus img{
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .box-product .box-product-interaction .interaction .minus{
            width: 32px;
            height: 32px;
        }
        .box-product .box-product-interaction .interaction .minus img{
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        #form_address{
            background-color: rgba(236,236,234,255);
            width: 100%;
            border-style: solid;
            border-width: 1px;
        }
        #form_address #text_address{
            box-sizing: border-box;
            width: 100%;
            display:none;
        }


    </style>

    <script>
        function showAddressInputBox(option){
            let AddressInputBox=document.getElementById("text_address");
            if(option.value==="Nhập địa chỉ giao hàng mới"){
                AddressInputBox.style.display="block";
            }
            else{
                AddressInputBox.style.display="none";
            }
            
        }
    </script>

</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php include_once("headerRegion.php"); ?>
    <div id="main_body">
        <?php include_once("leftPannelRegion.php"); ?>

        <div id="main_content">
        <!-- <div class="container" style="margin-top: 50px;"> -->
        <?php
        $cart = isset($_COOKIE["cart"]) ? $_COOKIE["cart"] : "[]";
        $cart = json_decode($cart);

        $total = 0;

        foreach ($cart as $c)
        {
            $total += $c->Gia * $c->quantity;
            ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $c->Ten; ?></h5>
                            <p class="card-text"><?php echo $c->Gia * $c->quantity; ?></p>

                            <form method="POST" action="delete-cart.php" style="float: right; margin-left: 10px;">
                                <input type="hidden" name="id" value="<?php echo $c->MaSP; ?>">
                                <input type="text" name="file_position" value="<?php echo basename($_SERVER['SCRIPT_NAME']);?>">
                                <button type="submit" class="btn btn-danger">
                                    x
                                </button>
                            </form>

                            <form method="POST" action="update-cart.php" style="float: right;">
                                <input type="number" name="quantity" min="1" value="<?php echo $c->quantity; ?>">
                                <input type="hidden" name="productCode" value="<?php echo $c->MaSP; ?>">
                                <input type="submit" class="btn btn-warning" value="Update">
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>

        <p>
            <?php echo "<h1> tổng tiền :".$total."</h1>" ?>
        </p>

            <div id="Address">
                <form action="" method="get" id="form_address">
                    <input type="radio" id="address_option1" name="address_option" value="Chọn địa chỉ từ tài khoản" onclick="showAddressInputBox(this)" checked="checked">
                    <label for="address_option1">Chọn địa chỉ từ tài khoản</label><br>
                    <input type="radio" id="address_option2" name="address_option" value="Nhập địa chỉ giao hàng mới" onclick="showAddressInputBox(this)">
                    <label for="address_option2">Nhập địa chỉ giao hàng mới</label><br>
                    <input type="text" id="text_address" placeholder="NHẬP ĐỈA CHỊ CỦA BẠN"><br>
                    <input type="submit" id="submit" value="Mua hàng" onclick="muaHang()">
                </form>
            </div>
            <!-- <button class="btn-primary">testing</button> -->
        </div>

        <?php include_once("rightPannelRegion.php"); ?>


    </div>
    
    <?php include_once("footerRegion.php"); ?>
    
</body>
</html>
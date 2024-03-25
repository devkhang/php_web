<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\layout_style.css">

    <style>
        
#main_body{
    display: flex; 
}
        
#main_content{ 
    width: 70%;
    border-style: solid;
    border-color: rgba(0,0,0,0);
    display:block;  
    margin:5px;
   
}

        .box-product{
            width: 100%;
            height: 150px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(255,243,237,255);
            border-style: solid;
            border-width: 3px;
            border-color: #F2B705;
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
            
            width: 100%;
            
            margin-left:4px;
        }
        #form_address #text_address{
            box-sizing: border-box;
            width: 100%;
            display:none; 
        }
        .number-of-product {
            text-align: center;

        }
        #submit{  
        background: #F2B705;
        color:black;
        border: none;
        font-size: 15px;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
        padding: 19px 30px;
        position: relative;
        width: 100%; 
        margin-top: 10px;
        margin-bottom: 25px;
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
    <?php include_once("headerRegion.php"); ?> 
      <div id="main_body">
        <?php include_once("leftPannelRegion.php"); ?>

        <div id="main_content">
            <div class="box-product" id="product-1">
                <div class="box-product-image">
                    <img src="assets/iphone-15-plus-128gb-xanh-thumb-600x600.jpg">
                </div>
                <div class="box-product-description">
                   iPhone 15 Plus 128GB
                </div>
                <div class="box-product-price">
                    25.990.000₫
                </div>
                <div class="box-product-interaction">
                    <div class="interaction"> 
                    <button class="minus">
                            <img src="assets/minus-icon.png" <="" button="">
                    </button>
                        <input class="true-value" type="text" id="number-of-product" value="1">
                        <button class="plus">
                           <img src="assets/plus-icon.png">
                        </button> </div>
                </div>
            </div>

            <div class="box-product" id="product-2">
                <div class="box-product-image">
                    <img src="assets/samsung-galaxy-a05-thumb-600x600.jpg">
                </div>
                <div class="box-product-description">
                    Samsung Galaxy A05 4GB
                </div>
                <div class="box-product-price">
                    3.090.000₫
                </div>
                <div class="box-product-interaction">
                    <div class="interaction"> 
                    <button class="minus">
                            <img src="assets/minus-icon.png" <="" button="">
                    </button>
                        <input class="true-value" type="text" id="number-of-product" value="1">
                        <button class="plus">
                           <img src="assets/plus-icon.png">
                        </button> </div>
                </div>
            </div>

            <div class="box-product" id="product-3">
                <div class="box-product-image">
                    <img src="assets/oppo-a57-xanh-thumb-1-600x600.jpeg">
                </div>
                <div class="box-product-description">
                    OPPO Reno10 5G 128GB
                </div>
                <div class="box-product-price">
                    9.490.000₫
                </div>
                <div class="box-product-interaction">
                    <div class="interaction"> 
                    <button class="minus">
                            <img src="assets/minus-icon.png" <="" button="">
                    </button>
                        <input class="true-value" type="text" id="number-of-product" value="1">
                        <button class="plus">
                           <img src="assets/plus-icon.png">
                        </button> </div>
                </div>
            </div>

            <div id="Address">
                <form action="" method="get" id="form_address">
                    <input type="radio" id="address_option1" name="address_option" value="Chọn địa chỉ từ tài khoản" onclick="showAddressInputBox(this)" checked="checked">
                    <label for="address_option1">Chọn địa chỉ từ tài khoản</label><br>
                    <input type="radio" id="address_option2" name="address_option" value="Nhập địa chỉ giao hàng mới" onclick="showAddressInputBox(this)">
                    <label for="address_option2">Chọn địa chỉ giao hàng khác</label><br>
                    <input type="text" id="text_address" placeholder="Nhập địa chỉ mới"> 
                    <input type="submit" id="submit" value="THANH TOÁN" onclick="muaHang()">
                </form>
            </div>
            
        </div>

        <?php include_once("rightPannelRegion.php"); ?>


    </div>
    
    <?php include_once("footerRegion.php"); ?>
    
</body>
</html>
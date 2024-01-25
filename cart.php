<?php
    include_once("header.php")
?>
        <div id="main_content">
            <div class="box-product" id="product-1">
                <div class="box-product-image">
                    <img src="assets/iphone-15-plus-128gb-xanh-thumb-600x600.jpg">
                </div>
                <div class="box-product-description">
                    Điện thoại iPhone 15 Plus 128GB
                </div>
                <div class="box-product-price">
                    25.990.000₫
                </div>
                <div class="box-product-interaction">
                    <div class="interaction">
                        <button class="plus" >
                           <img src="assets/plus-icon.png">
                        </button>
                        <input class="true-value" type="text" id="number-of-product" value="1">
                        <button class="minus">
                            <img src="assets/minus-icon.png">
                        </button>
                    </div>
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
                        <button class="plus" >
                           <img src="assets/plus-icon.png">
                        </button>
                        <input class="true-value" type="text" id="number-of-product" value="1">
                        <button class="minus">
                            <img src="assets/minus-icon.png">
                        </button>
                    </div>
                </div>
            </div>

            <div class="box-product" id="product-3">
                <div class="box-product-image">
                    <img src="assets/oppo-a57-xanh-thumb-1-600x600.jpeg">
                </div>
                <div class="box-product-description">
                    Điện thoại OPPO Reno10 5G 128GB
                </div>
                <div class="box-product-price">
                    9.490.000₫
                </div>
                <div class="box-product-interaction">
                    <div class="interaction">
                        <button class="plus" >
                           <img src="assets/plus-icon.png">
                        </button>
                        <input class="true-value" type="text" id="number-of-product" value="1">
                        <button class="minus">
                            <img src="assets/minus-icon.png">
                        </button>
                    </div>
                </div>
            </div>

            <div id="Address">
                <form action="" method="get" id="form_address">
                    <input type="radio" id="address_option1" name="address_option" value="Chọn địa chỉ từ tài khoản" onclick="showAddressInputBox(this)" checked="checked">
                    <label for="address_option1">Chọn địa chỉ từ tài khoản</label><br>
                    <input type="radio" id="address_option2" name="address_option" value="Nhập địa chỉ giao hàng mới" onclick="showAddressInputBox(this)" >
                    <label for="address_option2" >Nhập địa chỉ giao hàng mới</label><br>
                    <input type="text" id="text_address" placeholder="NHẬP ĐỈA CHỊ CỦA BẠN" ><br>
                    <input type="submit" id="submit" value="Mua hàng">
                </form>
            </div>
            
        </div>
        <div id="right_panel">
        </div>
    </div>
<?php
    include_once("footer.php")
?>
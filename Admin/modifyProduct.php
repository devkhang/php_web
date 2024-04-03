<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout_style.css"> 
<style>
    .phone_list_element img:hover{
    transform: scale(0.9);
}
#phone_list{
    display: grid;
    grid-template-columns: repeat(3,minmax(0,1fr));
    gap: 10px;
}

.phone_list_element_img img{
    width: 100%;
}
.phone_list_element_rating{
    display: flex;
}

.item-txt-online{
    animation: newanimation 1s infinite;
    color:red;
}

#page_numbering{
    text-align: center; 
}
#page_numbering a{
    display: inline-block;
    height: 20px;
    width: 20px;
    border-style: solid;
    border-color: rgba(0,0,0,0);
    background-color: rgba(33,51,67,255);
    border-radius: 50%;
    color: aliceblue;
}
body{
    color: yellow;
}
</style>
    
</head>
<body>
    <?php include_once("headerRegion.php"); ?>

    <div id="main_body">

        <?php include_once("leftPannelRegion.php"); ?>
        <div id="main_content">
            <ul id="phone_list" class="main_content_element">
                <!-- start here -->
                <li class="phone_list_element">
                    <a href="iphone-15-pro-max-512gb.html">
                        <div class="phone_list_element_img">
                            <img alt="iPhone 15 Pro Max 512gb" src="assets/iphone-15-pro-max-blue-thumbnew-600x600.jpg">
                        </div>
        
                        <h3>
                            iPhone 15 Pro Max 512gb
                        </h3>
                        
                        <div class="phone_list_element_compare">
                                    <span>6.7"</span>
                                    <span>Super Retina XDR</span>
                        </div>

                          
                        <strong class="phone_list_element_price">46.990.000₫</strong>
            
            
            
                        <div class="phone_list_element_rating">
                            <p>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    
                            </p>
                            <p class="item-rating-total">4</p>
                        </div>   
                    </a>
                </li>
                <li class="phone_list_element">
                    <a href="iphone-15-plus-128gb.html">
                        <div class="phone_list_element_img">
                            <img alt="iPhone 15 Plus 128GB" src="assets/iphone-15-plus-128gb-xanh-thumb-600x600.jpg">
                        </div>
        
                        <h3>
                            iPhone 15 Plus 128GB
                        </h3>
                        
                        <div class="phone_list_element_compare">
                                    <span>thêm thông tin</span>
                                    <span>thêm thông tin</span>
                        </div>

                        <strong class="phone_list_element_price">25.990.000₫</strong>
            
            
            
                        <div class="phone_list_element_rating">
                            <p>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    
                            </p>
                            <p class="item-rating-total">19</p>
                        </div>   
                    </a>
                </li>
                <li class="phone_list_element">
                    <a href="iphone_15_pro_max_256gb.html">
                        <div class="phone_list_element_img">
                            <img alt="iPhone 15 Pro Max 256GB" src="assets/iphone-15-pro-max-white-thumbnew-600x600.jpg">
                        </div>
        
                        <h3>
                            iPhone 15 Pro Max 256GB
                        </h3>
                        
                        <div class="phone_list_element_compare">
                                    <span>6.71"</span>
                                    <span>Super Retina XDR</span>
                        </div>
                        <strong class="phone_list_element_price">33.990.000₫</strong>
            
            
            
                        <div class="phone_list_element_rating">
                            <p>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/bad-icon-starjpg.jpg"></span>
                                    
                            </p>
                            <p class="item-rating-total">15</p>
                        </div>   
                    </a>
                </li>
                <li class="phone_list_element">
                    <a href="samsung-galaxy-z-fold5-kem.html">
                        <div class="phone_list_element_img">
                            <img alt="thêm ảnh" src="assets/samsung-galaxy-z-fold5- kem-600x600.jpg">
                        </div>
        
                        <h3>
                            Samsung Galaxy Z Fold5 5G
                        </h3>
                        
                        <div class="phone_list_element_compare">
                                    <span>Chính 7.6" & Phụ 6.2"</span>
                                    <span>Quad HD+ (2K+)</span>
                        </div>

                        <strong class="phone_list_element_price">40.990.000₫</strong>
            
            
            
                        <div class="phone_list_element_rating">
                            <p>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/bad-icon-starjpg.jpg"></span>
                                    
                            </p>
                            <p class="item-rating-total">5</p>
                        </div>   
                    </a>
                </li>

                <li class="phone_list_element">
                    <a href="Galaxy-S22-Ultra-Burgundy.html">
                        <div class="phone_list_element_img">
                            <img alt="Samsung Galaxy S22 Ultra 5G 128GB" src="assets/Galaxy-S22-Ultra-Burgundy-600x600.jpg">
                        </div>
        
                        <h3>
                            Samsung Galaxy S22 Ultra 5G 128GB
                        </h3>
                        
                        <div class="phone_list_element_compare">
                                    <span>6.8"</span>
                                    <span>Quad HD+ (2K+)</span>
                        </div>

                        <strong class="phone_list_element_price">16.990.000₫</strong>
            
            
            
                        <div class="phone_list_element_rating">
                            <p>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/bad-icon-starjpg.jpg"></span>
                                    
                            </p>
                            <p class="item-rating-total">194</p>
                        </div>   
                    </a>
                </li>
                <li class="phone_list_element">
                    <a href="OPPO-A57-128GB.html">
                        <div class="phone_list_element_img">
                            <img alt="thêm ảnh" src="assets/oppo-a57-xanh-thumb-1-600x600.jpeg">
                        </div>
        
                        <h3>
                            Điện thoại OPPO A57 128GB
                        </h3>
                        
                        <div class="phone_list_element_compare">
                                    <span>6.56"</span>
                                    <span>HD+</span>
                        </div>

                        <strong class="phone_list_element_price">3.790.000₫</strong>
            
            
            
                        <div class="phone_list_element_rating">
                            <p>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/bad-icon-starjpg.jpg"></span>
                                    
                            </p>
                            <p class="item-rating-total">303</p>
                        </div>   
                    </a>
                </li>


                
            </ul>
            <div id="page_numbering">
                <a href="modifyProduct.php">1</a>
                <a href="modifyProduct1.php">2</a>
            </div>

            
        </div>
        <div id="right_panel">
        </div>
    </div>
 
        <?php include_once("rightPannelRegion.php"); ?>

    </div>


    <?php include_once("footerRegion.php"); ?>
 
    <script src="layout_skeketon_js.js"></script>
    <script src="modifyProductjs.js"></script>
</body>
</html> 
 
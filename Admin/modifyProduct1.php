
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
    margin-top: 30%;

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
                    <a href="oppo-reno10-5g-128gb.html">
                        <div class="phone_list_element_img">
                            <img alt="Điện thoại OPPO Reno10 5G 128GB" src="assets/oppo-reno10-blue-thumbnew-600x600.jpg">
                        </div>
        
                        <h3>
                            Điện thoại OPPO Reno10 5G 128GB
                        </h3>
                        
                        <div class="phone_list_element_compare">
                                    <span>6.7"</span>
                                    <span>Full HD+</span>
                        </div>

                        <strong class="phone_list_element_price">9.490.000₫</strong>
            
            
            
                        <div class="phone_list_element_rating">
                            <p>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/star.png"></span>
                                    <span><img class="icon-star" src="assets/bad-icon-starjpg.jpg"></span>
                                    
                            </p>
                            <p class="item-rating-total">11</p>
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
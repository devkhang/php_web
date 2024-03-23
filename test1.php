<?php 
include_once('include\db.inc.php');

$result=$conn->query("SELECT * FROM sanpham where HangDTH='oppo'");
?>

<ul id="phone_list" class="main_content_element">

<?php
while($sanpham=$result->fetch_array(MYSQLI_ASSOC)){ ?>
        <li class="phone_list_element">
                        <a href="samsung-galaxy-z-fold5-kem.html">
                            <div class="phone_list_element_img">
                                <img alt="thêm ảnh" src="assets/samsung-galaxy-z-fold5- kem-600x600.jpg">
                            </div>
            
                            <h3>
                                Samsung Galaxy Z Fold5 5G
                            </h3>
                            
                            <div class="phone_list_element_compare">
                                        <span>Chính 7.6" &amp; Phụ 6.2"</span>
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

<?php }; ?>

?>

</ul>
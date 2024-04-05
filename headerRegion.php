<div id="header">
        <div id="brand">
        
            <h1 id="header_p">Thegioidienthoai</h1>

        </div>

        <div id="menu_top">
            <div class="menu_top_element" id="homepage">
                <a href="index.php">Trang chủ</a>
            </div>
            <!-- ẩn hiện headerbar -->
            <?php
                if(isset($_SESSION["username"])){
                    echo '<div class="menu_top_element" id="cart">
                            <a href="cart.php">Giỏ hàng<i class="fa-solid fa-cart-shopping"></i></a>
                        </div>';
                    echo '<div class="menu_top_element" id="singout" style="display: inline;">
                            <a href="signout.php">Đăng xuất</a>
                        </div>';
                    echo '<div class="menu_top_element" id="profile" style="display: inline;">
                        <a href="profile.php">Tài khoản</a>
                        </div>';
                    echo '<div class="menu_top_element" id="history">
                            <a href="history.php">Lịch sử mua hàng</a>
                        </div>';
                }else{
                    echo '<div class="menu_top_element" id="login" style="display: inline;">
                            <a href="login.php">Đăng nhập</a>
                        </div>';
                    echo '<div class="menu_top_element" id="signup" style="display: inline;">
                            <a href="signup.php">Đăng Ký</a>
                        </div>';
                }
            ?>
            <!-- <div class="menu_top_element" id="login" style="display: inline;">
                <a href="login.php">Đăng nhập</a>
            </div> -->
            <!-- <div class="menu_top_element" id="singout" style="display: none;">
                <a href="singout.php">Đăng xuất</a>
            </div> -->
            <!-- <div class="menu_top_element" id="singup">
                <a href="singup.php">Đăng ký</a>
            </div>     -->
            <!-- <div class="menu_top_element" id="history">
                <a href="history.php">Lịch sử mua hàng</a>
            </div> -->
        <div class="menu_top_element" id="advancedSearch"><a href="advanced_search.php">Tìm kiếm nâng cao</a></div><div class="menu_top_element" id="avatar-account" style="display: none;"><a href="robute_user.php"><img src="assets/robute_drinking.jpeg" style="width: 33.48px; height: 37.6px; object-fit: cover; border-style: hidden; border-radius: 50%;"></a></div></div>

        <div id="search">
            
            <div class="menu_top_element" id="simple_search">
                <form action="" method="get" target="_blank">
                    <input type="text" placeholder="Tìm theo tên" id="ss" name="ss">
                    <input type="submit" value="Tìm" onclick="window.location.replace('search_result.php')">
                </form>
            </div>

            <div class="menu_top_element" id="advanced_search">
                <a href="advanced_search.php">
                    
                    <p>Tiềm kiếm nâng cao</p>
                </a>
            </div>
        </div>
        
    </div>
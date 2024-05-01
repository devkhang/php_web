<div id="left_panel">
            <?php $filepath_login = $_SERVER['DOCUMENT_ROOT']."/php_web/admin/login.php"?>
            <?php 
                if(!isset($_SESSION['admin_name'])){?>
            <div class="left_panel_element" id="login" style="display: flex;">
                <a href="http://localhost/php_web/admin/login.php">Đăng nhập</a>
            </div>
            <?php }else{?>
            <div class="left_panel_element" id="homepage">
                <a href="http://localhost/php_web/admin/index.php">Giao diện admin</a>
            </div>
            <div class="left_panel_element" id="singout" style="display: flex;">
                <a href="http://localhost/php_web/admin/signout.php">Đăng xuất</a>
            </div>
            <div class="left_panel_element" id="addUser">
                <a href="http://localhost/php_web/admin/UserManage.php">Thêm người dùng</a>
            </div>
            <div class="left_panel_element" id="addProduct">
                <a href="http://localhost/php_web/admin/addProduct.php">Thêm sản phẩm</a>
            </div>
            <div class="left_panel_element" id="modifyProduct">
                <a href="http://localhost/php_web/admin/modifyProduct.php">Chỉnh sửa sản phẩm</a>
            </div>
            <div class="left_panel_element" id="orderManage">
                <a href="http://localhost/php_web/admin/orderManage.php">Quản lý đơn hàng của khách</a>
            </div>
            <div class="left_panel_element" id="financeStatistic">
                <a href="http://localhost/php_web/admin/financeStatistic.php">Thống kê tình hình kinh doanh</a>
            </div>
            <div class="left_panel_element" id="modifyUser">
                <a href="http://localhost/php_web/admin/modifyUser.php">Chỉnh sửa tài khoản người dùng</a>
            </div>
            <?php } ?>
</div>
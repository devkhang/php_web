<div id="left_panel">
            <?php 
                if(!isset($_SESSION['admin_name'])){?>
            <div class="left_panel_element" id="login" style="display: flex;">
                <a href="login.php">Đăng nhập</a>
            </div>
            <?php }else{?>
            <div class="left_panel_element" id="homepage">
                <a href="index.php">Giao diện admin</a>
            </div>
            <div class="left_panel_element" id="singout" style="display: flex;">
                <a href="signout.php">Đăng xuất</a>
            </div>
            <div class="left_panel_element" id="addUser">
                <a href="UserManage.php">Thêm người dùng</a>
            </div>
            <div class="left_panel_element" id="addProduct">
                <a href="addProduct.php">Thêm sản phẩm</a>
            </div>
            <div class="left_panel_element" id="modifyProduct">
                <a href="modifyProduct.php">Chỉnh sửa sản phẩm</a>
            </div>
            <div class="left_panel_element" id="orderManage">
                <a href="orderManage.php">Quản lý đơn hàng của khách</a>
            </div>
            <div class="left_panel_element" id="financeStatistic">
                <a href="financeStatistic.php">Thống kê tình hình kinh doanh</a>
            </div>
            <div class="left_panel_element" id="modifyUser">
                <a href="modifyUser.php">Chỉnh sửa tài khoản người dùng</a>
            </div>
            <?php } ?>
</div>
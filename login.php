<?php 
    include_once("header.php")
?>
        <div id="main_content1">
            <div class="box-login">
                <div class="login-title">
                    Đăng nhập
                </div>
                <div class="username">
                    <form action="" method="get">
                        <input type="text" id="username" name="username" placeholder="Email/Số điện thoại/Tên đăng nhập">
                    </form>
                </div>
                <div class="password" >
                    <form action="" method="get">
                        <input type="password" id="password" name="password" placeholder="Mật khẩu">
                    </form>
                </div>

                <div class="submit">
                    <form action="" method="get" onsubmit="setisLoginTrue(this)" target="_blank">
                        <input type="submit" id="submit" name="submit" value="Đăng nhập" >
                    </form>
                </div>

            </div>

            
        </div>
        <div id="right_panel">
        </div>
    </div>
<?php
    include_once("footer.php")
?>
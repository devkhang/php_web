<?php 
    include_once("header.php")
?>
        <div id="main_content1">
            <div class="box-login">
                <div class="login-title">
                    Đăng nhập
                </div>
    
                <form action="" method="post" onsubmit="setisLoginTrue(this)">
                    <div class="username">
                            <input type="text" id="username" name="username" placeholder="Email/Số điện thoại/Tên đăng nhập">
                    </div>
                    <div class="username">               
                        <input type="text" id="username" name="username" placeholder="Email/Số điện thoại/Tên đăng nhập">
                    </div>
                    <div class="password" >
                            <input type="password" id="password" name="password" placeholder="Mật khẩu">
                    </div>
                    <div class="submit">
                            <input type="submit" id="submit" name="submit" value="Đăng nhập" >
                    </div>
                </form>

            </div>

            
        </div>
        <div id="right_panel">
        </div>
    </div>
<?php
    include_once("footer.php")
?>
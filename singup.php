<?php
    include_once("header.php")
?>
        <div id="main_content1">
            <div class="box-signup">
                <div class="box-itme" id="singup-title">
                    Đăng kí
                </div>
                <div class="box-itme" id="email">
                    <form action="include/signup.inc.php" method="post">
                        <input type="text" id="username" name="username" placeholder="Email/Số điện thoại/Tên đăng nhập">
                        <div class="box-itme" id="password">
                            <input type="password" id="password" name="password" placeholder="Mật khẩu">
                        </div>
                        <div class="box-itme" id="repassword">
                            <input type="password" id="password1" name="rep_password" placeholder="Nhập lại mật khẩu">
                        </div>
                        <div class="box-itme" id="submit">
                            <input type="submit" id="submit" name="submit" value="Đăng ký">
                        </div>
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
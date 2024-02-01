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
                    </form>
                </div>
                <div class="box-itme" id="password">
                    <form action="include/signup.inc.php" method="post">
                        <input type="password" id="password" name="password" placeholder="Mật khẩu">
                    </form>
                </div>
                <div class="box-itme" id="repassword">
                    <form action="include/signup.inc.php" method="post">
                        <input type="password" id="password1" name="rep_password" placeholder="Nhập lại mật khẩu">
                    </form>
                </div>

                <div class="box-itme" id="submit">
                    <form action="include/signup.inc.php" method="post" onsubmit="announment()" target="_blank">
                        <input type="submit" id="submit" name="submit" value="Đăng ký">
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
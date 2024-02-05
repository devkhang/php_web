<?php
    include_once("header.php")
?>
        <div id="main_content1">
            <div class="box-signup">
                <div class="box-itme" id="singup-title">
                    Đăng kí
                </div>
                <div class="box-itme" id="div_form_signup">
                    <form action="include/signup.inc.php" method="post" id="form_signup">
                        <input type="text" id="username" name="username" placeholder="Email/Số điện thoại/Tên đăng nhập">
                        <div class="box-itme" id="password">
                            <input type="password" id="password" name="password" placeholder="Mật khẩu">
                        </div>
                        <div class="box-itme" id="repassword">
                            <input type="password" id="password1" name="rep_password" placeholder="Nhập lại mật khẩu">
                        </div>
                        <div class="box-itme" id="submit">
                            <input type="submit" id="submit-input" name="submit" value="Đăng ký">
                        </div>
                    </form>
                </div>
                <?php
                        if(isset($_GET["error"])){
                            if($_GET["error"]=="emptyInput"){
                                echo "<p style='color:red'> fill all the field </P>";
                            }
                            else if($_GET["error"]=="invalid_username"){
                                echo "<p 'color:red'> choose the proper username </P>";
                            }
                            else if($_GET["error"]=="password do not matching"){
                                echo "<p 'color:red'> the repeat paword does not matching</P>";
                            }
                            else if($_GET["error"]=="email exist"){
                                echo "<p 'color:red'>Choose another username</P>";
                            }
                            else if($_GET["error"]=="stmtfail"){
                                echo "<p 'color:red'>something went wrong! try again</P>";
                            }
                        }
                    ?>
            </div>
        </div>
        <div id="right_panel">
        </div>
    </div>
<?php
    include_once("footer.php")
?>
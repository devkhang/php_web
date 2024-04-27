<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\layout_style.css">

    <style>
        #user_account_label{
            grid-area: a1;
        }
        #user_account{
            grid-area: a2;
        }

        #DiaChi_label{
            grid-area: b1;
        }
        #DiaChi{
            grid-area: b2;
        }

        #Email_label{
            grid-area: c1;
        }
        #Email{
            grid-area: c2;
        }





        #searchUser{
            display: grid;



        }
    </style>
</head>
<body>
    <?php include_once("headerRegion.php"); ?>
    <?php
    if (!isset($_SESSION['allowed_access']) || $_SESSION['allowed_access'] !== true) {
        // Nếu không có quyền truy cập, chuyển hướng người dùng về trang khác hoặc hiển thị thông báo lỗi
        header('Location: index.php'); // Chuyển hướng người dùng về trang chủ hoặc trang login
        exit();
    }
    ?>
    
    
   
    </div>

    <div id="main_body">
        <?php include_once("leftPannelRegion.php"); ?>

        <div id="main_content">
            <form action="modifyUser.php" id="searchUser">
                <label for="user_account" id="user_account_label">Tên người dùng:</label>
                <input type="text" name="user_account" id="user_account">

                <label for="DiaChi" id="DiaChi_label">Địa chỉ</label>
                <input type="text" name="DiaChi" id="DiaChi">

                <label for="Email" id="Email_label">Địa chỉ</label>
                <input type="text" name="Email" id="Email">

                <label for="SoDTH" id="SoDTH_label">Địa chỉ</label>
                <input type="text" name="SoDTH" id="SoDTH">

                <button type="submit" name="submit" value=1 id="submitBtn">Tìm</button>



            </form>
        </div>

        <?php include_once("rightPannelRegion.php"); ?>
    </div>


    <?php include_once("footerRegion.php"); ?>


    <script src="layout_skeketon_js.js"></script>
    <script>
        

    </script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout_style.css"> 
    <style>
        #user-list{
            width: 100%;
            height: 50%;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-template-rows: repeat(2, 1fr);
            text-align: center;
            
        }
        #user-list div img{
            height: 70%;
            width: 100%;
            object-fit: contain;
        }
        #user-list div{
            box-sizing: border-box;
            margin: 10px;
            background-color: rgba(34,228,226,255);
            
        }
        #user-list div img:hover{
            background-color: rgba(238,190,101,255);
            cursor: pointer;
        }
        #user-list .user_list_button a{
            color: whitesmoke;
            box-sizing: border-box;
            background-color:rgb(19,40,40);
            border-radius: 5px;
        }
        #user-list .user_list_button a:hover{
            cursor: pointer;
            color: whitesmoke;
            box-sizing: border-box;
            background-color:rgba(223,98,44,255);
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <?php include_once("headerRegion.php"); ?>

    <div id="main_body">

        <?php include_once("leftPannelRegion.php"); ?>
        <div id="main_content">
            <div id="user-list">
                <div id="robute" >
                    <img src="assets/guillimanfinal.jpg" onclick="window.location.href=('robute_user.php')">
                    <p>The G man</p>
                    <p>Tình trạng: Không bị khóa</p>
                    <div class="user_list_button">
                        <a id="Lock" onclick="Lock(this)">Khóa</a>
                        <a id="Unlock" onclick="Unlock(this)">Mở khóa</a>
                        <a id="Modify" href="robute_modify.php">Chỉnh sửa</a>
                    </div>
                </div>
                <div id="horus" >
                    <img src="assets/horus.jpg" onclick="window.location.href=('Horus_user.php')">
                    <p>The Herectic</p>
                    <p>Tình trạng: Không bị khóa</p>
                    <div class="user_list_button">
                        <a id="Lock" onclick="Lock(this)">Khóa</a>
                        <a id="Unlock" onclick="Unlock(this)">Mở khóa</a>
                        <a id="Modify" href="horus_modify.php">Chỉnh sửa</a>
                    </div>
                </div>
                <div id="lion" >
                    <img src="assets/lion.jpg" onclick="window.location.href=('Lion_user.php')">
                    <p>The Exterminator</p>
                    <p>Tình trạng: Không bị khóa</p>
                    <div class="user_list_button">
                        <a id="Lock" onclick="Lock(this)">Khóa</a>
                        <a id="Unlock" onclick="Unlock(this)">Mở khóa</a>
                        <a id="Modify" href="lion_modify.php">Chỉnh sửa</a>
                    </div>
                </div>
                <div id="lion1">
                    <img src="assets/lion.jpg" onclick="window.location.href=('Lion_user.php')">
                    <p>The Exterminator</p>
                    <p>Tình trạng: Không bị khóa</p>
                    <div class="user_list_button">
                        <a id="Lock" onclick="Lock(this)">Khóa</a>
                        <a id="Unlock" onclick="Unlock(this)">Mở khóa</a>
                        <a id="Modify" href="lion_modify.php">Chỉnh sửa</a>
                    </div>
                </div>
                <div id="horus1">
                    <img src="assets/horus.jpg" onclick="window.location.href=('Horus_user.php')">
                    <p>The Herectic</p>
                    <p>Tình trạng: Không bị khóa</p>
                    <div class="user_list_button">
                        <a id="Lock" onclick="Lock(this)">Khóa</a>
                        <a id="Unlock" onclick="Unlock(this)">Mở khóa</a>
                        <a id="Modify" href="horus_modify.php">Chỉnh sửa</a>
                    </div>
                </div>
                <div id="robute1" >
                    <img src="assets/guillimanfinal.jpg" onclick="window.location.href=('robute_user.php')">
                    <p>The G man</p>
                    <p>Tình trạng: Không bị khóa</p>
                    <div class="user_list_button">
                        <a id="Lock" onclick="Lock(this)">Khóa</a>
                        <a id="Unlock" onclick="Unlock(this)">Mở khóa</a>
                        <a id="Modify" href="robute_modify.php">Chỉnh sửa</a>
                    </div>
                </div>
                
                
            </div>

            
        </div>
        <div id="right_panel">
        </div>
    </div>
   
    <?php include_once("rightPannelRegion.php"); ?>

</div>


<?php include_once("footerRegion.php"); ?>

<script src="layout_skeketon_js.js"></script>
<script src="modifyProductjs.js"></script>

<script>
    function Lock(user){
        alert("Khóa người thành công");
    }
    function Unlock(user){
        alert("Mở khóa người dùng thành công");
    }

</script>
</body>
</html> 
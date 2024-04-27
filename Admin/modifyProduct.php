<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\layout_style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <style>
        .product-card{
            display: grid;
            width: 80%;
            height: 100px;
            margin-left:10%;
            margin-right:10%;
            border: 1px solid black;
            box-sizing:border-box;
        }
        img{
            object-fit:cover;
        }
        .product-img{
            width: 90%;
            height: 50px;
            margin-bottom:5px;
            padding: 5px;
        }
        #main_content{
            display: grid;
            place-items: center;
            margin-left: 10px;
            margin-top: 100px;
            border: 3px solid black;
            outline: 3px solid black;
            border-radius: 10px;
        }
        #search_advance{
            display: block;
            width: 95%;
            height: 60%;
            padding: auto;
            font-size: xx-large;
            background-color: red;
            text-align: center;
        }
        title{
            display: inline;
            place-items: center;
            width: 100px;
            height: 100px;
        }
        .container{
            display: block;
            width: 100%;
            height: 80%;
            grid-template-columns: 400px auto;
            background-color: aliceblue;
        }
        #item1{
            text-align: left;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto;
            grid-template-areas: 
            "label1 input1"
            "label2 input2"
            "label3 input3"
            "label4 input4"
            "input5 input6"
            ;
        }
        #label4{
            grid-area: label4;
        }
        #label1{
            grid-area: label1;
        }
        #input1{
            grid-area: input1;
        }
        #label2{
            grid-area: label2;
        }
        #input2{
            grid-area: input2;
        }
        #label3{
            grid-area: label3;
        }
        #input3{
            grid-area: input3;
        }
        #input4{
            grid-area: input4;
        }
        #input5{
            grid-area: input5;
        }
        #input6{
            grid-area: input6;
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
            <div id="search_advance">
                <div class="title">Tìm kiếm nâng cao</div>
                <div class="container">
                    <form id="item1" width="200px" height="200px" action="search_result.php" method="POST">
                        <label id="label1" for="name">Tên sản phẩm:</label>
                        <input id="input1" type="text" placeholder="iphone 15promax" id="name" name="Ten">
                        
                        <label id="label2" for="min">Giá nhỏ nhất</label>
                        <input id="input2" type="number" id="min" name="min">

                        <label id="label3" for="min">Giá lớn nhất</label>
                        <input id="input3" type="number" id="max" name="max">

                        <label id="label4" for="kind">Loại sản phẩm</label>
                        <select id="input4" name="HangDTH" id="kind">
                            <option value="">Chọn loại điện thoại</option>
                            <option value="iphone">iphone</option>
                            <option value="oppo">oppo</option>
                            <option value="samsung">samsung</option>
                        </select>

                        <input id="input5" type="reset" name="reset">
                        <input id="input6" type="submit" name="submit">

                    </form>
                    <!-- <div class="product-card">
                        <div class="product-img">
                            hello
                        </div>
                    </div> -->
                    
                </div>
            </div>
        </div>

        <?php include_once("rightPannelRegion.php"); ?>
    </div>


    <?php include_once("footerRegion.php"); ?>


    <script src="layout_skeketon_js.js"></script>
    <script>
        

    </script>

</body>
</html>
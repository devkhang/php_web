<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/layout_style.css">
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
    </style>

</head>
<body>
    <?php include_once("headerRegion.php"); ?>
    <div id="main_body">
        <?php include_once("leftPannelRegion.php"); ?>

        <div id="main_content">
            <div id="search_advance">
                <div class="title">Tìm kiếm nâng cao</div>
                <div class="container">
                    <form id="item1" width="200px" height="200px" action="search_result.php" method="POST" target="_blank">
                        <label for="name">Tên sản phẩm:</label>
                        <input type="text" placeholder="iphone 15promax" id="name" name="name"><br>
                        
                        <lable for="min">Giá nhỏ nhất</lable>
                        <input type="number" id="min" name="min"><br>

                        <lable for="min">Giá lớn nhất</lable>
                        <input type="number" id="max" name="max"><br>

                        <select name="kind" id="kind">
                            <option value="iphone">iphone</option>
                            <option value="oppo">oppo</option>
                            <option value="samsung">samsung</option>
                        </select><br>

                        <input type="reset">
                        <input type="submit" value="Tìm" >

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
    
</body>
</html>
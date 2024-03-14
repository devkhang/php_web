<?php
    include_once("header.php");
?>
<style>
        /* .search_container{
            display: grid;
            grid-row-start:auto;
            column-gap: 20px;
        } */
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
<div id="main_content">
            <div id="search_advance">
                <div class="title">Tìm kiếm nâng cao</div>
                <div class="container">
                    <form id="item1" width="200px" height="200px" action="search_result" method="post" target="_blank">
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
                        <input type="submit" value="Tìm" onclick="window.location.replace('search_result.html')">

                    </form>
                    <div></div>
                    
                </div>
            </div>
        </div>
        <div id="right_panel">
        </div>
<?php
    include_once("footer.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/layout_style.css">

    <style>
        #search-result{
            background-color: aliceblue;
            display: none;  
        }
        #search-result .order{
            background-color: rgba(238,238,238,255);
            border-style: solid;
            border-width: 1px;
            margin-bottom: 10px;
        }
        #search-result .order:hover{
            background-color:rgba(29,162,216);
            border-style: solid;
            border-width: 1px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php include_once("headerRegion.php"); ?>

    <div id="main_body">

        <?php include_once("leftPannelRegion.php"); ?>
        <div id="main_content">
            <div id="search-for-orders">
                <form id="search-for-orders-form" target="_self" onsubmit="searchByInterval()" target="_blank">
                    <label for="start-date" id="start-date-label">Ngày bắt đầu</label>
                    <input type="date" id="start-date" name="start-date">
                    
                    <label for="end-date" id="end-date-label">Ngày kết thúc</label>
                    <input type="date" id="end-date" name="end-date">
                    <br>
                    <input type="submit" id="submit" name="submit" value="Tìm" >
                    
                </form>
            </div>
            <div id="search-result">
                <div class="order" id="order1">
                    <p>Ngày đặt hàng: 22/12/2022</p>
                    <p>Tình trạng đặt hàng: Đang giao</p>
                    <p>Giá đặt hàng:46.990.000₫</p>
                    <p>Người đặt hàng:Roboute Guilliman</p>
                    <form id="check-status">
                        <label for="check1">Chưa được xử lý</label>
                        <input type="radio" id="check1" name="check" value="Chưa được xử lý" checked="check">
                        <label for="check2">Đã được xử lý</label>
                        <input type="radio" id="check2" name="check" value="Đã được xử lý">
                        <input type="submit" id="submit" name="submit" value="Đánh dấu" onclick="alert('Đánh dấu thành công')">
                    </form>
                    <button class="detail-watch" type="button" onclick="window.location.href = 'order1.html';">Xem chi tiết</button>
                </div>
                <div class="order" id="order2" >
                    <p>Ngày đặt hàng: 12/5/2022</p>
                    <p>Tình trạng đặt hàng: Hủy</p>
                    <p>Giá đặt hàng:25.990.000₫</p>
                    <p>Người đặt hàng:Roboute Guilliman</p>
                    <form id="check-status">
                        <label for="check1">Chưa được xử lý</label>
                        <input type="radio" id="check1" name="check" value="Chưa được xử lý" checked="check">
                        <label for="check2">Đã được xử lý</label>
                        <input type="radio" id="check2" name="check" value="Đã được xử lý">
                        <input type="submit" id="submit" name="submit" value="Đánh dấu" onclick="alert('Đánh dấu thành công')">
                    </form>
                    <button class="detail-watch" type="button" onclick="window.location.href = 'order2.html';">Xem chi tiết</button>
                </div>
                <div class="order" id="order3" onclick="window.location.href = 'order3.html';">
                    <p>Ngày đặt hàng: 22/2/2022</p>
                    <p>Tình trạng đặt hàng: Hủy</p>
                    <p>Giá đặt hàng:33.990.000₫</p>
                    <p>Người đặt hàng:Roboute Guilliman</p>
                    <form id="check-status">
                        <label for="check1">Chưa được xử lý</label>
                        <input type="radio" id="check1" name="check" value="Chưa được xử lý" checked="check">
                        <label for="check2">Đã được xử lý</label>
                        <input type="radio" id="check2" name="check" value="Đã được xử lý">
                        <input type="submit" id="submit" name="submit" value="Đánh dấu" onclick="alert('Đánh dấu thành công')">
                    </form>
                    <button class="detail-watch" type="button" onclick="window.location.href = 'order3.html';">Xem chi tiết</button>
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
    <script>
        function searchByInterval(){
            sessionStorage.setItem("hasSubmit","true");
        }
        var hasSubmit=sessionStorage.getItem("hasSubmit");
        if(hasSubmit===null){
            hasSubmit="false";
            sessionStorage.setItem("hasSubmit", hasSubmit);
        }
        if(hasSubmit==="false"){
            let search_result=document.getElementById("search-result");
            search_result.style.display="none";
        }
        else{
            let search_result=document.getElementById("search-result");
            search_result.style.display="block";
            console.log("here");
        }
        
    </script>
 </body>
</html> 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\layout_style.css">
    
<style>
    #main_content{
        margin-left:5%;
        margin-top:10px;
        
    }
    #Order-history{
    background-color: aliceblue;
    margin-left:20px; 
    width: 60%;

    
}
#Order-history .history-box{
    background-color: white;
    border-style: solid;
    border-width: 1px;
    scroll-margin-inline: 10px;
    width:100%; 
     
}
#Order-history .history-box:hover{
    background-color:rgba(29,162,216);
    border-style: solid;
    border-width: 1px;
    margin-block : 10px; 
    cursor: pointer;
}
.history-box p{
padding-left: 10px;
}
  
</style>

</head> 
    <?php include_once("headerRegion.php"); ?>
    <div id="main_body">
        <?php include_once("leftPannelRegion.php"); ?>

    <div id="main_content" >
            
            <div id="Order-history">
                <div class="history-box" id="order1" onclick="window.location.href = 'order1.html';">
                    <p>Ngày đặt hàng: 22/12/2022</p>
                    <p>Tình trạng đặt hàng: Đang giao</p>
                    <p>Giá đặt hàng:46.990.000₫</p>
                </div>
                <div class="history-box" id="order2" onclick="window.location.href = 'order2.html';">
                    <p>Ngày đặt hàng: 12/5/2022</p>
                    <p>Tình trạng đặt hàng: Hủy</p>
                    <p>Giá đặt hàng:25.990.000₫</p>
                </div>
                <div class="history-box" id="order3" onclick="window.location.href = 'order3.html';">
                    <p>Ngày đặt hàng: 22/2/2022</p>
                    <p>Tình trạng đặt hàng: Hủy</p>
                    <p>Giá đặt hàng:33.990.000₫</p>
                </div> 
                
            
                </div>   </div> 
         
        </div> 

        <?php include_once("rightPannelRegion.php"); ?>


    </div>
    
    <?php include_once("footerRegion.php"); ?>
    
</body>
</html>
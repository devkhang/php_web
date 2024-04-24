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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        #Order-history{
            background-color: aliceblue;
        }
        #Order-history .history-box{
            background-color: rgba(238,238,238,255);
            border-style: solid;
            border-width: 1px;
            margin-bottom: 10px;
        }
        #Order-history .history-box:hover{
            background-color:rgba(29,162,216);
            border-style: solid;
            border-width: 1px;
            margin-bottom: 10px;
            cursor: pointer;
        }
    </style>


</head>
<body>
    <?php include_once('include\db.inc.php'); ?>
    <?php include_once("headerRegion.php"); ?>
    <div id="main_body">

        <?php include_once("leftPannelRegion.php"); ?>

        <div id="main_content"> 
            
        <?php
                $query =  "select * from hoadon where MaTK = ".$_SESSION["id"];
                $result = mysqli_query($conn,$query);

                while($row = mysqli_fetch_assoc($result)){
            ?>
                <div id="Order-history">
                    <div class="history-box" id="order1" onclick="window.location.href = 'order_detail.php<?php echo '?id='.$row['MaHD'] ?>'";>
                        <p><?php echo "ngày đặt hàng :".$row["ThoiGianDat"] ?></p>
                        <p><?php if($row["TrangThaiXuLy"]==0){
                            echo "tình trạng : đang giao hàng";
                        }else{
                            echo "tình trạng : đã giao hàng";
                        } ?></p>
                        <p><?php
                            echo $row["Tongtien"]."Đ";
                        ?></p>
                    </div>
                </div>
                <?php } ?>
                
        </div>
            

        <?php include_once("rightPannelRegion.php"); ?>
        
    </div>

    <?php include_once("footerRegion.php"); ?>

    
    
</body>
</html>
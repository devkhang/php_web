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
            
        </div>
            

        <?php include_once("rightPannelRegion.php"); ?>
        
    </div>

    <?php include_once("footerRegion.php"); ?>

    
    
</body>
</html>
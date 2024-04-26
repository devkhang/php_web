<?php 
session_start();
include_once("../include/functions.php");
include_once("../pageNumbering.php");
include_once("../include/connectDB.php");
include_once("../pageNumbering.php");

?>


<?php
    $isReceiveGet;

    if(isset($_GET["submit"])){
        $isReceiveGet=true;
        
        $conn=connectDB();
        $nonEmptyGet=postFilter($_GET);
        

        $query="SELECT * FROM `taikhoan` WHERE ";
        $lastKey=array_key_last($nonEmptyGet);
        
        if(count($nonEmptyGet)==0){
            // header("Location: advanced_search.php");
            $query.=" 1=1;";
        }


        
        foreach($nonEmptyGet as $key=>$value){
            if($key=="DiaChi"||$key=="Email"||$key=="SoDTH"||$key=="user_account" ){
                $query.="$key like '%$value%'";
                $query.=" and";
            }
            else if($key!="page-nr"){
                $query.=" $key='$value'";
                $query.=" and";
            }

            if($key==$lastKey){
                $query=substr($query, 0, -3);//remove the last "and" from query
                $query.=" ;";
            }
        }

        // echo "query: <br>";
        // var_dump($query);


        // $resultLietKeSP=$conn->query($query);
        $resultLietKeSP=processPagerNumbering($query, 6, $conn);
        // var_dump($result->fetch_all());

        // var_dump($resultLietKeSP);




    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\layout_style.css">

    
    <style>
        #page_numbering{
            text-align: center;
        }
        #page_numbering a{
            display: inline-block;
            height: auto;
            width: 30px;
            border-style: solid;
            border-color: rgba(0,0,0,0);
            background-color: rgba(33,51,67,255);
            border-radius: 50%;
            color: aliceblue;
        }
        #user-list{
            width: 100%;
            /* height: 50%; */
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            text-align: center;
            
        }
        #user-list div img{
            height: 60%;
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

    
    
   
    </div>

    <div id="main_body">
        <?php include_once("leftPannelRegion.php"); ?>

        <div id="main_content">
            
            <div id="user-list">
                
                <?php 
                    while($taikhoan=$resultLietKeSP->fetch_array(MYSQLI_ASSOC)){
                    ?>

                        <div>
                            <img src="<?php echo $taikhoan["HinhDaiDien"] ?>" onclick="">
                            <p><?php echo $taikhoan["user_account"] ?></p>
                            <p>Tình trạng:<?php
                                if($taikhoan["TinhTrang"]=='k'){
                                    echo "Bị khóa";
                                } 
                                else{
                                    echo "Không bị khóa";
                                }
                            ?>

                            </p>
                            <div class="user_list_button">
                                <a id="Lock" onclick="Lock(this)">Khóa</a>
                                <a id="Unlock" onclick="Unlock(this)">Mở khóa</a>
                                <a id="Modify" href="robute_modify.html">Chỉnh sửa</a>
                            </div>
                        </div>

                    <?php
                    }
                ?>

            
                
                    
                    
                    
            </div>
                
            <?php
                $stringOfParameters="";
            
                // $isReceivePost=true;
                $nonEmptyGet=postFilter($_GET);
                foreach($nonEmptyGet as $key=>$value){
                    if($key=="page-nr"){
                        continue;
                    }
                    $stringOfParameters.="$key=$value";
        
                    // if($key!=$lastKey){
                    //     $query.="$";
                    // }
                }


                
                
                $stringOfParameters.="&submit=yes";


                printPageNumbering($stringOfParameters);

            ?>

        </div>

        <?php include_once("rightPannelRegion.php"); ?>
    </div>


    <?php include_once("footerRegion.php"); ?>


    <script src="layout_skeketon_js.js"></script>
    <script>
        

    </script>

</body>
</html>
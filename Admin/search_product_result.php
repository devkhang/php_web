<?php
    session_start();
    
    include_once("../pageNumbering.php");



?>
<?php
    // chdir("include");//rat hay anh ban a :)) subarashi my nakamaru
    // include_once "db.inc.php";
    // chdir("..");

    include_once("../include/functions.php");
    include_once("../include/connectDB.php");

    if(isset($_GET["submit"])){
        $isReceivePost=false;
        $conn=connectDB();
        $nonEmptyGet=postFilter($_GET);
        if(count($nonEmptyGet)==0){
            // header("Location: advanced_search.php");
        }

        $query="SELECT * FROM `SANPHAM` WHERE";
        $lastKey=array_key_last($nonEmptyGet);
        // var_dump($nonEmptyGet); 
        if(count($nonEmptyGet)==0){
            // header("Location: advanced_search.php");
            $query.=" 1=1;";
        }


        foreach($nonEmptyGet as $key=>$value){
            
            if($key=="min"){
                $query.=" Gia>= $value";
                $query.=" and";
            }
            else if($key=="max"){
                $query.=" Gia<= $value";
                $query.=" and";
            }
            else if($key=="Ten"){
                $query.=" lower($key) like '%$value%'";
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

    }
    else{

        header("location: advanced_search.php");
        
        
        // var_dump($_GET); echo "<br>";
        
        // var_dump($_GET["submit"]);  echo "<br>";
        // var_dump(isset($_GET["submit"]));  echo "<br>";
        

    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang chủ</title>
        <link rel="stylesheet" href="css\layout_style.css">
        <!--<link rel="stylesheet" href="style_test1.css">-->
        <link rel="stylesheet" href="css\product_list_layout_style.css">
        <?php include_once("..\include\commonStyles.php")?>

        <style>
            ul {
                list-style-type: none;
            }
            
        </style>



    </head>
    <body>
        <?php
            include_once("headerRegion.php");
        ?>

        <div id="main_body">
            <?php 
                include_once("leftPannelRegion.php");
            ?>

            <div id="main_content">
                <ul id="phone_list" class="main_content_element">
                <?php
            while($sanpham=$resultLietKeSP->fetch_array(MYSQLI_ASSOC)){ 
                

                ?>
                    <li class="phone_list_element">
                    
                        <div>
                            <a href=<?php echo "chiTietSanPham.php?MaSP=".$sanpham["MaSP"] ?>>
                                <div class="phone_list_element_img">
                                    
                                    <img alt="thêm ảnh" src=<?php echo $sanpham["HinhAnhMH"] ?>>
                                </div>
                                <h3>
                                    <?php echo $sanpham["Ten"] ?>
                                </h3>
                                <strong class="phone_list_element_price"><?php echo number_format($sanpham["Gia"],0,".",".") ?>₫</strong>
                                
                            </a>
                           
                        </div>
                    </li>

            <?php };?> 

                    
                </ul>

                <!-- <div id="page_numbering">
                    <a href="index.html">1</a>
                    <a href="index2.html">2</a>
                </div> -->
                <?php
                    $stringOfParameters="";
                    if(isset($_POST["submit"])){
                        // $isReceivePost=true;
                        $nonEmptyPost=postFilter($_POST);
                        foreach($nonEmptyPost as $key=>$value){
                            if($key=="page-nr"){
                                continue;
                            }
                            $stringOfParameters.="$key=$value";
                
                            // if($key!=$lastKey){
                            //     $query.="$";
                            // }
                        }


                    }
                    else if(isset($_GET["submit"])){
                        // $isReceivePost=false;
                        $nonEmptyPost=postFilter($_GET);
                        foreach($nonEmptyPost as $key=>$value){
                            if($key=="page-nr"){
                                continue;
                            }
                            $stringOfParameters.="$key=$value";
                
                            // if($key!=$lastKey){
                            //     $query.="$";
                            // }
                        }
                    }
                    $stringOfParameters.="&submit=yes";


                    printPageNumbering($stringOfParameters);
                ?>
            </div>
                
            <?php include_once("leftPannelRegion.php"); ?>



        </div>
        <?php include_once("footerRegion.php"); ?>


    </body>
</html>
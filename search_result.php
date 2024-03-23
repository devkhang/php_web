<?php
    chdir("include");
    include_once "db.inc.php";
    chdir("..");
    if(isset($_POST["submit"])){
        header("location: advanced_search.php");
    }else{
        // var_dump($conn);
        $name = $_POST["name"];
        $min = $_POST["min"];
        $max = $_POST["max"];
        $kind = $_POST["kind"];
        // echo $name;
        $sql = "SELECT * from SANPHAM where HangDTH = ? and Ten = ? and Gia > ? and Gia < ?; ";
        $stmt = mysqli_stmt_init($conn);
        if(!$stmt){
            die("Statement initialization failed: ".mysqli_error($conn));
        }
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header('location: ../singup.php?error=stmtfail');
        }
        mysqli_stmt_bind_param($stmt,"ssss",$kind,$name,$min,$max);
        mysqli_stmt_execute($stmt);
        $results = array();
        $resultdata = mysqli_stmt_get_result($stmt);
        while($row = mysqli_fetch_assoc($resultdata)){
            $result_name = $row["Ten"];
            $result_kind = $row["HangDTH"];
            $result_price = $row["Gia"];
            $results[] = $row;
        }
        foreach ($results as $row) {
            // Lấy giá trị của cột 'Ten' từ mỗi đối tượng row
            $ten = $row['Ten'];
        
            // Lấy giá trị của cột 'HangDTH' từ mỗi đối tượng row
            $hangDTH = $row['HangDTH'];
        
            // Lấy giá trị của cột 'Gia' từ mỗi đối tượng row
            $gia = $row['Gia'];
            $hinhanhMH = $row["HinhAnhMH"];
            // Xử lý dữ liệu ở đây, ví dụ:
            $mau = $row["Mau"];
            $tonkho = $row["SoLuongTonKho"];
            // echo "Tên sản phẩm: $ten, Hãng: $hangDTH, Giá: $gia hình ảnh: $hinhanhMH <br>";
        }
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

        <style>
            
            
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
                    <!-- start here -->
                    
                    <li class="phone_list_element">
                        <a href="samsung-galaxy-z-fold5-kem.html">
                            <div class="phone_list_element_img">
                                <img alt="thêm ảnh" src="assets/<?php echo $hinhanhMH?>">
                            </div>
            
                            <h3>
                                <?php echo "tên sản phẩm : $name"?>
                            </h3>

                            <strong class="phone_list_element_price"><?php echo "giá tiền: $gia"?></strong>
                </ul>

                <!-- <div id="page_numbering">
                    <a href="index.html">1</a>
                    <a href="index2.html">2</a>
                </div> -->
            </div>
                
            <?php include_once("leftPannelRegion.php"); ?>



        </div>
        <?php include_once("footerRegion.php"); ?>


    </body>
</html>
<?php 
include_once("../include/connectDB.php");
session_start();


if(isset($_POST['them'])){

    //lay anh tu <input> va chuyen anh ve folder upload
    $detailPicture=$_FILES["product-detailPicture"];
    $uploadDir_detailPicture="./upload/". basename($detailPicture['name']);
    if(!move_uploaded_file($userFile["tmp_name"], $uploadDir)){
        $err_moveFile=true;
    }

    $illustration=$_FILES["illustration"];
    $uploadDir_illustration="./upload/". basename($illustration['name']);
    if(!move_uploaded_file($userFile["tmp_name"], $uploadDir_illustration)){
        $err_moveFile=true;
    }

    //insert cac gia tri attribute cua taikhoan vao table taikhoan
    $userAvatar=$uploadDir;
    $userName=$_POST["UserName"];
    $userEmail=$_POST["Email"];
    $userAddress=$_POST["Adress"];
    $userPWd=$_POST["pwd"];
    $userPhone=$_POST["Phone"];

    if($userAvatar&& $userName && $userEmail && $userAddress && $userAddress
    && $userPWd && $userPhone){
        $conn=connectDB();
        $insertStatus=$conn->query(sprintf("INSERT INTO taikhoan (TinhTrang, user_account, HinhDaiDien, DiaChi, Email, pwd, SoDTH) 
        values
        ('m','%s','%s','%s','%s','%s','%s')",$userName, $userAvatar, $userAddress, $userEmail, $userPWd, $userPhone));
        $err_singup=true;
    }
    else{
        $err_emptyValue=true;
    }
    

    

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\layout_style.css">
    <link rel="stylesheet" href="css\product_detail_style.css">

    <style>

        #preview-area{
            margin-top: 30px;
            height: 300px;
            width: 100%;
            /* border-style: solid; */
            display: flex;
        }

        #preview-illustration{
            width: 100%;
            height: 100%;
        }
        #preview-detail{
            width: 100%;
            height: 100%;
        }
        
        #preview-illustration img{
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        #preview-detail img{
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

    </style>
</head>
<body>

    <?php include_once("headerRegion.php"); ?>


   

    <div id="main_body">

        <?php include_once("leftPannelRegion.php"); ?>


        <div id="main_content">
            <form action="addProduct.php" id="production-detail-form">
                <div id="product-detail-box">
                    <label for="product-brand">Hãng điện thoại</label>
                    <input type="text" name="product-brand" id="product-brand">

                    <label for="product-name">Tên sản phẩm</label>
                    <input type="text" name="product-name" id="product-name">

                    <label for="product-color">Màu</label>
                    <input type="text" name="product-color" id="product-color">

                    <label for="product-promotion"> Khuyến mãi</label>
                    <input type="number" name="product-promotion" id="product-promotion">

                    <label for="product-remaining">Số lượng tồn kho</label>
                    <input type="number" name="product-remaining" id="product-remaining">

                    <label for="product-price">Giá sản phẩm</label>
                    <input type="number" name="product-price" id="product-price">

                    <label for="MieuTa">Miêu tả</label>
                    <textarea id="MieuTa" name="MieuTa" rows="1" cols="50"></textarea>

                    <label for="product-detailPicture">Hình ảnh chi tiết</label>
                    <input type="file" name="product-detailPicture" id="product-detailPicture">

                    <label for="product-illustration">Hình ảnh minh họa</label>
                    <input type="file" name="product-illustration" id="product-illustration">
                    <input type="hidden" name="submit" value=1>

                   


                </div>
                <button id="submit-product-detail" name="them" value=1>Thêm</button>
            </form>

            


            <div id="preview-area">
                <div id="preview-illustration">


                </div>

                <div id="preview-detail">


                </div>

            </div>


        </div>

        <?php include_once("rightPannelRegion.php"); ?>

    </div>

    <?php include_once("footerRegion.php"); ?>


    <script src="layout_skeketon_js.js"></script>
    <script>
        let illustrationImgInput=document.getElementById("product-illustration");
        let detailImgInput=document.getElementById("product-detailPicture");

        let preview_illustration=document.getElementById("preview-illustration");
        let preview_detail=document.getElementById("preview-detail");

        illustrationImgInput.addEventListener("change", ()=>{
            const fr=new FileReader();
            fr.readAsDataURL(illustrationImgInput.files[0]);

            fr.addEventListener("load", ()=>{
                const url=fr.result;
                const img=new Image();
                img.src=url;

                preview_illustration.appendChild(img);


            });
        });

        detailImgInput.addEventListener("change", ()=>{
            console.log(1);
            const fr1=new FileReader();
            fr1.readAsDataURL(detailImgInput.files[0]);

            fr1.addEventListener("load", ()=>{
                console.log(2);
                const url=fr1.result;
                const img1=new Image();
                img1.src=url;
                
                console.log("img:", img1);

                preview_detail.appendChild(img1);


            });
        })

    </script>

</body>
</html>
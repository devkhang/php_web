<?php 
include_once("../include/connectDB.php");
session_start();
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
            <form action="addProductControler.php" id="production-detail-form" method="post" enctype="multipart/form-data">
                <div id="product-detail-box">
                    <label for="product-brand">Hãng điện thoại</label>
                    <!-- <input type="text" name="product-brand" id="product-brand" required> -->
                    <select name="product-brand" id="product-brand">
                        <option value="iphone">Iphone</option>
                        <option value="samsung">Samsung</option>
                        <option value="oppo">Oppo</option>
                    </select>

                    <label for="product-name">Tên sản phẩm</label>
                    <input type="text" name="product-name" id="product-name" required>

                    <!-- <label for="product-color">Màu</label>
                    <input type="text" name="product-color" id="product-color" required> -->

                    <label for="product-promotion"> Khuyến mãi</label>
                    <input type="number" name="product-promotion" id="product-promotion" required>

                    <label for="product-remaining">Số lượng tồn kho</label>
                    <input type="number" name="product-remaining" id="product-remaining" required>

                    <label for="product-price">Giá sản phẩm</label>
                    <input type="number" name="product-price" id="product-price" required>

                    <label for="MieuTa">Miêu tả</label>
                    <textarea id="MieuTa" name="MieuTa" rows="1" cols="50"></textarea>

                    <label for="product-detailPicture">Hình ảnh chi tiết</label>
                    <input type="file" name="product-detailPicture" id="product-detailPicture" required>

                    <label for="product-illustration">Hình ảnh minh họa</label>
                    <input type="file" name="product-illustration" id="product-illustration" required>
                    <input type="hidden" name="submit" value=1>

                   


                </div>
                <button id="submit-product-detail" name="them" value=1>Thêm</button>
            </form>

            


            <div id="preview-area">
                <div id="preview-illustration">
                    <img src="" style="display: none;">

                </div>

                <div id="preview-detail">
                    
                    <img src="" style="display: none;">

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
                // const img=new Image();
                // img.src=url;

                // preview_illustration.appendChild(img);
                const innerImg=preview_illustration.getElementsByTagName("img")[0];
                innerImg.src=url;
                innerImg.style.display="block";


            });
        });

        detailImgInput.addEventListener("change", ()=>{
            console.log(1);
            const fr1=new FileReader();
            fr1.readAsDataURL(detailImgInput.files[0]);

            fr1.addEventListener("load", ()=>{
                console.log(2);
                const url=fr1.result;

                // const img1=new Image();
                // img1.src=url;

                // preview_detail.appendChild(img1);

                const innerImg=preview_detail.getElementsByTagName("img")[0];
                innerImg.src=url;
                innerImg.style.display="block";


            });
        })

    </script>

    <?php 
        if(isset($_GET["querySucceed"]) && !$_GET["querySucceed"]){?>
            <script src="../js/simple.js"></script>
            <script>
                popUp("Đã có lỗi gì đó xảy ra!!!");
            </script>
    <?php
        }
        ?>

    


</body>
</html>
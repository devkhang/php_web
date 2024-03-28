
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\layout_style.css">
    <link rel="stylesheet" href="css\product_detail_style.css">

    <style>

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

                    <label for="product-detailPicture">Hình ảnh chi tiết</label>
                    <input type="file" name="product-detailPicture" id="product-detailPicture">

                    <label for="product-illustration">Hình ảnh minh họa</label>
                    <input type="file" name="product-illustration" id="product-illustration">



                </div>
                <button id="submit-product-detail">Thêm</button>
            </form>

        </div>

        <?php include_once("rightPannelRegion.php"); ?>

    </div>

    <?php include_once("footerRegion.php"); ?>


    <script src="layout_skeketon_js.js"></script>
    <script>
        function addProduct(product){
            alert("Thêm sản phẩm thành công");
        }
    </script>

</body>
</html>
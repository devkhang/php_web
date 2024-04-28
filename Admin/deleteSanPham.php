

<?php
    function processDeleteSanPham($maSP, $originalParameters){
        include_once("../include/connectDB.php");
        $conn=connectDB();

        $sanPham=($conn->query("select * from sanpham where MaSP='$maSP'"))->fetch_array(MYSQLI_ASSOC);
        
        ?>
            <div class="trangThaiAn">
                <form action="<?php echo "deleteSanPhamController.php" ?>" method="get" id="<?php echo $maSP ?>">
                    <input type="text" name="MaSP" value="<?php echo $maSP ?>" style="display: none;">
                    <input type="text" name="originalParameters" value="<?php echo $originalParameters ?>" style="display: none;">
                    
                    
                    <?php 
                        if($sanPham["An"]=="a"){?>
                            <button type="submit" name="luachon" value="hetAn">Hết ẩn</button>
                            
                    <?php
                        }else{?>
                            <button type="submit" name="luachon" value="xoa">Xóa</button>
                    <?php
                        }
                    ?>
                        
                        
  

                </form>                

            </div>
            


    



<?php
    }
?>

<?php 
    

    if(isset($_GET["daBan"])){?>
        
        <script>
            <?php $maSP=$_GET["MaSP"]; ?>
            setTimeout(() => {
                let formhehe=document.createElement("form");
                let body=document.getElementsByTagName("body")[0];
                let userOption=confirm("Bạn có muốn xóa sản phẩm");

                // let userOption=confirm(window.location.href);
                let inputXoa=document.createElement("input");
                

                if(userOption){
                    // prompt("yes");

                    let formhehe=document.createElement("form");
                    formhehe.action="deleteSanPhamController.php";
                    formhehe.method="get";
                    formhehe.style.display="none";
        
                    let input1=document.createElement("input");
                    input1.type="text";
                    input1.name="MaSP";
                    input1.value="<?php echo $maSP ?>";

                    


                    let inputXoa=document.createElement("input");

                    inputXoa.type="text";
                    inputXoa.name="luachon";
                    inputXoa.value="chonXoa";


                    formhehe.append(input1);
                    formhehe.append(inputXoa);
                    body.append(formhehe);

                    console.log(formhehe);
                    formhehe.submit();
                }
            }, 300);


        </script>

<?php
    }
?>
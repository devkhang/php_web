<?php 
    include_once("../include/connectDB.php");
?>


<?php
    function processKhoaMoKhoaBtn($maTK, $originnalUrlParameters){
        $conn=connectDB();
        $maTK=(int)$maTK;
        
        // echo "query: <br>";
        // var_dump("SELECT * FROM `taikhoan` WHERE MaTK=$maTK;");

        $result=$conn->query("SELECT * FROM `taikhoan` WHERE MaTK=$maTK;");
        $TinhTrang=($result->fetch_array(MYSQLI_ASSOC)["TinhTrang"]);

        // echo $TinhTrang;

        // var_dump($originnalUrlParameters);

        if($TinhTrang=='k'){?>
            <form action="khoamoController.php" method="get">
                <button type="submit" name="luaChon" value="m">Mở</button>
                <input type="text" name="MaTK" value="<?php echo $maTK ?>" style="display: none;">
                <input type="text" name="originnalUrlParameters" value="<?php echo $originnalUrlParameters ?>" style="display: none;">
            </form>

    <?php
        }else{
    ?>

            <form action=<?php echo "khoamoController.php?$originnalUrlParameters" ?> method="get">
                <button type="submit" name="luaChon" value="k">Khóa</button>
                <input type="text" name="MaTK" value="<?php echo $maTK ?>" style="display: none;">
                <input type="text" name="originnalUrlParameters" value="<?php echo $originnalUrlParameters ?>" style="display: none;">
            </form>

    <?php
        }
    ?>

<?php
    }
?>
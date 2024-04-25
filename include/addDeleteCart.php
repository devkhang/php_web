<?php
include_once("include/functions.php");

// $flag=isShowAddToCart($sanpham);
// echo "add to cart:";
// var_dump($flag);
// echo "<br>";
?>
<!-- <iframe name="dummyframe" id="dummyframe" ></iframe> -->

<?php
    function processAddDeleteCart($flag, $isReceivePost, $isBasedOnRequestToQuery, $sanpham){
        if(isset($_SESSION["username"])){
            // echo getcwd(). "<br>";
            // echo $_SERVER['SCRIPT_FILENAME']. "<br>";
            // echo $_SERVER['DOCUMENT_ROOT']. "<br>";
            // echo $_SERVER['SCRIPT_NAME']. "<br>";
            
            // echo basename(__FILE__). "<br>";
            
            $urlParameters="";
        
            if($isBasedOnRequestToQuery){
                // echo "this line run";
                if($isReceivePost){
                    $unemptyPost=postFilter($_POST);
                    
                    $lastKey=array_key_last($unemptyPost);
                    foreach($unemptyPost as $key=>$value){
                        $urlParameters.=$key."=".urlencode($value);
                        if($key!=$lastKey){
                            $urlParameters.="&";
                        }
                    }
                }
                else{
                    // echo "this line run";
                    $unemptyGet=postFilter($_GET);
                    
                    $lastKey=array_key_last($unemptyGet);
                    foreach($unemptyGet as $key=>$value){
                        $urlParameters.=$key."=".urlencode($value);
                        if($key!=$lastKey){
                            $urlParameters.="&";
                        }
                    }
                }
                $urlParameters.="&submit=yes";
            
            }
            // var_dump($urlParameters);
            // echo "<br>";
            // var_dump(basename($_SERVER['SCRIPT_NAME']));
        
            // $urlParameters=urlencode($urlParameters);
        
            
            if($flag){ ?>
                <form action="delete-cart.php" method="POST" >
                    <input type="hidden" name="id" value=<?php echo $sanpham["MaSP"]?>>
                    <input type="submit" class="btn btn-danger" value="delete from cart">
                    <input type="text" name="urlParameters" value="<?php echo $urlParameters?>" style="display:none;">
                    <input type="text" name="file_position" value="<?php echo basename($_SERVER['SCRIPT_NAME']); ?>" style="display:none;">
                </form>
            <?php }else{ ?>
                <form action="add-cart.php" method = "POST" >
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="id" value=<?php echo $sanpham["MaSP"]?>>
                    <input type="submit" class="btn btn-primary" value="adđ to cart">
                    <input type="text" name="urlParameters" value="<?php echo $urlParameters?>" style="display:none;">
                    <input type="text" name="file_position" value="<?php echo basename($_SERVER['SCRIPT_NAME']); ?>" style="display:none;">
                </form>
            <?php }
            }
        }?>



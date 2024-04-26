<?php
    include_once("../include/connectDB.php");
    include_once("../include/functions.php");
?>

<?php 


    if(isset($_GET["luaChon"])){
        $conn=connectDB();
        $MaTK=$_GET["MaTK"];
        $originnalUrlParameters=$_GET["originnalUrlParameters"];

        if($_GET["luaChon"]=='k'){
            $conn->query("UPDATE taikhoan SET TinhTrang='k' WHERE MaTK=$MaTK;");
        }
        else{
            
            $conn->query("UPDATE taikhoan SET TinhTrang='m' WHERE MaTK=$MaTK;");
        }


        // $unemptyGet=postFilter($_GET);
        // $lastKey=array_key_last($unemptyGet);
        // $urlParameters="";
        // foreach($unemptyGet as $key=>$value){
            
        //     if($key=="luaChon"){
        //         continue;
        //     }
        //     $urlParameters.="$key=$value";

        // }

        header("location: searchResult.php?".$originnalUrlParameters."&submit=1");


    }


?>
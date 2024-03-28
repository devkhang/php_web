<?php
    $uploaddir="upload/";
    $uploadfile=$uploaddir . basename($_FILES["fileToUpload"]["name"]);
    
    echo $_FILES["fileToUpload"]["name"];
    echo "<br>";
    var_dump($_FILES["fileToUpload"]);
    echo "<br>";


    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $uploadfile)){
        echo "file upload succeed";
    }
    else{
        echo "fail to upload";
    }

    
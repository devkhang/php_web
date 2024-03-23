<?php
if(!isset($_REQUEST["name"])){
        echo '<form action="test1.php" method="POST">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
        </form>';
}
else{
        echo "welcome" . $_REQUEST["name"];
}

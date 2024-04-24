<?php
$GLOBALS["numberOfPage"]=0;


function processPagerNumbering($queryOfPage, $sanphamPerPage, $conn){
    $start=0;
    $sanphamPerPage=$sanphamPerPage;//how many row from databse that original page want to display at once, with no limit
    $queryOfPage=$queryOfPage;//query that original page uses to get data from database
    

    // echo "query:";
    // var_dump($queryOfPage); echo "<br>";

    $record=$conn->query($queryOfPage);
    $numberOfPage=ceil($record->num_rows/$sanphamPerPage);//to get the number of pages required for data from datbase
    $GLOBALS["numberOfPage"]=$numberOfPage;

    if(isset($_GET["page-nr"])){
        $start=($_GET["page-nr"]-1)*$sanphamPerPage;   
        // var_dump($start); echo"<br>";
    }

    $queryOfPage=str_replace(";", " ", $queryOfPage);
    $queryPageNumbering=$queryOfPage." limit $start, $sanphamPerPage;";// query to request rows from databse
    //based on sanphamPerPage
    // var_dump($queryPageNumbering); echo "<br>";

    $resultLietKeSP=mysqli_query($conn, $queryPageNumbering);
    return $resultLietKeSP;
}
?>

<?php
function printPageNumbering($stringOfParameters){?>

    <div id="page_numbering">
                
        <?php
            $numberOfPage=$GLOBALS["numberOfPage"];
            for($i=1; $i<=$numberOfPage; ++$i){ 
                ?>
                <a href=<?php echo "?page-nr=".$i."&$stringOfParameters" ?> data-no-bootstrap><?php echo $i ?></a>
                <?php 
            } 
        ?>
    </div>


<?php
}
?>


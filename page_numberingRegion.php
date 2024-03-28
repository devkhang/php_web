<div id="page_numbering">
    <?php 
        $numberOfSanPham=$resultLietKeSP->num_rows;
        $numberOfPageNumbering=ceil($numberOfSanPham/6);
        
    ?>
    <?php
        for($i=1; $i<=$numberOfPageNumbering; ++$i){ 
            ?>
            <a href=<?php echo "?page-nr=".$i?>><?php echo $i ?></a>
            <?php 
        } 
    ?>
      

</div>
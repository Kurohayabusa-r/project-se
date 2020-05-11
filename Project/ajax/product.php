<?php
include './pricing.php';

$product = $_GET["product"];

?>

<td scope="row" width="30%">
    <?php
    if( $product != "0" ){
        if( $price[$product] == 0){
            echo "Free";
        }else{
            echo $price[$product];
        }
    }
    ?>
</td>
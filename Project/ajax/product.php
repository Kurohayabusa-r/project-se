<?php
include './pricing.php';

$product = $_GET["product"];

?>

<td scope="row" width="30%">
    <?php if( $product != "0" ): ?>
    <?php echo $price[$product]; ?>
    <?php endif; ?>
</td>
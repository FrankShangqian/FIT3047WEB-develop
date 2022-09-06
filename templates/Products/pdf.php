<?php
session_start();
$db_host = "localhost";
$db_username = "team110";
$db_passwd = "team110";
$db_name = "team110";
$dsn = "mysql:host=$db_host;dbname=$db_name";
$dbh = new PDO($dsn, $db_username, $db_passwd);
?>
<!DOCTYPE html>
<html>
    <header>
        <ul>
            <a href="<?= $this->Url->build(['action' => 'index'])?>">Back</a>
        </ul>
    </header>
    <?php
    $reorder = "SELECT * FROM `products` WHERE `product_quantity` < `stock_alert`";
    ?>
    <div class="container-fluid">
        <h1>Reorder Stock List</h1>
        <form method="post">
            <div class="table-responsive">
                <?php $stocks = $dbh->prepare($reorder);
                if ($stocks->execute()&& $stocks->rowCount()>0): ?>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product Name</th>
                        <th>Available Quantity</th>
                        <th>Stock Reorder Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php while ($list = $stocks->fetchObject()):
                    ?>
                        <tr>
                            <td><?= $list->product_id?></td>
                            <td><?= $list->product_name?></td>
                            <td><?= $list->product_quantity?></td>
                            <td><?= $list->stock_alert?></td>
                        </tr>
                    <?php endwhile; ?>
                    </tbody>
                </table>
                <?php else: ?>
                    <p class="mb-4">There's no reorder required.</p>
                <?php endif; ?>


</html>

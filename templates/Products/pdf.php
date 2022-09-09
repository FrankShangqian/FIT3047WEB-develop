<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
echo $this->Html->css("/vendor/datatables/dataTables.bootstrap4.min.css");
echo $this->Html->script("/vendor/datatables/jquery.dataTables.min.js");
echo $this->Html->script("/vendor/datatables/dataTables.bootstrap4.min.js");
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <a href="<?= $this->Url->build(['action' => 'index'])?>">Back</a>
        </div>
    </aside>
<body>
    <h1>Reorder Stock List</h1>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('quantity') ?></th>
                <th><?= $this->Paginator->sort('stock_alert') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $this->Number->format($product->product_id) ?></td>
                    <td><?= h($product->product_name) ?></td>
                    <td><?= $this->Number->format($product->product_quantity) ?></td>
                    <td><?= $this->Number->format($product->stock_alert) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</div>

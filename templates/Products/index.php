<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
echo $this->Html->css("/vendor/datatables/dataTables.bootstrap4.min.css");
echo $this->Html->script("/vendor/datatables/jquery.dataTables.min.js");
echo $this->Html->script("/vendor/datatables/dataTables.bootstrap4.min.js");
?>

<div class="products index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= __('Products') ?></h1>
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="<?= $this->Url->build(['action' => 'add'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-1"><i
                class="fas fa-plus fa-sm text-white-50"></i> New Products</a>
            <a href="<?= $this->Url->build(['action' => 'pdf'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Reorder Report</a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('product_name') ?></th>
                    <th><?= $this->Paginator->sort('product_quantity') ?> (Available)</th>
                    <th><?= $this->Paginator->sort('product_price') ?></th>
                    <th><?= $this->Paginator->sort('stock_alert') ?></th>
                    <th><?= $this->Paginator->sort('category_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $this->Number->format($product->product_id) ?></td>
                    <td><?= h($product->product_name) ?></td>
                    <td><?= $this->Number->format($product->product_quantity) ?></td>
                    <td>$ <?= $this->Number->format($product->product_price) ?></td>
                    <td><?= $this->Number->format($product->stock_alert) ?></td>
                    <td><?= $product->has('category') ? $this->Html->link($product->category->category_name, ['controller' => 'Categories', 'action' => 'view', $product->category->category_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $product->product_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->product_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->product_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

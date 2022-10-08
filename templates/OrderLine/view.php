<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderLine $orderLine
 */
?>
<div class="orders index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?= $this->Url->build(['action' => 'index'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-1"><i
                class="fas fa-sm text-white-50"></i> Back</a></div>

<div class="row">
    <div class="column-responsive column-80">
        <div class="orderLine view content">
            <h3>Purchased ID <?= h($orderLine->orderline_id) ?></h3>
            <table>
                <th class="heading"><?= __('Actions') ?></th>
                <td><?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderLine->orderline_id], ['class' => 'side-nav-item']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderLine->orderline_id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderLine->orderline_id), 'class' => 'side-nav-item']) ?>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $orderLine->has('product') ? $this->Html->link($orderLine->product->product_name, ['controller' => 'Products', 'action' => 'view', $orderLine->product->product_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Order') ?></th>
                    <td><?= $orderLine->has('order') ? $this->Html->link($orderLine->order->order_id, ['controller' => 'Orders', 'action' => 'view', $orderLine->order->order_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Orderline Id') ?></th>
                    <td><?= $this->Number->format($orderLine->orderline_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Quantity') ?></th>
                    <td><?= $this->Number->format($orderLine->order_quantity) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>

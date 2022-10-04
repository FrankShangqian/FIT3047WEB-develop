<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderLine $orderLine
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Order Line'), ['action' => 'edit', $orderLine->orderline_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Order Line'), ['action' => 'delete', $orderLine->orderline_id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderLine->orderline_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Order Line'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Order Line'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderLine view content">
            <h3><?= h($orderLine->orderline_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Product') ?></th>
                    <td><?= $orderLine->has('product') ? $this->Html->link($orderLine->product->product_id, ['controller' => 'Products', 'action' => 'view', $orderLine->product->product_id]) : '' ?></td>
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

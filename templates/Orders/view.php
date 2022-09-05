<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 */
echo $this->Html->css("/vendor/datatables/dataTables.bootstrap4.min.css");
echo $this->Html->script("/vendor/datatables/jquery.dataTables.min.js");
echo $this->Html->script("/vendor/datatables/dataTables.bootstrap4.min.js");
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Order'), ['action' => 'edit', $order->order_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Order'), ['action' => 'delete', $order->order_id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->order_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Orders'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Order'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Send Invoice'),['action' => 'email'], ['class' => 'side-nav-item']);?>
        </div>


    </aside>
    <div class="column-responsive column-80">
        <div class="orders view content">
            <h3><?= h($order->order_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Customer') ?></th>
                    <td><?= $order->has('customer') ? $this->Html->link($order->customer->customer_id, ['controller' => 'Customers', 'action' => 'view', $order->customer->customer_id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Id') ?></th>
                    <td><?= $this->Number->format($order->order_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Total') ?></th>
                    <td><?= $this->Number->format($order->order_total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Item') ?></th>
                    <td><?= $this->Number->format($order->order_item) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Date') ?></th>
                    <td><?= h($order->order_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Order Status') ?></th>
                    <td><?= $order->order_status ? __('Processing') : __('Shipped'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>


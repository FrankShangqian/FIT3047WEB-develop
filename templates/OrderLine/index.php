<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderLine[]|\Cake\Collection\CollectionInterface $orderLine
 */
?>
<div class="orderLine index content">
    <?= $this->Html->link(__('New Order Line'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Order Line') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('orderline_id') ?></th>
                    <th><?= $this->Paginator->sort('product_id') ?></th>
                    <th><?= $this->Paginator->sort('order_quantity') ?></th>
                    <th><?= $this->Paginator->sort('order_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orderLine as $orderLine): ?>
                <tr>
                    <td><?= $this->Number->format($orderLine->orderline_id) ?></td>
                    <td><?= $orderLine->has('product') ? $this->Html->link($orderLine->product->product_name, ['controller' => 'Products', 'action' => 'view', $orderLine->product->product_id]) : '' ?></td>
                    <td><?= $this->Number->format($orderLine->order_quantity) ?></td>
                    <td><?= $orderLine->has('order') ? $this->Html->link($orderLine->order->order_id, ['controller' => 'Orders', 'action' => 'view', $orderLine->order->order_id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $orderLine->orderline_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderLine->orderline_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderLine->orderline_id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderLine->orderline_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
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

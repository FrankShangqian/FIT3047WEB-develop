<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customers
 */
?>
<div class="customers index content">
    <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Customers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('customer_id') ?></th>
                    <th><?= $this->Paginator->sort('customer_name') ?></th>
                    <th><?= $this->Paginator->sort('customer_address') ?></th>
                    <th><?= $this->Paginator->sort('customer_postcode') ?></th>
                    <th><?= $this->Paginator->sort('customer_city') ?></th>
                    <th><?= $this->Paginator->sort('customer_phonenumber') ?></th>
                    <th><?= $this->Paginator->sort('customer_email') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($customers as $customer): ?>
                <tr>
                    <td><?= $this->Number->format($customer->customer_id) ?></td>
                    <td><?= h($customer->customer_name) ?></td>
                    <td><?= h($customer->customer_address) ?></td>
                    <td><?= $this->Number->format($customer->customer_postcode) ?></td>
                    <td><?= h($customer->customer_city) ?></td>
                    <td><?= h($customer->customer_phonenumber) ?></td>
                    <td><?= h($customer->customer_email) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $customer->customer_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->customer_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->customer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->customer_id)]) ?>
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

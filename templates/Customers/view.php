<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->customer_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->customer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->customer_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Customers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Customer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="customers view content">
            <h3><?= h($customer->customer_id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Customer Name') ?></th>
                    <td><?= h($customer->customer_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Address') ?></th>
                    <td><?= h($customer->customer_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer City') ?></th>
                    <td><?= h($customer->customer_city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Phonenumber') ?></th>
                    <td><?= h($customer->customer_phonenumber) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Email') ?></th>
                    <td><?= h($customer->customer_email) ?></td>
                </tr>

                <tr>
                    <th><?= __('Customer Id') ?></th>
                    <td><?= $this->Number->format($customer->customer_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Customer Postcode') ?></th>
                    <td><?= $this->Number->format($customer->customer_postcode) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?= $this->Html->link(__('Send Invoice'), ['action' => 'email'], ['class' => 'side-nav-item'])?>


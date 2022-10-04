<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OrderLine $orderLine
 * @var string[]|\Cake\Collection\CollectionInterface $products
 * @var string[]|\Cake\Collection\CollectionInterface $orders
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orderLine->orderline_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orderLine->orderline_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Order Line'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="orderLine form content">
            <?= $this->Form->create($orderLine) ?>
            <fieldset>
                <legend><?= __('Edit Order Line') ?></legend>
                <?php
                    echo $this->Form->control('product_id', ['options' => $products]);
                    echo $this->Form->control('order_quantity');
                    echo $this->Form->control('order_id', ['options' => $orders]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

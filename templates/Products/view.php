<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var \Cake\Collection\CollectionInterface|string[] $customers
 * @var \Cake\Collection\CollectionInterface|string[] $products
 */
echo $this->Html->css("/vendor/datatables/dataTables.bootstrap4.min.css");
echo $this->Html->script("/vendor/datatables/jquery.dataTables.min.js");
echo $this->Html->script("/vendor/datatables/dataTables.bootstrap4.min.js");
$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control" {{attrs}}/>',
    'textarea' => '<textarea name="{{name}}" class="form-control" {{attrs}}>{{value}}</textarea>',
    'nestingLabel' => '{{hidden}}<label class="form-check-label" {{attrs}}>{{input}}{{text}}</label>',
    'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}} class="form-check-input""{{attrs}}>'
];
$this->Form->setTemplates($formTemplate);
?>
<div class="row">
    <div class="col-md-1 container-fluid">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->product_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->product_id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->product_id), 'class' => 'side-nav-item']) ?>
            <div>
                <?= $this->Html->link(__('List'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
            <?= $this->Html->link(__('New'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </div>
    <div class="container">
        <div class="col-md-9">
            <div class="products view content">
                <h3><?= h($product->product_id) ?></h3>
                <table>
                    <tr>
                        <th><?= __('Product Name') ?></th>
                        <td><?= h($product->product_name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Product Id') ?></th>
                        <td><?= $this->Number->format($product->product_id) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Product Quantity') ?></th>
                        <td><?= $this->Number->format($product->product_quantity) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Product Price') ?></th>
                        <td><?= $this->Number->format($product->product_price) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Stock Alert') ?></th>
                        <td><?= $this->Number->format($product->stock_alert) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
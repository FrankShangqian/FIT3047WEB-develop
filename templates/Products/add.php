<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var \Cake\Collection\CollectionInterface|string[] $customers
 * @var \Cake\Collection\CollectionInterface|string[] $products
echo $this->Html->css("/vendor/datatables/dataTables.bootstrap4.min.css");
echo $this->Html->script("/vendor/datatables/jquery.dataTables.min.js");
echo $this->Html->script("/vendor/datatables/dataTables.bootstrap4.min.js");
 */
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

<div class="title-block">
    <div class="title">
        Add New Product
    </div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="indicatorDefault">

            </div>
            <?= $this->Form->create($product) ?>
            <?php
            echo $this->Form->control('product_name');
            echo $this->Form->control('product_quantity');
            echo $this->Form->control('product_price');
            echo $this->Form->control('stock_alert');
            ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary'], ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
    </div>
</div>

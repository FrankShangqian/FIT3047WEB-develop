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
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="<?= $this->Url->build(['action' => 'index'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-1"><i
            class="fas fa-sm text-white-50"></i> Back</a>
</div>

<div class="row">
    <div class="col-md-1 container-fluid">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->product_id],
                ['confirm' => __('Are you sure you want to delete ?', $product->product_id), 'class' => 'side-nav-item']
            ) ?>
            <div>
            <?= $this->Html->link(__('List'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-md-9">
            <div class="products form content">
                <?= $this->Form->create($product) ?>
                <fieldset>
                    <legend><?= __('Edit Product') ?></legend>
                    <?php
                        echo $this->Form->control('product_name');
                        echo $this->Form->control('product_quantity');
                        echo $this->Form->control('product_price');
                        echo $this->Form->control('stock_alert');
                        echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

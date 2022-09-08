<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
$formTemplate = [
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label ">{{text}}</label>',
    'input' => '<input type="{{type}}" name="{{name}}" class="form-control " {{attrs}}/>',
    'textarea' => '<textarea name="{{name}}" class="form-control " {{attrs}}>{{value}}</textarea>',
    'nestingLabel' => '{{hidden}}<label class="form-check-label " {{attrs}}>{{input}}{{text}}</label>',
    'checkbox' => '<input type="checkbox" name="{{name}}" value="{{value}} class="form-check-input""{{attrs}}>'
];
$this->Form->setTemplates($formTemplate);
?>

<h1 class="h3 mb-2 text-gray-800">Add New Product</h1>
<div class="form-group">
    <?= $this->Form->create($product) ?>
        <?php
            echo $this->Form->control('product_name');
            echo $this->Form->control('product_quantity');
            echo $this->Form->control('product_price');
            echo $this->Form->control('stock_alert');
        ?>
</div>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>

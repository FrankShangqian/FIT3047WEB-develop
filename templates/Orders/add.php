<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var \Cake\Collection\CollectionInterface|string[] $customers
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

<h1 class="h3 mb-2 text-gray-800">Add New Order</h1>
<?= $this->Form->create($order) ?>
    <?php
        echo $this->Form->control('order_date');
        echo $this->Form->control('order_total');
        echo $this->Form->control('order_status');
        echo $this->Form->control('order_item');
        echo $this->Form->control('customer_id', ['options' => $customers]);
    ?>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>
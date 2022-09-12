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

<h1 class="h3 mb-2 text-gray-800">Edit Customer</h1>
<div class="row">
    <div class="form-group">
        <?= $this->Form->create($customer) ?>
        <fieldset>
            <?php
                echo $this->Form->control('customer_name');
                echo $this->Form->control('customer_address');
                echo $this->Form->control('customer_postcode');
                echo $this->Form->control('customer_city');
                echo $this->Form->control('customer_phonenumber');
                echo $this->Form->control('customer_email');
            ?>
        </fieldset>
    </div>
</div>
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary'], ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->end() ?>



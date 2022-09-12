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

<h1 class="h3 mb-2 text-gray-800">Add New Order</h1>
<div class="row">
    <div class="form-group py-sm-3 mb-2">
        <?= $this->Form->create($order) ?>
        <div class="col-sm-10">
            <?php echo $this->Form->control('order_date');?>
            <div class="mt-2">
                <?php echo $this->Form->control('order_total');?>
            </div>
            <div class="mt-2">
            <th>Order Status:</th>
            <?php   echo $this->Form->select('order_status', [
                    '1' => 'Processing',
                    '0' => 'Shipped'
            ]);?>
            </div>
            <div class="mt-2">
                <?php echo $this->Form->control('order_item');?>
            </div>
            <div class="mt-3">
                <?php echo $this->Form->control('customer_id', ['options' => $customers]);?>
            </div>
        </div>
    </div>
</div>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>

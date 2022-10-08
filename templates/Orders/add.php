<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $order
 * @var \App\Model\Entity\OrderLine $orderLine
 * @var \Cake\Collection\CollectionInterface|string[] $customers
 * @var \Cake\Collection\CollectionInterface|string[] $products
 * @var \Cake\Collection\CollectionInterface|string[] $orders


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
<div class="orders index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?= $this->Url->build(['action' => 'index'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-1"><i
                class="fas fa-sm text-white-50"></i> Back</a>
    </div>

</div>
<h1 class="h3 mb-2 text-gray-800">Add New Order</h1>
<div class="row">
    <div class="form-group py-sm-3 mb-2">
        <?= $this->Form->create($order) ?>
        <div class="col-sm-10">
            <?php
            echo $this->Form->control('order_date');?>
            <div class="mt-3">
            <?php echo $this->Form->control('customer_id',array('options'=>$customers, 'empty'=>'Select a customer'));?>
        </div>
            <div class="mt-3">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Select Item</th>
                        <th>Product Name</th>
                        <th>Unit Price</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $product):?>
                        <tr>
                            <td>
                                <?php echo $this->Form->checkbox('orderLine.product_id', ['type'=>'select','multiple'=>'true','options'=>$products]);?>
                            </td>
                            <td><?php echo $product['product_name'];?></td>
                            <td>$<?php echo $product['product_price'];?></td>
                            <td><?php echo $this->Form->control( 'orderLine.order_quantity',['type'=>'number'])?></td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
    <?= $this->Form->button(__('Place Order'), ['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>
<style>
    table {
        border-collapse: collapse;
        max-width: 90vw;
    }

    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

</style>

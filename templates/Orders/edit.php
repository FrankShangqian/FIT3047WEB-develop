<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Order $order
 * @var \Cake\Collection\CollectionInterface|string[] $customers
 * @var \Cake\Collection\CollectionInterface|string[] $OrderLine
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
            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->order_id], ['confirm' => __('Are you sure you want to delete ?', $order->order_id), 'class' => 'side-nav-item']) ?>
            <div>
            <?= $this->Html->link(__('List'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
            <?= $this->Html->link(__('New'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </div>
    <div class="container">
        <div class="col-md-9">
        <div class="orders form content">
            <?= $this->Form->create($order) ?>
            <fieldset>
                <legend><?= __('Edit Order') ?></legend>
                <h5>Order ID <?= h($order->order_id) ?></h5><br>
                <table class="table">
                    <h6>Order Date <?= h($order->order_date) ?></h6><br>
                    <h6>Order Total  $<?php echo $order->order_total ?></h6><br>
                    <?php
                    echo $this->Form->control('customer_id', array('options' => $customers));
                    ?><br>
                    <h6>Purchased Items: </h6>
                    <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Order Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($OrderLine as $orderLine):
                        if ($orderLine['order_id'] == $order->order_id):?>
                        <tr>
                            <td><?php echo $orderLine['product_id'];?></td>
                            <td><?php echo $orderLine['order_quantity'];?></td>
                        </tr>
                        <?php  endif;
                    endforeach;?>
                    </tbody>
                </table>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
</div>

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

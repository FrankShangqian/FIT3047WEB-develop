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
<div class="orders index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?= $this->Url->build(['action' => 'index'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-1"><i
                class="fas fa-sm text-white-50"></i> Back</a>
    </div>
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
                <?php echo $this->Form->control('order_date');?><br>
                <?php echo $this->Form->control('customer_id',array('options'=>$customers, 'empty'=>'Select a customer'));?>
                <table class="table"><br>
                    <header>Purchased Items: </header>
                    <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Order Quantity</th>
                        <th>Unit Price</th>
                        <th>Total Price</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $sum = 0 ?>
                    <?php foreach ($OrderLine as $orderLine):
                        foreach ($products as $product):
                            if ($orderLine['order_id'] == $order->order_id):
                                if($product['product_id']== $orderLine['product_id']):?>
                                    <tr>
                                        <td><?php echo $product['product_name'];?></td>
                                        <td><?php echo $orderLine['order_quantity'];?></td>
                                        <td>$ <?php echo $product['product_price'];?></td>
                                        <td>$ <?php $subtotal = [$product['product_price']*$orderLine['order_quantity']];  echo $product['product_price']*$orderLine['order_quantity'];?></td>
                                        <?php foreach ($subtotal as $total)
                                            $sum+=$total; ?>
                                        <td><?= $this->Html->link(__('Edit'), ['controller'=>'OrderLine','action' => 'edit', $orderLine->orderline_id])?></td>
                                    </tr>
                                <?php  endif;
                            endif;
                        endforeach;
                    endforeach;?>
                    </tbody>
                    <tr>
                        <th><?= __('Order Total') ?></th>
                        <td>$ <?php  echo $sum ?></td>
                    </tr>
                </table>
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
            width: 100%;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>



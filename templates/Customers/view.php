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
<div class="row">
    <div class="col-md-1 container-fluid">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->customer_id], ['class' => 'side-nav-item']) ?>
            <div>
            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->customer_id], ['confirm' => __('Are you sure you want to delete ?', $customer->customer_id), 'class' => 'side-nav-item']) ?>
            </div>
            <div>
            <?= $this->Html->link(__('List'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
            <?= $this->Html->link(__('New'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </div>
    <div class="container">
        <div class="col-md-9">
            <div class="customers view content">
                <h3><?= h($customer->customer_id) ?></h3>
                <table>
                    <tr>
                        <th><?= __('Name') ?></th>
                        <td><?= h($customer->customer_name) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Address') ?></th>
                        <td><?= h($customer->customer_address) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('City') ?></th>
                        <td><?= h($customer->customer_city) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Email') ?></th>
                        <td><?= h($customer->customer_email) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('ID') ?></th>
                        <td><?= $this->Number->format($customer->customer_id) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Postcode') ?></th>
                        <td><?= $this->Number->format($customer->customer_postcode) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Phone Number') ?></th>
                        <td><?= $this->Number->format($customer->customer_phonenumber) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->Html->link(__('Send Invoice'), ['action' => 'email'], ['class' => 'side-nav-item'])?>


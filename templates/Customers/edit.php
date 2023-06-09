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
            <div class="customers form content">
                <h1 class="h3 mb-2 text-gray-800">Edit Customer</h1>
                <?= $this->Form->create($customer) ?>
                <fieldset>
                    <?php
                        echo $this->Form->control('customer_name');
                        echo $this->Form->control('customer_address');
                        echo $this->Form->control('customer_postal');
                        echo $this->Form->control('customer_suburb');
                        echo $this->Form->control('customer_phonenumber');
                        echo $this->Form->control('customer_email');
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary'], ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>




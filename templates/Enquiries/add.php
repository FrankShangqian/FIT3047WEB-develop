<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enquiry $enquiry
 */
?>
<div class="row">
    <!--<aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Enquiries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>-->
    <div class="column-responsive">
        <div class="enquiries form content">
            <?= $this->Form->create($enquiry) ?>
            <fieldset>
                <legend><?= __('Sent New Enquiry') ?></legend>
                <?php
                    echo $this->Form->control('full_name',['label'=>'Your full name']);
                    echo $this->Form->control('email',['label'=>'Your email address']);
                    echo $this->Form->control('body',['label'=>'Any enquiries','rows'=>10,'cols'=>100]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Send enquiry')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

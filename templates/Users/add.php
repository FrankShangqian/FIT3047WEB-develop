<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('users_id');
                    echo $this->Form->control('users_email');
                    echo $this->Form->control('users_password');
                    echo $this->Form->control('users_name');
                    echo $this->Form->control('users_mobile_phone');
                    echo $this->Form->control('users_role');
                    echo $this->Form->control('users_created', ['empty' => true]);
                    echo $this->Form->control('users_modified', ['empty' => true]);
                ?>
            </fieldset>cc
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

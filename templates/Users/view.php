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
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Users Email') ?></th>
                    <td><?= h($user->users_email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Users Password') ?></th>
                    <td><?= h($user->users_password) ?></td>
                </tr>
                <tr>
                    <th><?= __('Users Name') ?></th>
                    <td><?= h($user->users_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Users Mobile Phone') ?></th>
                    <td><?= h($user->users_mobile_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Users Id') ?></th>
                    <td><?= $this->Number->format($user->users_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Users Role') ?></th>
                    <td><?= $this->Number->format($user->users_role) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

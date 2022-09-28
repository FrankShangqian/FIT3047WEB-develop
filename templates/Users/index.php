<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('users_id') ?></th>
                    <th><?= $this->Paginator->sort('users_email') ?></th>
                    <th><?= $this->Paginator->sort('users_password') ?></th>
                    <th><?= $this->Paginator->sort('users_name') ?></th>
                    <th><?= $this->Paginator->sort('users_mobile_phone') ?></th>
                    <th><?= $this->Paginator->sort('users_role') ?></th>
                    <th><?= $this->Paginator->sort('users_created') ?></th>
                    <th><?= $this->Paginator->sort('users_modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->users_id) ?></td>
                    <td><?= h($user->users_email) ?></td>
                    <td><?= h($user->users_password) ?></td>
                    <td><?= h($user->users_name) ?></td>
                    <td><?= h($user->users_mobile_phone) ?></td>
                    <td><?= $this->Number->format($user->users_role) ?></td>
                    <td><?= h($user->users_created) ?></td>
                    <td><?= h($user->users_modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>

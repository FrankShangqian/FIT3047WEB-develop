<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enquiry[]|\Cake\Collection\CollectionInterface $enquiries
 */
?>
<div class="enquiries index content">
    <?= $this->Html->link(__('New Enquiry'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Enquiries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('full_name','Name') ?></th>
                    <th><?= $this->Paginator->sort('email','Email Address') ?></th>
                    <th><?= $this->Paginator->sort('created','Added on') ?></th>
                    <th><?= $this->Paginator->sort('email_sent','Sent?') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($enquiries as $enquiry): ?>
                <tr>
                    <td><?= h($enquiry->full_name) ?></td>
                    <td><?= h($enquiry->email) ?></td>
                    <td><?= h($enquiry->created) ?></td>
                    <td><?= $enquiry->email_sent ? __('Yes') : __('No') ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $enquiry->id]) ?>
                        <?= $this->Html->link(__('sent email'), ['action' => 'mark', $enquiry->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enquiry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enquiry->id)]) ?>
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

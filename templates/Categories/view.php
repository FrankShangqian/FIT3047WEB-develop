<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<div class="orders index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="<?= $this->Url->build(['action' => 'index'])?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mr-1"><i
                class="fas fa-sm text-white-50"></i> Back</a>
    </div>

</div>
<div class="row">

    <div class="column-responsive column-80">
        <div class="categories view content">
            <h3><?= h($category->category_id) ?></h3>
            <table>
                <th class="heading"><?= __('Actions') ?></th>
                <td><?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->category_id], ['class' => 'side-nav-item']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->category_id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->category_id), 'class' => 'side-nav-item']) ?></td>

                <tr>
                    <th><?= __('Category Name') ?></th>
                    <td><?= h($category->category_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Category Id') ?></th>
                    <td><?= $this->Number->format($category->category_id) ?></td>
                </tr>
            </table>
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

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
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Categories'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="categories form content">
            <?= $this->Form->create($category) ?>
            <fieldset>
                <legend><?= __('Add Category') ?></legend>
                <?php
                    echo $this->Form->control('category_name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

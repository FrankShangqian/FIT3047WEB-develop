<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Settings $settings
 */
?>
<div class="row">
    <div class="col-md-6">
        <div class="card card-block">
            <div class="title-block">
                <h3 class="title">Site Settings</h3>
            </div>

            <?php if ($settings->is_demo_site): ?>
                <div class="message warning">
                    <strong>This site is in demo mode.</strong>
                    That means that anyone can log in as an administrator.
                    To change this, run <code>bin/cake toggle_demo_mode</code> from the command line.
                </div>
            <?php endif ?>

            <?php
            echo $this->Form->create($settings, ['id' => 'settings-form', 'type' => 'file']);
            echo $this->Form->control('title');
            echo $this->Form->control('subtitle');
            echo $this->Html->link('View current image', $settings->background_image_url);
            echo $this->Form->control('background_image', ['type' => 'file']);
            echo $this->Form->button(__('Save Settings'));
            echo $this->Form->end();
            ?>

        </div>
    </div>
</div>

<?php $this->start('script'); ?>
<script>
    (function() {
        $("#settings-form").validate({
            rules: {
                title: {
                    required: true
                },
            }
        });
    })();
</script>
<?php $this->end(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aromy-Login or Sign up</title>
    <link rel="stylesheet" href="log_styles.css">
    <?=$this->Html->css(['log_styles']) ?>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<main>
    <div class="row">
        <div class="colm-form">
            <div class="form-container">
                <?= $this->Form->create() ?>
                <fieldset>
                    <?= $this->Form->control('users_email', ['required' => true]) ?>
                    <?= $this->Form->control('users_password', ['required' => true]) ?>
                </fieldset>
                <?= $this->Form->submit(__('Login',['class' => 'btn-login'])); ?>
                <?= $this->Form->end() ?>
                <?= $this->Html->link("CREATE ACCOUNT", ['action' => 'add'],['class' => 'btn-new']) ?>
            </div>
        </div>
    </div>
</main>
</body>
</html>

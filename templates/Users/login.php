
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook-Login or Sign up</title>
    <link rel="stylesheet" href="log_styles.css">
    <?=$this->Html->css(['log_styles']) ?>
</head>
<body>
<main>
    <div class="row">
        <div class="colm-logo">
            <?= $this->Flash->render() ?>
            <img src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg" alt="Logo">
            <h2>Facebook helps you connect and share with the people in your life.</h2>
        </div>
        <div class="colm-form">
            <div class="form-container">
                <?= $this->Form->create() ?>
                <fieldset>
                    <?= $this->Form->control('email', ['required' => true]) ?>
                    <?= $this->Form->control('password', ['required' => true]) ?>
                </fieldset>
                <?= $this->Form->submit(__('Login',['class' => 'btn-login'])); ?>
                <?= $this->Form->end() ?>

                <?= $this->Html->link("Add User", ['action' => 'add'],['class' => 'btn-new']) ?>

            </div>
        </div>
    </div>
</main>
<footer>
    <div class="footer-contents">
        <ol>
            <li>English (UK)</li>
            <li><a href="#">മലയാളം</a></li>
            <li><a href="#">தமிழ்</a></li>
            <li><a href="#">తెలుగు</a></li>
            <li><a href="#">বাংলা</a></li>
            <li><a href="#">اردو</a></li>
            <li><a href="#">हिन्दी</a></li>
            <li><a href="#">ಕನ್ನಡ</a></li>
            <li><a href="#">Español</a></li>
            <li><a href="#">Português (Brasil)</a></li>
            <li><a href="#">Français (France)</a></li>
            <li><button>+</button></li>





        </ol>
        <small>Facebook © 2022</small>
    </div>
</footer>
</body>
</html>

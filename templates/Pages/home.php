<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

$checkConnection = function (string $name) {
    $error = null;
    $connected = false;
    try {
        $connection = ConnectionManager::get($name);
        $connected = $connection->connect();
    } catch (Exception $connectionError) {
        $error = $connectionError->getMessage();
        if (method_exists($connectionError, 'getAttributes')) {
            $attributes = $connectionError->getAttributes();
            if (isset($attributes['message'])) {
                $error .= '<br />' . $attributes['message'];
            }
        }
    }

    return compact('connected', 'error');
};

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php echo $this->Html->meta('favicon.ico','img/favicon.ico',array('type' => 'icon')); ?>

    <title>Aromy</title>

    <!-- Bootstrap core CSS -->
    <?= $this->Html->css('lib/bootstrap.min.css') ?>

    <!-- Custom fonts for this template -->
    <?= $this->Html->css('lib/font-awesome/css/fontawesome-all.min.css') ?>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <?= $this->Html->css('lib/template/public/clean-blog.min.css') ?>
    <?= $this->Html->css('home.css') ?>
</head>
<body>
<!-- Navigation-->

<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <ul class="navbar-nav ms-auto py-4 py-lg-0">
            <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="<?= $this->Url->build('/') ?>">Home</a></li>
        </ul>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto">
                <li id="search-wrapper" class="nav-item" style="display: none">
                    <?= $this->Form->create(null, ['url' => ['controller' => 'articles', 'action' => 'simpleSearch'], 'method' => 'GET']) ?>
                    <input class="search form-control" type="text" name="query" />
                    <?= $this->Form->end() ?>
                </li>
                <li class="nav-item">
                    <a id="search-show" class="nav-link" href="#">
                        <i class="fa fa-search"></i> Search
                    </a>
                </li>
                <li class="dropdown nav-item">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" >
                        Product
                    </a>
                    <div class = "dropdown-menu">
                        <?= $this->Html->link(
                            'Store Home',
                            ['controller' => 'products', 'action' => 'storeIndex'],
                            ['class' => 'dropdown-item'])
                        ?>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Category Pages</a>
                        <a class="dropdown-item" href="#">Coming Soon</a>
                        <div style="text-align: center"><img src="https://i.imgur.com/9SYjjER.png" >
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(
                        'Send Enquiry',
                        ['controller' => 'enquiries', 'action' => 'add'],
                        ['class' => 'nav-link'])
                    ?>
                </li>
                <?php if ($this->request->getSession()->read('Auth.User')): ?>
                    <?php if ($this->request->getSession()->read('Auth.User.role') > 2 ) { ?>
                    <li class="nav-item">
                        <?= $this->Html->link('Dashboard', ['controller' => 'admin', 'action' => 'index'], ['class' => 'nav-link']) ?>
                    </li>
                    <?php } else { ?>
                    <li class="nav-item">
                        <?= $this->Html->link('Dashboard', ['controller' => 'customer', 'action' => 'index'], ['class' => 'nav-link']) ?>
                </li>
                    <?php }?>
                    <li class="nav-item">
                        <?= $this->Html->link(
                            'My Profile',
                            ['controller' => 'users', 'action' => 'edit', $this->request->getSession()->read('Auth.User.id')],
                            ['class' => 'nav-link'])
                        ?>
                    </li>
                    <li class="nav-item">
                        <?= $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout'], ['class' => 'nav-link']) ?>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <?= $this->Html->link('Login/ Register', ['controller' => 'users', 'action' => 'login', '?' => ['redirect' => '/admin']], ['class' => 'nav-link']) ?>
                    </li>
                <?php endif ?>
            </ul>
        </div>
    </div>
</nav>
<!-- Page Header-->
<header class="masthead" style="background-image: url('webroot/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Aromy</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5" style="background-image: url('webroot/img/about-bg.jpg')">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">Man must explore, and this is exploration at its greatest</h2>
                    <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Start Bootstrap</a>
                    on September 24, 2022
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview-->
            <div class="post-preview">
                <a href="post.html"><h2 class="post-title">I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</h2></a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Start Bootstrap</a>
                    on September 18, 2022
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview-->
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">Science has not yet mastered prophecy</h2>
                    <h3 class="post-subtitle">We predict too much for the next year and yet far too little for the next ten.</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Start Bootstrap</a>
                    on August 24, 2022
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview-->
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">Failure is not an option</h2>
                    <h3 class="post-subtitle">Many say exploration is part of our destiny, but it’s actually our duty to future generations.</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Start Bootstrap</a>
                    on July 8, 2022
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
        </div>
    </div>
</div>
<!-- Footer-->
<footer class="border-top" style="background-image: url('webroot/img/about-bg.jpg')">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <ul class="list-inline text-center">
                    <li class="list-inline-item">
                        <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                        </a>
                    </li>
                </ul>
                <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2022</div>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>

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

<body class ="text center" = "">
    <main class="inner cover" role ="main";>
        <div">
            <style>
                h1{text-align: center;font-size: x-large;}
                h2{text-align: center; }

            </style>
            <h1>About Aromy</h1>
            <br>
                <p style="text-align: center; font-size: medium; margin:auto; width: 800px;">
                Aromy is a leading Australian supplier of aromy therapy based products and
                massage services for the aged care industry.

                Aromy supplies and focuses on its development of
                essential oil blends and related products. We supply clients across Australia, in the Aged Care sector,
                remedial health and at store fronts for personal use.
             </p>
        <br>
        <hr class="solid">
            <table border="0">
                <tbody>
                <tr>
                    <td>

                            <p style="text-align: center;">
                                <span style="color: #000000; font-size: large;">
                                    <strong>Why Aromy?</strong>
                                </span>
                            </p>

                        <p style="text-align: center; margin-left: 20px; margin-right: 20px ">
                            <span style="font-size: small;">
                                Aromy’s essential oil blends, creams and oils are used in the management of illness,
                        chronic conditions, pain and anxiety. Aromy has developed its products
                        and processes over years of experience, built up in the booming eastern suburbs of Melbourne.

                            </span>
                        </p>
                    </td>
                    <td>
                        <p>
                            <img style="display: block; margin-left: auto;
                                margin-right; auto;"
                                 src="https://cdn.shopify.com/s/files/1/0307/0317/products/Aromatherapy.jpg%3fv%3d1571309843"
                                 width="300px">
                        </p>

                    </td>

                    <td>

                        <p style="text-align: center;">
                            <span style="color: #000000; font-size: large;">
                                <strong>Our Values</strong>
                            </span>
                        </p>


                        <p style="text-align: center; margin-left: 20px; margin-right: 20px;">
                            <span style="font-size: small;">
                                Aromy is focused on delivering incredible
                                aromatherapy products We strive to capture the essence of nature and all the
                        scents that derive from the wonderful world we live in and
                        build a range of products that alleviate an individuals needs.

                            </span>
                        </p>
                    </td>
                </tr>
                </tbody>
            </table>


            <br>
            <!-- Team Member Section -->
                <hr class="solid">
                    <p style="text-align: center;font-size: x-large">
                        <strong>Our Team</strong>

                    </p>
                    <p style= "text-align: center; font-size: medium;">
                        <span style=" ">
                        Meet some of the wonderful Aromy team that strives to deliver
                        our incredible aromatherapy products.
                            </span>

                    </p>

            <br>






                    <!-- Team Member 1 -->
            <p>
                <img style="display: block; margin-inline: auto;
                                margin-bottom; auto;" title="Team Member 1"
                                src="https://dm0qx8t0i9gc9.cloudfront.net/thumbnails/video/4ZrVLdVKeijzurndz/people-emotion-and-facial-expression-concept-face-of-happy-smiling-middle-aged-woman-at-office_rleqp4y7g_thumbnail-1080_09.png"
                                alt="Team Member 1" width="200px">
            </p>

            <p style="text-align: center;">
                                <strong>Team Member 1</strong>

            </p>
            <p style="text-align: center;">
                <span style="font-size: medium;" </span>
                Role
            </p>
            <p style="text-align: center;">
                <span style="font-size: small;" </span>
                About
            </p>



                    <!-- Team Member 2 -->

            <p>
                <img style="display: block; margin-inline: auto; margin-right; auto;" title="Team Member 2"
                     src="https://cdn8.dissolve.com/p/D430_40_126/D430_40_126_1200.jpg"
                     alt="Team Member 2" width="200px">
            </p>

            <p style="text-align: center;">
                <strong>Team Member 2</strong>

            </p>
            </p>
            <p style="text-align: center;">
                <span style="font-size: medium;" </span>
                Role
            </p>
            <p style="text-align: center;">
                <span style="font-size: small;" </span>
                About
            </p>

                    <!-- Team Member 3 -->

            <p>
                <img style="display: block; margin-inline: auto;
                                margin-right; auto;" title="Team Member 3"
                                 src="https://mh-1-stockagency.panthermedia.net/media/previews/0015000000/15475000/~warehouse-worker-scanning-box-while-smiling_15475001_high.jpg"
                                 alt="Team Member 3" width="200px">
            </p>

            <p style="text-align: center;">
                <strong>Team Member 3</strong>

            </p>
            </p>
            <p style="text-align: center;">
                <span style="font-size: medium;" </span>
                Role
            </p>
            <p style="text-align: center;">
                <span style="font-size: small;" </span>
                About
            </p>
        </div>
        <br>
        <hr class="solid">

        <!-- get in contact - end of home page -->
        <div style = "position:relative; left:80px; top:20px;">
            <h style="font-size: xx-large; color: darkgreen">
                                <strong>Get in Contact</strong>
                            </span>
            </h>
            <p style="font-size: medium">
                Have a question?

                Want to learn more about our products?
                <br>

                Get in touch with our friendly staff using the details below! We will be in touch.
            </p>
            <!-- Contact us form -->
            <div>
                <!-- Icon for Email -->
                <div class="col-auto">
                    <i class="fas fa-envelope"></i>
                        <h>  enquiries@aromy.com.au </h>
                    </div>

                <!-- Phone Number -->
                <div class ="col-auto">
                    <i class ="fas fa-phone"></i>
                    <h> 1111 1111 </h>
                </div>

                <br>
                <!-- Social Media Links - icon error, remove for now
                <div class="col-auto">

                    <a class="fa fa-facebook" href="https://facebook.com" ></a>
                    <h> Aromy</h>
                </div>


                <a  href="https://instagram.com" class="btn btn-primary" >
                    <i class = "fa fa-twitter"></i>

                </a>
                    <h> Aromy</h>



                <div class="col-auto">
                    <a  href="https://twitter.com"
                        <i class = "fa fa-twitter" aria-hidden="true" ></i></a>
                            <h> Aromy</h>
                </div>
                -->

            <br>
            </div>
        </div>
    </main>
<!-- Footer-->
<footer class="border-top" style="background-image: url('webroot/img/about-bg.jpg')">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="small text-center text-muted fst-italic">Copyright &copy; Aromy Website 2022</div>
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

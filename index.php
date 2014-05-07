<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pilovika @yield('title')</title>

    <link rel="stylesheet" href="public/style.min.css"/>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"/>
</head>
<body>

<nav id="nav-main" class="clearfix">
    <div class="container">
        <div class="pull-left">
            <a id="brand" href="#">Brand</a>
        </div>
        <div class="pull-right">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">Pricing</a></li>
            </ul>
        </div>
    </div>
</nav>


<div id="masonry" class="">

    <?php foreach (range(1, 15) as $row): ?>
        <!--        <div class="item">-->
        <!--            <img src="public/files/p--><?php //echo $row ?><!--.jpg"-->
        <!--                 class="img-responsive"-->
        <!--                 alt="Images"/>-->
        <!--        </div>-->
    <?php endforeach ?>

    <?php
    $files = scandir('public/files');
    $i = 0;
    ?>

    <?php foreach ($files as $row): ?>
        <?php if (! preg_match('/^\.+/', $row)): ?>
            <div class="item ih-item square effect6 top_to_bottom" style="width: 19%; margin: 6px;">
                <a href="#">
                    <div class="img">
                        <img src="public/files/<?php echo $row ?>"
                             class="img-responsive"
                             alt="Images"/>
                    </div>
                    <div class="info">
                        <h3>Template <?php echo $row ?></h3>

                        <p>
                            <button class="btn btn-primary">
                                <i class="fa fa-search img-circle"></i> View
                            </button>
                        </p>
                    </div>
                </a>
            </div>
        <?php endif ?>
    <?php endforeach ?>


</div>

<div class="pricing">

    <div class="container-fluid">

        <div class="col-md-12">
            <h2>Pricing</h2>
        </div>

        <div class="col-md-3">

            <div class="plan">

                <h3>Starter</h3>

                <h4><sup>Rp</sup> 1.354.045</h4>

                <div class="features">
                    <ul>
                        <li>Feature 1</li>
                        <li>Feature 2</li>
                        <li>Feature 3</li>
                        <li>Feature 4</li>
                        <li>Feature 5</li>
                        <li>
                            <a href="#" class="btn btn-primary">Order</a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

        <div class="col-md-3">
            <div class="plan">

                <h3>Standard</h3>

                <h4><sup>Rp</sup> 1.354.045</h4>

                <div class="features">
                    <ul>
                        <li>Feature 1</li>
                        <li>Feature 2</li>
                        <li>Feature 3</li>
                        <li>Feature 4</li>
                        <li>Feature 5</li>
                        <li>
                            <a href="#" class="btn btn-primary">Order</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="plan">

                <h3>Professional</h3>

                <h4><sup>Rp</sup> 1.354.045</h4>

                <div class="features">
                    <ul>
                        <li>Feature 1</li>
                        <li>Feature 2</li>
                        <li>Feature 3</li>
                        <li>Feature 4</li>
                        <li>Feature 5</li>
                        <li>
                            <a href="#" class="btn btn-primary">Order</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="col-md-3">
            <div class="plan">

                <h3>Ultimate</h3>

                <h4><sup>Rp</sup> 1.354.045</h4>

                <div class="features">
                    <ul>
                        <li>Feature 1</li>
                        <li>Feature 2</li>
                        <li>Feature 3</li>
                        <li>Feature 4</li>
                        <li>Feature 5</li>
                        <li>
                            <a href="#" class="btn btn-primary">Order</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
    <!-- /.pricing -->

</div>

<footer>

    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <dl>
                        <dt>Boring Stuff</dt>
                        <dd><a href="#">About Us</a></dd>
                        <dd><a href="#">Contact</a></dd>
                        <dd><a href="#">Terms &amp; Condition</a></dd>
                        <dd><a href="#">Privacy Policy</a></dd>
                    </dl>
                </div>
                <div class="col-md-2 col-md-offset2">
                    <dl>
                        <dt>Social</dt>
                        <dd><a href="#">Facebook</a></dd>
                        <dd><a href="#">Twitter</a></dd>
                        <dd><a href="#">Pinterest</a></dd>
                        <dd><a href="#">Other</a></dd>
                    </dl>
                </div>
                <div class="col-md-7 col-md-offset-1">
                    <dl>
                        <dt>Latest Post</dt>
                        <dd><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></dd>
                        <dd><a href="#">Assumenda cupiditate debitis dolor dolorem earum excepturi explicabo</a></dd>
                        <dd><a href="#">laboriosam maiores nemo nobis praesentium provident rem sed soluta</a></dd>
                        <dd><a href="#">Praesentium provident rem sed soluta voluptatibus</a></dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    Copyright&copy; 2014
                </div>
                <div class="col-md-6 text-right">
                    <a href="#" class="btn"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="btn"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="btn"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>

</footer>

<script src="public/app.min.js"></script>
</body>
</html>

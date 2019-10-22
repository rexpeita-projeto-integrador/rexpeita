<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Rexpeita 2.0</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" />


</head>

<body>
    <nav class="navbar navbar-default">
        <nav class="navbar navbar-default">
            <div class="container">
                <ul>
                    <li class="head_home"><a href="<?php echo BASE_URL; ?>"><?php $this->lang->get('HOME'); ?></a></li>


                    <li class="head_help">(12) 99658-3156</li>

                    <li class="head_email"><a href="https://www.google.com/accounts/Login?hl=pt-br">rexpeita@gmail.com</a></li>


                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php $this->lang->get('LANGUAGE'); ?>
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo BASE_URL; ?>lang/set/en">English</a></li>
                                <li><a href="<?php echo BASE_URL; ?>lang/set/pt-br">Português</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo BASE_URL; ?>login"><?php $this->lang->get('LOGIN'); ?></a></li>
                    </ul>
                </ul>
            </div>
        </nav>
        <header class="x">

            <div class="container">
                <div class="row">
                    <div class="col-sm-2 logo">
                        <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_URL; ?>assets/images/logo.png" /></a>
                    </div>
                    <div class="col-sm-7">



                        <div class="search_area">
                            <form method="GET">
                                <input type="text" name="s" required placeholder="<?php $this->lang->get('SEARCHFORANITEM'); ?>" />
                                <select name="category">
                                    <option value=""><?php $this->lang->get('ALLCATEGORIES'); ?></option>
                                </select>
                                <input type="submit" value="" />
                            </form>
                        </div>
                    </div>
                    <div class="cartareab">
                        <div class="favo">

                        </div>
                    </div>

                    <div class="cartarea">
                        <div class="carticon">

                        </div>
                    </div>

                </div>
            </div>
        </header>
        <div class="categoryarea">
            <nav class="navbar">
                <div class="container">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php $this->lang->get('SELECTCATEGORY'); ?>
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Page 1-1</a></li>
                                <li><a href="#">Page 1-2</a></li>
                                <li><a href="#">Page 1-3</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Categoria X</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Banner -->
        <div class="container" alt="banner" title="Propaganda">
            <img class='banner' height="90px" width="100%" align='center'>
        </div>
        <!-- Banner End -->
        <br>
       <br>
       <br>
        <!-- Slideshow container -->
        <div class="slideshow-container container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides img-max">
                <div class="numbertext">1 / 3</div>
                <img src="assets/img_product/carousel/1600.jpg" style="width:500px;">
                <div class="text">Caption Text</div>
            </div>

            <div class="mySlides img-max">
                <div class="numbertext">2 / 3</div>
                <img src="assets/img_product/carousel/1950x.jpg" style="width:500px;">
                <div class="text">Caption Two</div>
            </div>

            <div class="mySlides img-max">
                <div class="numbertext">3 / 3</div>
                <img src="assets/img_product/carousel/200ge.jpg" style="width:500px;">
                <div class="text">Caption Three</div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <div class="container-fluid bg-dark" style="height: 30px;"></div>


        <section>
            <div class="container">
                <div class="row">
                    <div>
                        <aside>

                            <nav class="navbar navbar-default navbar-static-top">
                                <div class="col-sm-4">
                                    <h1><?php $this->lang->get('FEATUREDPRODUCTS'); ?></h1>
                                    <div class="widget_body">

                                    </div>
                                </div>
                            </nav>
                        </aside>
                    </div>

                    <div class="col-sm-9"><?php $this->loadViewInTemplate($viewName, $viewData); ?></div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default navbar-static-top">
                        <div class="col-sm-4">
                            <h1><?php $this->lang->get('ONSALEPRODUCTS'); ?></h1>
                        </div>
                    </nav>
                    <nav class="navbar navbar-default navbar-static-top">

                        <div class="col-sm-4">
                            <h1><?php $this->lang->get('TOPRATEDPRODUCTS'); ?></h1>
                            <div>

                            </div>
                        </div>
                    </nav>

                </div>
            </div>
            <div class="links">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="<?php echo BASE_URL; ?>"><img width="150" src="<?php echo BASE_URL; ?>assets/images/logo.png" /></a><br /><br />
                            <strong>Slogan da Loja Virtual</strong><br /><br />
                            Endereço da Loja Virtual
                        </div>
                        <div class="col-sm-8 linkgroups">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h3><?php $this->lang->get('CATEGORIES'); ?></h3>
                                    <ul>
                                        <li><a href="#">Categoria X</a></li>
                                        <li><a href="#">Categoria X</a></li>

                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">© <span>Rexpeita 2.0</span> - <?php $this->lang->get('ALLRIGHTRESERVED'); ?>.</div>
                        <div class="col-sm-6">
                            <div class="payments">
                                <img src="<?php echo BASE_URL; ?>assets/images/visa.png" />
                                <img src="<?php echo BASE_URL; ?>assets/images/debit-card.png" />
                                <img src="<?php echo BASE_URL; ?>assets/images/visa.png" />
                                <img src="<?php echo BASE_URL; ?>assets/images/visa.png" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </footer>
        <script type="text/javascript">
            var BASE_URL = '<?php echo BASE_URL; ?>';

        </script>

        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.4.1.min.js"></script>

        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>

        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1
                }
                slides[slideIndex - 1].style.display = "block";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }

        </script>
</body>

</html>

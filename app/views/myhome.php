<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="<?= BASEURL . 'style/'; ?>images/favicon.png">
    <title>Hygge</title>
    <!-- Bootstrap core CSS -->
    <link href="<?= BASEURL . 'style/'; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASEURL . 'style/'; ?>css/plugins.css" rel="stylesheet">
    <link href="<?= BASEURL . 'style/'; ?>style.css" rel="stylesheet">
    <link href="<?= BASEURL . 'style/'; ?>css/color/green.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href="<?= BASEURL . 'style/'; ?>type/icons.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>
    <div class="body-wrapper">
        <nav class="navbar navbar-default default">
            <div class="container">
                <div class="navbar-header">
                    <div class="basic-wrapper"> <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a>
                        <div class="navbar-brand"> <a href="<?= BASEURL; ?>"><img src="#" srcset="<?= BASEURL . 'style/'; ?>images/logo.png 1x, style/images/logo@2x.png 2x" class="logo-light" alt="" /><img src="#" srcset="<?= BASEURL . 'style/'; ?>images/logo-dark.png 1x, style/images/logo-dark@2x.png 2x" class="logo-dark" alt="" /></a>
                        </div>
                        <!-- /.navbar-brand -->
                    </div>
                    <!-- /.basic-wrapper -->
                </div>
                <!-- /.navbar-header -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="current dropdown"><a href="#" class="dropdown-toggle js-activated" data-toggle="dropdown">Menu <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= BASEURL; ?>">Home</a></li>
                                <li><a href="<?= BASEURL . 'account/'; ?>">Sign In</a></li>
                            </ul>
                        </li>

                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- /.navbar -->

        <div class="tp-fullscreen-container revolution">
            <div class="tp-fullscreen">
                <ul>
                    <li data-transition="fade"> <img src="<?= BASEURL . 'style/'; ?>images/art/slider-bg1.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
                        <div class="tp-caption large sfb text-center" data-x="center" data-y="263" data-speed="900" data-start="800" data-easing="Sine.easeOut">Quality. Flexibility. Customizability</div>
                        <div class="tp-caption medium sfb text-center" data-x="center" data-y="348" data-speed="900" data-start="1500" data-easing="Sine.easeOut">great solution for your business, portfolio, blog or any other purpose website</div>
                        <div class="tp-caption sfb" data-x="center" data-y="420" data-speed="900" data-start="2200" data-easing="Sine.easeOut" data-endspeed="100"><a href="#" class="btn btn-large btn-border">Purchase Now</a></div>
                    </li>
                    <li data-transition="fade"> <img src="<?= BASEURL . 'style/'; ?>images/art/slider-bg2.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
                        <div class="tp-caption large sfl text-center" data-x="center" data-y="263" data-speed="900" data-start="800" data-easing="Sine.easeOut">Build your professional website</div>
                        <div class="tp-caption medium sfr text-center" data-x="center" data-y="343" data-speed="900" data-start="1500" data-easing="Sine.easeOut">Create a unique website easily with the help of tons of features</div>
                        <div class="tp-caption sfb" data-x="center" data-y="420" data-speed="900" data-start="2200" data-easing="Sine.easeOut" data-endspeed="100"><a href="#" class="btn btn-large">View Features</a></div>
                    </li>
                    <li data-transition="fade"> <img src="<?= BASEURL . 'style/'; ?>images/art/slider-bg3.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
                        <div class="tp-caption large sfr" data-x="30" data-y="263" data-speed="900" data-start="800" data-easing="Sine.easeOut">Free updates & <br />
                            premium support</div>
                        <div class="tp-caption medium sfr" data-x="30" data-y="403" data-speed="900" data-start="1500" data-easing="Sine.easeOut">You will have access to all updates and free support</div>
                        <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut" data-endspeed="100"><a href="#" class="btn btn-large">Purchase Now</a></div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
            <!-- /.tp-fullscreen-container -->
        </div>
        <!-- /.revolution -->

        <div class="light-wrapper">
            <div class="container inner">
                <div class="row">
                    <div class="col-sm-6">
                        <h3>Core Features of Hygge</h3>
                        <p>Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna. </p>
                        <div class="divide10"></div>
                        <div class="feature">
                            <div class="icon"> <img src="<?= BASEURL . 'style/'; ?>images/icons/lulu-web-browser.png" alt="" /> </div>
                            <h4>Responsive Layout</h4>
                            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Fusce dapibus, tellus ac cursus commodo.</p>
                        </div>
                        <!--/.feature -->

                        <div class="feature">
                            <div class="icon"> <img src="<?= BASEURL . 'style/'; ?>images/icons/lulu-paint-palette.png" alt="" /> </div>
                            <h4>Color Palette</h4>
                            <p>Curabitur blandit tempus porttitor. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta. </p>
                        </div>
                        <!--/.feature -->

                        <div class="feature">
                            <div class="icon"> <img src="<?= BASEURL . 'style/'; ?>images/icons/lulu-coding.png" alt="" /> </div>
                            <h4>Clear Coding</h4>
                            <p>Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                        <!--/.feature -->
                    </div>
                    <!-- /column -->
                    <div class="col-sm-6">
                        <h3>Why Choose Hygge?</h3>
                        <p>Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean lacinia bibendum nulla.</p>
                        <div class="divide10"></div>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle active" data-parent="#accordion" href="#collapseOne"> 100% Responsive </a> </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente. </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle" data-parent="#accordion" href="#collapseTwo"> Clean & Professional Design </a> </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"> <a data-toggle="collapse" class="panel-toggle" data-parent="#accordion" href="#collapseThree"> Collapsible Group Item #3 </a> </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.light-wrapper -->

        <div class="inverse-wrapper inner bp0">
            <div class="container">
                <div class="thin text-center">
                    <div class="headline text-center">
                        <h2>Rich layouts & unlimited combinations</h2>
                        <p class="lead">Create a unique website easily with the help of tons of features</p>
                    </div>
                    <!-- /.headline -->
                    <div class="divide30"></div>
                    <figure>
                        <img src="<?= BASEURL . 'style/'; ?>images/art/hygge.png" alt="" />
                    </figure>
                </div>
                <!-- /.thin -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /.inverse-wrapper -->

        <div class="light-wrapper">
            <div class="container inner">
                <div class="section-title text-center">
                    <h3>Our Prices</h3>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="pricing panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Bronze</h3>
                                <div class="price"> <span class="price-currency">$</span> <span class="price-value">35</span> </div>
                            </div>
                            <!--/.panel-heading -->
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td><strong>1</strong> Project </td>
                                    </tr>
                                    <tr>
                                        <td><strong>100K</strong> API Access </td>
                                    </tr>
                                    <tr>
                                        <td><strong>100MB</strong> Storage </td>
                                    </tr>
                                    <tr>
                                        <td> Custom <strong>Cloud</strong> Services </td>
                                    </tr>
                                    <tr>
                                        <td> Weekly <strong>Reports</strong></td>
                                    </tr>
                                    <tr>
                                        <td> 7/24 <strong>Support</strong></td>
                                    </tr>
                                </table>
                            </div>
                            <!--/.panel-body -->
                            <div class="panel-footer"> <a href="#" class="btn" role="button">Sign Up</a></div>
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->
                    <div class="col-sm-6 col-md-3">
                        <div class="pricing panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Silver</h3>
                                <div class="price"> <span class="price-currency">$</span> <span class="price-value">45</span> </div>
                            </div>
                            <!--/.panel-heading -->
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td><strong>5</strong> Projects </td>
                                    </tr>
                                    <tr>
                                        <td><strong>100K</strong> API Access </td>
                                    </tr>
                                    <tr>
                                        <td><strong>200MB</strong> Storage </td>
                                    </tr>
                                    <tr>
                                        <td> Custom <strong>Cloud</strong> Services </td>
                                    </tr>
                                    <tr>
                                        <td> Weekly <strong>Reports</strong></td>
                                    </tr>
                                    <tr>
                                        <td> 7/24 <strong>Support</strong></td>
                                    </tr>
                                </table>
                            </div>
                            <!--/.panel-body -->
                            <div class="panel-footer"> <a href="#" class="btn" role="button">Sign Up</a></div>
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->
                    <div class="col-sm-6 col-md-3">
                        <div class="pricing panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Gold</h3>
                                <div class="price"> <span class="price-currency">$</span> <span class="price-value">55</span> </div>
                            </div>
                            <!--/.panel-heading -->
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td><strong>20</strong> Projects </td>
                                    </tr>
                                    <tr>
                                        <td><strong>300K</strong> API Access </td>
                                    </tr>
                                    <tr>
                                        <td><strong>500MB</strong> Storage </td>
                                    </tr>
                                    <tr>
                                        <td> Custom <strong>Cloud</strong> Services </td>
                                    </tr>
                                    <tr>
                                        <td> Weekly <strong>Reports</strong></td>
                                    </tr>
                                    <tr>
                                        <td> 7/24 <strong>Support</strong></td>
                                    </tr>
                                </table>
                            </div>
                            <!--/.panel-body -->
                            <div class="panel-footer"> <a href="#" class="btn" role="button">Sign Up</a></div>
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->
                    <div class="col-sm-6 col-md-3">
                        <div class="pricing panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Platinum</h3>
                                <div class="price"> <span class="price-currency">$</span> <span class="price-value">80</span> </div>
                            </div>
                            <!--/.panel-heading -->
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td><strong>50</strong> Projects </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Unlimited</strong> API Access </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Unlimited</strong> Storage </td>
                                    </tr>
                                    <tr>
                                        <td> Custom <strong>Cloud</strong> Services </td>
                                    </tr>
                                    <tr>
                                        <td> Weekly <strong>Reports</strong></td>
                                    </tr>
                                    <tr>
                                        <td> 7/24 <strong>Support</strong></td>
                                    </tr>
                                </table>
                            </div>
                            <!--/.panel-body -->
                            <div class="panel-footer"> <a href="#" class="btn" role="button">Sign Up</a></div>
                        </div>
                        <!--/.pricing -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->

            </div>
            <!--/.container -->
        </div>
        <!-- /.light-wrapper -->

        <div class="inverse-wrapper">
            <div class="container inner">
                <div class="row">
                    <div class="col-sm-4 col-md-3">
                        <div class="section-title">
                            <h3>Instagram Feed</h3>
                        </div>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo.</p>
                        <div class="divide10"></div>
                        <a href="https://instagram.com/urbanshots/" class="btn btn-icon"><i class="icon-s-instagram"></i> Instagram Page</a>
                    </div>
                    <!--/column -->
                    <div class="col-sm-8 col-md-9">
                        <div class="portfolio-grid col4">
                            <div class="items-wrapper">
                                <div id="instafeed" class="isotope items"></div>

                                <!--/.isotope -->
                            </div>
                            <!--/.items-wrapper -->
                        </div>
                        <!--/.portfolio-grid -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /.inverse-wrapper -->

        <div class="light-wrapper">
            <div class="container inner">
                <div class="row">
                    <div class="col-sm-4">
                        <h3>Contact Us</h3>
                        <p>Cras mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2499.4483800426133!2d3.2241689!3d51.2108153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c350cfcf934d7d%3A0xa4d8f385ffa7d70b!2sChoco-Story!5e0!3m2!1sen!2str!4v1534408440419" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <div class="divide20"></div>
                        <div class="contact-info">
                            <i class="icon-location"></i> Moonshine St. 14/05 Light City <br />
                            <i class="icon-phone"></i>+00 (123) 456 78 90 <br />
                            <i class="icon-mail"></i> <a href="first.last@email.com">first.last@email.com</a>
                        </div>
                        <!-- /.contact-info -->
                    </div>
                    <!-- /column -->

                    <div class="col-sm-4">
                        <h3>Why Choose Us?</h3>
                        <div class="divide5"></div>
                        <div class="tabs tabs-top left tab-container">
                            <ul class="etabs">
                                <li class="tab"><a href="#tab-one">This is</a></li>
                                <li class="tab"><a href="#tab-two">Tabbed</a></li>
                                <li class="tab"><a href="#tab-three">Content</a></li>
                            </ul>
                            <!-- /.etabs -->
                            <div class="panel-container">
                                <div class="tab-block" id="tab-one">
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    <p>Donec sed odio dui. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Maecenas faucibus mollis interdum.</p>
                                    <ul class="circled">
                                        <li>Mauris lacinia dui non metus dignissim.</li>
                                        <li>Etiam elit tellus, condimentum tempor lobortis.</li>
                                        <li>Aliquam pharetra vestibulum arcu, eget iaculis. </li>
                                    </ul>
                                </div>
                                <!-- /.tab-block -->
                                <div class="tab-block" id="tab-two">
                                    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta felis euismod semper. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas faucibus mollis interdum. </p>
                                </div>
                                <!-- /.tab-block -->
                                <div class="tab-block" id="tab-three">
                                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur. </p>
                                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec ullamcorper nulla non metus auctor fringilla. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. </p>
                                </div>
                                <!-- /.tab-block -->
                            </div>
                            <!-- /.panel-container -->
                        </div>
                        <!-- /.tabs -->
                    </div>
                    <!-- /column -->
                    <div class="col-sm-4">
                        <h3>Our Skills</h3>
                        <p>Duis non lectus sit amet est imperdiet cursus elementum vitae eros. Etiam adipiscingmorbi vitae magna tellus, ac mattis urna phasellus rhoncus.</p>
                        <div class="divide10"></div>
                        <ul class="progress-list">
                            <li>
                                <p>CSS/HTML <em>90%</em></p>
                                <div class="progress plain">
                                    <div class="bar" style="width: 90%;"></div>
                                </div>
                            </li>
                            <li>
                                <p>jQuery <em>80%</em></p>
                                <div class="progress plain">
                                    <div class="bar" style="width: 80%;"></div>
                                </div>
                            </li>
                            <li>
                                <p>Wordpress <em>85%</em></p>
                                <div class="progress plain">
                                    <div class="bar" style="width: 85%;"></div>
                                </div>
                            </li>
                            <li>
                                <p>SEO <em>50%</em></p>
                                <div class="progress plain">
                                    <div class="bar" style="width: 50%;"></div>
                                </div>
                            </li>
                        </ul>
                        <!-- /.progress-list -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.light-wrapper -->

        <footer class="inverse-wrapper">
            <div class="container inner">
                <div class="row">
                    <div class="col-sm-4">
                        <h3 class="section-title widget-title">Elsewhere</h3>
                        <p>Vestibulum id ligula porta felis euismod semper.</p>
                        <ul class="social">
                            <li><a href="#"><i class="icon-s-rss"></i></a></li>
                            <li><a href="#"><i class="icon-s-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-s-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-s-pinterest"></i></a></li>
                            <li><a href="#"><i class="icon-s-linkedin"></i></a></li>
                            <li><a href="#"><i class="icon-s-forrst"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h3 class="section-title widget-title">Subscribe</h3>
                        <p> Cum sociis natoque penatibus et magnis dis parturient.</p>
                        <div class="newsletter-wrapper">
                            <div id="mc_embed_signup2" class="newsletter-form">
                                <form action="http://elemisfreebies.us3.list-manage1.com/subscribe/post?u=ddc180777a163e0f9f66ee014&amp;id=056957de28" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL2" placeholder="Enter email" required="">
                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;">
                                        <input type="text" name="b_ddc180777a163e0f9f66ee014_056957de28" value="">
                                    </div>
                                    <div class="clear">
                                        <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn">
                                    </div>
                                </form>
                            </div>
                            <!-- /#mc_embed_signup2 -->
                        </div>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <div class="col-sm-4">
                        <h3 class="section-title widget-title">Tags</h3>
                        <div class="tagcloud"> <a href="#" style="font-size: 9pt;">blogroll</a> <a href="#" style="font-size: 19pt;">daily</a> <a href="#" style="font-size: 9pt;">dialog</a> <a href="#" style="font-size: 9pt;">gallery</a> <a href="#" style="font-size: 10pt;">journal</a> <a href="#" style="font-size: 9pt;">link</a> <a href="#" style="font-size: 12pt;">motion</a> <a href="#" style="font-size: 9pt;">music</a> <a href="#" style="font-size: 20pt;">photo</a> <a href="#" style="font-size: 13pt;">professional</a> <a href="#" style="font-size: 16pt;">quotation</a> <a href="#" style="font-size: 9pt;">show</a> <a href="#" style="font-size: 15pt;">sound</a> </div>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-sm-3">
                        <div class="widget"> <img src="<?= BASEURL . 'style/'; ?>images/logo.png" data-at2x="<?= BASEURL . 'style/'; ?>images/logo@2x.png" alt="" />
                            <div class="divide20"></div>
                            <p>Aenean lacinia bibendum nulla sed leo posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper metus auctor fringi. Nullam quis risus. </p>
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->

                    <div class="col-sm-3">
                        <div class="widget">
                            <h3 class="section-title widget-title">Popular Posts</h3>
                            <ul class="post-list">
                                <li>
                                    <h6><a href="blog-post.html">Vivamus sagittis lacus vel augue metus</a></h6>
                                    <span class="meta date">3th Oct 2012</span>
                                </li>
                                <li>
                                    <h6><a href="blog-post.html">Scelerisque nisl consectetur et</a></h6>
                                    <span class="meta date">28th Sep 2012</span>
                                </li>
                            </ul>
                            <!-- /.post-list -->
                        </div>
                        <!-- /.widget -->
                    </div>
                    <!-- /column -->

                    <div class="col-sm-3">
                        <div class="widget">
                            <h3 class="section-title widget-title">Get In Touch</h3>
                            <p>Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum.</p>
                            <div class="contact-info"> <i class="icon-location"></i> Moonshine St. 14/05 Light City <br />
                                <i class="icon-phone"></i>+00 (123) 456 78 90 <br />
                                <i class="icon-mail"></i> <a href="first.last@email.com">first.last@email.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- /column -->

                    <div class="col-sm-3">
                        <div class="widget">
                            <h4 class="widget-title">Categories</h4>
                            <ul class="circled">
                                <li><a href="#">Web Design (21)</a></li>
                                <li><a href="#">Photography (19)</a></li>
                                <li><a href="#">Graphic Design (16)</a></li>
                                <li><a href="#">Manipulation (15)</a></li>
                                <li><a href="#">Motion Graphics (12)</a></li>
                            </ul>
                        </div>
                        <!-- /.widget -->

                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->

                <hr />
                <p class="copyright pull-left">© 2015 Hygge. All rights reserved. Theme by <a href="http://elemisfreebies.com">elemis</a>.</p>
                <ul class="footer-menu pull-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
            <!-- .container -->

        </footer>
        <!-- /footer -->
        <div id="share-bar"></div>
    </div>
    <!--/.body-wrapper -->
    <script src="<?= BASEURL . 'style/'; ?>js/jquery.min.js"></script>
    <script src="<?= BASEURL . 'style/'; ?>js/bootstrap.min.js"></script>
    <script src="<?= BASEURL . 'style/'; ?>js/plugins.js"></script>
    <script src="<?= BASEURL . 'style/'; ?>js/jquery.themepunch.tools.min.js"></script>
    <script src="<?= BASEURL . 'style/'; ?>js/scripts.js"></script>
</body>

</html>
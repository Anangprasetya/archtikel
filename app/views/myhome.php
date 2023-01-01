<div class="carousel slide" data-bs-ride="false" id="carouselControls">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo BASEURL .  '/img/carousels1.jpg' ?>" alt="Blogger 1" class="d-block w-100">
                    <div class="carousel-caption" >
                        <h4>Best for Writting</h4>
                        <p>The Best Writing Website Aroud the World</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo BASEURL .  '/img/carousels2.jpg' ?>" alt="Blogger 2" class="d-block w-100">
                    <div class="carousel-caption">
                        <h4>Over 2 People</h4>
                        <p>Has been using over 2 people around the world</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo BASEURL .  '/img/carousels3.jpg' ?>" alt="Blogger 3" class="d-block w-100">
                    <div class="carousel-caption">
                        <h4>Free to Use</h4>
                        <p>100% Using</p>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselControls" data-bs-slide="next">
                <span class="sr-only">Next</span>    
                <span class="carousel-control-next-icon" aria-hidden="true"></span> 
            </button>

        
        </div>

        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5 text-light" id="loginModalLabel">Login</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-md">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <?php Message::getTemplateMessage(); ?>
                                <form action="<?= BASEURL . 'account/proses_login' ?>" method="POST">
                                    <div class="w-auto">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
                                    </div>
                                    <div class="w-auto">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="signModal" tabindex="-1" aria-labelledby="signModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5 text-light" id="signModalLabel">Sign Up</h1>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-md">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                            <?php Message::getTemplateMessage(); ?>
                            <form action="<?= BASEURL . 'account/proses_register' ?>" method="POST">
                              <div class="mb-2">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" id="nama">
                              </div>
                              <div class="mb-2">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-2">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-2">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
                </form>
                </div>
            </div>
        </div>
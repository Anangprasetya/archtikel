<section class="blog_area single-post-area section_padding">
    <div class="container">
        <div class="row">
            <div class=" col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">

                    </div>
                    <div class="blog_details">
                        <h2><?= $data["artikel"]["judul_posting"]; ?></h2>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="far fa-clock"></i><?= $data["artikel"]["tanggalPublish_posting"]; ?></a></li>

                            <li><a href="#"><i class="far fa-user"></i><span class="label-tags" style="background:#f71800"><?= $data["user"]["nama"]; ?></span></a></li>
                        </ul>
                        <p class="excert">
                            Konten Artikel
                        </p>
                        <div class="quote-wrapper">

                            <div class="quotes">
                                <?= $data["artikel"]["isi_posting"]; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-author">
                    <div class="media align-items-center">
                        <img class="img-fluid" src="<?= BASEURL . 'assets/img/blog/author.png'; ?>" alt="">
                        <div class="media-body">
                            <a href="#">
                                <h4><?= $data["user"]["nama"]; ?></h4>
                            </a>
                            <p>Haii, saya lulusan Teknik Informatika, dan saya seoarang Web Back-End Developer dan saya sering menggunakan Laravel
                                sebagai Framework favorit, saya juga senang mempelajari hal baru menyangkut teknologi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Labels</h4>
                        <ul class="list">
                            <?php foreach ($data["kategori"] as $x) {
                            ?>
                                <li>
                                    <a href="<?= BASEURL . $x["slug"]; ?>"><?= $x["nama"]; ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                    </aside>

                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <div class="media post_item">
                            <div class="img recent">
                                <img src="<?= BASEURL . 'assets/img/picture.png'; ?>" class="img-fluid" alt="#">

                                <div class=" media-body">
                                    <a href="single-blog.html">

                                        <h3>Judul Artikel</h3>
                                    </a>

                                    <p> Tanggal Buat</p>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class=" single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="/kategori/laravel" class="d-flex">
                                    <p>Laravel</p>
                                    <p>(4) </p>
                                </a>
                            </li>
                            <li>
                                <a href="/kategori/livewire" class="d-flex">
                                    <p>Livewire</p>
                                    <p> (2) </p>
                                </a>
                            </li>

                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
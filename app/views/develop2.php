<div>
    <section class="cat_product_area section_padding border_top">
        <div class="product_top_bar d-flex justify-content-between align-items-center">
            <div class="single_product_menu product_bar_item">
            </div>
            <div class="product_top_bar_iner product_bar_item d-flex">
                <div class="product_bar_single ">
                    <input wire:model.defer="search" type="search" style="border:none;" placeholder="Search Here">
                    <button type="submit" wire:click="searchItem " value="submit" class="genric-btn primary">
                        Search
                    </button>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <?php
                        foreach ($data["artikel"] as $x) :
                        ?>

                            <div class="col-lg-4 col-sm-6">
                                <div class="single_category_product">

                                    <div class="single_category_img">
                                        <div class="card-header-thumbnail">
                                            <div class="thumbnail">
                                                <a href="">
                                                    <img src="<?= BASEURL . 'assets/img/picture.png'; ?>" alt="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="category_product_text">
                                            <a href="{{ route('blog-artikel-beranda', $data->id) }}">
                                                <p>
                                                    <font face="Helvetica"><?= $x["judul_posting"]; ?></font>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="category_product_text">
                                            <div class="description">
                                                <?= $x["tanggalPublish_posting"]; ?>
                                            </div>
                                            <div class="description">
                                                <a href="<?= BASEURL . 'publish/' . $x["slug_posting"]; ?>">Baca selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php  $this->load->view('template/header_user2');?>
<section class="mbr-section info2 cid-s1TgFqeelq" id="info2-q">
    <div class="container">
        <div class="row main justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">
            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                Galeri Video</h2>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">
                </h3>
            </div>
        </div>
    </div>
</section>
<section class="mbr-gallery gallery5 cid-s1TiCQtiVC" id="gallery5-14">
    <div class="container">
        <h3 class="mbr-section-title align-center mbr-fonts-style display-2">
            Gallery
        </h3>
        <div class="row mbr-gallery" data-toggle="modal" data-target="#s1RbqExIzb">
            <?php
            $no = 1;
            foreach ($datamu as $u) { 
                ?>
                <div class="col-sm-6 col-md-4 col-lg-3 item gallery-image">
                    <div class="item-wrapper">
                        <iframe src="<?php echo $u->filename; ?>" class="w-100" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php  $this->load->view('template/footer_user');?>
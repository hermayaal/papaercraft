<?php  $this->load->view('template/header_user2');?>
<section class="mbr-section info2 cid-s1TiUP6nyy" id="info2-17">
    <div class="container">
        <div class="row main justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">
            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                Galeri Foto</h2>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">  
                </h3>
            </div>
        </div>
    </div>
</section>
<section class="mbr-section article content1 cid-s1TiUQ3621" id="content1-18">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 mbr-fonts-style display-7 col-md-8"><p>
                <strong> Dibawah ini adalah foto-foto yang akan menarik perhatian si kecil, mengapa begitu?</strong> <br>Karena banyak foto menarik didalamnya, yang akan semakin meningkatkan kreativitas dan semangat si kecil.</p></div>
            </div>
        </div>
    </section>
    <section class="mbr-gallery mbr-slider-carousel cid-s1Tj0IVlgO" id="gallery4-1b">
        <div class="container">
            <div>
                <!-- Gallery -->
                <div class="gallery-row">
                    <div class="mbr-gallery-layout-default">
                        <div>
                            <div class="row-first row justify-content-center m-0">
                                <?php
                                foreach ($datamu as $u) { 
                                  ?>
                                  <div class="mbr-gallery-item col-lg-4 col-md-4 col-sm-12 p-2" data-video-url="false">
                                    <div href="#lb-gallery4-10" data-slide-to="0" data-toggle="modal">
                                        <img src="<?php echo base_url('upload/foto/'.$u->filename) ?>" alt="" title="">
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php  $this->load->view('template/footer_user');?>
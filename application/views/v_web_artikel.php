<?php  $this->load->view('template/header_user2');?>
<section class="mbr-section info2 cid-s1TjqF1vi9" id="info2-1d">
    <div class="container">
        <div class="row main justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">
            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                Artikel</h2>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">
                </h3>
            </div>
        </div>
    </div>
</section>
<section class="services5 cid-s1TjuPXnev" id="services5-1h">
    <!--Overlay-->
    <!--Container-->
    <div class="container">
        <div class="row">
            <!--Titles-->
            <div class="title pb-5 col-12">
                <h2 class="align-left mbr-fonts-style m-0 display-1">
                List Artikel</h2>
            </div>
            <?php
            foreach ($data->result() as $u) { 
               ?>
               <!--Card-1-->
               <div class="card px-3 col-12">
                <div class="card-wrapper media-container-row media-container-row">
                    <div class="card-box">
                        <div class="top-line pb-3">
                            <h4 class="card-title mbr-fonts-style display-5">
                                <?php echo $u->judul; ?></h4>
                                <p class="mbr-text cost mbr-fonts-style m-0 display-5">
                                    <a href="<?php echo base_url("user/data_artikel2/".$u->no_id); ?>">
                                        Selengkapnya
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col">
                <!--Tampilkan pagination-->
                <?php echo $pagination; ?>
            </div>
        </div>
    </div>
</section>
<?php  $this->load->view('template/footer_user');?>
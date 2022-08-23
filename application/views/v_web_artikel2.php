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
<?php
foreach ($artikel as $u) { 
    ?>
    <section class="mbr-section content4 cid-s1TjuPXnev" id="content4-1n">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center pb-3 mbr-fonts-style display-2">
                        <?php echo $u->judul; ?>
                    </h2>
                </div>
            </div>
        </div>
    </section>
    <section class="mbr-section article content1 cid-s1TjuPXnev" id="content1-1o">
        <div class="container">
            <div class="media-container-row">
                <div class="mbr-text col-12 mbr-fonts-style display-7 col-md-10">
                    <?php echo $u->isi_artikel; ?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<?php  $this->load->view('template/footer_user');?>
<?php  $this->load->view('template/header_user2');?>
<section class="mbr-section info2 cid-s1Te9gedIG" id="info2-b">
    <div class="container">
        <div class="row main justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">
            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                    Pola Papercraft
                </h2>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">
                    Pola yang telah didesain sedemikian rupa agar menjadi bentuk - bentuk yang kita inginkan.
                </h3>
            </div>
        </div>
    </div>
</section>
<section class="features11 cid-s1TejQlqWq" id="features11-d">
    <?php
    foreach ($paper as $u) { 
      ?>
      <div class="container">   
        <div class="col-md-12">
            <div class="media-container-row">
                <div class="mbr-figure m-auto" style="width: 50%;">
                    <?php echo $u->gambar; ?>
                </div>
                <div class=" align-left aside-content">
                    <h2 class="mbr-title pt-2 mbr-fonts-style display-2">
                        <?php echo $u->judul; ?>
                    </h2>
                    <div class="mbr-section-text">
                        <p class="mbr-text mb-5 pt-3 mbr-light mbr-fonts-style display-5">
                            Tingkat : <?php echo $u->tingkat; ?> <br>
                            Kategori : <?php echo $u->kategori; ?>
                        </p>
                        <div class="mbr-section-btn text-center">
                            <a href="<?php echo base_url("file/download/".$u->id_paper); ?>" class="btn btn-success display-4">
                                Download
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    <?php } ?>     
</section>
<?php  $this->load->view('template/footer_user');?>
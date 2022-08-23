<?php  $this->load->view('template/header_user2');?>
<section class="mbr-section info2 cid-s1Tgl45HEK" id="info2-h">
    <div class="container">
        <div class="row main justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">
            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                Pola Papercraft</h2>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">
                    Pola yang telah didesain sedemikian rupa agar menjadi bentuk - bentuk yang kita inginkan.
                </h3>
            </div>
        </div>
    </div>
</section>
<section class="features3 cid-s1TguinTE3" id="features3-m">
    <div class="container">
        <div class="media-container-row">
           <?php
           foreach ($paper as $u) { 
              ?>
              <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php echo base_url(); ?>assets/images/art.png" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            <input type="hidden" name="id_paper" value="<?php echo $u->id_paper; ?>">
                            <td><?php echo $u->judul; ?></td></h4>
                        </div>
                        <div class="mbr-section-btn text-center">
                            <a href="<?php echo base_url("user/data_papercraft_indie/".$u->id_paper); ?>" class="btn btn-primary display-4">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php  $this->load->view('template/footer_user');?>
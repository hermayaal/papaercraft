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
<section class="mbr-section article content1 cid-s1Tgl55X9P" id="content1-i">
    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text col-12 mbr-fonts-style display-7 col-md-8"><p>
                <strong> Papercraft</strong> suatu seni yang membuat sebuah objek dari bahan dasar kertas, dengan cara menggunting, melipat dan menempel suatu pola yang telah didesain sedemikian rupa. <em>Pola Papercraft</em> itu sendiri bisa berupa objek yang kalian inginkan, semisal tumbuhan,hewan, dan kartun yang kalian sukai. Dibawah ini terdapat beberapa Pola dari Papercraft : </p>
            </div>
        </div>
    </div>
</section>
<section class="features3 cid-s1TguinTE3" id="features3-m">
    <div class="container">
        <div class="media-container-row">
            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="<?php echo base_url(); ?>assets/images/art.png" alt="Mobirise">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7">
                            <td>Semua</td></h4>
                        </div>
                        <div class="mbr-section-btn text-center">
                            <a href="<?php echo base_url("user/data_allpapercraft"); ?>" class="btn btn-primary display-4">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                $no = 1;
                foreach ($paper as $u) { 
                    ?>
                    <div class="card p-3 col-12 col-md-6 col-lg-3">
                        <div class="card-wrapper">
                            <div class="card-img">
                                <img src="<?php echo base_url(); ?>assets/images/art.png" alt="Mobirise">
                            </div>
                            <div class="card-box">
                                <h4 class="card-title mbr-fonts-style display-7">
                                    <td><?php echo $u['kategori']; ?></td>
                                </h4>
                            </div>
                            <div class="mbr-section-btn text-center">
                                <a href="<?php echo base_url("user/data_papercraft/".$u['kategori']); ?>" class="btn btn-primary display-4">
                                    Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<?php  $this->load->view('template/footer_user');?>
 <!-- Start footer section -->
 <?php $data = $this->setting->order_by("id", "DESC")->get(); ?>
 <footer class="footer-section section-gap-half">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-5 footer-left">
                 <a href="index.html" aria-label="logo shoes and care">
                     <img src="<?= asset("img/logo.png") ?>" width="150px" height="150px" alt="logo bottom shoes and care" />
                 </a>
                 <div itemscope itemtype="http://schema.org/address">
                     <p class="mt-3">Kami merupakan jasa perawatan premium sepatu pertama di Indonesia berbasis media
                         sosial yang sampai saat sudah berpengalaman lebih dari 5 Tahun.</p>
                     <?php if ($data["nowa"]) : ?>
                         <span class="" itemprop="name">
                             <p class="title-footer">Telephone:</p> <?= $data["nowa"] ?>
                         </span> <br><br>
                     <?php endif ?>
                     <br><br>
                 </div>
             </div>
             <div class="col-lg-7">

                 <div class="footer-menu">
                     <div>
                         <span class="" itemprop="address">
                             <p class="title-footer">Alamat Kantor:</p> Jl. Letkol Isdiman No.17A, Purbalingga Kidul, Kec. Purbalingga, Kabupaten Purbalingga, Jawa Tengah 53313
                         </span><br><br>
                     </div>
                 </div>
             </div>
             <div class="col-md-12">
                 <div class="flex copyright-text">
                     <div>
                         <p class="">&copy; 2020-2022 Shoes and Care. All Right Reserved.</p>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>


 <?php if (!empty($data["nowa"]) && $data["enable_konsultasi"] === "YA") : ?>
     <div class="whatsapp-bottom">
         <a class="btn--wa" href="https://api.whatsapp.com/send?phone=<?= $data["nowa"] ?>" target="_blank">
             <i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp Care
         </a>
     </div>
 <?php endif ?>
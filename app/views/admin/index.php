<div id="header">
          <div class="header-container">
              <div class="header-text">
                  <h1>Memberikan kemudahan dalam setiap proses pengiriman</h1>
                  <span class="square"></span>
                  <p>menyediakan beberapa layanan untuk mendukung bisnis kamu. Dapatkan layanan tepat yang sesuai dengan kebutuhan kamu</p>
                  <button class="common-btn">Read More</button>
              </div>

              <div class="header-img">
                  <img src="<?= BASEURL;?>/images/background.png">
              </div>
          </div>
        </div>
       
<!--about -->

<div id="about">
    <div class="about-left-col">
        <img src="<?= BASEURL;?>/images/about.png">
    </div>
    <div class="about-right-col">
        <div class="about-text">
            <h1>About Us</h1>
            <span class="square"></span>
            <P>PT Gardu Express adalah perusahaan ekspedisi yang berdiri sejak tahun 2014, 
                dimana pengiriman 15Jam Sampai untuk wilayah Jabodetabek dan Bandung serta 
                pengiriman 1hari Sampai untuk kota besar seluruh wilayah Indonesia merupakan focus utama dalam pelayanannnya.</P><br>

            <h2>“Quality in a service or product is not what you put into it. It is what the client or customer gets out of it.”</h2>  
            <h3>---Peter Drucker</h3>  
        </div>
    </div>    
</div>

<!--features-->

<div id="features">
    <div class="feature-row">
        <div class="feature-col">
            <img src="<?= BASEURL;?>/images/pic-1.png">
            <h4>Akses dimanapun</h4>
            <p>Beralih ke komputer, tablet, atau perangkat seluler Anda</p>
        </div>
        <div class="feature-col">
            <img src="<?= BASEURL;?>/images/pic-2.png">
            <h4>Kenapa Gardu Express?</h4>
            <p>Gardu Express berkomitmen menjadi partner terpercaya di seluruh Indonesia.</p>
        </div>
        <div class="feature-col">
            <img src="<?= BASEURL;?>/images/pic-3.png">
            <h4>24 Jam Layanan keluhan Pelanggan</h4>
            <p>Gardu Express siap memberikan layanan khusus pelanggan yang mengalami keluhan</p>
        </div>
    </div>
    <div class="feature-btn">
        <button class="common-btn">Lihat Detail</button>
    </div>
</div>

<!--courses-->

<div id="courses">
    <div class="container course-row">
        <div class="course-left-col">
            <div class="course-text">
                <h1>Service</h1>
                <span class="square"></span>
                <p>Jadikan kiriman kamu lebih efektif dengan SiCepat</p>
                <button class="common-btn">Gabung Sekarang</button>
            </div>
        </div>
        <div class="course-right-col">
            <img src="<?= BASEURL;?>/images/course.png">
        </div>            
    </div>
</div>

<!--Contact-->

<div id="contact">
    <div class="container contact-row">
        <div class="contact-left-col">
            <h1>Cek Tarif</h1>
            <form method="post" action="<?= BASEURL;?>/Admin/cektarif">
            <div class="form-group">
                <!--<input type="text" class="form-control"placeholder="Pilih Asal">-->
                <select class="form-control" id="asal" name="asal">
                <option selected >Asal</option>
                <option value="Bandung">Bandung</option>
                <option value="Bali">Bali</option>
                <option value="Bekasi">Bekasi</option>
                <option value="Bogor">Bogor</option>
                <option value="Gresik">Gresik</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Lamongan">Lamongan</option>
                <option value="surabaya">Surabaya</option>
                <option value="Semarang">Semarang</option>
                <option value="Sidoarjo">Sidoarjo</option>
                <option value="Yogyakarta">Yogyakarta</option>             
                <option value="Malang">Malang</option>
                <option value="Magelang">Magelang</option>
                </select>
                <select class="form-control" id="tujuan" name="tujuan">
                <option selected>Tujuan</option>
                <option value="Bandung">Bandung</option>
                <option value="Bali">Bali</option>
                <option value="Bekasi">Bekasi</option>
                <option value="Bogor">Bogor</option>
                <option value="Gresik">Gresik</option>
                <option value="Jakarta">Jakarta</option>
                <option value="Lamongan">Lamongan</option>
                <option value="surabaya">Surabaya</option>
                <option value="Semarang">Semarang</option>
                <option value="Sidoarjo">Sidoarjo</option>
                <option value="Yogyakarta">Yogyakarta</option>             
                <option value="Malang">Malang</option>
                <option value="Magelang">Magelang</option>        
                </select>
                <!--<input type="text" placeholder="Pilih Tujuan">--> 
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="text" class="form-control" placeholder="Berat" id="berat" name="berat">
                            <div class="input-group-prepend">
                            <div class="input-group-text">Kg</div>
                            </div>
                        </div>
                <div class="btn-box"> 

                    <?php
                        if (is_null($ongkir) == true) :?>
                            <div class="input-group-text" style="margin-bottom: 15px;">Silahkan pilih pengiriman mau kemana</div>
                    <?php else :?>
                            <div class="input-group-text" style="margin-bottom: 15px;">Tarif Ongkirnya adalah <?= $ongkir;?></div>
                    <?php endif;?>
                    
                    <button class="common-btn" type="submit" name="submit" id="submit">Cek Harga</button>
                </div>
            </div>      
        </form>
    </div>
    <div class="contact-right-col">
        <h1>Track Resi</h1>
        <form method="post" action="<?= BASEURL;?>/Admin/cekresiProses">
            <textarea placeholder="cth: 12345678" id="resi" name="resi"></textarea>
            <p>Masukkan nomor resi Anda. Pisahkan dengan tanda koma (,).</p>
            <div class="btn-box">
                    <button class="common-btn" type="submit" name="submit" id="submit">Lacak</button>
                </div>
            </form>
        </div>
    </div>
</div>





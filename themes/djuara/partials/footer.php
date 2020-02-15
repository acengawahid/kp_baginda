<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<section class="footer-section mt-5" style="font-size: 14px;">
  <div class="footer bg-dark py-3" style="min-height: 100px;color: #ffffff;">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
          <div class="logo-footer"> 
            <div class="logo float-left mr-2">
              <img src="<?= LogoDesa($desa['logo']) ?>" width="50px;">
            </div>
            <div class="desa-identity d-block pt-2">
              <h6 class="nama-desa"><?= strtoupper($this->setting->sebutan_desa) ?> <?= strtoupper($desa['nama_desa']); ?></h6>
              <a class="ket-desa"><?= ucfirst($this->setting->sebutan_kecamatan_singkat) ?> 
                <?= ucwords($desa['nama_kecamatan']) ?>
                <?= ucfirst($this->setting->sebutan_kabupaten_singkat) ?>
                <?= ucwords($desa['nama_kabupaten']) ?></a>
              </div>
            </div>
            <div class="desc-footer mt-2 ml-2" style="clear: both;"> 

            <ol class="fa-ul">
             <?php if (!empty($desa['telepon'])): ?>
             <li class="mt-3">
              <span class="fa-li"><i class="fa fa-phone"></i></span> <?= $desa['telepon']?>
            </li>
            <?php endif; ?>
            <?php if (!empty($desa['email_desa'])): ?>
            <li class="">
              <span class="fa-li"><i class="fa fa-envelope"></i></span> <?= $desa['email_desa']?>
            </li>
            <?php endif;?>
            <li class="">
              <span class="fa-li"><i class="fa fa-building"></i></span> <?= $desa['alamat_kantor']?><br><?= ucwords($this->setting->sebutan_kecamatan." ".$desa['nama_kecamatan'])?> <?= ucwords($this->setting->sebutan_kabupaten." ".$desa['nama_kabupaten'])?> Provinsi <?= $desa['nama_propinsi']?> Kode Pos <?= $desa['kode_pos']?>
            </li>
          </ol>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-4">
         <div class="header-footer">
          <h6 class="title mt-2">Didukung Oleh : </h6>
        </div>
        <div class="socials pt-3">
          <span><a href="https://stmik-sumedang.ac.id" target="_blank"><img src="<?php echo base_url(); ?>assets/images/logo/stmik.png" title="STMIK Sumedang" height="60px" width="60px" style="border-radius: 2px;margin-left:20px;"></a></span>
          <span><a href="https://sumedangkab.go.id" target="_blank"><img src="<?php echo base_url(); ?>assets/images/logo/desa.png" title="Pemerintahan Daerah" height="60px" width="60px" style="border-radius: 2px;margin-left:20px;"></a></span>
          <span><a href="https://dikominfo.jabarprov.go.id" target="_blank"><img src="<?php echo base_url(); ?>assets/images/logo/kominfo1.png" title="Diskominfo Sanditik" height="60px" width="60px" style="border-radius: 2px;margin-left:20px;"></a></span>
          <span><a href="https://desa.id" target="_blank"><img src="<?php echo base_url(); ?>assets/images/logo/desa id.png" title="Desa Id" height="60px" width="60px" style="border-radius: 2px;margin-left:20px;"></a></span>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-4">
        <div class="header-footer">
          <h6 class="title mt-2">Kategori Artikel</h6>

        </div>
              <?php foreach ($menu_kiri as $data): ?>
              <a style="padding: 5px;" class="badge badge-primary mt-3" href="<?= site_url()."first/kategori/".$data['id']?>"><?= $data['nama']?></a>
              <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
</section>
<section class="bottom-footer" style="padding: 10px;color: #ffffff;background-color: #000000;min-height: 50px">
  <div class="footer-bottom" >
    <div class="container">
      <div class="row"> 
      <div class="col-12 col-md-12">
        <p>&copy; Copyright <?php echo date('Y'); ?> <a target="_blank" href="https://localhost/baginda.desa.id/">Desa Baginda</a>, <i clas="fa fa-circle-o"></i> OpenSID  <?= AmbilVersi()?></p>
      </div>
      </div>
    </div>
  </div>
</section>
<!-- Optional JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/parallax.js") ?>"></script>
<script src="<?= base_url("$this->theme_folder/$this->theme/assets/js/custom.js") ?>"></script>
<script type="text/javascript">
  window.onscroll = function() {myFunction()};
  
  var navbar = document.getElementById("navbar");
  var sticky = navbar.offsetTop;
  $("#terkini").removeClass('fade');
  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("fixed-top")
      $('.bc').hide();
    } else {
      navbar.classList.remove("fixed-top");
      $('.bc').show();

    }
  }

</script>
</body>
</html>

<script type="text/javascript">
  var a = $("#theme-version").html();
  var b = $("#author-name").html();
  var sisipi = '<section class="bottom-footer" style="padding: 10px;color: #ffffff;background-color: #000000;min-height: 50px"><div class="footer-bottom" ><div class="container"><div class="row"> <div class="col-12 col-md-6"><p>Copyright &copy; <?php echo date('Y'); ?> | <a target="_blank" href="#">Desa Baginda</a> | <i clas="fa fa-circle-o"></i> OpenSID  <?= AmbilVersi()?></p></div><div class="col-12 col-md-6 text-md-right"><p>Design by : <a href="https://stmik-sumedang.ac.id" target="_blank" id="author-name">Kerja Praktek | STMIK Sumedang | <?php echo date('Y'); ?></a></p></div></div></div></div></section>';
  if(a == "Djuara v.1.0.0" && b == "Kusmanto Pratama"){
    // alert("ok");
  }else{
    // alert("Bangsat Kau");
    //alert(a);
    $('.bottom-footer').remove();
    $('body').append(sisipi);
  }
</script>
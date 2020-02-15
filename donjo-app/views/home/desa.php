<!-- Perubahan script coding untuk bisa menampilkan SID Home dalam bentuk tampilan bootstrap (AdminLTE)  -->
<style type="text/css">
	.text-white {color: white;}
	.pengaturan {float: left; padding-left: 10px;}
</style>
<div class="content-wrapper">
	<section class='content-header'>
		<h1>Dashboard</h1>
		<ol class='breadcrumb'>
			<li><a href='<?=site_url()?>'><i class='fa fa-home'></i> Home</a></li>
		</ol>
	</section>
	<section class='content' id="maincontent">
		<div class='row'>
			<div class='col-md-12'>
				<div class='box box-info'>
				 	<div class='box-body'>
						<div class="col-lg-3 col-xs-3">
							<div class="small-box bg-aqua">
								<div class="inner">
									<?php foreach ($penduduk as $data): ?>
										<h3><?=$data['jumlah']?></h3>
									<?php endforeach; ?>
									<p>Penduduk</p>
								</div>
								<div class="icon">
									<img src="<?php echo base_url() ?>assets/icon/penduduk.png" width="100" height="100">
								</div>
								<a href="<?=site_url('penduduk/clear')?>" class="small-box-footer">Lihat Detail  <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-xs-3">
							<div class="small-box bg-green">
								<div class="inner">
									<?php foreach ($keluarga as $data): ?>
										<h3><?=$data['jumlah']?></h3>
									<?php endforeach; ?>
									<p>Keluarga</p>
								</div>
								<div class="icon">
									<img src="<?php echo base_url() ?>assets/icon/keluarga.png" width="100" height="100">
								</div>
								<a href="<?=site_url('keluarga/clear')?>" class="small-box-footer">Lihat Detail  <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-xs-3">
							<div class="small-box bg-purple">
								<div class="inner">
									<?php foreach ($dusun as $data): ?>
										<h3><?=$data['jumlah']?></h3>
									<?php endforeach; ?>
									<p>Wilayah Dusun</p>
								</div>
								<div class="icon">
									<img src="<?php echo base_url() ?>assets/icon/wilayah.png" width="100" height="100">
								</div>
								<a href="<?=site_url('sid_core')?>" class="small-box-footer">Lihat Detail  <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
						<div class="col-lg-3 col-xs-3">
							<div class="small-box bg-blue">
								<div class="inner">
										<h3><?=$jumlah_surat?></h3>
									<p>Surat Tercetak</p>
								</div>
								<div class="icon">
									<img src="<?php echo base_url() ?>assets/icon/surat.png" width="100" height="100">
								</div>
								<a href="<?=site_url('keluar/clear')?>" class="small-box-footer">Lihat Detail  <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</section>
</div>




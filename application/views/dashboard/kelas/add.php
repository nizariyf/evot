<!-- Alert -->
<div class="flash-data-sukses" data-flashdatasukses="<?= $this->session->flashdata('sukses'); ?>"></div>
<div class="flash-data-gagal" data-flashdatagagal="<?= $this->session->flashdata('gagal'); ?>"></div>
<div class="flash-data-ada" data-flashdataada="<?= $this->session->flashdata('ada'); ?>"></div>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container-fluid">

			<div class="row">
				<div class="col-sm-12">
					<div class="page-title-box">
						<h4 class="page-title">Kelas</h4>
						<ol class="breadcrumb">
							<li class="breadcrumb-item">Dashboard</li>
							<li class="breadcrumb-item">Account</li>
							<li class="breadcrumb-item">Pemilih</li>
							<li class="breadcrumb-item active">Kelas Tambah</li>
						</ol>
					</div>
				</div>
			</div>
			<!-- end row -->
			<div class="row">
				<div class="col-12">
					<div class="card m-b-20">
						<div class="card-header">
							<a href="<?=base_url('inipanel/kelas');?>"
								class="btn btn-danger btn-sm waves-effect waves-light shadow rounded mr-2"><i
									class="ti-arrow-left"></i> Kembali</a>
						</div>
						<div class="card-body">
							<form method="post" action="<?php echo base_url('inipanel/kelas_tambah_aksi')?>">
								<input type="hidden" name="<?=$this->security->get_csrf_token_name();?>"
									value="<?=$this->security->get_csrf_hash();?>" style="display: none">
								<div class="form-group row">
									<label class="col-sm-3 col-form-label">Kelas</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" name="kelas" placeholder="Masukkan kelas..."
											required>
									</div>
									<?php echo form_error('kelas');?>
								</div>
								<div class="form-group row float-right">
									<div class="col-sm-auto">
										<button type="submit" class="btn btn-primary"><i class="ti-plus"></i>
											Tambah</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div> <!-- end col -->
			</div>

		</div> <!-- container-fluid -->

	</div> <!-- content -->

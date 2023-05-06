	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Pengaduan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">Pengaduan</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3> Tambah Data Pengaduan </h3>
						</div>

						<form action="<?php echo base_url() ?>pengaduan/insert" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Pengaduan</label>
                                    <input type="date" class="form-control" id="tgl_pengaduan" name="tgl_pengaduan">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Nama Pelanggan</label>
                                    <select id="id_pelanggan" name="id_pelanggan" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php foreach($pelanggan as $row){ ?>
											<option value="<?= $row->id_pelanggan ?>"><?= $row->nama_pelanggan ?></option>
										<?php } ?>
									</select>
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Nama Type</label>
                                    <select id="id_type" name="id_type" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php foreach($type as $row){ ?>
											<option value="<?= $row->id_type ?>"><?= $row->nama_type ?></option>
										<?php } ?>
									</select>
                                </div>
								
								<div class="form-group">
                                    <label for="exampleInputEmail1">Nama Kategori</label>
                                    <select id="id_kategori" name="id_kategori" class="form-control" required>
										<option value="">- Pilih -</option>
									</select>
                                </div>

								
								<div class="form-group">
                                    <label for="exampleInputEmail1">Status Pengaduan</label>
                                    <input type="text" class="form-control" id="status_pengaduan" name="status_pengaduan">
                                </div>
								

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
	</section>
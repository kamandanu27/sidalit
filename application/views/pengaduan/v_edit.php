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
							<h3> Edit Data Pengaduan </h3>
						</div>

						<form action="<?php echo base_url() ?>pengaduan/update" method="post">
                            <div class="card-body">
								
								<div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Pengaduan</label>
                                    <input type="date" class="form-control" id="tgl_pengaduan" name="tgl_pengaduan" value="<?= $detail['tgl_pengaduan'] ?>">
									<input type="hidden" class="form-control" id="id_pengaduan" name="id_pengaduan" value="<?= $detail ['id_pengaduan']?>">
								</div>

								<div class="form-group">
                      				<label for="exampleInputEmail1">Nama Pelanggan :</label>
                      				<select id="id_pelanggan" name="id_pelanggan" class="form-control" required>
										<option value="<?= $detail['id_pelanggan'] ?>"><?= $detail['nama_pelanggan'] ?></option>
									    <option value="">- Pilih -</option>
										<?php foreach($pelanggan as $row){ ?>
										<option value="<?= $row->id_pelanggan ?>"><?= $row->nama_pelanggan ?></option>
										<?php } ?>
									</select>
                    			</div>

                    			<div class="form-group">
                                    <label for="exampleInputEmail1">No Tiket Pengaduan</label>
                                    <input type="text" class="form-control" id="notiket_pengaduan" name="notiket_pengaduan" value="<?= $detail['notiket_pengaduan'] ?>">
                                </div>

								<div class="form-group">
                        			<label for="exampleInputEmail1">Nama kategori</label>
                        			<select id="id_kategori" name="id_kategori" class="form-control" required>
										<option value="<?= $detail['id_kategori'] ?>"><?= $detail['nama_kategori'] ?></option>
										    <option value="">- Pilih -</option>
										    <?php foreach($kategori as $row){ ?>
											  <option value="<?= $row->id_kategori ?>"><?= $row->nama_kategori ?></option>
										    <?php } ?>
									</select>
                    			</div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Status Pengaduan</label>
                                    <input type="text" class="form-control" id="status_pengaduan" name="status_pengaduan" value="<?= $detail['status_pengaduan'] ?>">
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
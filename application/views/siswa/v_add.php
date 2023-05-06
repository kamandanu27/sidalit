	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data siswa</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">siswa</li>
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
							<h3> Tambah Data siswa </h3>
						</div>

						<form action="<?php echo base_url() ?>siswa/insert" method="post">
                            <div class="card-body">

								<div class="form-group">
                                    <label for="exampleInputEmail1">Nisn</label>
                                    <input type="number" class="form-control" id="nisn_siswa" name="nisn_siswa">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control" id="nama_siswa" name="nama_siswa">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" class="form-control" id="alamat_siswa" name="alamat_siswa">
                                </div>

								<div class="form-group">
                        			<label for="exampleInputEmail1">Provinsi :</label>
                        			<select id="id_provinsi" name="id_provinsi" class="form-control" required>
										    <option value="">- Pilih -</option>
										    <?php foreach($provinsi as $row){ ?>
											  <option value="<?= $row->id_provinsi ?>"><?= $row->nama_provinsi ?></option>
										    <?php } ?>
									</select>
                    			</div>

								<div class="form-group col-md-4">
                      				<label>Kabupaten :</label>
                      					<select class="form-control" id="id_kabupaten" name="id_kabupaten">
                        				<option>Pilih</option>
                      				</select>
                    			</div>

                    			<div class="form-group col-md-4">
                      				<label>Kecamatan :</label>
                      					<select class="form-control" id="id_kecamatan" name="id_kecamatan">
                        				<option>Pilih</option>
                        			</select>
                    			</div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgllahir_siswa" name="tgllahir_siswa">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                                    <select id="jenis_kelamin_siswa" name="jenis_kelamin_siswa" class="form-control" required>
										
										<option value="">- Pilih -</option>
										<option value="Laki-Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
										
									</select>
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Jurusan</label>
                                    <select id="id_jurusan" name="id_jurusan" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php foreach($jurusan as $row){ ?>
											<option value="<?= $row->id_jurusan ?>"><?= $row->nama_jurusan ?></option>
										<?php } ?>
									</select>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail1">kelas</label>
                                    <select id="id_kelas" name="id_kelas" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php foreach($kelas as $row){ ?>
											<option value="<?= $row->id_kelas ?>"><?= $row->nama_kelas ?></option>
										<?php } ?>
									</select>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail1">Ekstrakulikuler</label>
                                    <select id="id_ekskul" name="id_ekskul" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php foreach($ekskul as $row){ ?>
											<option value="<?= $row->id_ekskul ?>"><?= $row->nama_ekskul ?></option>
										<?php } ?>
									</select>
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
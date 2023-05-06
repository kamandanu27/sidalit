	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data personil</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">personil</li>
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
							<h3> Tambah Data personil </h3>
						</div>

						<form action="<?php echo base_url() ?>personil/insert" method="post">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="text" class="form-control" id="nama_personil" name="nama_personil">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail1">Agama</label>
                                    <select id="agama_personil" name="agama_personil" class="form-control" required>
										
										<option value="">- Pilih -</option>
										<option value="Islam">Islam</option>
										<option value="Kristen Katolik">Kristen Katolik</option>
										<option value="Kristen Protestan">Kristen Protestan</option>
										<option value="Hindu">Hindu</option>
										<option value="Buddha">Buddha</option>
										<option value="Konghucu">Konghucu</option>
										
									</select>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail1">Pangkat</label>
                                    <input type="text" class="form-control" id="pangkat_personil" name="pangkat_personil">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgllahir_personil" name="tgllahir_personil">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail1">Keputusan</label>
                                    <input type="text" class="form-control" id="keputusan_personil" name="keputusan_personil">
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail1">TMT</label>
                                    <input type="date" class="form-control" id="tmt_personil" name="tmt_personil">
                                </div>

								<div class="form-group">
                                    <label for="exampleInputEmail1">Golongan</label>
                                    <select id="id_golongan" name="id_golongan" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php foreach($golongan as $row){ ?>
											<option value="<?= $row->id_golongan ?>"><?= $row->nama_golongan ?></option>
										<?php } ?>
									</select>
                                </div>
								<div class="form-group">
                                    <label for="exampleInputEmail1">Jabatan</label>
                                    <select id="id_jabatan" name="id_jabatan" class="form-control" required>
										<option value="">- Pilih -</option>
										<?php foreach($jabatan as $row){ ?>
											<option value="<?= $row->id_jabatan ?>"><?= $row->nama_jabatan ?></option>
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
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data mahasiswa</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">mahasiswa</li>
					</ol>
				</div>
			</div>
		</div>
	</section>

	
	<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column sofyanawal -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card">
              <div class="card-header">
                <h3 class="card-title">Tambah data mahasiswa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?php echo base_url() ?>mahasiswa/insert" method="post" enctype="multipart/form-data">
              

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="card card-info">
                        <div class="card-header">
                          <h3 class="card-title">Data Diri</h3>
                        </div>
                      </div>
                    </div>

					

                    <div class="form-group col-md-8">
                      <label for="exampleInputEmail1">Nama Lengkap :</label>
                      <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" id="exampleInputMasukan Nama Lengkap1" placeholder="Masukan Nama Lengkap">
                    </div>
  
                    <div class="form-group col-md-4">
                      <label for="exampleInputPassword1">Nomor Identitas (NIK) :</label>
                      <input type="text" class="form-control" id="nik_mahasiswa" name="nik_mahasiswa" id="exampleInputMasukan Nomor NIK1" placeholder="Masukan Nomor NIK">
                    </div>

                    <div class="form-group col-md-4">
                      <label for="exampleInputPassword1">Tempat Lahir :</label>
                      <input type="text" class="form-control" id="tempatlahir_mahasiswa" name="tempatlahir_mahasiswa" id="exampleInputMasukan Tempat Lahir1" placeholder="Masukan Tempat Lahir">
                    </div>

                    <div class="form-group col-md-4">
                      <label for="exampleInputPassword1">Tanggal Lahir :</label>
                      <input type="date" class="form-control" id="tgllahir_mahasiswa" name="tgllahir_mahasiswa" id="exampleInputPassword1" placeholder="Password">
                    </div>

                    <div class="form-group col-md-4">
                      <label>jenis kelamin :</label>
                      <select class="form-control" id="jeniskelamin_mahasiswa" name="jeniskelamin_mahasiswa">
                        <option>Pilih</option>
                        <option>Laki-laki</option>
                        <option>Perempuan</option>
                      </select>
                    </div>

                    <div class="form-group col-md-4">
                      <label>Kewarganegaraan :</label>
                      <select class="form-control" id="kewarganegaraan_mahasiswa" name="kewarganegaraan_mahasiswa">
                        <option>Pilih</option>
                        <option>WNI</option>
                        <option>WNA</option>
                      </select>
                    </div>
                    
                    <div class="form-group col-md-4">
                      <label>Agama :</label>
                      <select class="form-control" id="agama_mahasiswa" name="agama_mahasiswa">
                        <option>Pilih</option>
                        <option>Islam</option>
                        <option>Kristen Katolik</option>
                        <option>Kristen Protestan</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Konghucu</option>
                      </select>
                    </div>
                   

                    <div class="form-group col-md-4">
                      <label for="exampleInputPassword1">Nama Ibu Kandung :</label>
                      <input type="text" class="form-control" id="nmibukandung_mahasiswa" name="nmibukandung_mahasiswa" id="exampleInputMasukan Nama Ibu Kandung1" placeholder="Masukan Nama Ibu Kandung">
                    </div>

                    <div class="form-group col-md-4">
                      <label for="exampleInputPassword1">Email :</label>
                      <input type="text" class="form-control" id="email_mahasiswa" name="email_mahasiswa" id="exampleInputMasukan email1" placeholder="Masukan email">
                    </div>

                    <div class="form-group col-md-4">
                      <label for="exampleInputPassword1">No Telp :</label>
                      <input type="number" class="form-control" id="notelp_mahasiswa" name="notelp_mahasiswa" id="exampleInputMasukan No Telp1" placeholder="Masukan No Telp">
                    </div>

                    <div class="col-md-12">
                      <div class="card card-info">
                        <div class="card-header">
                          <h3 class="card-title">Data Alamat Asal</h3>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-md-6">
                      <label>Alamat :</label>
                      <textarea class="form-control" id="alamat_mahasiswa" name="alamat_mahasiswa" rows="3" placeholder="Tulis Alamat Lengkap"></textarea>
                    </div>

                    <div class="form-group col-md-3">
                      <label for="exampleInputPassword1">Kode Pos :</label>
                      <input type="text" class="form-control" id="kodepos_mahasiswa" name="kodepos_mahasiswa" id="exampleInputKode Pos1" placeholder="Kode Pos">
                    </div>

                    <div class="form-group col-md-4">
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

                    <div class="col-md-12">
                      <div class="card card-info">
                        <div class="card-header">
                          <h3 class="card-title">Data Pendidikan</h3>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-md-4">
                      <label>Pendidikan Terakhir :</label>
                      <select class="form-control" id="pendidikanterakhir_mahasiswa" name="pendidikanterakhir_mahasiswa">
                        <option>Pilih</option>
                        <option>SMA-IPA</option>
                        <option>SMA-IPS</option>
                        <option>SMK</option>
                      </select>
                    </div>

                    <div class="form-group col-md-4">
                      <label for="exampleInputPassword1">Nama sekolah :</label>
                      <input type="text" class="form-control" id="nmsekolah_mahasiswa" name="nmsekolah_mahasiswa" id="exampleInputMasukan Nama Sekolah1" placeholder="Masukan Nama Sekolah">
                    </div>

                    <div class="form-group col-md-4">
                      <label for="exampleInputPassword1">Rata-rata Nilai Rapor Kelas 12 :</label>
                      <input type="text" class="form-control" id="rataratarapor_mahasiswa" name="rataratarapor_mahasiswa" id="exampleInputMasukan Rata-rata Nilai raport1" placeholder="Masukan Rata-rata Nilai Raport">
                    </div>

                    <div class="col-md-12">
                      <div class="card card-info">
                        <div class="card-header">
                          <h3 class="card-title">Pilihan  Program Studi</h3>
                        </div>
                      </div>
                    </div>

                    <div class="form-group col-md-6">
                      <label>Pilih Program Studi 1 :</label>
                      <select class="form-control" id="programstudi1_mahasiswa" name="programstudi1_mahasiswa">
                        <option>Pilih</option>
                        <option>D3-Teknik Komputer</option>
                        <option>S1-Teknik Komputer</option>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Pilih Program Studi 2 :</label>
                      <select class="form-control" id="programstudi2_mahasiswa" name="programstudi2_mahasiswa" >
                        <option>Pilih</option>
                        <option>D3-Teknik Komputer</option>
                        <option>S1-Teknik Komputer</option>
                      </select>
                    </div>
                     <div class="form-group col-md-4">
                      <label for="exampleInputPassword1">Upload Foto :</label>
                      <input type="file" class="form-control" id="foto_mahasiswa" name="foto_mahasiswa" id="exampleInputUpload Foto1" placeholder="Upload Foto">
                    </div>


                    
                  </div>
                </div>
                <!-- /.card-body -->

              

              
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Daftar</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


          </div>
          <!--/.col (left) sofyanakhir-->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
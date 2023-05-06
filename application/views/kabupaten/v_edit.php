	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data kabupaten</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="">Dashboard</a></li>
					<li class="breadcrumb-item active">kabupaten</li>
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
							<h3> edit Data kabupaten </h3>
						</div>

						<form action="<?php echo base_url() ?>kabupaten/update" method="post">
                            <div class="card-body">
								<div class="row">
                    			<div class="col-md-12">
                      			<div class="card card-info">
                        		<div class="card-header">
                         		<h3 class="card-title"></h3>
                        	</div>
                      	</div>
                    </div>

                                <div class="form-group col-md-8">
                                    <label for="exampleInputEmail1">Nama kabupaten :</label>
                                    <input type="text" class="form-control" id="nama_kabupaten" name="nama_kabupaten" value="<?= $detail['nama_kabupaten'] ?>">
									<input type="hidden" class="form-control" id="id_kabupaten" name="id_kabupaten" value="<?= $detail ['id_kabupaten']?>">
								</div>

								<div class="form-group col-md-4">
                      				<label for="exampleInputEmail1">Provinsi :</label>
                      				<select id="id_provinsi" name="id_provinsi" class="form-control" required>
									<option value="<?= $detail['id_provinsi'] ?>"><?= $detail['nama_provinsi'] ?></option>
									<option value="">- Pilih -</option>
									<?php foreach($provinsi as $row){ ?>
									<option value="<?= $row->id_provinsi ?>"><?= $row->nama_provinsi ?></option>
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